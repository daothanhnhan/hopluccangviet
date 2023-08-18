<?php 
	$home_video = $action->getList('service', '', '', 'service_id', 'desc', '', '5', '');
?>
<style>

</style>
<div class="container home-video container-gb">
	<div class="row">
                <div class="col-xs-12">
                    <div class="section_cvp_title" style="margin-bottom: 15px;">
                        <h3><span>Video</span></h3>
                    </div>
                </div>
            </div>
	<div class="row">
		
		<div class="col-md-6 item-video">
			<a href="/<?= $home_video[0]['friendly_url'] ?>" title="" target="" class="khung-anh">
				<img src="/images/<?= $home_video[0]['service_img'] ?>" alt="video" width="100%" class="hover_zoom">
				<img src="/images/play_video.png" alt="" class="play-video">
			</a>
			<p style="font-weight: 600;"><?= $home_video[0]['service_name'] ?></p>
		</div>
		<div class="col-md-6 four-video">
			<div class="row" style="display: flex;flex-wrap: wrap;">
				<?php 
				unset($home_video[0]);
				foreach ($home_video as $item) { 
				?>
				<div class="col-sm-6 col-xs-6">
					<a href="/<?= $item['friendly_url'] ?>" title="" target="" class="khung-anh">
						<img src="/images/<?= $item['service_img'] ?>" alt="video" width="100%" class="hover_zoom">
						<img src="/images/play_video.png" alt="" class="play-video">
					</a>
					<p style="font-weight: 600;"><?= $item['service_name'] ?></p>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>