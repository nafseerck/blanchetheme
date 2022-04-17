<?php 
/* Template Name: Homepage Template */
get_header(); ?>
</div><!-----row close---->
</div><!-----container close---->
<!-----Banner section start ---->
<section class="homebanner" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/04/homebanner.jpg);">
	<div class="container">
		<h1>Super Soft, Stylish Bed Linen Made With Love</h1>
		<a class="blanchebtn" href="#">explore</a>
		<div class="v-line"></div>
	</div>
</section>
<!-----Banner section end ---->
<!-----Shop by category section start ---->
<section class="shopbycat">
	<div class="container-md">
		<h2 class="caption-30">Our premium products got the finest quality cotton that create an exquisite lightweight textile that’s both soft and crisp – guaranteed to give you a wonderful night’s sleep.</h2>
		<div class="catwrap row align-items-end">
			<div class="col-md-6 p-0">
				<div class="selectedcat" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/04/shpbycat1.jpg);">
					<a class="whitebtn blanchebtn" href="<?php echo site_url(); ?>/product-category/bed-linens/">explore</a>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="selectedcat" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/04/shpbycat2.jpg);">
					<a class="whitebtn blanchebtn" href="<?php echo site_url(); ?>/product-category/bath-towels/">explore</a>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="selectedcat" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/04/shpbycat3.jpg);">
					<a class="whitebtn blanchebtn" href="<?php echo site_url(); ?>/product-category/bath-robs/">explore</a>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="selectedcat" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/04/shpbycat4.jpg);">
					<a class="whitebtn blanchebtn" href="<?php echo site_url(); ?>/product-category/home-frangrances/">explore</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-----Shop by category section end ---->
<!-----Product section start ---->
<section class="bestsellers">
	<div class="container-md">
		<h3 class="caption-30">Best Sellers</h3>
		<div class="bestsellerswrap row h-100">
			<?php
			$meta_query  = WC()->query->get_meta_query();
			$tax_query   = WC()->query->get_tax_query();
			$tax_query[] = array(
			    'taxonomy' => 'product_visibility',
			    'field'    => 'name',
			    'terms'    => 'featured',
			    'operator' => 'IN',
			);
			 
			$args = array(
			    'post_type'           => 'product',
			    'post_status'         => 'publish',
			    'posts_per_page'      => 3,
			    'meta_query'          => $meta_query,
			    'tax_query'           => $tax_query,
			);
			 
			$featured_query = new WP_Query( $args );   
			if ($featured_query->have_posts()) {
			    while ($featured_query->have_posts()) : 
			        $featured_query->the_post();
			        $product = get_product( $featured_query->post->ID );
			        $price = $product->get_price_html();
			?>
			<div class="featured-product col-md-4">
			    <a href="<?php the_permalink(); ?>">
			        <?php echo woocommerce_get_product_thumbnail('medium'); ?>
			    </a>
			    <a href="<?php the_permalink(); ?>">
			        <h3 class="pdtname"><?php the_title(); ?></h3>
			    </a>
			    <span class="ftdprice"><?php echo $price; ?></span>
			</div>
			<?php endwhile; } ?>
		</div>
	</div>
</section>
<!-----Product section end ---->
<!-----Our Priority section start ---->
<section class="ourpriority">
	<div class="container-md">
		<h4 class="caption-30" style="color: #000;">Your Comfort Is Our #1 Priority</h4>
		<div class="row h-100">
			<div class="col-md-3">
				<div class="prioinner">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/prio1.jpg" alt="icon" />
					<h4 class="pdtname">Quality Products</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="prioinner">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/prio2.jpg" alt="icon" />
					<h4 class="pdtname">Lifetime Warranty</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="prioinner">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/prio3.jpg" alt="icon" />
					<h4 class="pdtname">Stress-free shopping</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="prioinner">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/prio4.jpg" alt="icon" />
					<h4 class="pdtname">Fair prices</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-----Our Priority section start ---->
<!-----Testimonial section start ---->
<section class="testimonials">
	<div class="container">
		<center>
			<img src="<?php bloginfo('template_directory')?>/images/5star.png" alt="star" />
			<h5 class="caption-30" style="color: #000;">"This is the best towel set I've ever had; it's cool, comfortable and aesthetically perfect."</h5>
			<a class="blanchebtn" href="#">Read testimonials</a>
		</center>
	</div>
</section>
<!-----Testimonial section end ---->
<!-----Instagram feed start ---->
<?php echo do_shortcode('[instagram-feed]'); ?>.
<!-----Instagram feed end ---->
<?php get_footer(); ?>