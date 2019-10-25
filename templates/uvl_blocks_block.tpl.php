<?php
/**
 * @file
 * Theme implementation to display a block
 **/

$items = $variables['items'];

if (isset($items['button-more']) && isset($items['feat-browser'])): ?>
<div class="dc-feat-browser">
  <div class="dc-feat-more">
    <a href="<?php print $items['button-more']['link'] ?>">
      <span>
          <i class="fa fa-chevron-circle-right"></i>
        <?php print t($items['button-more']['text']) ?>
      </span>
    </a>
  </div>
  <ul>
    <?php

    foreach ($items['feat-browser'] as $item) : ?>
      <?php print render($item['image']); ?>
      <?php print render($item['title']); ?>
    <?php endforeach; ?>
  </ul>
</div>
<?php
endif;
?>
