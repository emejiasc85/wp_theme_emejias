<div class="container">
    <div class="card-deck">
        <?php $args = array(
            'sort_order' => 'asc',
            'sort_column' => 'ID',
            'hierarchical' => 1,
            'exclude' => '',
            'include' => '',
            'meta_key' => '',
            'meta_value' => '',
            'authors' => '',
            'child_of' => 38,
            'parent' => -1,
            'exclude_tree' => '',
            'number' => '',
            'offset' => 0,
            'post_type' => 'page',
            'post_status' => 'publish'
        );
        $pages = get_pages($args);

        foreach ($pages as $page) { ?>
            
            <div class="card border-0 box-shadow bg-light rounded-0">
                <div class="card-block p-4">
                    <i class="glyph-icon <?php echo $page->icon ?>"></i>
                    <h4 class="card-title"><?php echo $page->post_title ?></h2></h4>
                    <p class="card-text"><?php echo $page->post_content ?></p>
                </div>
            </div>
        <?php }?>        
    </div>
</div>