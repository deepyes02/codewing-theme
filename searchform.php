<form role="search" method="get" class="search-form" action="<?php echo home_url();?>">
      <label>
            <span class="screen-reader-text">Search for:</span>
            <input class="search-field" placeholder="Search..." value="<?php the_search_query();?>" name="s" type="search">
      </label>
      <input class="search-submit" value="Search" type="submit">
</form>