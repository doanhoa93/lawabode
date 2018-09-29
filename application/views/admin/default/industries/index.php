<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Industries</h3>
            </div>
            <div class="box-body">
                <?php echo $this->session->flashdata('message');?>
                <p><a class="btn btn-default" href="<?php echo site_url('admin/industries/add')?>">New Industry</a></p>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Featured image</th>
						<th style="width: 100px">Action</th>
                    </tr>
                    <?php if ($industries): ?>
                        <?php foreach ($industries as $industry): ?>
                            <tr>
                                <td><?php echo $industry['id']; ?></td>
                                <td><?php echo $industry['name']; ?></td>
								<td><?php echo $industry['featured_image']; ?></td>
                                <td class="actions">
                                    <a href="<?php echo site_url('admin/industries/edit/'.$industry['id'])?>"><span class="badge bg-green">edit</span></a>
                                    <a href="<?php echo site_url('admin/industries/delete/'.$industry['id'])?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
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
