<form method="get" id="searchform" action="<?php echo home_url() ; ?>/">
    <input class="form-control" type="text" value="<?php echo esc_html($s, 1); ?>" name="s" id="s"/>
    <input type="submit" class="btn btn-success" value="Go" style="width:100%"/>
</form>