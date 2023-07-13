<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use League\Csv\Reader;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use League\Csv\Statement;

class FileController extends Controller
{
    public function uploadFile(Request $request)
    {
        $file = $request->csv_file;
        $csv = Reader::createFromPath($file, 'r');
        $csv->setHeaderOffset(0);
        $records = $csv->getRecords();

        foreach ($records as $record) {
            Customer::updateOrCreate([
                'phone' => data_get($record, 'HandPhone'),
            ],[
                'name' => data_get($record, 'Customer Name'),
                'agreement_number' => data_get($record, 'Agreement No'),
                'vehicle_number' => data_get($record, 'Vehicle Number'),
                'hp_customer_name' => data_get($record, 'HP Customer Name'),
                'expiry_date' => date('Y-m-d', strtotime(data_get($record, 'Expiry Date'))),
                'status' => data_get($record, 'Status'),
                'guarantor_name' => data_get($record, 'Guarantor Name'),
                'guarantor_telephone_number' => data_get($record, 'Guarantor Tel No'),
                'date_of_birth' => date('Y-m-d', strtotime(data_get($record, 'ate Of Birth'))),
            ]);
        }

        return redirect('/customers');
    }
}
