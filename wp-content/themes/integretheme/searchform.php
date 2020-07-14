
    <form role="search" method="get" class="form" action="<?php bloginfo('url');?>">
        <label class="hidden" for="s"><?php _e('Search', 'mytheme');?></label>
        <input class="input" type="search" placeholder="<?php _e('Search', 'mytheme');?>..." name="s" id="s" value="<?php echo get_search_query();?>">
        <button class="button">Go</button>
    </form>
