<?php $__env->startSection('content'); ?>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form action="update" method="post" id="contactForm" novalidate >
                    <?php echo e(csrf_field()); ?>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Post Title</label>
                            <input type="text" class="form-control" placeholder="Post Title"
                                   value="<?php echo e($id->post_title); ?>"
                                   id="name" required name="post_title" >
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>post Content</label>
                            <textarea rows="5" name="post_content" class="form-control" placeholder="post Content" id="message" required><?php echo e($id->post_content); ?></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>writer name</label>
                            <input type="text" class="form-control" value="<?php echo e($id->writer_name); ?>"  name="writer_name" placeholder="Writer name" id="phone" required>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br> <br>
                    <div id="success"></div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="sendMessageButton">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>