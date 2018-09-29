<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Services</h3>
            </div>
            <div class="box-body">
                <?php echo $this->session->flashdata('message');?>
                <p><a class="btn btn-default" href="<?php echo site_url('admin/services/add')?>">New Services</a></p>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Content</th>
                        <th>Featured image</th>
						<th>Status</th>
						<th style="width: 100px">Action</th>
                    </tr>
                    <?php if ($services): ?>
                        <?php foreach ($services as $service): ?>
                            <tr>
                                <td><?php echo $service['id']; ?></td>
                                <td><?php echo $service['name']; ?></td>
                                <td><?php echo $service['content']; ?></td>
								<td><?php echo $service['featured_image']; ?></td>
                                <td><?php echo $status[$service['status']]; ?></td>
                                <td class="actions">
                                    <a href="<?php echo site_url('admin/services/edit/'.$service['id'])?>"><span class="badge bg-green">edit</span></a>
                                    <a href="<?php echo site_url('admin/services/delete/'.$service['id'])?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else:?>
                        <tr><td colspan="5">No record found</td></tr>
                    <?php endif; ?>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
