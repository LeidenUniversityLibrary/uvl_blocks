<?php
/**
 * @file
 * Theme implementation to display a block
 **/

$items = $variables['items'];
?>
<div class="dc-feat-browser">
  <ul>
    <?php
    foreach ($items['parent_collections'] as $item) : ?>
          // Todo: render parent nodes.
    <?php endforeach; ?>
  </ul>
</div>

