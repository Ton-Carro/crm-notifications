<!doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">NOTIFICATION</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="nav-link" aria-current="page" href="/upload">Upload</a> </li>
                    <li class="nav-item"> <a class="nav-link active" href="/customers">Customer</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/message-templates">Message Template</a> </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="card text-center">
            <div class="card-header"> List of customers</div>
            <div class="card-body mb-3">
                <table class="table table-hover">
                    <thead>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Message Template</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                        <form action="/customers/{{$customer->id}}/send-message" method="GET" enctype="multipart/form-data">
                        <tr>
                            <td>{{ $customer->hp_customer_name }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>
                                <select class="form-select form-select-sm" aria-label="Default select example" name="template">
                                    <option selected>Select message template</option>
                                    @foreach ($templates as $template)
                                    <option value="{{ $template['name'] }}"> {{ $template['display_name'] }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                            <button class="btn btn-outline-primary">Send Whatsapp Message</button>
                            </td>
                        </tr>
                        </form>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>