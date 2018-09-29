<div class="row">
	<div class="col-md-12">
		<div class="box">
            <div class="box-header">
                <h3 class="box-title">Customers</h3>
            </div>
            <div class="box-body">
            	<?php echo $this->session->flashdata('message');?>
            	<p><a class="btn btn-default" href="<?php echo site_url('admin/customers/add')?>">New customer</a></p>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Featured Image</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($customers)):?>
                    	<?php foreach($customers as $customer):?>
		                    <tr>
		                        <td><?php echo $customer['id']?></td>
		                        <td><?php echo $customer['name']?></td>
		                        <td><?php echo $customer['featured_image']?></td>
		                        <td>
		                        	<a href="<?php echo site_url('admin/customers/edit/'.$customer['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('admin/customers/delete/'.$customer['id'])?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
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
