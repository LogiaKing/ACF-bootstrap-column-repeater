<?php if ( have_rows('staff') ) : ?>  
    <div class="container">
        <div class="row">

        <!-- Count repeater rows with "get_field" -->
        <?php 
            $totalNum = count( get_field('staff') );
            $numOfCols = 3;
            $rowCount = 0;
            $bootstrapColWidth = 12 / $numOfCols;
        ?>

        <?php while( have_rows('staff') ) : the_row(); ?>                       

            <div class="col-md-<?php echo $bootstrapColWidth; ?>">
				<img src="<?php the_sub_field('photo'); ?>">
                <h2><?php the_sub_field('name'); ?></h2>
				<p><?php the_sub_field('job_title');?></p>
            </div>

        <?php
            $rowCount++;
            if ($rowCount % $numOfCols == 0) echo '</div><div class="row">';
        ?>

        <?php endwhile; ?>

        </div>
    </div>
<?php endif; ?>
