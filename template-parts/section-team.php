<?php if (get_theme_mod('team_show', true) == true){?>
<section id="team" class="section-padding text-center">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('team_heading')?></h2>
            <p><?php echo get_theme_mod('team_descricption')?></p>
        </div>
        <div class="row">
            <?php
                $teams = get_theme_mod('team_repeater');
                foreach ($teams as $team){
            ?>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <!-- Team Item Starts -->
                <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
                    <div class="team-img">
                        <?php
                        $img_url = wp_get_attachment_image_src($team['team_image']);
                        ?>
                        <img class="img-fluid" src="<?php echo $img_url[0];?>" alt="">
                        <div class="team-overlay">
                            <div class="overlay-social-icon text-center">
                                <ul class="social-icons">
                                    <?php if ($team['team_facebook']){?>
                                        <li><a href="<?php echo $team['team_facebook']?>"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                    <?php }
                                    if ($team['team_twitter']){
                                    ?>
                                    <li><a href="<?php echo $team['team_twitter']?>"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                    <?php }
                                    if ($team['team_instragram']){
                                        ?>
                                    <li><a href="<?php echo $team['team_instragram']?>"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="info-text">
                        <h3><a href="#"><?php echo $team['team_title']?></a></h3>
                        <p><?php echo $team['team_desgination']?></p>
                    </div>
                </div>
                <!-- Team Item Ends -->
            </div>
             <?php } ?>

        </div>
    </div>
</section>
<?php } ?>