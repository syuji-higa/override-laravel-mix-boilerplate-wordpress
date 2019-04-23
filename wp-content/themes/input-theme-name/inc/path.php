<?php

function resolve_asset_url($subpath = '') {
  return esc_url(rtrim(get_template_directory_uri(), '/') . mix('/assets/'.ltrim($subpath, '/')));
}
