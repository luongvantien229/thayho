<div class="main-content">
    <h3 class="title-page">
        Cập nhật danh mục
    </h3>
    <div class="box500">
        <form class="addPro" action="index.php?pg=caterogies_edit" method="POST">
            <!-- form có hình ảnh  enctype="multipart/form-data" -->

            <div class="form-group">
                <label for="name">Tên danh mục:</label>
                <input type="text" class="form-control" name="name" id="name" value="<?=$kq1[0]['name']?>">
               
            </div>
            <div class="form-group">
                <label for="home">home:</label>
                <input type="text" class="form-control" name="home" id="home" value="<?=$kq1[0]['home']?>">
            </div>
            <div class="form-group">
                <label for="stt">stt:</label>
                <input type="text" class="form-control" name="stt" id="stt" value="<?=$kq1[0]['stt']?>">
            </div>
            <div class="form-group">
            <input type="hidden" name="id" id="id" value="<?=$kq1[0]['id']?>">
                <button type="submit" name="btnadd" class="btn btn-primary">Cập nhật</button>
            </div>
            <?php
            if (isset($no)&&($no!="")) {
               echo $no;
            }
            ?>
        </form>
    </div>
</div>