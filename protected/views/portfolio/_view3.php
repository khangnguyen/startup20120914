<div class="span6" style="border: 1px solid; padding: 10px; background: white;">
   <? if ($data->portfolioPhotos) { ?>
        <a href="http://startup.cogini.com/portfolio/view/id/<?=$data->id?>">
          <img src="<?=$data->portfolioPhotos[0]->image('portfolio_photo')?>"/>
        </a>
   <? } ?>
        <a href="http://startup.cogini.com/portfolio/view/id/<?=$data->id?>"><h4 style="display: inline-block"><?=$data->name?></h4></a>
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://startup.cogini.com/portfolio/view/id/<?=$data->id?>">Tweet</a>
        <div style="margin: 10px 35px 0 0; float: right;" class="fb-like" data-send="true" data-layout="button_count" data-width="200" data-show-faces="false"></div>    
</div>