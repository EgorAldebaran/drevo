<?php

include('model.php');


class Controller
  {
      public $_for_total_open = null;
      public $_for_total_close = null;

      public function __construct() {
          $this-> model = new Model;
          $this-> model -> total();

      }

      public function get_total() {
          $this-> _for_total_open = include_once('view_one.php');
          echo $this-> model -> _total;
          $this-> _for_total_close = include_once('view_two.php');

      }
  }
