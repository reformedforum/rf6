<div class="rev-slider-full">
	<div class="rev-slider-banner-full  rev-slider-full">
		<ul>
		
		<?php query_posts(array('showposts'=>3, 'post_type'=>array('post', 'podcast'), 'category_name'=>'Headline', 'post__not_in'=>$usedIds)); ?>

			<?php while (have_posts()) : the_post(); ?>	


			<li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
			
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('slider', array('alt'=>'rev-full1', 'data-fullwidthcentering'=>'on'));
				} ?>
			
				<div class="tp-caption slider-text-title sft str"
					 data-x="20"
					 data-y="150"
					 data-speed="300"
					 data-start="800"
					 data-easing="easeOutCubic" data-end="6000" data-endspeed="500"><?php the_title(); ?></div>

				<div class="tp-caption slider-text-description sft str"  data-x="20" data-y="200" data-start="1000" data-easing="easeOutBack" data-end="4500" data-endspeed="500">
					<?php echo get_the_excerpt(); ?>
				</div>
				
				<div class="tp-caption slider-text-description sft str"  data-x="20" data-y="280" data-start="1500" data-easing="easeOutBack" data-end="5000" data-endspeed="500">
					<a href="<?php the_permalink(); ?>" class="button btn-flat">More Info</a>
				</div>                  

			</li>
			
			<?php array_push($usedIds, get_the_ID()); ?>
			<? endwhile; ?>


			<li  data-transition="slideleft" data-slotamount="14">
				<img src="<?php roots_skin_directory(); ?>/images/placeholders/slider1/bg2.jpg" alt="Rev Full">

				<div class="caption sfb" data-x="693" data-y="75" data-speed="700" data-start="0"
					 data-easing="easeOutBack">
					<img src="<?php roots_skin_directory(); ?>/images/placeholders/slider1/mobile.png" alt=""/>
				</div>

				<div class="tp-caption slider-text-title sft str"
					 data-x="20"
					 data-y="150"
					 data-speed="300"
					 data-start="800"
					 data-easing="easeOutCubic" data-end="6000" data-endspeed="500">Very Flexible</div>


				<div class="tp-caption slider-text-description sft str"  data-x="20" data-y="200" data-start="1000" data-easing="easeOutBack" data-end="4500" data-endspeed="500">
					Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,<br /> 
					lorem quis bibendum auctor, nisi elit consequat ipsum, nec <br />
					sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
				</div>
				<div class="tp-caption slider-text-description sft str"  data-x="20" data-y="280" data-start="1500" data-easing="easeOutBack" data-end="5000" data-endspeed="500">
					<a href="#" class="button btn-flat">More Info</a>
				</div>                

			</li>

		</ul>
		<div class="tp-bannertimer tp-bottom"></div>
	</div>
</div>