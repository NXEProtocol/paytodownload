<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(document).ready(function() {	
$("#useramount").click(function(e) { 
e.preventDefault(); 
$('#withdrawamount').val($('#useramount').attr('href')); 
return false; })}); 
</script>
<div class="row">
        <div class="col-lg-12">
        <h1 class="page-header">Withdraw</h1>
</div>
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      Withdraw BTC <div class="pull-right"><b><a id="useramount" href="<?php echo $btcamount; ?>"><?php echo $btcamount; ?></a></b> BTC</div>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Wallet</th>
              <th>Amount</th>
              <th>Withdraw</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>
			  <div class="col-xs-12 form-group input-group">
              <span class="input-group-addon">@</i>
              </span>
              <input type="text" class="form-control" placeholder="Enter your wallet address">
              </div></td>
              <td>
			  <div class="col-xs-8 form-group input-group">
              <span class="input-group-addon"><i class="fa fa-btc"></i>
              </span>
              <input type="text" class="form-control" id="withdrawamount" placeholder="Amount of BTC to withdraw">
              </div></td>
              <td><button type="button" class="btn btn-outline btn-primary btn-lg">Withdraw BTC</button></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
  </div>
  <!-- /.panel -->
</div>