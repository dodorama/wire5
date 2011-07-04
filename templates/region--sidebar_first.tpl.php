<?php
/**
 * @file
 * Default theme implementation to display a region.
 */
?>

<?php if ($content): ?>
  <aside id="<?php print $region; ?>" class="<?php print $classes; ?>">
    <?php print $content; ?>
  </aside>
<?php endif; ?>

