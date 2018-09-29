<div class="row">
    <div class="col-xs-12">
        <!-- <div class="site-map"> -->
        <!-- <img src="http://placehold.it/1170x339" alt="Image Description" class="img-responsive"> -->
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d542.9368074937964!2d90.40978809110396!3d23.73207939578404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f68f68cb71%3A0x52ab4dc282fae1e!2sM.L.+Hotel+Tower+Ltd.!5e0!3m2!1sen!2s!4v1515242545384" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        <!-- </div> -->
    </div>
</div>
<br/><br/>
<div class="row">
    <div class="col-xs-12 team-contact add" style="margin-right: 20px">
        <h2>Get In Touch</h2>
        <div>
            <p>Please fill out the form below along with your query and someone from our team will get back to you..<br/> Alternatively you can email 
                <a href="mailto:kawsar@lawabode.com">info@lawabode.com</a>,
                <a href="mailto:kawsar@lawabode.com">kawsar@lawabode.com</a>,
                <a href="mailto:kawsar@lawabode.com">kawsar215@yahoo.co.uk</a>
            </p>
        </div>
        <br/>
        <!-- comments-form of the page -->
            <?php $attributes = array('id' => 'formcontact','class'=>'comments-form add');
            echo form_open("contacts/sendcontact",$attributes);?>
        <?php echo $this->session->flashdata('message');?>
            <div class="form-row">
                <div class="form-group">
                    <label for="name"><i class="fa fa-user"></i></label>
                    <input type="text" name="name" placeholder="Name" id="name" class="form-control" required title="Cannot empty!">
                </div>
                <div class="form-group">
                    <label for="emailaddress"><i class="fa fa-envelope"></i></label>
                    <input type="email" name="email" placeholder="Email" id="email" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="web"><i class="fa fa-dribbble"></i></label>
                    <input type="text" name="subject" placeholder="Subject" id="subject" class="form-control" required title="Cannot empty!">
                </div>
            </div>
            <div class="form-row textarea">
                <div class="form-group">
                    <label for="textarea"><i class="fa fa-paper-plane"></i></label>
                    <textarea placeholder="Content..." name="content" id="content" rows="10" cols="30" class="form-control" required title="Cannot empty!"></textarea>
                </div>
            </div>
            <button class="btn btn-default" id="submit" type="submit">Submit</button>
            <?php echo form_close();?>
    </div>
</div>

