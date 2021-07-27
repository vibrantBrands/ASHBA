<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer>
    	<div class="row">
    		<div>
                  <a href="/"><img src="<?php echo $this->getThemePath(); ?>/img/home/asha-logo.png" alt="ASHBA Logo" class="logo"></a>
    		</div>
    		<div>
    		
    		<p><i class="fas fa-map-marker-alt"></i> 4083 Iron Works Parkway,<br />Lexington, KY 40511</p>
    		<p><i class="fas fa-phone"></i> Registry: (859) 259-2742<br />
    		Transfers: (859) 259-3895<br />
    		General: (859) 259-2742</p>
    		</div>
    		<div>
    			<ul class="social-icons">
    				<li><a href="/"><i class="fab fa-facebook"></i></a></li>
          			<li><a href="/"><i class="fab fa-twitter"></i></a></li>
          			<li><a href="/"><i class="fab fa-youtube"></i></a></li>
          			<li><a href="/"><i class="fab fa-instagram"></i></a></li>
          			<li><a href="/"><i class="fab fa-pinterest"></i></a></li>
    			</ul>
    			<input type="email" placeholder="email">
    		</div>
    		<div>
    			Partners<br/>Along<br/>for the<br/>Ride
    		</div>
    		<div>
    			<img src="<?php echo $this->getThemePath(); ?>/img/home/iealogo.png" alt="Independent Equine Agents" class="logo">
    			<img src="<?php echo $this->getThemePath(); ?>/img/home/slt-logo.png" alt="State Line Tack" class="logo">
    		</div>
    	</div>
</footer>

<?php $this->inc('elements/footer_bottom.php');?>
