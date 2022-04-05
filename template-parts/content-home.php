<div class="wrapper-home">
    <div class="home-head">
        <?php
            get_template_part('template-parts/components/home/element','featured');
            get_template_part('template-parts/components/home/element','categories');
        ?>
    </div>
    <div class="home-content">
        <?php
            get_template_part('template-parts/components/home/element','post');
            get_template_part('template-parts/components/home/element-widget','home');
        ?>
    </div>
</div>
