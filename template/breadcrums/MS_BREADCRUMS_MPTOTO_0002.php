<style>
@media screen and (max-width: 768px) {
	.breadcrumb li {
		margin-bottom: 10px;
	}
}
</style>
<div class="container">
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/<?= $item['url'] ?>"><?= $title ?></a></li>
    </ol>
</div>