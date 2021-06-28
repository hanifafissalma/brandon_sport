<div class="searchForm" itemscope="" itemtype="https://schema.org/WebSite">
	<meta content="<?php echo home_url(); ?>" itemprop="url"/>
	<form action="<?php echo home_url(); ?>" itemprop="potentialAction" itemscope="" itemtype="http://schema.org/SearchAction" method="get" role="search">
		<meta content="<?php echo home_url(); ?>/?s={s}" itemprop="target"/>
		<div class="grid">
			<input autocomplete="off" class="text" itemprop="query-input" name="s" placeholder="Cari Produk…" required="" type="text" value=""/>
			<button><i class="icon ion-ios-search"></i></button>
		</div>
	</form>
</div>