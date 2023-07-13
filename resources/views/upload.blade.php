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
                    <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/upload">Upload</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/customers">Customer</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/message-templates">Message Template</a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <form action="/upload-file" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card text-center">
            <div class="card-header"> Upload the CSV file</div>
            <div class="card-body mb-3">
                <input class="form-control" type="file" name="csv_file"/>
            </div>
            <div class="card-footer text-body-secondary">
                <button class="btn btn-primary">Upload</button>
            </div>
        </div>
    </form>
    </body>
</html>