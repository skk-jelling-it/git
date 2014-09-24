<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Git demo</title>

	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
	<link rel="stylesheet alternate" href="/git/css/bootstrap.min.css" />

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />

	<!-- Custom styles for this template -->
	<!--<link href="css/navbar-fixed-top.css" rel="stylesheet" />-->
	
	<!-- Custom LESS styles for this template -->
	<link rel="stylesheet/less" type="text/css" href="less/less.less" />
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/less-1.3.3.min.js" type="text/javascript"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<!-- Holder.js -->
	<script src="/git/js/holder.js"></script>
	
	<!-- Custom fonts -->
	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Kaushan+Script" />
	
</head>
<body>

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Project name</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Nav header</li>
						<li><a href="#">Separated link</a></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>


<!-- Container -->
<div class="container">

	<div class="page-header">
		<h1>Alerts</h1>
	</div>
	<div class="alert alert-success" role="alert">
		<strong>Well done!</strong> You successfully read this important alert message.
	</div>
	<div class="alert alert-info" role="alert">
		<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
	</div>
	<div class="alert alert-warning" role="alert">
		<strong>Warning!</strong> Best check yo self, you're not looking too good.
	</div>
	<div class="alert alert-danger" role="alert">
		<strong>Oh snap!</strong> Change a few things up and try submitting again.
	</div>



	<div class="page-header">
		<h1>Progress bars</h1>
	</div>
	<div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60% Complete</span></div>
	</div>
	<div class="progress">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span></div>
	</div>
	<div class="progress">
		<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"><span class="sr-only">20% Complete</span></div>
	</div>
	<div class="progress">
		<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete (warning)</span></div>
	</div>
	<div class="progress">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span class="sr-only">80% Complete (danger)</span></div>
	</div>
	<div class="progress">
		<div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">100% Complete</span></div>
	</div>
	<div class="progress">
		<div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
		<div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
		<div class="progress-bar progress-bar-danger" style="width: 10%"><span class='sr-only'>10% Complete (danger)</span></div>
	</div>



	<div class="page-header">
		<h1>List groups</h1>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<ul class="list-group">
				<li class="list-group-item">Cras justo odio</li>
				<li class="list-group-item">Dapibus ac facilisis in</li>
				<li class="list-group-item">Morbi leo risus</li>
				<li class="list-group-item">Porta ac consectetur ac</li>
				<li class="list-group-item">Vestibulum at eros</li>
			</ul>
		</div><!-- /.col-sm-4 -->
		<div class="col-sm-4">
			<div class="list-group">
				<a href="#" class="list-group-item active">
					Cras justo odio
				</a>
				<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
				<a href="#" class="list-group-item">Morbi leo risus</a>
				<a href="#" class="list-group-item">Porta ac consectetur ac</a>
				<a href="#" class="list-group-item">Vestibulum at eros</a>
			</div>
		</div><!-- /.col-sm-4 -->
		<div class="col-sm-4">
			<div class="list-group">
				<a href="#" class="list-group-item active">
					<h4 class="list-group-item-heading">List group item heading</h4>
					<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">List group item heading</h4>
					<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">List group item heading</h4>
					<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				</a>
			</div>
		</div><!-- /.col-sm-4 -->
	</div>



	<div class="page-header">
		<h1>Panels</h1>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Panel title</h3>
				</div>
				<div class="panel-body">
					Panel content
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Panel title</h3>
				</div>
				<div class="panel-body">
					Panel content
				</div>
			</div>
		</div><!-- /.col-sm-4 -->
		<div class="col-sm-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Panel title</h3>
				</div>
				<div class="panel-body">
					Panel content
				</div>
			</div>
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Panel title</h3>
				</div>
				<div class="panel-body">
					Panel content
				</div>
			</div>
		</div><!-- /.col-sm-4 -->
		<div class="col-sm-4">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<h3 class="panel-title">Panel title</h3>
				</div>
				<div class="panel-body">
					Panel content
				</div>
			</div>
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h3 class="panel-title">Panel title</h3>
				</div>
				<div class="panel-body">
					Panel content
				</div>
			</div>
		</div><!-- /.col-sm-4 -->
	</div>



	<div class="page-header">
		<h1>Wells</h1>
	</div>
	<div class="well">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
	</div>



	<div class="page-header">
		<h1>Carousel</h1>
	</div>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img data-src="holder.js/1140x500/auto/#666:#444/text:First slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMTQwIiBoZWlnaHQ9IjUwMCI+PHJlY3Qgd2lkdGg9IjExNDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjNzc3Ii8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iNTcwIiB5PSIyNTAiIHN0eWxlPSJmaWxsOiM1NTU7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LXNpemU6NzFweDtmb250LWZhbWlseTpBcmlhbCxIZWx2ZXRpY2Esc2Fucy1zZXJpZjtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj5GaXJzdCBzbGlkZTwvdGV4dD48L3N2Zz4=" alt="...">
				<div class="carousel-caption">
					<h3>Billede 1</h3>
					<p>Billede 1 beskrivelse</p>
				</div>
			</div>
			<div class="item">
				<img data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMTQwIiBoZWlnaHQ9IjUwMCI+PHJlY3Qgd2lkdGg9IjExNDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjNjY2Ii8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iNTcwIiB5PSIyNTAiIHN0eWxlPSJmaWxsOiM0NDQ7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LXNpemU6NzFweDtmb250LWZhbWlseTpBcmlhbCxIZWx2ZXRpY2Esc2Fucy1zZXJpZjtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj5TZWNvbmQgc2xpZGU8L3RleHQ+PC9zdmc+" alt="...">
				<div class="carousel-caption">
					<h3>Billede 2</h3>
					<p>Billede 2 beskrivelse</p>
				</div>
			</div>
			<div class="item">
				<img src="holder.js/1140x500/auto/#000:#fff/text:Third slide" alt="...">
				<div class="carousel-caption">
					<h3>Billede 3</h3>
					<p>Billede 3 beskrivelse</p>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>

	
</div> <!-- /container -->


<!-- Footer -->
<div class="footer">
	<div class="container">
		<p class="text-muted">Place sticky footer content here.</p>
	</div>
</div><!-- /footer -->


</body>
</html>
