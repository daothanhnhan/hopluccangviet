
<div class="gb-danhmuc-sidebar-ruouvang widget-sidebar">
    <aside class="widget">
        <h3 class="widget-title-sidebar-ruouvang">Lọc giá</h3>
        <div class="widget-content" id="filters">
            <form action="" method="post" accept-charset="utf-8" >
                <div class="checkbox">
                    <label style="width: 100%;">
                        <input type="checkbox" value="0-500000" <?= ($_SESSION['price_filter']=='0-500000') ? 'checked' : '' ?> onclick="pricejs(this)">Dưới 500 nghìn
                    </label>
                </div>
                <div class="checkbox">
                    <label style="width: 100%;">
                        <input type="checkbox" value="500000-1000000" <?= ($_SESSION['price_filter']=='500000-1000000') ? 'checked' : '' ?> onclick="pricejs(this)">500 nghìn - 1 triệu
                    </label>
                </div>
                <div class="checkbox">
                    <label style="width: 100%;">
                        <input type="checkbox" value="1000000-5000000" <?= ($_SESSION['price_filter']=='1000000-5000000') ? 'checked' : '' ?> onclick="pricejs(this)">1 triệu - 5 triệu
                    </label>
                </div>
               <!--  <div class="checkbox">
                    <label style="width: 100%;">
                        <input type="checkbox" value="50000000-100000000" <?= ($_SESSION['price_filter']=='50000000-100000000') ? 'checked' : '' ?> onclick="pricejs(this)">50 triệu 100 triệu
                    </label>
                </div> -->
                <div class="checkbox">
                    <label style="width: 100%;">
                        <input type="checkbox" value="5000000-0" <?= ($_SESSION['price_filter']=='5000000-0') ? 'checked' : '' ?> onclick="pricejs(this)">Trên 5 triệu
                    </label>
                </div>
            </form>
        </div>
    </aside>
</div>
<script>
    function pricejs (data) {
        var price = data.value;//alert(price);
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var bien = this.responseText;
                // alert(bien);
                location.reload();
            }
          };
          xhttp.open("GET", "/functions/ajax/price.php?price="+price, true);
          xhttp.send();
    }
</script>