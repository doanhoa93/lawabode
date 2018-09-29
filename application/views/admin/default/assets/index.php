<div class="row">
	<div class="col-md-12">
		<div class="box">
            <div class="box-header">
                <h3 class="box-title">Assets</h3>
            </div>
            <div class="box-body">
            	<?php echo $this->session->flashdata('message');?>
            	<p><a class="btn btn-default" href="<?php echo site_url('admin/assets/add')?>">New Asset</a></p>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Id</th>
						<th>Type</th>
						<th>Mime</th>
						<th>Path</th>
                        <th>Create date</th>
						<th>Update date</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($assets)):?>
                    	<?php foreach($assets as $asset):?>
		                    <tr>
								<th></th>
								<td><?php echo $asset['id']?></td>
		                        <td><?php echo $asset['type']?></td>
		                        <td><?php echo $asset['mime']?></td>
								<td><?php echo $asset['path']?></td>
								<td><?php echo $asset['created']?></td>
								<td><?php echo $asset['modified']?></td>
		                        <td>
		                        	<!--<a href="<?php /*echo site_url('admin/assets/edit/'.$asset['id'])*/?>"><span class="badge bg-green">edit</span></a>-->
		                        	<a href="<?php echo site_url('admin/assets/delete/'.$asset['id'])?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
		                        </td>
		                    </tr>
                    	<?php endforeach;?>
                	<?php else:?>
                		<tr><td colspan="5">No record found</td></tr>
                	<?php endif;?>
                </table>
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
                <?php echo $pagination ?>
            </div>
        </div><!-- /.box -->
	</div>
</div>
