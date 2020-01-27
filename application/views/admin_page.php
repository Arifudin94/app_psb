<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login Admin PSB</title>
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</head>
<body>

    <STYLE TYPE="text/css">
    body {
        background-color: black;
    }
    .login {
        background-color: white;
        border-radius: 0;
        margin-top: 50px;
    }
    </STYLE>

    <div class="container">
        <div class="col-sm-4 col-sm-offset-4 login">
            <div class="text-center logo">
                <img src="<?php echo base_url() ?>assets/images/psb-bim.png" alt="rekam medis logo"><br><br>
            </div>
            <div class="text-center">
                <?php echo $this->session->flashdata('status_login'); ?>
            </div>
            <h4><span class="glyphicon glyphicon-log-in"></span> Login Administrator</h4>
            <?php echo form_open('admin/login'); ?>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                    <input type="text" class="form-control" name="useradmin" placeholder="username">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-cog"></span></div>
                    <input type="password" class="form-control" name="passadmin" placeholder="password">
                </div>
            </div>
            <div class="form-group">
                <input type="checkbox"> Remember
            </div>
            <button type="submit" class="btn btn-block btn-success" name="submit"><span class="glyphicon"></span> Login</button>
            <?php echo form_close(); ?>
        </div>
    </div>
</body>
</html>
