<div class="row">
        <div class="col-lg-12">
        <h1 class="page-header">Edit Files</h1>
</div>
<!-- Let the user add a file !-->
<div class="col-lg-6">
  <form role="form" action="<?php echo URL; ?>/dashboard/editfile" method="POST">
    <input name="check_edit" value="1" type="hidden">
	<input name="fileid" value="<?php echo htmlspecialchars($filename,ENT_QUOTES);?>" type="hidden">
	<input name="token" value="<?php echo $_SESSION['token']; ?>" type="hidden">
	<div class="form-group">
      <label>File Name</label>
      <input class="form-control" value="<?php echo htmlspecialchars($userfiles->filename,ENT_QUOTES); ?>" name="filename">
      <p class="help-block">Enter the title of the file</p>
    </div>
    <div class="form-group">
      <label>File Description</label>
<textarea class="form-control" name="filedescription" rows="3">
<?php echo htmlspecialchars($userfiles->filedescription,ENT_QUOTES); ?>
</textarea>
    </div>
	<div class="form-group input-group">
       <span class="input-group-addon"><i class="fa fa-btc"></i>
       </span>
       <input type="text" class="form-control" value="<?php echo htmlspecialchars($userfiles->price,ENT_QUOTES); ?>" name="fileprice" placeholder="Price to download file">
    </div>
	<div class="form-group input-group">
    <button type="submit" class="btn btn-default">Edit File</button>
    <button type="reset" class="btn btn-default">Reset Edits</button>
	</div>
  </form>
</div>
<div class="col-lg-4 col-lg-offset-1">
<div class="form-group input-group">
<b>File Name.</b><br/>
This is the name of your file. Make this easily understandable, 
it may drive more downloads.
</div>
<div class="form-group input-group">
<b>File input.</b><br/>
This is the files you will allows people to download once they
have paid. Do not upload any files on our <b>prohibited list</b>
</div>
</div>
</div>