@extends('layouts.master')

@section('content')

{{-- Included our header section --}}
@include('layouts.header')


{{-- Included our header section --}}
@include('layouts.slider')





<!--social_icons start -->
<div class="social_icons">
  <div class="container">
    <ul class="list-unstyled list-inline">
      <li> <a href="#"> <i class="fa fa-facebook-square"></i> </a> </li>
      <li> <a href="#"> <i class="fa fa-twitter-square"></i> </a> </li>
      <li> <a href="#"> <i class="fa fa-youtube-play"></i> </a> </li>
      <li> <a href="#"> <i class="fa fa-google-plus-square"></i> </a> </li>
    </ul>
  </div>
</div>

<!--social_icons closed --> 

<!--main start -->
<div class="main">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="main_content">
          <h3> GOTTMAN COUPLES WEEKEND WORKSHOP </h3>
          <div class="main_inner">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="inputEmail3">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label">First Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="inputPassword3">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label">Last Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="inputPassword3">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                  <button type="submit" class="btn btn-default">Subscribe</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="main_content">
          <h3> GOTTMAN COUPLE’S WORKSHOP </h3>
          <div class="main_inner">
            <h5> April 10-11, 2015: Manitou Springs, Colorado
              
              September 18-19, 2015: Manitou Springs, Colorado
              
              October 23-24, 2015: Denver, Colorado </h5>
            <form class="couples_workshop">
              <div class="form-group">
                <label for="exampleInputEmail1 new_label">Choose Your Workshop</label>
                <select class="form-control">
                  <option></option>
                  <option>September 18-19 One Couple $650.00 USD</option>
                  <option>September 18-19 One Couple $650.00 USD</option>
                  <option>September 18-19 One Couple $650.00 USD</option>
                  <option>September 18-19 One Couple $650.00 USD</option>
                </select>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox">
                  I agree to the <a href="#"> Cancellation Policy </a> </label>
              </div>
              <div class="registration">
                <button type="submit" class="btn btn-default">REGISTRATION</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="main_content">
          <h3> GOTTMAN COUPLE’S WORKSHOP </h3>
          <div class="main_inner">
            <p> Before an initial visit with Caralee, please take time to print these forms, fill them out and bring them to your appointment. Thank you! <br />
              Before an initial visit with Caralee, please take time to print these forms, fill them out and bring them to your appointment. Thank you! <br />
              Before an initial visit with Caralee, please take time to print these forms, fill them out and bring them to your appointment. Thank you! <br />
              
              <a href="#"> Download Intake Forms </a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--main closed --> 

<!--new_main start -->
<div class="new_main">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="therapy">
          <h4> GOTTMAN COUPLE’S PRIVATE THERAPY </h4>
          <img src="/img/main_1.png" class="img-responsive" />
          <div class="new_content">
            <p> April 10-11, 2015: Manitou Springs, Colorado <br />
              September 18-19, 2015: Manitou Springs, Colorado <br />
              October 23-24, 2015: Denver, Colorado <br />
              <a href="#"> Learn more... </a> </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="therapy">
          <h4> GOTTMAN COUPLE’S PRIVATE THERAPY </h4>
          <img src="/img/main_2.png" class="img-responsive" />
          <div class="new_content">
            <p> April 10-11, 2015: Manitou Springs, Colorado <br />
              September 18-19, 2015: Manitou Springs, Colorado <br />
              October 23-24, 2015: Denver, Colorado <br />
              <a href="#"> Learn more... </a> </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="therapy">
          <h4> GOTTMAN COUPLE’S PRIVATE THERAPY </h4>
          <img src="/img/main_3.png" class="img-responsive" />
          <div class="new_content">
            <p> April 10-11, 2015: Manitou Springs, Colorado <br />
              September 18-19, 2015: Manitou Springs, Colorado <br />
              October 23-24, 2015: Denver, Colorado <br />
              <a href="#"> Learn more... </a> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--new_main closed --> 

