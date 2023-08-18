<?php 
    function rating1 ($id) {
        global $conn_vn;
        $sql = "SELECT * FROM rating Where product_id = $id";
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
                $star_1 += $row['star_1'];
                $star_2 += $row['star_2'];
                $star_3 += $row['star_3'];
                $star_4 += $row['star_4'];
                $star_5 += $row['star_5'];
            }
            $tong = (($star_1*1) + ($star_2*2) + ($star_3*3) + ($star_4*4) + ($star_5*5)) / $num;
            $return = array(
                    'tong' => round($tong),
                    'count' => $num
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
    $tong_rating1 = rating1($row['product_id']);
?>
<p class="uni-box-vote-cms">
    <span><i class="fa <?= ($tong_rating1['tong']>=1) ? 'fa-star' : 'fa-star-o' ?>" aria-hidden="true"></i></span>
    <span><i class="fa <?= ($tong_rating1['tong']>=2) ? 'fa-star' : 'fa-star-o' ?>" aria-hidden="true"></i></span>
    <span><i class="fa <?= ($tong_rating1['tong']>=3) ? 'fa-star' : 'fa-star-o' ?>" aria-hidden="true"></i></span>
    <span><i class="fa <?= ($tong_rating1['tong']>=4) ? 'fa-star' : 'fa-star-o' ?>" aria-hidden="true"></i></span>
    <span><i class="fa <?= ($tong_rating1['tong']>=5) ? 'fa-star' : 'fa-star-o' ?>" aria-hidden="true"></i></span>
    <span>(<?= $tong_rating1['count'] ?> customer view)</span>
</p>