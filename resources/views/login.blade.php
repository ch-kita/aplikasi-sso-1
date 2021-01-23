<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Laravel SSO</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
    <div class="row">
        <div class="col-md-6 offset-md-3 pt-5">
            <div class="d-flex justify-content-center">
                <h1>SSO #APLIKASI 1</h1>
            </div>
            
            <div class="d-flex justify-content-center">
                <a href="{{URL::to('/')}}" class="ml-4 text-sm text-gray-700 underline">Kembali ke home</a>
            </div>
            
            <div class="card mt-5">
                <div class="card-header">
                    LOGIN
                </div>
                <div class="card-body">
                    
                    @if (session('failed'))
                    <div class="alert alert-danger">{{ session('failed') }}</div>
                    @endif
                    
                    <form method="post" action="{{ route('login.submit') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="email" name="email"
                            value="{{ old('email') }}">
                        </div>
                        <div class="form-group">    
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="password" name="password">
                        </div>
                        <button class="btn btn-primary" type="submit">LOGIN</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
