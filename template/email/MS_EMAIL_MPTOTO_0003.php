
<?php 
   function newsletter () {
    global $conn_vn;
     if (isset($_POST['newsletter'])) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $sql = "INSERT into lien_he (email, name, phone) values ('$email','$name','$phone')";
        $result = mysqli_query($conn_vn, $sql);
        if ($result) {
            echo '<script>alert(\'Bạn đã đăng ký thành công\');</script>';
        } else {
            echo '<script>alert(\'Có lỗi mời thử lại.\');</script>';
        }
     }
   }

   newsletter();
?>
<div class="gb-form-lienhe">
    <p style="font-weight: bold;"><?= $rowConfig['web_name'] ?></p>
    <p>Địa chỉ: <?= $rowConfig['content_home1'] ?></p>
    <p>Email: <?= $rowConfig['content_home2'] ?></p>
    <p>Số điện thoại: <?= $rowConfig['content_home3'] ?></p>
    <h3>Đăng ký ngay</h3>
    <form action="" method="POST">
        <div class="form-group">
            <label>Họ và tên</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Điện thoại: </label>
            <input type="tel" name="phone" class="form-control">
        </div>
        <!-- <div class="form-group">
            <label>Nội dung</label>
            <textarea class="input-xlarge form-control" name="message" rows="6"></textarea>
        </div> -->

        <button class="btn btn-gui"  type="submit" name="newsletter" value="Submit">Đăng ký</button>
    </form>
</div>