<picture class="js-lazyloader">
  <source srcset="<?php echo resolve_asset_url('/images/common/placeholder.png'); ?>" data-src="<?php echo resolve_asset_url('/images/'.explode('.', $vars[0])[0].'-pc.'.explode('.', $vars[0])[1]); ?>" media="(min-width: 768px)">
  <source srcset="<?php echo resolve_asset_url('/images/common/placeholder.png'); ?>" data-src="<?php echo resolve_asset_url('/images/'.explode('.', $vars[0])[0].'-sp.'.explode('.', $vars[0])[1]); ?>" media="(max-width: 767.9px)">
  <img src="<?php echo resolve_asset_url('/images/common/placeholder.png'); ?>" data-src="<?php echo resolve_asset_url('/images/'.explode('.', $vars[0])[0].'-pc.'.explode('.', $vars[0])[1]); ?>" alt="<?php echo $vars[1] ?>">
</picture>
<noscript>
  <img src="<?php echo resolve_asset_url('/images/'.explode('.', $vars[0])[0].'-pc.'.explode('.', $vars[0])[1]); ?>" alt="<?php echo $vars[1] ?>">
</noscript>
