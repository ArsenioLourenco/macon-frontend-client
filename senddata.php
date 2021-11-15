<?php
  print_r($_POST ? json_encode($_POST) : json_encode($_GET));
  var_dump($_GET);