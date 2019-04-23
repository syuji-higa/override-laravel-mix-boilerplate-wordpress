<?php

function import_template($tpl, $vars = array()) {
  $tpl = ltrim($tpl, '/').'.php';
  $path = locate_template(array($tpl));
  if (empty($path)) {
      throw new LogicException("Cannot locate the template '$tpl'.");
  }
  extract($vars);
  include $path;
}

function import_part($tpl, $vars = array()) {
  import_template('parts/'.ltrim($tpl, '/'), $vars);
}
