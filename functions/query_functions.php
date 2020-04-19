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

function find_by_column($table, $column, $value)
{
  global $db;

  $sql = "SELECT * FROM " . $table . " ";
  $sql .= "WHERE " . $column . "='" . $value . "'";
  $sql .= "ORDER BY " . $column . " ASC";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}
