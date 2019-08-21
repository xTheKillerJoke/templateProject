<?php

class ProductsController
{
  /* Show Categories */
  static public function ctrShowCategories($item, $val)
  {
    $table = "categories";

    $response = ProductsModel::mdlShowCategories($table, $item, $val);

    return $response;
  }

  /* Show Sub-Categories */
  static public function ctrShowSubCategories($item, $val)
  {
    $table = "subcategories";

    $response = ProductsModel::mdlShowSubCategories($table, $item, $val);

    return $response;
  }

  /* Show Products */
  static public function ctrShowProducts($order)
  {
    $table = "aliproducts";

    $response = ProductsModel::mdlShowProducts($table, $order);

    return $response;
  }

  /* Show Product Detail */
  static public function ctrShowProductDetail()
  {
    $table = "aliproducts";

    $response = ProductsModel::mdlShowProductDetail($table);

    return $response;
  }
}
