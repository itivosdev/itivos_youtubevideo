{if $data_video_product|@count > 0}
	{if $data_video_product.url neq ""}
		<div class="container_iframe_itivos"> 
		  <iframe class="responsive_iframe_itivos" src="{$data_video_product.url}"></iframe>
		</div>
	{/if}
{/if}