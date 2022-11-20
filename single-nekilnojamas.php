<?php

get_header();
?>
<div class="container">
        <div class="row mb-3 mt-5" >
		<div class="col-4">
			<img src=" <?php echo get_field('image'); ?> ">
		</div>
		<div class="other-content col-4">
			<p> <b> Adresas: </b>  <?php echo get_field('adress'); ?>	</p>
			<p> <b> Kambariu skaicius: </b>  <?php echo get_field('room_count'); ?>	</p>
			<?php if (get_field('is_house') == ['Flat']){ ?>
				<p> <b> Tipas: </b>  Butas	</p>
				<p> <b> Aukstas: </b>  <?php echo get_field('floor'); ?>	</p>
				<?php
					} else { ?>
						<p> <b> Tipas: </b>  Nuosavas namas	</p>
				<?php	};  ?>
		</div>
		<div class="col-4"></div>
        </div>
		<div class="row mb-3 mt-5" >
		<p> <b> Detalesne informacija: </b> <br> 
		<?php echo get_field('aprasymas'); ?>	</p>	
		</div>
    </div>



        