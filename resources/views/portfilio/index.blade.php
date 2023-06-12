@include('portfilio.inc.header')


  

   

     	<!-- start home -->
	 <section id="home">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-offset-2 col-md-8">
    					<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">I make website that are <span>awesome</span></h1>
    					<div class="element">
                            <div class="sub-element">Hello, This is a HTML Website.</div>
                            <div class="sub-element">Awesome Website is Designed and provided by Giri Designs.</div>
                            <div class="sub-element">If you need this website, Please contact us.</div>
                        </div>
    					<a data-scroll href="#about" class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">GET STARTED</a>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end home -->
		@include('portfilio.about')
		@include('portfilio.team')
		@include('portfilio.service')
		@include('portfilio.portfolio')
		
		@include('portfilio.contact')



@include('portfilio.inc.footer')
