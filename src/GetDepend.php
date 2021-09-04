<?php
/*
HPB - Created by FoxWorn3365
(C) 2021 - 2022 Federico Cosma
*/

namespace hpb\Dev;

class Dep{
  
  public function get($pkg) {
    $h = shell_exec("dpkg -l | grep $pkg");
    if (empty($h)) {
      return false;
    } else {
      return true;
    }
  }
}