<!--principle_skills start -->
<div class="principle_skills">
  <div class="container">
    <div class="row">
      <div class="col-md-sm col-sm-6 col-xs-12">
        <h4> WHY CHOOSE PRINCIPLE SKILLS </h4>
        <div class="principle_content">
          <p> I am a Certified Gottman Therapist (CGT) and Licensed Clinical Social Worker (LCSW) with particular emphasis on working with couples/marriages. I often describe what I do as working with “couples and pieces of couples”. In addition to couples work, I provide some individual and group therapy, and starting in 2015 I will be presenting “The Art and Science of Love” workshop for couples, developed by The Gottman Institute. My focus is on developing what I call Healthy Intimacy, through Intimate Solutions. I am especially interested in helping individuals and couples recognize and develop emotional, relational, and sexual intimacy.I am a Certified Gottman Therapist (CGT) and Licensed Clinical Social Worker (LCSW) with particular emphasis on working with couples/marriages. <a href="#"> Read more... </a> </p>
        </div>
      </div>
      <div class="col-md-sm col-sm-6 col-xs-12">
        <h4> WHAT IS GOTTMAN </h4>
        <div class="principle_content">
          <p> I am a Certified Gottman Therapist (CGT) and Licensed Clinical Social Worker (LCSW) with particular emphasis on working with couples/marriages. I often describe what I do as working with “couples and pieces of couples”. In addition to couples work, I provide some individual and group therapy, and starting in 2015 I will be presenting “The Art and Science of Love” workshop for couples, developed by The Gottman Institute. My focus is on developing what I call Healthy Intimacy, through Intimate Solutions. I am especially interested in helping individuals and couples recognize and develop emotional, relational, and sexual intimacy.I am a Certified Gottman Therapist (CGT) and Licensed Clinical Social Worker (LCSW) with particular emphasis on working with couples/marriages. <a href="#"> Read more... </a> </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!--principle_skills closed --> 

<!--recent_blogs start -->
<div class="recent_blogs">
  <div class="container">
    <h2> MOST RECENT BLOGS </h2>
    <div class="row">
      <div class="col-md-6">
        <div class="recent_content">
          <div class="row">
            <div class="col-md-4 col-sm-3"> <img src="/img/blog1.png" class="img-responsive" /> </div>
            <div class="col-md-8 col-sm-9">
              <h6> March 2015 </h6>
              <h5> by <span> John Doe </span> </h5>
              <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <a href="#"> read more... </a> </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="recent_content">
          <div class="row">
            <div class="col-md-4 col-sm-3"> <img src="/img/blog2.png" class="img-responsive" /> </div>
            <div class="col-md-8 col-sm-9">
              <h6> March 2015 </h6>
              <h5> by <span> John Doe </span> </h5>
              <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <a href="#"> read more... </a> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="recent_content">
          <div class="row">
            <div class="col-md-4 col-sm-3"> <img src="/img/blog1.png" class="img-responsive" /> </div>
            <div class="col-md-8 col-sm-9">
              <h6> March 2015 </h6>
              <h5> by <span> John Doe </span> </h5>
              <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <a href="#"> read more... </a> </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="recent_content">
          <div class="row">
            <div class="col-md-4 col-sm-3"> <img src="/img/blog2.png" class="img-responsive" /> </div>
            <div class="col-md-8 col-sm-9">
              <h6> March 2015 </h6>
              <h5> by <span> John Doe </span> </h5>
              <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <a href="#"> read more... </a> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--recent_blogs closed --> 

<!--recent_blogs start -->
<div class="recent_blogs">
  <div class="container">
    <h2> MOST POPULAR BLOGS </h2>
    <div class="row">
      <div class="col-md-6">
        <div class="recent_content">
          <div class="row">
            <div class="col-md-4 col-sm-3"> <img src="/img/blog3.png" class="img-responsive" /> </div>
            <div class="col-md-8 col-sm-9">
              <h6> March 2015 </h6>
              <h5> by <span> John Doe </span> </h5>
              <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <a href="#"> read more... </a> </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="recent_content">
          <div class="row">
            <div class="col-md-4 col-sm-3"> <img src="/img/blog2.png" class="img-responsive" /> </div>
            <div class="col-md-8 col-sm-9">
              <h6> March 2015 </h6>
              <h5> by <span> John Doe </span> </h5>
              <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <a href="#"> read more... </a> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="recent_content">
          <div class="row">
            <div class="col-md-4 col-sm-3"> <img src="/img/blog1.png" class="img-responsive" /> </div>
            <div class="col-md-8 col-sm-9">
              <h6> March 2015 </h6>
              <h5> by <span> John Doe </span> </h5>
              <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <a href="#"> read more... </a> </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="recent_content">
          <div class="row">
            <div class="col-md-4 col-sm-3"> <img src="/img/blog3.png" class="img-responsive" /> </div>
            <div class="col-md-8 col-sm-9">
              <h6> March 2015 </h6>
              <h5> by <span> John Doe </span> </h5>
              <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <a href="#"> read more... </a> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--recent_blogs closed --> 

<!--recent_blogs start -->
<div class="recent_blogs">
  <div class="container">
    <h2> MOST POPULAR VIDEOS </h2>
    <div class="pular_vdio">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <iframe width="100%" height="230" src="https://www.youtube.com/embed/UcdRbVoxqD8" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-md-4 col-sm-4">
          <iframe width="100%" height="230" src="https://www.youtube.com/embed/pWv6f4junC0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-md-4 col-sm-4">
          <iframe width="100%" height="230" src="https://www.youtube.com/embed/UcdRbVoxqD8" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!--recent_blogs closed --> 





@stop

