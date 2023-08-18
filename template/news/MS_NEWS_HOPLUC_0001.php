<?php 
	$home_news = $action->getList('news', '', '', 'news_id', 'desc', '', '5', '');
?>
<style>

@media screen and (max-width: 768px) {
	.bottom-15-mb {
		margin-bottom: 15px;
	}
}
</style>
<div class="container home-news">
	<div class="row">
                <div class="col-xs-12">
                    <div class="section_cvp_title" style="margin-bottom: 15px;">
                        <h3><span>Tin tức</span></h3>
                    </div>
                </div>
            </div>
	<div class="row">
		<div class="col-md-6 bottom-15-mb">
			<a href="/<?= $home_news[0]['friendly_url'] ?>" title="" style="position: relative;">
				<img src="/images/<?= $home_news[0]['news_img'] ?>" alt="tin tức">
				<div class="box-info">
					<p class="name"><?= $home_news[0]['news_name'] ?></p>
					<p class="date"><i class="fa fa-calendar"></i> <?= date('d/m/Y', strtotime($home_news[0]['news_created_date'])) ?></p>
					<p class="des"><?= $home_news[0]['news_des'] ?></p>

				</div>
			</a>
		</div>
		<div class="col-md-6 box-right bottom-15-mb">
			<?php 
			unset($home_news[0]);
			foreach ($home_news as $item) { 
			?>
			<div class="row">
				<div class="col-xs-3">
					<a href="/<?= $item['friendly_url'] ?>" title="">
						<img src="/images/<?= $item['news_img'] ?>" alt="tin tức">
					</a>
				</div>
				<div class="col-xs-9">
					<a href="/<?= $item['friendly_url'] ?>" class="name" title=""><?= $item['news_name'] ?></a>
					<p class="date"><i class="fa fa-calendar"></i> <?= date('d/m/Y', strtotime($item['news_created_date'])) ?></p>
					<p class="des hidden-xs"><?= $item['news_des'] ?></p>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>