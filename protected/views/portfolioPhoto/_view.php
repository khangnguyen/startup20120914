<div style="border: 1px solid; padding: 10px; background: white; margin: 50px 0;">
        <img src="<?=$data->image('portfolio_photo')?>" style="width: 100%"/>
        <h4 style="display: inline-block"><?=$data->name?></h4>
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://startup.cogini.com/designer/view/id/<?=$data->id?>">Tweet</a>
        <div style="margin: 10px 35px 0 0; float: right;" class="fb-like" data-send="true" data-layout="button_count" data-width="200" data-show-faces="false"></div>    
        <p><?=$data->description?></p>
</div>