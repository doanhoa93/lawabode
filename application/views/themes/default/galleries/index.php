<section class="container container-block practice practice2">

    <div class="row practice-block">
        <?php
        $i = 0;
        if(!empty($galleries)):?>
            <?php foreach($galleries as $gallery):?>
        <?php $i++?>
        <div class="col-sm-4 col-xs-12 practice-col" style="margin-bottom: 30px">
            <a href="#">
                <img src="<?php echo site_url("/")?>/<?php echo $gallery['featured_image'];?>" width="532" height="409" alt="image description" >
                <div class="over">
                    <div class="box">
                        <div class="block">
                            <div class="frame">
                                <strong class="title"><?php echo $gallery['title'];?></strong>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach;?>
        <?php endif;?>
    </div>

</section>
