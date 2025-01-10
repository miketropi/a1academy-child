<?php 
$items = get_field('items');
if(!$items || count($items) == 0) return;
?>
<?php if ( ! $is_preview ) { ?>
  <div <?php echo wp_kses_data( get_block_wrapper_attributes() ); ?>>
<?php } ?>
  <div class="a1a-testimonial-carousel swiper">
    <div class="swiper-wrapper">
    <?php foreach($items as $index => $item) : ?>
      <div class="swiper-slide a1a-testimonial-carousel__item">

        <div class="__message">
          <?php echo wpautop($item['message']); ?>
        </div>

        <div class="__meta">

          <div class="__meta-col1">
            <div class="__meta__avatar"><img src="<?php echo $item['avatar'] ?>" alt="avatar" /></div>  
          </div>

          <div class="__meta-col2">
            <div class="__meta__name"><?php echo $item['name'] ?></div>
            <div class="__meta__position"><?php echo $item['position'] ?></div>  
          </div>

        </div>

      </div> <!-- .a1a-testimonial-carousel__item -->
    <?php endforeach; ?>
    </div> <!-- .swiper-wrapper -->

    <div class="__nav">
      <div class="swiper-button-prev">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M19 12H5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M12 5L5 12L12 19" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="current-and-total"><span class="__current">1</span>/<span class="__total"><?php echo count($items); ?></span></div>
      <div class="swiper-button-next">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 12H19" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M12 5L19 12L12 19" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>

  </div>
<?php if ( ! $is_preview ) { ?>
  </div>
<?php } ?>
