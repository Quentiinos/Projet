@section('title', 'Administration')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>Dogood | Administration</title>
</head>
<body>
    <div class="container-fluid h-100">
        <nav class="navbar navbar-light p-0 d-none d-lg-block">
            <div class="col-12">
                <div class="row bg-white">
                    <div class="col-12 d-sm-none d-lg-flex justify-content-center align-items-center">
                        <a href="/" id="logozone">
                            <img class="logo mt-3 ml-5 mr-3 mb-3" id="logo" src="/pictures/dogood.png">
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="row h-100">
            <div class="col-2 d-sm-none d-lg-block bg-warning border-0">
                <div class="row">
                    <ul class="col-12 list-group p-0">
                        <li class="list-group-item active bg-warning border border-dark rounded-0 text-center customfont customweight">CONTENU</li>
                        <li class="list-group-item bg-warning border-0 rounded-0 text-center customfont customweight">A VENIR ...</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-lg-10 p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Race</th>
                            <th>Lien</th>
                            <th>
                                <a href="{{route('add')}}">
                                    <i class="bi bi-plus-lg"></i>
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($select as $dog)
                        <tr>
                            <th>{{$dog->id}}</th>
                            <td>{{$dog->name}}</td>
                            <td>{{$dog->race}}</td>
                            <td>{{$dog->url_picture}}</td>
                            <td>
                                <a href="{{URL::action('MainController@edit', $dog->id)}}">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="{{URL::action('MainController@delete', $dog->id)}}">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <nav class="navbar navbar-light p-0 d-block d-lg-none">
                <div class="col-12 fixed-bottom">
                    <div class="row bg-white d-flex align-items-center">
                        <div class="col-12">
                            <a href="/" id="logozone" class="d-flex justify-content-around">
                                <img class="logo my-3" id="logo" src="/pictures/dogood.png">
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>    
</body>
</html>