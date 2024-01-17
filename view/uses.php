<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>

    <?php include "layouts/headerpage.php" ?>

</head>

<body>
    <!-- Left Panel -->

    <?php include "layouts/menupage.php" ?>

    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->

        <?php include "layouts/toppage.php" ?>

        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1><a href="../view/Userpagenew.php" class="btn btn-primary"><i class="fa fa-plus-square"></i> Create Product</a></h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="uses.php">Products</a></li>
                                    <li class="active">Product List</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Product Table</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">STT</th>
                                            <th class="avatar">Ảnh</th>
                                            <th>ID</th>
                                            <th>Tên Sp</th>
                                            <th>Số Lượng</th>
                                            <th>Phân loại</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        for ($i = 0; $i < count($data); $i++) {
                                            
                                            echo ' <tr>';
                                            echo '<td class="serial">' . ($i + 1) . '</td>';
                                            echo '<td class="avatar">';
                                            echo '   <div class="round-img">';
                                            echo '       <a href="images/AQ1.png"><img class="rounded-circle" src="images/AQ1.png" alt=""></a>';
                                            echo '   </div>';
                                            echo '</td>';
                                            echo '<td> #<span class="name">' . $data[$i]["masp"] . '</span>  </td>';
                                            echo '<td> <span class="name">' . $data[$i]["tensp"] . '</span> </td>';
                                            echo '<td> <span class="product">' . $data[$i]["soluong"] . '</span> </td>';
                                            echo '<td> <span class="product">' . $data[$i]["phanloai"] . ' </span> </td>';
                                            echo '<td>';
                                            echo '   <a href="../controller/Controller.php?action=edit&id=' . $data[$i]["masp"] . '" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>';
                                            echo '</td>';
                                            echo '<td>';
                                            echo '   <a href="../controller/Controller.php?action=delete&id=' . $data[$i]["masp"] . '" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>';
                                            echo '</td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="clearfix"></div>

        <?php include "layouts/footerpage.php" ?>


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>