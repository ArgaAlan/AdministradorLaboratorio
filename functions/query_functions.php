<?php

function find_all_materials()
{
  global $db;

  $sql = "SELECT * FROM material ";
  $sql .= "ORDER BY nombre ASC";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}
