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
                    <li class="nav-item"> <a class="nav-link" href="/customers">Customer</a> </li>
                    <li class="nav-item"> <a class="nav-link active" href="/message-templates">Message Template</a> </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="card text-center">
            <div class="card-header"> List of message templates</div>
            <div class="card-body mb-3">
                <table class="table table-hover">
                    <thead>
                        <th>Key</th>
                        <th>Display Name</th>
                        <th>Content</th>
                    </thead>
                    <tbody>
                        @foreach ($templates as $template)
                        <tr>
                            <td>{{ $template['name'] }}</td>
                            <td>{{ $template['display_name'] }}</td>
                            <td>{{ $template['content'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>