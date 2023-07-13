<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\MessageTemplate;
use App\Services\WhatsappNotificationService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $customers = Customer::all();

        $templates = config('message-templates.sg');

        return view('customer', compact(['customers', 'templates']));
    }

    public function sendMessage(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $customer->notify(new WhatsappNotificationService());
    }

    public function getMessageTemplates()
    {
        $templates = config('message-templates.sg');

        return view('message-template', compact(['templates']));
    }
}
