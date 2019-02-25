@extends('template.master')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url( {{asset('img/contact-bg.jpg')}})">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Contact Me</h1>
              <span class="subheading">Have questions? I have answers.</span>
            </div>
          </div>
        </div>
      </div>
    </header>
@section('content')
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <form enctype="multipart/form-data" action="/insert" method="post" id="contactForm" novalidate >
            {{csrf_field()}}
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Post Title</label>
                <input type="text" class="form-control" placeholder="Post Title" id="name" required name="post_title" >
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>post Content</label>
                <textarea rows="5" name="post_content" class="form-control" placeholder="post Content" id="article-ckeditor" required></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>writer name</label>
                <input type="text" class="form-control" name="writer_name" placeholder="Writer name" id="phone" required>
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <br> <br>
            <div id="success"></div>
            <br>
              <div class="form-group">
                  <input type="file" name="image_name">
              </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="sendMessageButton">POST</button>
            </div>


          </form>
        </div>
      </div>
    </div>
@endsection
