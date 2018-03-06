<div class="container--full">
<!-- 
2200 3:2
1600 x 1024
1280x1280
1024x768
768x768
640x640
 -->



	
	<a href="#" class="sticky-native" target="_blank">
	
		<div class="sticky-native__fig">
			<picture>
				
				<source media="(min-width: 1600px)" srcset="<? dummy("image/!native/". $client . "@2200x,3:2") ?>"> 
				<source media="(min-width: 1024px)" srcset="<? dummy("image/!native/". $client . "@1600x,3:2") ?> 1x, <? dummy("image/!native/". $client . "@2200x,3:2") ?> 2x"> 
				<source media="(min-width: 768px)" 	srcset="<? dummy("image/!native/". $client . "@768x,3:2") ?> 1x, <? dummy("image/!native/". $client . "@1280x,3:2") ?> 2x"> 
				<source media="(min-width: 640px)" 	srcset="<? dummy("image/!native/". $client . "@640x,2:3") ?> 1x, <? dummy("image/!native/". $client . "@1280x,2:3") ?> 2x"> 
				<source media="(min-width: 0px)" 	srcset="<? dummy("image/!native/". $client . "@640x,2:3") ?>"> 
				<img alt="" class="sticky-native__image" srcset="<? dummy("image/!native/". $client . "@1600x3:2") ?>">
			</picture>
		</div>	
		
	<?php if($client == 'kvadrat') : ?>
		<div class="sticky-native__inner sticky-native__content--light ">
			<div class="sticky-native__content">
				<div class="sticky-native__logo"><img src="/dist/images/kvadrat.png" alt="Hay" class="sticky-native__logo-img"></div>
				<div class="sticky-native__line1">innovation since 1968</div>
			</div>
		</div>


	<?php elseif ($client == 'hay') : ?>

		<div class="sticky-native__inner sticky-native__content--light sticky-native__content--dark ">
			<div class="sticky-native__content">
				<div class="sticky-native__logo"><img src="/dist/images/hay.png" alt="Hay" class="sticky-native__logo-img"></div>
				<div class="sticky-native__line1">J42 stol ude nu</div>
			</div>
		</div>

	<?php elseif ($client == 'bo') : ?>

		<div class="sticky-native__inner">
			<div class="sticky-native__content sticky-native__content--light">
				<div class="sticky-native__logo"><img src="/dist/images/bangolufsen.svg" alt="Bang &amp; Olufsen" class="sticky-native__logo-img"></div>	
				<div class="sticky-native__line1 ">	Music takes you places</div>	
				<div class="sticky-native__line2 ">	Beosound 35</div>	
			</div>
		</div>

	<?php elseif ($client == 'bo2') : ?>

		<div class="sticky-native__inner">
			<div class="sticky-native__content sticky-native__content--light">
				<div class="sticky-native__logo"><img src="/dist/images/bangolufsen.svg" alt="Bang &amp; Olufsen" class="sticky-native__logo-img"></div>	
				<div class="sticky-native__line1">	Music takes you places</div>	
				<div class="sticky-native__line2">	Beosound 35</div>	
			</div>
		</div>
	<?php endif; ?>


	</a>






</div>


<?php 
$client = false;
$class = false;
?>