<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản lý đơn hàng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div class="container" style = "height: auto">
        <!--header-->
        <header class="row">
            <div class= "container-fluid">
                <div class= "row bg-dark">
                    <div class ="col-md-2">
                        <a clas="navbar-branch" href="">
                            <img src="./images/logo(1).png" height="50">
                        </a>

                    </div>
                    <div class ="navbar bg-dark col-md-6">
                        <h4 class="text-white">Quản lý đơn hàng</h4>
                    </div>
                    <div class ="navbar bg-dark col-md-3 justify-content-end ">
                        <div class="d-grid ">
                            <!-<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">


                            </button>->
                            <a class="btn btn-warning" href="dangxuat.php" role="button">Đăng Xuất</a>

                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="login-right col-sm-12 ">
                                            <div class="form-center">
                                                <h1>Đăng nhập để tiếp tục </h1>
                                                <br>
                                                <div class="login-input">
                                                    <div class="form-group">
                                                        <input type="text"
                                                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="Tài khoản">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" name="" id="" placeholder="Mật khẩu">
                                                    </div>
                                                    <div class="login-remember">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                                                                <span>Nhớ mật khẩu &emsp;</span>
                                                                <a href="" class="login-forget" >Quên mật khẩu?</a>
                                                            </label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary"></button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--kết thúc header-->

            <!--thanh điều hướng-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light row" style="background-color: #e3f2fd;">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="dropdown nav-item" role="presentation">
                        <button class="btn btn-light dropdown-"  type="button" id="dropdownMenu2" >
                            <p class="text-info"> <i class="fas fa-bars"></i> Danh mục</p>
                        </button>
                        <div class="dropdown-content" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item" href="http://localhost/QLDH/Quan-Ly-Don-Hang/QL.html">Danh mục sản phẩm</a>
                            <a class="dropdown-item" href="#">Danh mục khách hàng</a>
                            <a class="dropdown-item" href="#">Danh mục người dùng</a>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation">
                       <a class="nav-link" href="QuanLyDonHang.php"><i class="fas fa-home"></i> Trang chủ</a>
                   </li>
                   <li class="nav-item" role="presentation">
                    <a class="nav-link " href="xem.php"><i class="fas fa-shopping-basket"></i> Quản lý đơn hàng</a>
                </li>
                <li class="nav-item" role="presentation">

                    <a class="nav-link" id="pills-thongke-tab" data-toggle="pill" href="#pills-thongke" role="tab" aria-controls="pills-thongke" aria-selected="false"><i class="far fa-chart-bar"></i> Thống kê</a>

                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-doimk-tab" data-toggle="pill" href="#pills-doimk" role="tab" aria-controls="pills-doimk" aria-selected="false"><i class="fas fa-lock"></i> Đổi mật khẩu</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link " id="pills-trangcanhan-tab" data-toggle="pill" href="#pills-trangcanhan" role="tab" aria-controls="pills-trangcanhan" aria-selected="true"><i class="fas fa-user"></i> Tài khoản</a>
                </li>

            </ul>
        </nav>
        <!--kết thúc thanh điều hướng-->

        <!--nội dung tabs-->
        <div class="container-fluid">
            <div class="tab-pane fade show active" id="pills-quanLy" role="tabpanel" aria-labelledby="pills-quanLy-tab">

<a class="btn btn-primary " style="float:right;" href="themsp.php" role="button">Thêm sản phẩm</a>
                <table class="table table-bordered" border="1">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Tên sản phâm</th>
                            <th>Giá(VNĐ/SP)</th>
                            <th>Số lượng</th>
                            <th>Thông tin sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Ngày nhập</th>
                            <th>Sửa sản phẩm</th>
                            <th>Xóa sản phẩm</th>

                        </tr>
                    </thead>

                    <?php
                    require 'connect2.php';
                    $query=mysqli_query($conn,"select * from `product`");
                    while($row=mysqli_fetch_array($query)){
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['idsp']; ?></td>
                                <td><?php echo $row['tensp']; ?></td>
                                <td><?php echo $row['gia']; ?></td>
                                <td><?php echo $row['soLuongSP']; ?></td>
                                <td><?php echo $row['thongTin']; ?></td>
                                <td><img height="100" width="auto" src="images/<?php echo $row['photo']; ?>"></td>
                                <td><?php echo $row['ngayNhap']; ?></td>
                                <td><a href="suasp.php?idsp=<?php echo $row['idsp']; ?>">Sửa</a></td>
                                <td><a href="xoasp.php?idsp=<?php echo $row['idsp']; ?>">Xóa</a></td></td>
                            </tr>
                        </tbody>
                        <?php
                    }
                    ?>
                </table>

            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade " id="pills-trangchu" role="tabpanel" aria-labelledby="pills-trangchu-tab">
                </div>

                <div class="tab-pane fade" id="pills-thongke" role="tabpanel" aria-labelledby="pills-thongke-tab">
                    <div class="container">
                        <canvas id="myChart"></canvas>
                    </div>

                </div>
                <div class="tab-pane fade" id="pills-doimk" role="tabpanel" aria-labelledby="pills-doimk-tab">...</div>
            </div>
        </div>
        <!--kết thúc nội dung tabs-->

        <!--aside và bài viết-->
        <div class = "row">
            <article class="col-sm-9">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15020.859179934274!2d105.8407837!3d19.746026699999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1635408376529!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </article>

            <aside class="col-sm-3">
                <div class="panel panel-default">
                    <br>
                    <nav class="navbar navbar-light bg-light">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="tìm kiếm" placeholder="Tìm kiếm" aria-label="Tìm kiếm">
                        </form>
                    </nav>
                    <div class="panel-heading">
                        <span class = "glyphicon glyphicon-th-list"></span>
                        <strong>Sản phẩm bán chạy</strong>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item">Điện thoại di động</a>
                        <a href="#" class="list-group-item">Máy tính xách tay</a>
                        <a href="#" class="list-group-item">Máy tính để bàn</a>
                        <a href="#" class="list-group-item">Quạt máy</a>
                        <a href="#" class="list-group-item">Tivi</a>
                        <a href="#" class="list-group-item">Tủ lạnh</a>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class = "glyphicon glyphicon-th-list"></span>
                        <strong>Sản phẩm được quan tâm</strong>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item">Điện thoại di động</a>
                        <a href="#" class="list-group-item">Máy tính xách tay</a>
                        <a href="#" class="list-group-item">Máy tính để bàn</a>
                        <a href="#" class="list-group-item">Quạt máy</a>
                        <a href="#" class="list-group-item">Tivi</a>
                        <a href="#" class="list-group-item">Tủ lạnh</a>
                    </div>
                </div>
            </aside>
        </div>
        <!--kết thúc aside và bài viết-->

        <!--footer-->
        <footer class="panel panel-default bg-dark" style = "height: 60px">

            <div class="container-fluid">
                <div class="copyright">
                    <br>
                    <p class="web text-white"><label>Email:</label><span class="ft-content web-site"><a href="mailto:support@soracart.com"> minhtuan070220@gmail.com</a></span> 
                        <span style="float: right">
                            <a style="color:#fff" href="http://localhost/QLDH/gioithieu.html">Giới thiệu</a> - 
                            <a style="color:#fff" href="/dieu-khoan/">Điều khoản</a> - 
                            <a style="color:#fff" href="/lien-he/">Liên hệ</a> - 
                            <a style="color:#fff" href="/bao-mat/">Bảo mật</a>
                        </span>
                    </p>

                </div>
            </div>
        </div>

    </footer>
    <!--kết thúc footer-->
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>

