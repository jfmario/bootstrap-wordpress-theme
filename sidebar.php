<div class="sidebar">
    
    <!-- just code your own sidebar! it's easier to style it right -->
    <div class="panel panel-default">
        
        <div class="panel-heading">
            <h3 class="panel-title">Search <?php bloginfo( 'name' ); ?></h3>
        </div>
        <div class="panel-body">
            <?php get_search_form(); ?>
        </div>
    </div>
    
    <!-- 
        if you don't want my custom stuff, 
        and instead want only your real widgets,
        keep the first line of this file, the last line of this file,
        and the following two php lines. delete everything else.
    -->
    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
    <?php endif; ?>
    
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title"><?php bloginfo ( 'name' ) ?> Archives</h3>
        </div>
        <div class="panel-body">
            
            <select name="archive-dropdown" class="form-control" onchange="document.location.href=this.options[this.selectedIndex].value;">
                
                <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
                
                 <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
            </select>
        </div>
    </div>
</div>