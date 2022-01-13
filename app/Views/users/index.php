<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="card mt-5">
            <div class="card-header">Add User</div>
            <div class="card-body">
                <?= isset($validation) ? $validation->listErrors() :'' ?>
                <form action="<?= route_to('users/store') ?>" method="POST">

                    <div class="row">
                        <div class="col-12 mt-2">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name"
                                       >
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email"
                                       required>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Enter Your Password"
                                       required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-5">
                        <button class="form-control btn btn-primary">Save</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>