<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
</head>
<div class='container my-5'>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-5">
            <div class="card">
                <div class="card-body">

                    <h2 class="mb-4 text-center">Register</h2>

                    <form action="" method="POST"></form>
                    @csrf
                    <div class='mb-3'>
                        <label for="" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nomor Telepon</label>
                        <input type="number" name="phone_number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit">Register</button>

                </div>
            </div>
        </div>
    </div>
</div>
</html>