<?php
/*
 * Title: Custom Heading
 * Slug: lwn-test/custom-heading
 * Categories: header
 * */
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"500px"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"black","textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-black-background-color has-text-color has-background has-link-color">
<?php echo __('Page title', 'lwn-test'); ?>

</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"vivid-cyan-blue","textColor":"white"} -->
<p class="has-white-color has-vivid-cyan-blue-background-color has-text-color has-background has-link-color">هذه فقرة النص من النمط الجديد</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
