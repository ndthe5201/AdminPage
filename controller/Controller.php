<?php
include_once '../model/Model.php';

class ProductController
{

    public function __construct($product_action)
    {

        switch ($product_action) {
                //*Them Product//
            case "new":
                $txt_name = $_POST["txt_name"];
                $txt_id = $_POST["txt_id"];
                $txt_sl = $_POST["txt_sl"];
                $cbx_pl = $_POST["cbx_pl"];
                $rdg_size = $_POST["rdg_size"];
                $chk_black = isset($_POST["chk_black"]) ? $_POST["chk_black"] : "";
                $chk_while = isset($_POST["chk_while"]) ? $_POST["chk_while"] : "";
                $chk_blu = isset($_POST["chk_blu"]) ? $_POST["chk_blu"] : "";
                $file_img = $_FILES["file_img"]["name"];

                $strMau = $chk_black . "," . $chk_while . "," . $chk_blu;
                $pro = new Model($txt_name, $txt_id, $txt_sl, $cbx_pl, $rdg_size, $strMau, 0, $file_img, 0);
                $this->insertProduct($pro);
                header("Location: ../controller/Controller.php");
                break;

                //*login//    
            case "login":
                $login_email = $_POST["login_email"];
                $login_password = $_POST["login_password"];
                if ($login_email == "ndthe5201@gmail.com" && $login_password == "123") {
                    session_start();
                    $_SESSION["email"] = $login_email;
                    $_SESSION["is_login"] = true;
                    header("Location: ../controller/Controller.php");
                } else {
                    echo "Thông tin đăng nhập không đúng!";
                }
                break;

            case "edit":
                $id = $_GET["id"];
                $pro = new Model("", $id, "", "", "", "", "");
                $data = $this->getProduct($pro);
                include_once '../view/edit.php';
                break;

            case "delete":
                $id = $_GET["id"];
                $pro = new Model("", $id, "", "", "", "", "");
                $data = $this->deleteProduct($pro);
                $this->productPage();
                break;

            case "update":
                $txt_name = $_POST["txt_name"];
                $txt_id = $_POST["txt_id"];
                $txt_sl = $_POST["txt_sl"];
                $cbx_pl = $_POST["cbx_pl"];
                $rdg_size = $_POST["rdg_size"];
                $chk_black = isset($_POST["chk_black"]) ? $_POST["chk_black"] : "";
                $chk_while = isset($_POST["chk_while"]) ? $_POST["chk_while"] : "";
                $chk_blu = isset($_POST["chk_blu"]) ? $_POST["chk_blu"] : "";
                $file_img = $_FILES["file_img"]["name"];

                $strMau = $chk_black . "," . $chk_while . "," . $chk_blu;
                $pro = new Model($txt_name, $txt_id, $txt_sl, $cbx_pl, $rdg_size, $strMau, 0, $file_img);
                $this->updateProduct($pro);
                header("Location: ../controller/Controller.php");
                break;
            default:
                $this->productPage();

                break;
        }
    }

    public function insertProduct($product)
    {
        $product->insertProduct();
    }

    public function updateProduct($product)
    {
        $product->updateProduct();
    }

    public function deleteProduct($product)
    {
        $product->deleteProduct();
    }

    public function getProduct($product)
    {
        return $product->getProduct();
    }

    public function getAllProduct($product)
    {
        return $product->getAllProduct();
    }

    public function productPage()
    {
        $pro = new Model("", "", "", "", "", "", "");
        $data = $this->getAllProduct($pro);
        include_once '../view/uses.php';
    }
}

$product_action = "";
if (count($_POST) > 0) {
    $product_action = $_POST["product_action"];
} else if (count($_GET) > 0) {
    $product_action = $_GET["action"];
}

$productController = new ProductController($product_action);
