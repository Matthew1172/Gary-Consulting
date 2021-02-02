<?php

/**
 * Displays the content when the cover template is used.
 * No comments allowed for this theme.
 *
 * @package Gary Consulting
 * @subpackage gary_consulting
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>">
    <h2 class="hC introFont"><?php the_title(); ?></h2>
    <hr/>
    <?php the_content(); ?>
</article>