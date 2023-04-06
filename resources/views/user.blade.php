<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vika's Blog Restaurant Rating</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="card my-5 text-bg-secondary">
            <div class="card-body ">
                <h1 class="text-center p-4">Vika's Restaurant Rating Blog</h1>
                <h3 class="text-center pb-4">Laravel Eloquent Relationship-2440062123</h3>
                <table class="table table-bordered border-light table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Owner</th>
                            <th>Restaurant Name</th>
                            <th>Address</th>
                            <th>Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $u)
                            <tr>
                                <td>{{$u->name}}</td>
                                <td>{{$u->Restoran->resto_name}}</td>
                                <td>{{$u->Restoran->address}}</td>
                                <td>
                                    @foreach($u->restoran->rates as $r)
                                        <div class="card text-bg-light shadow-sm m-2">
                                            <div class="card-body">
                                                <h3>Rate: {{$r->rating}}</h3>
                                                <i class="fa fa-comments"></i> {{$r->content}}
                                            </div>
                                        </div>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
