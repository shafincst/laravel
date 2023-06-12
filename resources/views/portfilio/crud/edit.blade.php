<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- 
        Awesome Template
        http://www.templatemo.com/preview/templatemo_450_awesome
        -->
		<title>Awesome Responsive Website</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">
		<script src="{{asset('js/jquery.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.singlePageNav.min.js')}}"></script>
		<script src="{{asset('js/typed.js')}}"></script>
		<script src="{{asset('js/wow.min.js')}}"></script>
		<script src="{{asset('js/custom.js')}}"></script>
	</head>
	<body id="top">

		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 		<div class="sk-rect1"></div>
       			<div class="sk-rect2"></div>
       			<div class="sk-rect3"></div>
      	 		<div class="sk-rect4"></div>
      			<div class="sk-rect5"></div>
     		</div>
    	</div>
    	<!-- end preloader -->

          	<!-- start navigation -->
              <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                  </div>
              
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      
                    
                     <ul class="nav navbar-nav navbar-right">
                      <li><a href="{{url('crud')}}">All User</a></li>
                      
                     </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
		<!-- end navigation -->


    	<!-- start contact -->
    	<section id="contact">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTACT <span>AWESOME</span></h2>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
    					<form action="{{route('update')}}" method="POST">
							@csrf
							<input name="employee_id" type="hidden" value="{{$employee->id}}" class="form-control" id="name">

							<label>NAME</label>
    						<input name="name" type="text" value="{{$employee->name}}" class="form-control" id="name">

							<label>PHONE</label>
    						<input name="phone" type="text" value="{{$employee->phone}}" class="form-control" id="phone">
   						  	
                            <label>EMAIL</label>
    						<input name="email" type="email" value="{{$employee->email}}" class="form-control" id="email">
							<label>ADDRESS</label>
    						<input name="address" type="text" value="{{$employee->address}}" class="form-control" id="address">
   						  	
                            <label>MESSAGE</label>
    						<textarea name="message" rows="4" value="{{$employee->message}}" class="form-control" id="message"></textarea>
    						
    						
                            <input type="submit" class="form-control">
    					</form>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
    					<address>
    						<p class="address-title">OUR ADDRESS</p>
    						<span>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</span>
    						<p><i class="fa fa-phone"></i> +88 01789 312924</p>
    						<p><i class="fa fa-envelope-o"></i> shafin19110@gmail.com</p>
    						<p><i class="fa fa-map-marker"></i> 50, Thiruvoodal Street, Thiruvannamalai - 606 601.</p>
    					</address>
    					<ul class="social-icon">
    						<li><h4>WE ARE SOCIAL</h4></li>
    						<li><a href="#" class="fa fa-facebook"></a></li>
    						<li><a href="#" class="fa fa-twitter"></a></li>
    						<li><a href="https://www.youtube.com/channel/UC4yzoGuKkCL_8FzI-B-x83A" class="fa fa-youtube"></a></li>
    					</ul>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end contact -->


	</body>
</html>