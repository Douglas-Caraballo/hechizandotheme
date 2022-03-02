<form role="search" method="get" action="<?php echo home_url('/'); ?>">
    <input type="search" placeholder="<?php echo esc_attr_x('Buscar...', 'placeholder');?>" value="<?php echo get_search_query();?>" name="s" required>
    <button>
        <img src="" alt="Buscar">
    </button>
</form>