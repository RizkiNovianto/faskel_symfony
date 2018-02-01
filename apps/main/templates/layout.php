<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <title>Faskel Surabaya</title>
    <link rel="shortcut icon" href="/faskel_symfony/web/images/logo-pemkot.ico" />

<?php include_http_metas() ?>
<?php include_metas() ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <!--<link href="/faskel_symfony/web/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <!--<link href="/faskel_symfony/web/css/sb-admin.css" rel="stylesheet">-->
                
    <!-- Morris Charts CSS -->
    <!--<link href="/faskel_symfony/web/css/plugins/morris.css" rel="stylesheet">-->

    <!-- Custom Fonts -->
    <link href="/faskel_symfony/web/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #9fff80">
            <div style="position: absolute; z-index: -10; width:100%"><?php echo link_to(image_tag('/images/green_gradiance (strong white).png', 'height=151px; width=100%'), 'home')?></div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div style="margin: 6px 0px 0px 6px"><?php echo link_to(image_tag('/images/Logo DKRTH All Trans.png', 'size=268x95'), 'home')?></div>
                <?php echo link_to('<div class="navbar-brand" style="color:black ; font-weight:bold ; font-size:28px; font-family:courier">FASKEL SURABAYA</div>', 'home')?>
                
            </div>
            <!-- Top Menu Items -->
            <?php if ($sf_user->isAuthenticated()) { ?>
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $sf_user->getGuardUser()->getUsername()?> <b class="caret"></b></a>
                    <ul class="dropdown-menu" style="width:175px">
                        <?php if($sf_user->getGuardUser()->getIsSuperAdmin() == 1) { ?>
                        <li>
                            <?php echo link_to('<i class="fa fa-fw fa-user"></i> Daftar User', 'sfGuardUser')?>                       
                        </li>
                        <?php } ?>
                        <li>
                            <?php echo link_to('<i class="fa fa-fw fa-user"></i> Profil', 'pengguna/detail?userId='.$sf_user->getGuardUser()->getId()) ?>
                        </li>
                        
                        <li class="divider"></li>
                        
                        <li>
                            <?php echo link_to('<i class="fa fa-fw fa-lock"></i> Ganti Password', 'sfGuardUser/edit?id='.$sf_user->getGuardUser()->getId()) ?>
                        </li>
                        <li>
                            <?php echo link_to('<i class="fa fa-fw fa-key"></i> Logout', 'logout')?>                       
                        </li>
                    </ul>
                </li>
            </ul>
            <?php } ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="position:fixed;">
                    <li>
                        <?php echo link_to('<i class="fa fa-fw fa-user"></i> Pengguna (TEMP)', 'pengguna')?>                       
                    </li>
                    <li>
                        <?php echo link_to('<i class="fa fa-fw fa-home"></i> Beranda', 'home')?>                       
                    </li>
                    <li>
                        <?php echo link_to('<i class="fa fa-fw fa-bank"></i> Wilayah', 'wilayah')?>                       
                    </li>
                    <li>
                        <?php echo link_to('<i class="fa fa-fw fa-trash-o"></i> Bank Sampah', 'bankSampah')?>
                    </li>
                    <li>
                        <?php echo link_to('<i class="fa fa-fw fa-users"></i> IPAL Komunal', 'ipalKomunal')?>
                    </li>
                    <li>
                        <?php echo link_to('<i class="fa fa-fw fa-smile-o"></i> Kader', 'kader')?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div>    
            <?php echo $sf_data->getRaw('sf_content') ?>
            <div style="color: transparent; text-align: center">
                © Rizki Novianto, IT DKRTH, Januari 2018, Email: novianto.rizki091@gmail.com
            </div>
        </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/faskel_symfony/web/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/faskel_symfony/web/js/bootstrap-min.js"></script>

</body>
</html>
