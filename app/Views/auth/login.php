<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <title>Sign In</title>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md-4 col-md-offset-4">
                <h4>Sign In</h4><hr>
                <form action="<?= base_url('/auth/check') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail') ?></div>
                    <?php endif ?>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email address" value="<?= set_value('email') ?>">   
                        <span class="text-danger"><?= isset($validation) ? display_error($validation,'email') : '' ?></span>                 
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter your password">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation,'password') : '' ?></span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                    </div>
                    <a href="<?= base_url('/auth/register'); ?>">No have account, create new account</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>