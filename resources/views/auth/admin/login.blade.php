<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="container">
        <div class="card mx-auto mt-4 col-md-6">
            <div class="card-body">
                <form action="{{route('admin.login')}}" method="post">
                    @csrf
                    @if(session('status'))
                        <div class="alert alert-danger text-center">
                            {{session('status')}}
                        </div>
                    @endif
                    <img src="{{asset('img/login.svg')}}" class="card-img-top mb-3">
                    <div class="col-10 m-auto">
                        <label for="username" class="m-0">Username</label>
                        <input type="text" value="{{old('username')}}" class="form-control mb-2 @error('username') is-invalid @enderror" name="username" id="username" placeholder="@username">
                        @error('username')
                            <p class="text-danger mb-1">
                                {{$message}}
                            </p>
                        @enderror

                        <label for="password" class="m-0">Password</label>
                        <input type="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                        @error('password')
                            <p class="text-danger mb-1">
                                {{$message}}
                            </p>
                        @enderror

                        <button class="btn btn-primary text-white mt-3 px-3" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>