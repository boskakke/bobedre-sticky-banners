<div class="container--full">



<a href="#"  target="_blank" class="sticky-native__link">
<div  class="sticky-native">
	
		<div class="sticky-native__fig">
			<picture>
				
				<source media="(min-width: 1600px)" srcset="<? dummy("image/!native/". $client . "@2200x,3:2") ?>"> 
				<source media="(min-width: 1024px)" srcset="<? dummy("image/!native/". $client . "@1600x,3:2") ?> 1x, <? dummy("image/!native/". $client . "@2200x,3:2") ?> 2x"> 
				<source media="(min-width: 768px)" 	srcset="<? dummy("image/!native/". $client . "@768x,3:2") ?> 1x, <? dummy("image/!native/". $client . "@1280x,3:2") ?> 2x"> 
				<source media="(min-width: 0px)" 	srcset="<? dummy("image/!native/". $client . "@640x,2:3") ?> 1x, <? dummy("image/!native/". $client . "@1280x,2:3") ?> 2x"> 
				<img alt="" class="sticky-native__image" srcset="<? dummy("image/!native/". $client . "@1600x3:2") ?>">
			</picture>
		</div>	
		
	<?php if($client == 'kvadrat') : ?>
		<div class="sticky-native__inner sticky-native__content--light ">
			<div class="sticky-native__content">
				<div class="sticky-native__logo sticky-mw-200"><img src="/dist/images/kvadrat.png" alt="Hay" class="sticky-native__logo-img"></div>
				<div class="sticky-native__line1 sticky-font-40 sticky-font-md-60 sticky-mt-20">innovation since 1968</div>
			</div>
		</div>


	<?php elseif ($client == 'hay') : ?>

		<div class="sticky-native__inner sticky-native__content--light sticky-native__content--dark ">
			<div class="sticky-native__content">
				<div class="sticky-native__logo sticky-mw-150 sticky-md-200"><img src="/dist/images/hay.png" alt="Hay" class="sticky-native__logo-img"></div>
				<div class="sticky-native__line1 sticky-font-30 sticky-font-md-40">J42 stol ude nu</div>
			</div>
		</div>

	<?php elseif ($client == 'bo') : ?>

		<div class="sticky-native__inner">
			<div class="sticky-native__content sticky-native__content--light">
				<div class="sticky-native__logo mw-150 " ><img src="/dist/images/bangolufsen.svg" alt="Bang &amp; Olufsen" class="sticky-native__logo-img  "></div>	
				<div class="sticky-native__line1  sticky-font-40 sticky-font-md-60 sticky-font-lg-70">Music takes you places</div>	
				<div class="sticky-native__line2 sticky-font-16 sticky-font-md-30 ">Beosound 35</div>	
			</div>
		</div>

	<?php elseif ($client == 'bo2') : ?>

		<div class="sticky-native__inner">
			<div class="sticky-native__content sticky-native__content--light">
				<div class="sticky-native__logo mw-150"><img src="/dist/images/bangolufsen.svg" alt="Bang &amp; Olufsen" class="sticky-native__logo-img"></div>	
				<div class="sticky-native__line1 sticky-font-40 sticky-font-md-60 sticky-font-lg-70">Music takes you places</div>	
				<div class="sticky-native__line2 sticky-font-16 sticky-font-md-30 ">Beosound 35</div>	
			</div>
		</div>
	<?php elseif ($client == 'summer') : ?>

		<div class="sticky-native__inner sticky-native__content--light sticky-native__content--dark ">
			<div class="sticky-native__content">
				<div class="sticky-native__logo sticky-mw-100 sticky-md-md-200"><img src="/dist/images/hay.png" alt="Hay" class="sticky-native__logo-img"></div>
				<div class="sticky-native__line1 sticky-font-30  sticky-font-md-80 sticky-font-lg-100">Jer er noget tekst</div>
				<div class="sticky-native__line2 sticky-font-50 sticky-font-md-40 sticky-font-lg-50">Pay-off</div>
			</div>
		</div>

	<?php endif; ?>

</div>
</a>

</div>


<?php 
$client = false;
$class = false;
?>