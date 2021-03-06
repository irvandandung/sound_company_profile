<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SOunD</title>
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/style.css" />
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    /> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!-- Navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container">
                <a href="#" class="navbar-brand font-weight-bold"><?= isset($data['isCollapse']) && $data['isCollapse'] == false? '<o style="color: #555;">SO</o> <o style="color: red; margin-left:-5px; margin-right:-5px;">un</o> <o style="color: #555;">D</o>': 'SD<o style="color: red;">un</o>D'; ?></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">
                    <i class="fa fa-bars"></i>
                </button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="<?= BASEURL ?>" class="<?= isset($data['isCollapse']) && $data['isCollapse'] == false? 'text-dark': ''; ?>
                            nav-link font-weight-bold px-3 <?= isset($data['activePage']) && $data['activePage'] == 'home'? 'active': ''; ?>">Home </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASEURL ?>profile" class="<?= isset($data['isCollapse']) && $data['isCollapse'] == false? 'text-dark': ''; ?>
                            nav-link font-weight-bold px-3 <?= isset($data['activePage']) && $data['activePage'] == 'profile'? 'active': ''; ?>">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASEURL ?>berita" class="<?= isset($data['isCollapse']) && $data['isCollapse'] == false? 'text-dark': ''; ?>
                            nav-link font-weight-bold px-3" <?= isset($data['activePage']) && $data['activePage'] == 'berita'? 'style="color : red !important;"': ''; ?>>Berita</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASEURL?>contact" class="<?= isset($data['isCollapse']) && $data['isCollapse'] == false? 'text-dark': ''; ?>
                            nav-link font-weight-bold px-3" <?= isset($data['activePage']) && $data['activePage'] == 'contact'? 'style="color : red !important;"': ''; ?>>Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Navbar-->