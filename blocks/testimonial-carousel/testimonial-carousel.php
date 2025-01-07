
<?php if ( ! $is_preview ) { ?>
  <div <?php echo wp_kses_data( get_block_wrapper_attributes() ); ?>>
<?php } ?>
  <div>
    <?php print_r(get_field('items')); ?>
  </div>
<?php if ( ! $is_preview ) { ?>
  </div>
<?php } ?>
