<?php if (get_theme_mod('show_hide_checkbox', true) == true){?>
    <!-- Services Section Start -->
    <section id="services" class="section-padding bg-gray">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('service_heading')?></h2>
                <p><?php echo get_theme_mod('service_descricption');?></p>
            </div>
            <div class="row">
                <!-- Services item -->
                <?php
                $services = get_theme_mod('service_item');
                foreach ($services as $service){
                    ?>

                    <div class="<?php echo get_theme_mod('service_item_number');?> <?php echo get_theme_mod('service_text_align')?>">
                        <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
                            <div class="icon">
                                <i class="<?php echo $service['service_item_icon'];?>"></i>
                            </div>
                            <div class="services-content">
                                <h3><a href="javascript:void(0);"><?php echo $service['service_item_title'];?></a></h3>
                                <p><?php echo $service['service_item_desc'];?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- Services Section End -->
<?php }