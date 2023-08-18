<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
    .heading {
        font-size: 25px;
        margin-right: 25px;
    }
    .danh-gia-san-pham .fa {
        font-size: 25px;
    }

    .checked {
        color: orange;
    }
</style>
<?php
    function rating ($id, $ip) {
        global $conn_vn;
        $sql = "SELECT * FROM rating Where product_id = $id";
        $result = mysqli_query($conn_vn, $sql);
        $count = mysqli_num_rows($result);

        $sql = "SELECT * FROM rating Where product_id = $id And address_ip = '$ip'";
        $result = mysqli_query($conn_vn, $sql);
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $tong = 0;
            $star_1 = 0;
            $star_2 = 0;
            $star_3 = 0;
            $star_4 = 0;
            $star_5 = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $star_1 += $row['star_1'];//echo $star_1;
                $star_2 += $row['star_2'];
                $star_3 += $row['star_3'];
                $star_4 += $row['star_4'];
                $star_5 += $row['star_5'];
            }
            $tong = (($star_1*1) + ($star_2*2) + ($star_3*3) + ($star_4*4) + ($star_5*5)) / $num;
            $return = array(
                    'tong' => round($tong),
                    'count' => $count
                );
            return $return;
        } else {
            $return = array(
                    'tong' => 0,
                    'count' => 0
                );
            return $return;
        }
    }
    $tong_rating = rating($row['product_id'], $_SERVER['REMOTE_ADDR']);//var_dump($tong_rating);
?>
<div class="danh-gia-san-pham">
    <span class="heading">User Rating</span>
    <span class="fa fa-star <?= ($tong_rating['tong']>=1) ? 'checked' : '' ?>" id="star_1" onclick="rating(this.id, '<?= $row['product_id'] ?>', '<?= $_SERVER['REMOTE_ADDR']; ?>')"></span>
    <span class="fa fa-star <?= ($tong_rating['tong']>=2) ? 'checked' : '' ?>" id="star_2" onclick="rating(this.id, '<?= $row['product_id'] ?>', '<?= $_SERVER['REMOTE_ADDR']; ?>')"></span>
    <span class="fa fa-star <?= ($tong_rating['tong']>=3) ? 'checked' : '' ?>" id="star_3" onclick="rating(this.id, '<?= $row['product_id'] ?>', '<?= $_SERVER['REMOTE_ADDR']; ?>')"></span>
    <span class="fa fa-star <?= ($tong_rating['tong']>=4) ? 'checked' : '' ?>" id="star_4" onclick="rating(this.id, '<?= $row['product_id'] ?>', '<?= $_SERVER['REMOTE_ADDR']; ?>')"></span>
    <span class="fa fa-star <?= ($tong_rating['tong']>=5) ? 'checked' : '' ?>" id="star_5" onclick="rating(this.id, '<?= $row['product_id'] ?>', '<?= $_SERVER['REMOTE_ADDR']; ?>')"></span>
    <p><?= $tong_rating['count'] ?> reviews.</p>
    <hr style="border:3px solid #f1f1f1">
</div>

<script type="text/javascript">
    function rating (star, id, ip) {
        // alert(ip);
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             var bien = this.responseText;
             // alert(bien);
                var x = document.getElementsByClassName("checked");
                if (x[0]) {
                    // alert('has');
                    if (star == 'star_1') {
                        var id1 = document.getElementById("star_1");
                        id1.classList.add("checked");
                        var id2 = document.getElementById("star_2");
                        id2.classList.remove("checked");
                        var id3 = document.getElementById("star_3");
                        id3.classList.remove("checked");
                        var id4 = document.getElementById("star_4");
                        id4.classList.remove("checked");
                        var id5 = document.getElementById("star_5");
                        id5.classList.remove("checked");
                     }
                     if (star == 'star_2') {
                        var id1 = document.getElementById("star_1");
                        id1.classList.add("checked");
                        var id2 = document.getElementById("star_2");
                        id2.classList.add("checked");
                        var id3 = document.getElementById("star_3");
                        id3.classList.remove("checked");
                        var id4 = document.getElementById("star_4");
                        id4.classList.remove("checked");
                        var id5 = document.getElementById("star_5");
                        id5.classList.remove("checked");
                     }
                     if (star == 'star_3') {
                        var id1 = document.getElementById("star_1");
                        id1.classList.add("checked");
                        var id2 = document.getElementById("star_2");
                        id2.classList.add("checked");
                        var id3 = document.getElementById("star_3");
                        id3.classList.add("checked");
                        var id4 = document.getElementById("star_4");
                        id4.classList.remove("checked");
                        var id5 = document.getElementById("star_5");
                        id5.classList.remove("checked");
                     }
                     if (star == 'star_4') {
                        var id1 = document.getElementById("star_1");
                        id1.classList.add("checked");
                        var id2 = document.getElementById("star_2");
                        id2.classList.add("checked");
                        var id3 = document.getElementById("star_3");
                        id3.classList.add("checked");
                        var id4 = document.getElementById("star_4");
                        id4.classList.add("checked");
                        var id5 = document.getElementById("star_5");
                        id5.classList.remove("checked");
                     }
                     if (star == 'star_5') {
                        var id1 = document.getElementById("star_1");
                        id1.classList.add("checked");
                        var id2 = document.getElementById("star_2");
                        id2.classList.add("checked");
                        var id3 = document.getElementById("star_3");
                        id3.classList.add("checked");
                        var id4 = document.getElementById("star_4");
                        id4.classList.add("checked");
                        var id5 = document.getElementById("star_5");
                        id5.classList.add("checked");
                     }
                } else {
                    // alert('no has');
                    if (star == 'star_1') {
                        var id1 = document.getElementById("star_1");
                        id1.classList.add("checked");
                     }
                     if (star == 'star_2') {
                        var id1 = document.getElementById("star_1");
                        id1.classList.add("checked");
                        var id2 = document.getElementById("star_2");
                        id2.classList.add("checked");
                     }
                     if (star == 'star_3') {
                        var id1 = document.getElementById("star_1");
                        id1.classList.add("checked");
                        var id2 = document.getElementById("star_2");
                        id2.classList.add("checked");
                        var id3 = document.getElementById("star_3");
                        id3.classList.add("checked");
                     }
                     if (star == 'star_4') {
                        var id1 = document.getElementById("star_1");
                        id1.classList.add("checked");
                        var id2 = document.getElementById("star_2");
                        id2.classList.add("checked");
                        var id3 = document.getElementById("star_3");
                        id3.classList.add("checked");
                        var id4 = document.getElementById("star_4");
                        id4.classList.add("checked");
                     }
                     if (star == 'star_5') {
                        var id1 = document.getElementById("star_1");
                        id1.classList.add("checked");
                        var id2 = document.getElementById("star_2");
                        id2.classList.add("checked");
                        var id3 = document.getElementById("star_3");
                        id3.classList.add("checked");
                        var id4 = document.getElementById("star_4");
                        id4.classList.add("checked");
                        var id5 = document.getElementById("star_5");
                        id5.classList.add("checked");
                     }
                }
            }
          };
          xhttp.open("GET", "/functions/ajax/rating.php?star=" + star + "&id=" + id + "&ip=" + ip, true);
          xhttp.send();
    }
</script>