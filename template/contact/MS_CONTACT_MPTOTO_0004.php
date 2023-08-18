<?php
    $rows = $action->getList("trademark","","","id","asc",$trang, 20, "lien-he");
 ?>
<div class="gb-gioithieu-company-mptoto">
    <h2>Đăng ký trở thành thành viên của Minh Huy để nhận được những ưu đãi chưa từng có</h2>
   <!--  <p>
        Mọi thông tin chi tiết vui lòng liên hệ theo địa chỉ bên dưới hoặc điền vào mẫu bên cạnh để gửi ý kiến thắc mắc và đóng góp cho chúng tôi.
    </p> -->
    <div class="gb-support-intro">
        <ul>
            <?php

                foreach ($rows['data'] as $item ) { ?>

            <li>
                <div class="icons">
                    <i class="fa fa-check" aria-hidden="true"></i>
                </div>
                <p><?=$item['name']?></p>
            </li>

            <?php  }   ?>

        </ul>
    </div>

</div>
