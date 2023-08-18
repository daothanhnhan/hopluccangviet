<?php
	$limit = 10;
	function search ($lang, $trang, $limit) {
		if (isset($_POST['q'])) {
			$q = $_POST['q'];
			$q = trim($q);
	        $q = vi_en1($q);	        
		} else {
			$q = $_GET['search'];
        	// $q = str_replace('-', ' ', $q);
		}
        $productcat_id = $_SESSION['search_productcat_id'];

		$start = $trang * $limit;
		global $conn_vn;
		$sql = "SELECT * FROM product_languages INNER JOIN product ON product_languages.product_id = product.product_id WHERE product_languages.friendly_url like '%$q%' And product_languages.languages_code = '$lang' AND product.productcat_ar like '%$productcat_id%'";//echo $sql;
		$result = mysqli_query($conn_vn, $sql);
		$count = mysqli_num_rows($result);

		$sql = "SELECT * FROM product_languages INNER JOIN product ON product_languages.product_id = product.product_id WHERE product_languages.friendly_url like '%$q%' And product_languages.languages_code = '$lang' AND product.productcat_ar like '%$productcat_id%' LIMIT $start,$limit";
		$result = mysqli_query($conn_vn, $sql);
		$rows = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		$return = array(
				'data' => $rows,
				'count' => $count,
				'q' => $q
			);
		return $return;
	}
	$rows = search($lang, $trang, $limit);
?>
<style>
/* 5 Columns */

.col-xs-15,
.col-sm-15,
.col-md-15,
.col-lg-15 {
    position: relative;
    min-height: 1px;
    padding-right: 10px;
    padding-left: 10px;
}

.col-xs-15 {
    width: 20%;
    float: left;
}
@media (min-width: 768px) {
    .col-sm-15 {
        width: 20%;
        float: left;
    }
}
@media (min-width: 992px) {
    .col-md-15 {
        width: 20%;
        float: left;
    }
}
@media (min-width: 1200px) {
    .col-lg-15 {
        width: 20%;
        float: left;
    }
}

.loc_mobile {
    font-size:20px;
    cursor:pointer;
    background: #51290f;
    color: #fff;
    padding: 10px;
    display: inline-block;
    margin-bottom: 15px;
}
</style>
<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_MPTOTO_0002.php";?>
<div class="gb-page-sanpham_mptoto" >
    <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-xs">
                <?php include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0001_1.php";?>
                    <?php include DIR_SIDEBAR."MS_SIDEBAR_HOPLUC_0001.php";?>
                    <?php include DIR_SIDEBAR."MS_SIDEBAR_HOPLUC_0002.php";?>
                    <?php include DIR_SIDEBAR."MS_SIDEBAR_HOPLUC_0003.php";?>
            </div>
            <div class="col-md-9" id="productContainer">
                <span class="loc_mobile hidden-sm hidden-md hidden-lg" onclick="openNav()"><i class="fa fa-sliders"></i> Lọc sản phẩm</span>
                <div class="row m-5" style="display: flex;flex-wrap: wrap;">
                    <?php 
                        $d = 0;
                        foreach ($rows['data'] as $row) {
                            $d++;
                            $item = $row;
                            $rowLang1 = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
                            $row1 = $action_product->getProductDetail_byId($row['product_id'],$lang); 
                    ?>
                        <div class="col-sm-15 col-xs-6 p-5">
                            <div class="gb-product-item_mptoto">
                                <div class="gb-product-item-img">
                                    <div class="gb-product-item-img-main">
                                        <a href="/<?= $rowLang1['friendly_url'] ?>" class="aspect-box-sp">
                                            <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive aspect-img-sp">
                                            <span class="percent">- <?= $item['product_price_sale'] ?>%</span>
                                        </a>
                                    </div>
                                    <div class="gb-product-item-img-replate">
                                        <a href="/<?= $rowLang1['friendly_url'] ?>" class="aspect-box-sp">
                                            <?php if (empty($row1['product_img_2'])) { ?>
                                            <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive aspect-img-sp">
                                            <?php } else { ?>
                                            <img src="/images/<?= $row1['product_img_2'] ?>" alt="" class="img-responsive aspect-img-sp">
                                            <?php } ?>
                                            <span class="percent">- <?= $item['product_price_sale'] ?>%</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="gb-product-item-img-text">
                                    <?php include DIR_PRODUCT."MS_PRODUCT_MINHHUY_0001.php";?>
                                    <h2>
                                        <a href="/<?= $rowLang1['friendly_url'] ?>">
                                            <?= $rowLang1['lang_product_name'] ?>
                                        </a>
                                    </h2>
                                    <p><a><?= $action->getDetail('trademark', 'id', $item['product_material'])['name'] ?></a></p>
                                    <?php include DIR_PRODUCT."MS_PRODUCT_MPTOTO_0002.php";?>
                                    <?php //include DIR_PRODUCT."MS_PRODUCT_MINHHUY_0002.php";?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php //include DIR_PAGINATION."MS_PAGINATION_MPTOTO_0001.php";?>
                <div>
                    <?php 
                        $config = array(
                            'current_page'  => $trang+1, // Trang hiện tại
                            'total_record'  => $rows['count'], // Tổng số record
                            'total_page'    => 1, // Tổng số trang
                            'limit'         => $limit,// limit
                            'start'         => 0, // start
                            'link_full'     => '',// Link full có dạng như sau: domain/com/page/{page}
                            'link_first'    => '',// Link trang đầu tiên
                            'range'         => 9, // Số button trang bạn muốn hiển thị 
                            'min'           => 0, // Tham số min
                            'max'           => 0,  // tham số max, min và max là 2 tham số private
                            'search'        => str_replace(' ', '-', $rows['q'])

                        );

                        $pagination = new Pagination;
                        $pagination->init($config);
                        echo $pagination->htmlPaging1();
                    ?>
                </div>
            </div>
            <div class="col-md-3 hidden">
                <?php include DIR_SIDEBAR."MS_SIDEBAR_MPTOTO_0001.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0008.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_MPTOTO_0005.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0009.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0010.php";?>
            </div>
        </div>
    </div>
</div>

<style>
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 999999;
  top: 0;
  right: 0;
  background-color: #fff;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 40px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 16px;
  color: #fff;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #000;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  left: 25px;
  font-size: 36px;
  margin-left: 50px;
  color: black;
}
</style>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <?php include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0001_1.php";?>
    <?php include DIR_SIDEBAR."MS_SIDEBAR_HOPLUC_0001.php";?>
    <?php include DIR_SIDEBAR."MS_SIDEBAR_HOPLUC_0002.php";?>
    <?php include DIR_SIDEBAR."MS_SIDEBAR_HOPLUC_0003.php";?>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>