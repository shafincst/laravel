    	<!-- start contact -->
    	<section id="contact">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTACT <span>AWESOME</span></h2>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
    					<form action="{{route('store')}}" method="POST">
							@csrf
							<label>NAME</label>
    						<input name="name" type="text" class="form-control" id="name">

							<label>PHONE</label>
    						<input name="phone" type="text" class="form-control" id="phone">
   						  	
                            <label>EMAIL</label>
    						<input name="email" type="email" class="form-control" id="email">
							<label>ADDRESS</label>
    						<input name="address" type="text" class="form-control" id="address">
   						  	
                            <label>MESSAGE</label>
    						<textarea name="message" rows="4" class="form-control" id="message"></textarea>
    						
    						
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