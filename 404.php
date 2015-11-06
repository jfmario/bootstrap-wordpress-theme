<?php get_header(); ?>

<div class="container">

      <div class="row">
        <div class="col-md-9">
            <div class="page-header">
                <h1>Error 404: Not Found</h1>
            </div>
            <div class="alert alert-danger">
                <strong>Oh noes!</strong> Something went wrong, and what you tried find either does not exist or is not in the right place. Try searching:
            </div>
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Search <?php bloginfo( 'name' ); ?></h3>
                </div>
                <div class="panel-body">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <!--
                if having a search form in the main page as well as in the 
                sidebar seems wrong to you, just delete the sidebar
                by getting rid of the following php line.
            -->
            <?php get_sidebar(); ?> 
        </div>
    </div>
  
<?php get_footer(); ?>
