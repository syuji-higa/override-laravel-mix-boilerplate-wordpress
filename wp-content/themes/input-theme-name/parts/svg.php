<svg>
  <?php
    if(isset($vars[1])) {
      echo '<title>'.$vars[1].'</title>';
    }
  ?>
  <use xlink:href="<?php echo resolve_asset_url('/svg/sprite.svg#sprite-'.$vars[0]); ?>"></use>
</svg>
