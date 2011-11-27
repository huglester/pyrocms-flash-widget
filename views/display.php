<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>

<?php $swf_path = UPLOAD_PATH . 'files/' . $swf_file; ?>

<script type="text/javascript">
    swfobject.registerObject("<?php echo $random_id ?>", "9.0.0", "http://www.adobe.com/swf/lib/expressInstall.swf");
</script>

<object id="<?php echo $random_id ?>" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="<?php echo $width ?>" height="<?php echo $height ?>">
        <param name="movie" value="<?php echo $swf_path ?>" />
        <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="<?php echo $swf_path ?>" width="<?php echo $width ?>" height="<?php echo $height ?>">
        <!--<![endif]-->
            <h1>Sorry.</h1>
            <p>Adobe Flash Player is required to view this content. Flash Player is a standard plugin that will allow access to interactive content from many websites.<br>
            Flash Player may be downloaded, for free, by clicking the icon.</p>
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
        <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
</object>