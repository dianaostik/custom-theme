<?php
/**
 * Template name: Pradzia
 */

get_header();
?>

	<div class = "container">
		<div class = "row">

		<?php

		$loop = new WP_Query(
			array(
				'post_type' => 'nekilnojamas',
				'orderby' => 'post_id',
				'order' => 'DESC',
			)
			);

			if ($loop->have_posts()) {
				while ($loop->have_posts()) {
					$loop->the_post();
					echo '<div class="col-4 mb-5">';
					echo '<img src='. get_field('image').'>';
					echo "<h2>".get_field(get_the_ID()).'</h2>';
					echo '<h5> Adresas: '.get_field('adress', get_the_ID()).'</h5>' ;
					echo 'Kambariu skaicius: '.get_field('room_count', get_the_ID()).'<br>';
					if (get_field('is_house') == ['Flat']){
						echo "Tipas: Butas";
						echo '<p> Aukstas: '.get_field('floor', get_the_ID()).'</p>';
					} else {
						echo "Tipas: Nuosavas namas <br> <br>";
					};
					echo '<a href="'.get_the_permalink().'"> <button type="button" class="btn btn-outline-secondary mx-0 my-0">Skaityti daugiau</button></a>';
					echo '</div>';
					
				}
			}

			wp_reset_postdata();
			?>
			</div>
		</div>
