<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md-4 col-md-offset-4">
                <h4>Sign Up</h4><hr>
                <form action="<?= base_url('/auth/save') ?>" method="post">
                    <?= csrf_field() ?>
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail') ?></div>
                    <?php endif ?>
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                    <?php endif ?>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="<?= set_value('name') ?>">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></span>            
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter your email address" value="<?= set_value('email') ?>">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>                  
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter your password">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" placeholder="Enter confirm password">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : '' ?></span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                    </div>
                    <a href="<?= base_url('/auth'); ?>">I already have account, login now</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>