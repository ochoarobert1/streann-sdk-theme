<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <div class="input-group">
        <input type="search" id="autocomplete" name="s" class="form-control" placeholder="<?php _e('Search:'); ?>" aria-label="Recipient's username" aria-describedby="button-addon2">
        <input type="hidden" id="hiddenAutocomplete" name="hiddenAutocomplete" value="" />
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>
