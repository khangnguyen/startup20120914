<? if ($data->image('cover_photo')) { ?>
<div class="span12" style="float: none; margin: 80px auto; border: 1px solid; padding: 10px; background: white;">
        <a href="http://startup.cogini.com/designer/view/id/<?=$data->id?>">
        <img src="<?=$data->image('cover_photo')?>" style="width: 100%"/>
        </a>
        <a href="http://startup.cogini.com/designer/view/id/<?=$data->id?>"><h4 style="display: inline-block"><?=$data->displayname?></h4></a>
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://startup.cogini.com/designer/view/id/<?=$data->id?>">Tweet</a>
        <div style="margin: 10px 35px 0 0; float: right;" class="fb-like" data-send="true" data-layout="button_count" data-width="200" data-show-faces="false"></div>    
</div>
<? } ?>