<?php
  //  Database Config
  const DB_HOST = 'localhost';
  const DB_USER = 'root';
  const DB_PASS = '';
  const DB_NAME = 'food_nation';
  //  Database Connection
  
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);