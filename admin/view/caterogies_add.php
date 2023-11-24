<div class="main-content">
    <h3 class="title-page">
        Thêm danh mục
    </h3>
    <div class="box500">
        <form class="addPro" action="index.php?pg=caterogies_add" method="POST">
            <!-- form có hình ảnh  enctype="multipart/form-data" -->

            <div class="form-group">
                <label for="name">Tên danh mục:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm">
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