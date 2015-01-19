
<div class="row">
        <div class="col-lg-12">
        <h1 class="page-header">Downloads</h1>
</div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
    <i class="fa fa-clock-o fa-fw"></i>Download file
</div>
<!-- /.panel-heading -->
<div class="panel-body">
<div class="form-group">
    <label for="disabledSelect">File Name</label>
    <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo htmlspecialchars($filedetails->filename,ENT_QUOTES); ?>" disabled="">
</div>
<div class="form-group">
    <label for="disabledSelect">File Description</label>
    <textarea class="form-control" id="disabledInput" type="text" disabled="">
<?php echo htmlspecialchars($filedetails->filedescription,ENT_QUOTES); ?>
	</textarea>
</div>
<label for="disabledSelect">Send payment to:</label>
<div class="form-group input-group">
    <span class="input-group-addon"><i class="fa fa-btc"></i>
    </span>
    <input type="text" class="form-control" id="disabledInput" placeholder="<?php echo $wallet->wallet; ?>" value="<?php echo $wallet->wallet; ?>">
</div>

<pre>To download this file, send <?php echo htmlspecialchars($filedetails->price,ENT_QUOTES); ?> BTC to the above BTC address. Once we have confirmed payment you will be able to download the file(s)</pre>
</div>
</div>

<div class="col-lg-4 col-md-6 col-lg-offset-2">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <div class="row">
        <div class="col-xs-3">
          <i class="fa fa-arrow-down fa-5x"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge"><?php echo htmlspecialchars($filedetails->downloads,ENT_QUOTES); ?></div>
          <div>Downloads</div>
        </div>
      </div>
    </div>
      <div class="panel-footer">
        <span class="pull-left">Total downloads</span>
        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
        <div class="clearfix"></div>
      </div>
  </div>
</div>

<div class="col-lg-4 col-md-6">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <div class="row">
        <div class="col-xs-3">
          <i class="fa fa-users fa-5x"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge"><?php echo htmlspecialchars($filedetails->views,ENT_QUOTES); ?></div>
          <div>Total Views!</div>
        </div>
      </div>
    </div>
      <div class="panel-footer">
        <span class="pull-left">View Details</span>
        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
        <div class="clearfix"></div>
      </div>
  </div>
</div>