<?php if (get_theme_mod('price_show_hide', true) == true){?>
<section id="pricing" class="section-padding bg-gray">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('price_heading');?></h2>
            <p><?php echo get_theme_mod('price_descricption');?></p>
        </div>
        <div class="row">
            <?php
            $prices = get_theme_mod('price_type');
            foreach ($prices as $price){
            ?>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div id="<?php
                if ($price['price_featured_highlight'] == true){echo 'active-tb';}
                ?>" class="table wow fadeInLeft" data-wow-delay="1.2s">
                    <div class="title">
                        <h3><?php echo $price['price_name'];?></h3>
                    </div>
                    <div class="pricing-header">
                        <p class="price-value">$<?php echo $price['price_amount'];?><span>/ <?php echo $price['price_type'];?></span></p>
                    </div>
                    <ul class="description">
                        <li><?php echo $price['feature_1'];?></li>
                        <li><?php echo $price['feature_2'];?></li>
                        <li><?php echo $price['feature_3'];?></li>
                        <li><?php echo $price['feature_4'];?></li>
                        <li><?php echo $price['feature_5'];?></li>
                        <li><?php echo $price['feature_6'];?></li>
                    </ul>
                    <button class="btn btn-common" href="<?php echo $price['price_btn_link'];?>"><?php echo $price['price_btn_text'];?></button>
                </div>
            </div>
                <?php } ?>
        </div>
    </div>
</section>
<?php } ?>