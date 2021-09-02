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
    <title>Dogood | Administration - Ajouter</title>
</head>
<body>
    <div class="container-fluid h-100">
        <nav class="navbar navbar-light p-0 d-none d-lg-block">
            <div class="col-12 fixed-top">
                <div class="row bg-white">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="/" id="logozone">
                            <img class="logo mt-3 ml-5 mr-3 mb-3" id="logo" src="/pictures/dogood.png">
                        </a>
                    </div>
                    <hr class="col-12">
                    <div class="col-12">
                        <form action="{{route('addcheck')}}" method="post">
                            @csrf
                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-8 col-lg-6">
                                    <label for="nom" class="customfont customweight little">Nom</label>
                                    <input id="nom" type="text" class="form-control" name="nom"  required>
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-8 col-lg-2">
                                    <label for="age" class="customfont customweight little">Age</label>
                                    <input id="age" type="text" class="form-control" name="age" required>
                                </div>
                                <div class="col-8 col-lg-4">
                                    <label for="birth" class="customfont customweight little">Date de naissance</label>
                                    <input id="birth" type="text" class="form-control" name="birth" required>
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-8 col-lg-3">
                                    <label for="sexe" class="customfont customweight little">Sexe</label>
                                    <select name="sexe" id="sexe" class="form-control">
                                        <option value="1">Mâle</option>
                                        <option value="2">Femelle</option>
                                    </select>
                                </div>
                                <div class="col-8 col-lg-3">
                                    <label for="race" class="customfont customweight little">Race</label>
                                    <select name="race" id="race" class="form-control">
                                        <option value="1">Labrador</option>
                                        <option value="2">Saint-Bernard</option>
                                        <option value="3">Montagne Des Pyrénées</option>
                                        <option value="4">Jack Russell</option>
                                        <option value="5">Bouledogue Français</option>
                                        <option value="6">Bouvier Bernois</option>
                                        <option value="7">Berger Australien</option>
                                        <option value="8">Golden Retriever</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-8 col-lg-3">
                                    <label for="sterilise" class="customfont customweight little">Strérilisé</label>
                                    <select name="sterilise" id="sterilise" class="form-control">
                                        <option value="1">Non</option>
                                        <option value="2">Oui</option>
                                    </select>
                                </div>
                                <div class="col-8 col-lg-3">
                                    <label for="image" class="customfont customweight little">Image</label>
                                    <input id="image" type="text" class="form-control" name="image" value="" disabled>
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-8 col-lg-6">
                                    <label for="caractere" class="customfont customweight little">Caractère</label>
                                    <textarea name="caractere" class="form-control" id="caractere" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center mb-5">
                                <div class="col-8 col-lg-6">
                                    <button type="submit" class="btn btn-warning customfont customweight float-right">Ajouter</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>    
</body>
</html>