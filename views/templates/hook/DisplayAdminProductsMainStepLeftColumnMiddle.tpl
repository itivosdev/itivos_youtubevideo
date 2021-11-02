<div class="form-group" >
	<h2>
	  {l s='Url video' mod='itivos_youtubevideo'}
	  <span class="help-box" data-toggle="popover" data-content="Ve al video de YouTube y da click en compartir, selecciona la opcion de 'incorporar' y pega aqui la url completa" data-original-title="" title="aqui test"></span> 
	</h2>
	<input type="text" 
	       class="form-control col-sm-7 col-md-4" 
	       name="url_video"
	       id="url_video"
	       value="{if $config_product.url|@count > 0}{$config_product.url}{/if}"
	       placeholder="{l s='https://www.youtube.com/embed/gelwwYuYGn0' mod='itivos_youtubevideo'}" 
         >
    <br>
</div>
{hook h="DisplayFooterItivos"}
