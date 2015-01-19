<div class="row">
        <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
</div>
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      Your Files
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
      <div class="dataTable_wrapper">
        <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
          <div class="row">
          </div>
          <div class="row">
            <div class="col-sm-12">
              <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 172px;">Name</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="File: activate to sort column ascending" style="width: 204px;">File</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 185px;">Description</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 149px;">Price</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Downloads: activate to sort column ascending" style="width: 110px;">Download</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Views: activate to sort column ascending" style="width: 110px;">Views</th> 
 </tr>
                </thead>
                <tbody>
				<?php foreach($userfiles as $files) { ?>
                  <tr class="gradeA odd" role="row">
                    <td class="sorting_1">
					<a href="<?php echo URL;?>downloads?fileid=<?php echo $files->furl; ?>">
					<?php echo $files->filename; ?></a></td>
                    <td>
					<a href="<?php echo URL;?>dashboard/editfile?fileid=<?php echo $files->furl; ?>">
					<?php echo $files->file; ?></a></td>
					<td><?php echo $files->filedescription; ?></td>
                    <td class="center"><?php echo $files->price; ?></td>
                    <td class="center"><?php echo $files->downloads; ?></td>
					<td class="center"><?php echo $files->views; ?></td>
                  </tr>
				<?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
  </div>
  <!-- /.panel -->
</div>

<!-- Let the user add a file !-->
<div class="col-lg-6">
  <form role="form" id="addnewfile" action="<?php echo URL; ?>/dashboard/addfile" method="POST" enctype="multipart/form-data">
    <input name="add_file" value="1" type="hidden">
	<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
	<input name="token" value="<?php echo $_SESSION['token']; ?>" type="hidden">
	<div class="form-group">
      <label>File Name</label>
      <input class="form-control" id="filename" name="filename">
      <p class="help-block">Enter the title of the file</p>
    </div>
    <div class="form-group">
      <label>File input</label>
      <input type="file" id="uploadedfile" name="uploadedfile">
    </div>
    <div class="form-group">
      <label>File Description</label>
      <textarea class="form-control" id="filedescription" name="filedescription" rows="3"></textarea>
    </div>
	<div class="form-group input-group">
       <span class="input-group-addon"><i class="fa fa-btc"></i>
       </span>
       <input type="text" class="form-control" name="fileprice" placeholder="Price to download file">
    </div>
	<div class="form-group input-group">
    <button type="submit" class="btn btn-default">Submit Download</button>
    <button type="reset" class="btn btn-default">Reset Download</button>
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