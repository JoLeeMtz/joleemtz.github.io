<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4">
                <h1 style="text-align:center">Register</h1>
                <hr>

                <?php if(!empty(session()->getFlashData('success'))) { ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashData('success'); ?>
                    </div>
                <?php } ?>
                <?php if(!empty(session()->getFlashData('fail'))) { ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashData('fail'); ?>
                    </div>
                <?php } ?>

                <form action="<?= base_url('authentification/registerUser'); ?>" method="POST" class="form">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username', ''); ?>">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_form_errors($validation, 'username') : ''; ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo set_value('name', ''); ?>">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_form_errors($validation, 'name') : ''; ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password', ''); ?>">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_form_errors($validation, 'password') : ''; ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password"  value="<?php echo set_value('confirmPassword', ''); ?>">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_form_errors($validation, 'confirmPassword') : ''; ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Sign Up">
                    </div>
                    <br/>
                    <a href="<?= site_url('authentification/login'); ?>">Already have an account</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
