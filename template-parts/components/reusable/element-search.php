<form role="search" class="search-container" method="get" action="<?php echo home_url('/'); ?>">
<div class="search-container__content-form">
    <input class="search-container__search-bar" type="search" placeholder="<?php echo esc_attr_x('Buscar...', 'placeholder');?>" value="<?php echo get_search_query();?>" name="s" required>
    <button class="search-container__button">
        <img class="search-container__button__img" src="<?= get_template_directory_uri().'/dist/assets/img/search.png' ?>" alt="Buscar">
    </button></div>
</form>