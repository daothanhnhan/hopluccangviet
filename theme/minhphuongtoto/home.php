<style>
.gb-menu-category_mptoto {
  display: none;
}
.is-sticky .gb-menu-category_mptoto {
  display: block;
}
</style>
<!--CONTENT-->
<div class="Content-Main_mptoto">
  <div class="container">
    <div class="row m-5">
      
      <div class="col-md-3 hidden-xs p-5" style="width: calc(25% - 15px);">
        <?php include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0001.php";?>
        <!-- <br> -->
        <?php //include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0002.php";?>
        <!-- <br> -->
        <?php //include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0003.php";?>
        <!-- <br> -->
        <?php //include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0004.php";?>
        <!-- <br> -->
        <?php //include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0005.php";?>
      </div>

      <div class="col-md-7 col-xs-12 p-5">
        <!--SLIDE-->
        <?php include DIR_SLIDESHOW."MS_SLIDESHOW_MPTOTO_0001.php";?>

        
        
      </div>
      <div class="col-md-2 hidden-xs p-5">
        <img src="/images/t01-fixSize880.jpg" alt="banner" style="width: 100%;margin-top: 10px;">
        <img src="/images/t02-fixSize880.jpg" alt="banner" style="width: 100%;">
        <img src="/images/t04-fixSize880.jpg" alt="banner" style="width: 100%;">
        
      </div>
    </div>
    

    <div class="row">
      <div class="col-md-12">
        <?php include DIR_OTHER."MS_OTHER_MPTOTO_0004.php";?>

        <?php include DIR_PRODUCT."MS_PRODUCT_MPTOTO_0019.php";?>
        <?php include DIR_PRODUCT."MS_PRODUCT_MPTOTO_0020.php";?>

        <?php //include DIR_PRODUCT."MS_PRODUCT_MPTOTO_0016.php";?>

        <?php include DIR_OTHER."MS_OTHER_MPTOTO_0003.php";?>
        <!-- video -->
        <?php include DIR_VIDEO."MS_VIDEO_HOPLUC_0001.php";?>

        <!-- tin tức -->
        <?php include DIR_NEWS."MS_NEWS_HOPLUC_0001.php";?>

        <?php //include DIR_PRODUCT."MS_PRODUCT_MPTOTO_0021.php";?>
      </div>
    </div>
    
  </div>
    


</div>

<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 }
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom {
  from{ bottom:-100px; opacity:0 }
  to{ bottom:0; opacity:1 }
}

#myDiv {
  /*display: none;*/
  text-align: center;
}
.gb-popup-overlay{
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 9999;
    -webkit-overflow-scrolling: touch;
    outline: 0;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
}
.gb-popup-overlay-content{
        position: fixed;
    width: 550px;
    /*background: #fff;*/
    z-index: 9999;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
@media screen and (max-width: 500px){
  .gb-popup-overlay-content{
    /*position: relative;*/
    width: 85%;
    background: #fff;
}
}
.gb-popup-overlay-content .close_poup{
    width: 40px;
    height: 40px;
    background: red;
    color: #fff;
    position: absolute;
    z-index: 9999999999999;
    right: -26px;
    top: -20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>

<!-- <div id="loader"></div> -->

<!-- <div class="gb-popup-overlay"></div>
    <div class="gb-popup-overlay-content">
        <div class="close_poup"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div id="myDiv">
            <a href="<?= $rowConfig['content_home10']?>"><img src="/images/181026 pop up-011.png" alt="" class="img-responsive"></a>

        </div>
    </div> -->
<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
$(document).ready(function(){
    $('.close_poup').click(function(){
        $('.gb-popup-overlay').css('display','none');
        $('.gb-popup-overlay-content').css('display','none');
    });
    $('.gb-popup-overlay').click(function(){
        $('.gb-popup-overlay-content').css('display','none');
        $(this).css('display','none');
    })
});
</script>
<script type="text/javascript">
function popuptu () {
  $('.gb-popup-overlay').css('display','none');
  $('.gb-popup-overlay-content').css('display','none');
  // alert('tuan');
}
<?php
  if (isset($_SESSION['popup'])) {
?>
popuptu();
<?php
  }
  if (!isset($_SESSION['popup'])) {
    $_SESSION['popup'] = 'true';
  }
// unset($_SESSION['popup']);
?>
</script>
