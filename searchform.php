<form role="search" method="get" class="search-form w-full max-w-[600px] full text border border-[#c5c5c5] flex items-center relative" action="<?php echo home_url('/'); ?>">
    <input type="search" class="search-field w-full border-none outline-none py-2 pl-[1.1rem] mr-4 text-[#707070]" placeholder="Buscar" value="<?php echo get_search_query() ?>" name="s" />
    <button type="submit" class="search-submit absolute right-10" style="right:10px;"><i class="fas fa-search"></i></button>
</form>