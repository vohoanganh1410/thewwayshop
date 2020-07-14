<?php
require_once 'models/Product.php';
class HomeController
{
  public function index() {

      //đổ dữ liệu product ra trang chủ
    $product_model = new Product();
    $products = $product_model->getAll();

    require_once 'views/homes/index.php';
  }
  public function timkiemaokhoac(){
      $product_model = new Product();
      $products = $product_model->getSP();

      require_once 'views/homes/index.php';

  }
    public function timkiemaosomi(){
        $product_model = new Product();
        $products = $product_model->getSPSM();

        require_once 'views/homes/index.php';

    }
    public function timkiemquanjean(){
        $product_model = new Product();
        $products = $product_model->getSPQ();

        require_once 'views/homes/index.php';

    }
    public function giabe500(){
        $product_model = new Product();
        $products = $product_model->giabe500();

        require_once 'views/homes/index.php';

    }
    public function giatu500den1tr(){
        $product_model = new Product();
        $products = $product_model->giatu500den1tr();

        require_once 'views/homes/index.php';

    }
    public function giatren1trieu(){
        $product_model = new Product();
        $products = $product_model->giatren1trieu();

        require_once 'views/homes/index.php';

    }
    public function timkiem(){
        $product_model = new Product();
        $products = $product_model->timkiem();

        require_once 'views/homes/index.php';

    }
}