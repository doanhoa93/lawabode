<main id="main">
    <!-- news-posts of the page -->
    <div class="container news-posts">
        <div class="row">
            <!-- content of the page -->
            <div class="col-xs-12" id="content">
                <?php if ($posts): ?>
                    <?php foreach ($posts as $last): ?>
                        <article class="blog-post">
                            <h2><a href="<?php echo $last['url']?>" target="_blank">
                                    <?php echo $last['title']?>
                                </a></h2>
                            <ul class="blog-nav list-inline">
                                <li>Written By <a href="#"><?php echo $last['create_by']?></a></li>
                                <li>Published On <a href="#"><?php echo $last['published_at'] ?> </a></li>
                            </ul>
                            <p><?php echo $last['body']?></p>
                            <a href="<?php echo $last['url']?>" target="_blank" class="btn btn-default">Read More</a>
                        </article>
                    <?php endforeach; ?>
                <?php else:?>
                    No blogs found.
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
