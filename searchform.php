<form role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="searchform" method="get">
    <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Buscar...">
    <button type="submit">Busca</button>
</form>
