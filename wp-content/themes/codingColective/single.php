<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php while (have_posts()) : ?>
	<?php the_post(); ?>
	<div class="img-fluid single-img-feature mt-5">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="container"><br>
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		<p style="color: #ffcb05;">25 Feb 2022 - 06 Mar 2022</p>
		<?php the_content(); ?>
		<hr>
		<div class="row">
			<?php for ($i = 0; $i < 3; $i++) :   ?>
				<div class="col-md-4">
					<div class="card mb-4 promotion-list">
						<img class="card-img-top position-relative" src="http://localhost:8888/wordpress/images/imgList1.png" alt="Card image cap">
						<p class="promotion-list-label">Shop</p>
						</img>
						<div class="card-body position-relative">
							<h5 class="card-title">Promotion <?php echo $i ?></h5>
							<p class="promotion-list-date">9 Feb 2022 - 01 Mar 2022</p>
							<h5 class="promotion-list-subtitle">Valentine’s Days Offers</h5>
							<p class="promotion-list-subtitle-desc">20% OFF* Regular-priced items. 10% OFF* Nett-priced items.</p>
							<p class="promotion-tag">#<?php echo $i ?></p>
						</div>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>


<?php endwhile; // End of the loop. 
?>

<?php get_footer(); ?>
<style>
	.img-fluid.single-img-feature {
		width: 60em;
		height: auto;
		border-bottom-right-radius: 50em;
		overflow: hidden;
		border-top-right-radius: 50em;
	}
</style>

<!-- style promotion -->
<style>
	.promotion-menu-child {
		background-color: #ffcb05;
		border-bottom-right-radius: 40px;
		padding-right: 2em;
	}

	.promotion-menu-child::before {
		content: '-';
		position: absolute;
		left: 0;
		background: #ffcb05;
		color: #ffcb05;
		width: 20%;
		z-index: -1;
	}

	.promotion-list {
		color: black;
		border-radius: 34px;
	}

	p.promotion-tag {
		position: absolute;
		top: 0;
		right: 0em;
		width: 9em;
		text-align: center;
		background: #ffcb05;
		color: white;
		padding-right: 1em;
		border-bottom-left-radius: 20px;
	}

	img.card-img-top {
		border-top-left-radius: 34px;
		border-top-right-radius: 34px;
	}

	p.promotion-list-label {
		position: absolute;
		background: #ffcb05;
		padding: 0 2em 0 2em;
		left: 7em;
		right: 7em;
		text-align: center;
		color: white;
		border-bottom-left-radius: 1em;
		border-bottom-right-radius: 1em;
	}

	p.promotion-list-date {
		color: gray;
		margin-bottom: 0;
	}

	h5.promotion-list-subtitle {
		color: #ffcb05;
	}

	p.promotion-list-subtitle-desc {
		margin-bottom: 0;
		font-size: 0.8em;
	}
</style>