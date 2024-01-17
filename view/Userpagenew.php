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
                                <h1><a href="../controller/Controller.php" class="btn btn-primary"><i class="fa fa-undo"></i> Back</a></h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="uses.php"> Products</a></li>
                                    <li class="active">Create Product</li>
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
                            <div class="card-header bg-primary">
                                <strong class="card-title text-light">Create Product</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="../controller/Controller.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên Sản Phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_name" name="txt_name" placeholder=" " class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="id-input" class=" form-control-label">Mã Sản Phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="id" id="txt_id" name="txt_id" placeholder=" " class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="sl-input" class=" form-control-label">Số Lượng</label></div>
                                        <div class="col-12 col-md-9"><input type="soluong" id="txt_sl" name="txt_sl" placeholder=" " class="form-control"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Phân Loại</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="cbx_pl" id="select" class="form-control">
                                                <option value="Khác">Please select</option>
                                                <option value="Quần">Quần</option>
                                                <option value="Áo">Áo</option>
                                                <option value="Giày">Giày</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Size</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio1" class="form-check-label ">
                                                    <input type="radio" id="rdo_s" name="rdg_size" value="s" class="form-check-input">S
                                                </label>
                                                <label for="inline-radio2" class="form-check-label ">
                                                    <input type="radio" id="rdo_m" name="rdg_size" value="m" style="margin-left: 20px" class="form-check-input">M
                                                </label>
                                                <label for="inline-radio3" class="form-check-label ">
                                                    <input type="radio" id="rdo_l" name="rdg_size" value="l" style="margin-left: 20px" class="form-check-input">L
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Màu</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="checkbox">
                                                    <label for="checkbox1" class="form-check-label ">
                                                        <input type="checkbox" id="chk_while" name="chk_while" value="while" class="form-check-input">Trắng
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox2" class="form-check-label ">
                                                        <input type="checkbox" id="chk_black" name="chk_black" value="black" class="form-check-input">Đen
                                                    </label>
                                                </div>

                                                <div class="checkbox">
                                                    <label for="checkbox3" class="form-check-label ">
                                                        <input type="checkbox" id="chk_blu" name="chk_blu" value="blu" class="form-check-input">Lam
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Thêm Ảnh</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file_img" name="file_img" class="form-control-file"></div>
                                    </div>

                                    <div class="row form-group">
                                        <button type="submit" name="product_action" value="new" class="btn btn-primary " style="margin-left :10px">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" name="btn_reset" class="btn btn-danger " style="margin-left :10px">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">

                                </button>
                            </div>
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