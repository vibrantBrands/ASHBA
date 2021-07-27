<?php require('elements/header.php'); ?>

<section class="hero">
	<?php
		$a = new Area("Image Slider");
		$a->display();
	?>
</section>
<section class="areas grid three" data-aos="fade-up">
	<div class="section">
		<div>
			<?php
				$a = new Area("Section Icon 1");
				$a->display();
			?>
		</div>
		<div>
			<?php
				$a = new Area("Section Text 1");
				$a->display();
			?>
		</div>
	</div>
	<div class="section">
		<div >
			<?php
				$a = new Area("Section Icon 2");
				$a->display();
			?>
			
		</div>
		<div>
			<?php
				$a = new Area("Section Text 2");
				$a->display();
			?>
		</div>
	</div>
	<div class="section">
		<div><?php
				$a = new Area("Icon 3");
				$a->display();
			?></div>
		<div>
			<?php
				$a = new Area("Section Text 3");
				$a->display();
			?>
		</div>
	</div>
</section>
<section class="welcome-text" data-aos="fade-up">
	<div class="container">
		<?php
			$a = new Area("Welcome Text");
			$a->display();
		?>
	</div>
</section>
<section class="member-benefits">
	<div class="container">

	<div class="grid four" data-aos="fade-up">
		<div>
			<?php
				$a = new Area("Member Benefit Text 1");
				$a->display();
			?>
		</div>
		<div>
			<?php
				$a = new Area("Member Benefit Text 2");
				$a->display();
			?>
		</div>
		<div>
			<?php
				$a = new Area("Member Benefit Text 3");
				$a->display();
			?>
		</div>
		<div><?php
				$a = new Area("Member Benefit Text 4");
				$a->display();
			?>
		</div>
		
	</div>
	</div>
</section>

<div class="cta">
	<?php
		$a = new Area("Become Member Button");
		$a->display();
	?>
</div>

<section class="news">
	<div class="container">
		<div class="grid four" data-aos="fade-up">
			<div>
				<h3>ASHBA Board Spotlight Q & A <br />with Owen Weaver</h3>
				<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed incididunt. Exercitation ullamco laboris nisi<br />
				<a href="/">...read more</a></p>
			</div>
			<div>
				<h3>ASHBA Board Spotlight Q & A <br />with Owen Weaver</h3>
				<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed incididunt. Exercitation ullamco laboris nisi<br />
				<a href="/">...read more</a></p>
			</div>
			<div>
				<h3>ASHBA Board Spotlight Q & A <br />with Owen Weaver</h3>
				<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed incididunt. Exercitation ullamco laboris nisi<br />
				<a href="/">...read more</a></p>
			</div>
			<div>
				<h3>ASHBA Board Spotlight Q & A <br />with Owen Weaver</h3>
				<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed incididunt. Exercitation ullamco laboris nisi<br />
				<a href="/">...read more</a></p>
			</div>
		</div>
		<a href="/" class="read-more red"> Read More ASHBA News</a>
	</div>
</section>

<section class="testimonials grid three" data-aos="fade-up">
	<a href="https://www.youtube.com/watch?v=CuxUYLSvuoM" data-lity>
		<img src="<?php echo $this->getThemePath(); ?>/img/home/play.png" alt="play" class="play">
	</a>
	<a href="/">
		<img src="<?php echo $this->getThemePath(); ?>/img/home/play.png" alt="play" class="play">
	</a>
	<a href="/">
		<img src="<?php echo $this->getThemePath(); ?>/img/home/play.png" alt="play" class="play">
	</a>
</section>

<section class="videos grid" data-aos="fade-up">
	<a href="">
	<h3><span>Trot Talk:</span> An Equestrian Coversation <img src="<?php echo $this->getThemePath(); ?>/img/home/play.png" alt="play" class="play"></h3>
	</a>
	<a href="">
		<img src="<?php echo $this->getThemePath(); ?>/img/home/play.png" alt="play" class="play">
	</a>
</section>

<img src="<?php echo $this->getThemePath(); ?>/img/home/horseman.png" alt="man on a horse" class="horseman">
<?php require('elements/footer.php'); ?>
