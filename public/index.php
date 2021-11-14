<?php
session_start();

require "../app/init.php";

  try { $app = new App(); }
catch (\ErrorException $e) {
      echo $e->getMessage();
}
