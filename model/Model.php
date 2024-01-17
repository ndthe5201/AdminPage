<?php
include_once '../utils/MySQL.php';

class Model{
   
    private $tensp;
    private $masp;
    private $sl;
    private $pl;
    private $size;
    private $color;
    private $img;

    public function __construct( $utensp, $umasp, $usl, $upl, $usize, $ucolor, $uimg ){
       
        $this->tensp = $utensp;
        $this->masp = $umasp;
        $this->sl = $usl;
        $this->pl = $upl;
        $this->size = $usize;
        $this-> color = $ucolor;
        $this-> img = $uimg;
    }

   

    public function get_tensp(){
        return $this->tensp;
    }

    public function get_masp(){
        return $this->masp;
    }

    public function get_sl(){
        return $this->sl;
    }

    public function get_pl(){
        return $this->pl;
    }

    public function get_size(){
        return $this->size;
    }

    public function get_color(){
        return $this->color;
    }

    public function get_img(){
        return $this->img;
    }

    

    public function set_tensp($tensp): void{
        $this->tensp=$tensp;
    }

    public function set_masp($masp): void{
        $this->masp=$masp;
    }

    public function set_sl($sl): void{
        $this->sl=$sl;
    }

    public function set_pl($pl): void{
        $this->pl=$pl;
    }

    public function set_size($size): void{
        $this->size=$size;
    }

    public function set_color($color): void{
        $this->color=$color;
    }

    public function set_img($img): void{
        $this->img=$img;
    }

    public function insertProduct(){
        $dbCon = new MySQL ();
        // *INSERT DATA//
        $query = "INSERT INTO adminpage.product(tensp, masp, soluong, phanloai, Size, Mau, Anh) VALUE (:tensp, :masp, :soluong, :phanloai, :Size, :Mau, :Anh)";
        $param = array (":tensp"=>$this->get_tensp(), ":masp"=>$this->get_masp(), ":soluong"=>$this->get_sl(), ":phanloai"=>$this->get_pl(), ":Size"=>$this->get_size(), ":Mau"=>$this->get_color(), ":Anh"=>$this->get_img());
        $dbCon->insertData($query,$param);
        $dbCon->disconnectDB();
    }

    public function getProduct(){
        $dbCon = new MySQL ();
        $query = "Select tensp, masp, soluong, phanloai, Size, Mau, Anh from adminpage.product where masp=:masp";
        $param = array (":masp"=>$this->get_masp());
        $product = $dbCon->getData($query, $param);
        $dbCon->disconnectDB();
        return $product;
    }

    public function getAllProduct(){
        $dbCon = new MySQL ();
        $query = "Select tensp, masp, soluong, phanloai, Size, Mau, Anh from adminpage.product";
        $data = $dbCon->getAllData($query);
        $dbCon->disconnectDB();
        return $data;
    }

    public function updateProduct(){
        $dbCon = new MySQL ();
        $query = "UPDATE adminpage.product set tensp=:tensp, masp=:masp, soluong=:soluong, phanloai=:phanloai, Size=:Size, Mau=:Mau, Anh=:Anh  where masp=:masp";
        $param = array(":tensp"=> $this->get_tensp(), ":soluong"=> $this->get_sl(), ":phanloai"=>$this->get_pl(), ":Size"=>$this->get_size(), ":Mau"=>$this->get_color(), ":Anh"=>$this->get_img(),":masp"=>$this->get_masp());
        $dbCon->updateData($query, $param);
        $dbCon->disconnectDB();

    }

    public function deleteProduct(){
        $dbCon = new MySQL ();
        $query = "DELETE from adminpage.product where masp=:masp";
        $param = array(":masp"=> $this->get_masp());
        $dbCon->deleteData($query, $param);
        $dbCon->disconnectDB();

    }
}