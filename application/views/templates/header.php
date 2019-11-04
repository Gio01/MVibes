<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <title>MVibes Header Template</title>
</head>

<body>
    <!-- NAVBAR-->
    <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="http://localhost:8888/MVibes/index.php/home" class="navbar-brand">
                <!-- Logo Image -->
                <img src="<?php echo base_url() ?>assets/img/WhiteGuitar.png" width="100" alt="" class="d-inline-block align-middle mr-2">
                <!-- Logo Text -->
                <span class="text-uppercase font-weight-bold">MVibes</span>
            </a>

            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="http://localhost:8888/MVibes/index.php/home" class="nav-link">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="http://localhost:8888/MVibes/index.php/about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="<?php echo site_url('Loginc/view') ?>" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="http://localhost:8888/MVibes/index.php/contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- The header goes here such as the nav bar! to then be able to add to the static pages given by $title-->
    <!--<h1><?php echo $title ?></h1>-->
</body>

</html>