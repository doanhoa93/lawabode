<div class="row">
	<div class="col-md-12">
		<div class="box">
            <div class="box-header">
                <h3 class="box-title">Galleries</h3>
            </div>
            <div class="box-body">
            	<?php echo $this->session->flashdata('message');?>
            	<p><a class="btn btn-default" href="<?php echo site_url('admin/galleries/add')?>">New gallery</a></p>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Featured Image</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($galleries)):?>
                    	<?php foreach($galleries as $gallery):?>
		                    <tr>
		                        <td><?php echo $gallery['id']?></td>
		                        <td><?php echo $gallery['title']?></td>
		                        <td><?php echo $gallery['featured_image']?></td>
		                        <td>
		                        	<a href="<?php echo site_url('admin/galleries/edit/'.$gallery['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('admin/galleries/delete/'.$gallery['id'])?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
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
