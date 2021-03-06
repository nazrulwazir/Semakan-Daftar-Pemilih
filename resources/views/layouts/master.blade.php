<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="google-site-verification" content="kJ1e0f5YjyRW89or4vbHsn_ou6Gdh75lHuwl26l5DCs" />
	<meta name="robots" content="index,follow">
    <meta name="google" content="notranslate">
    
    <meta name="keywords" content="Semakan Daftar Pemilih PRU14">
    
    <meta name="description" content="Semakan Daftar Pemilih PRU14">
    
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Semakan Daftar Pemilih PRU14">
    <meta property="og:description" content="Semakan Daftar Pemilih PRU14">
    <meta property="og:url" content="https://semakan.nazrulwazir.com/">
    <meta property="og:site_name" content="Semakan Daftar Pemilih PRU14">
    <meta property="og:image" content="https://semakan.nazrulwazir.com/assets/img/logo.png">
	<title>SEMAKAN DAFTAR PEMILIH BY NAZRUL WAZIR</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/material-kit.css') }}" rel="stylesheet"/>
	<link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />

	<style>
		pre.prettyprint{
		    background-color: #eee;
		    border: 0px;
		    margin-bottom: 60px;
		    margin-top: 30px;
		    padding: 20px;
		    text-align: left;
		}
		.atv, .str{
		    color: #05AE0E;
		}
		.tag, .pln, .kwd{
		    color: #3472F7;
		}
		.atn{
		    color: #2C93FF;
		}
		.pln{
		    color: #333;
		}
		.com{
		    color: #999;
		}
		.space-top{
		    margin-top: 50px;
		}
		.btn-primary .caret{
		    border-top-color: #3472F7;
		    color: #3472F7;
		}
		.area-line{
		    border: 1px solid #999;
		    border-left: 0;
		    border-right: 0;
		    color: #666;
		    display: block;
		    margin-top: 20px;
		    padding: 8px 0;
		    text-align: center;
		}
		.area-line a{
		    color: #666;
		}
		.container-fluid{
		    padding-right: 15px;
		    padding-left: 15px;
		}
		.table-shopping .td-name{
			min-width: 130px;
		}
	.table .thead-dark th {
	    color: #fff;
	    background-color: #212529;
	    border-color: #32383e;
	}
	.logo-container .brand {
	    font-size: 16px;
	    color: #FFFFFF;
	    line-height: 18px;
	    float: left;
	    margin-left: 10px;
	    margin-top: 7px;
	    width: 148px;
	    height: 40px;
	    text-align: left;
	}
	</style>
</head>

<body class="components-page">

<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
      <a href="{{ URL::to('/') }}">
           <div class="logo-container">
                <div class="logo">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Creative Tim Logo">
                </div>
                <div class="brand">
                    SEMAKAN DAFTAR PEMILIH PRU14
                </div>
            </div>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navigation-index">
		<ul  class="nav navbar-nav navbar-right">
			<li>
                <a href="#" data-toggle="modal" data-target="#myModal">API</a>
            </li>
			<li>
                <a href="https://github.com/nazrulwazir/Semakan-Daftar-Pemilih-API/issues" target="_blank">Lapor Masalah</a>
            </li>
    	</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="wrapper">
	<div class="header header-filter" style="background-image: url({{ asset('assets/img/wall.jpg') }});">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="title text-center">SEMAKAN DAFTAR PEMILIH PRU14</h1>
				</div>
			</div>
		</div>
	</div>
	<br/><br/>
    <div class="main main-raised">
        <div class="section">
		    <div class="container">
		        @yield('content')
		    </div>
		</div>
	</div>
	@include('layouts.footer');

</div>



</body>
	@yield('before_scripts')
	<!--   Core JS Files   -->
	<script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/material.min.js') }}"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="{{ asset('assets/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="{{ asset('assets/js/material-kit.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
	@include('vendor.sweetalert.cdn') 
	@include('vendor.sweetalert.view')
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117607947-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-117607947-1');
	</script>

	@yield('after_scripts')

</html>
