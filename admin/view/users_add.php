<div class="main-content">
    <h3 class="title-page">
        Thêm thành viên
    </h3>
    <div class="box500">
        <form class="addPro" action="index.php?pg=users_add" method="POST">
            <!-- form có hình ảnh  enctype="multipart/form-data" -->

            <div class="form-group">
                <label for="name">Tên đăng nhập:</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="form-group">
                <label for="name">Mật khẩu:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu">
            </div>
            <div class="form-group">
                <label for="name">Họ và tên:</label>
                <input type="text" class="form-control" name="ten" id="ten" placeholder="Nhập họ và tên">
            </div>
            <div class="form-group">
                <label for="name">Địa chỉ:</label>
                <input type="text" class="form-control" name="diachi" id="diachi" placeholder="Nhập địa chỉ">
            </div>
            
            <div class="form-group">
                <label for="name">Email:</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Nhập email">
            </div>
            <div class="form-group">
                <label for="name">Điện thoại:</label>
                <input type="text" class="form-control" name="dienthoai" id="dienthoai" placeholder="Nhập số điện thoại">
            </div>
            <div class="form-group">
                <button type="submit" name="btnadd" class="btn btn-primary">Thêm mới</button>
            </div>
            <?php
            if (isset($no)&&($no!="")) {
               echo $no;
            }
            ?>
        </form>
    </div>
</div>