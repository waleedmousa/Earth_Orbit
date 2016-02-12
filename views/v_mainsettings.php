<h1>main settings</h1>

<form action="" method="post" class="MainSettingsFrom">
   <!--
   `site_name`, `site_url`, `site_desc`, `site_email`, `site_tags`, `site_homepanel`, `fb`, `tw`, `yt`, `rss`
    -->
    <label>Site Name</label>
    <input type="text" name="site_name" value="<?php echo $displaydata['site_name'];?>">
    <label>Site URL</label>
    <input type="text" name="site_url" value="<?php echo $displaydata['site_url'];?>">
    <label>Site Email</label>
    <input type="email" name="site_email" value="<?php echo $displaydata['site_email'];?>">
    <label>Site Description</label>
    <textarea name="site_desc"><?php echo $displaydata['site_desc'];?></textarea>
    <label>Site Tags</label>
    <textarea name="site_tags"><?php echo $displaydata['site_tags'];?></textarea>
    <label>Home Panel Notes</label>
    <textarea name="site_homepanel"><?php echo $displaydata['site_homepanel'];?></textarea>
    <label>Facebook</label>
    <input type="text" name="fb" value="<?php echo $displaydata['fb'];?>">
    <label>twitter</label>
    <input type="text" name="tw" value="<?php echo $displaydata['tw']; ?>">
    <label>youtube</label>
    <input type="text" name="yt" value="<?php echo $displaydata['yt']; ?>">
    <label>Rss</label>
    <input type="text" name="rss" value="<?php echo $displaydata['rss']; ?>"> 
    
    <!--to know which user updated the records -->
    <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>"> 
    
    <input class="btn-lg btn-primary" type="submit" name="submit" value="update"> 
    
    
</form>
