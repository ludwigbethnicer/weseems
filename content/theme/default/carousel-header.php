<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="hover">
	<!-- Indicators -->
	<ul class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ul>

	<!-- The slideshow -->
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="<?php echo $domainhome; ?>storage/img/mlitauditbg1.png" alt="Los Angeles">
		</div>
		<div class="carousel-item">
			<img src="<?php echo $domainhome; ?>storage/img/chicago.jpg" alt="Chicago">
		</div>
		<div class="carousel-item">
			<img src="<?php echo $domainhome; ?>storage/img/ny.jpg" alt="New York">
		</div>
	</div>

	<!-- Left and right controls -->
	<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#myCarousel" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>