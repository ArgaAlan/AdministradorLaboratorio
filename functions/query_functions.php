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

function find_all_pages()
{
  global $db;

  $sql = "SELECT * FROM pages ";
  $sql .= "ORDER BY position ASC";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}
