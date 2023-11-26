<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">Kopipopi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card mt-3">
                    <div class="card-body">
                        <form method="post" action="/register">
                            @csrf
                            <input type="hidden" name="role" value="1">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="08xxxxx" value="{{ old('phone') }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Register</button>
                        </form>
                        <p>Already have account?<a href="/login" class="text-decoration-none"> Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
