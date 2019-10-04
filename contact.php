  <!-- Header -->
  <?php 
  include("header.php");
?>
  <!-- Navigation -->
  <?php 
  include("navigationRest.php");
?>
<div class="container shopcart">
  <div class="row">
    <div class="col-8">
    <h1> Contact Us</h1>
    <form>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Your Name">
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="subject">Subject</label>
        <textarea type="password" class="form-control" id="subject" placeholder="Subject"></textarea>
      </div>
   
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <div class="col-4">
    <div class="sidebar-section about-author center-text">
							<div class="author-image"><img src="images/author-1-200x200.jpg" alt="Autohr Image"></div>

							<ul class="social-icons">
								<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
								<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
								<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
								<li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
								<li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
							</ul><!-- right-area -->

							<h4 class="author-name"><b class="light-color">Our office</b></h4>
							<p>
                <span class="spanText">Office</span>   : 36 Water Road Nowhere WA 2100<br>
                <span class="spanText">Postal</span>   : PO Box 236 Nowhere WA 2100<br>
                <span class="spanText">Telephone</span>: 61 2 6939 6100<br>
                <span class="spanText">Email</span>    : Aspect@hotmail.com<br>
              </p>
              <h4 class="author-name"><b class="light-color">Opening</b></h4>
							<p>
              <span class="spanText">Monday to Friday</span>   : 9am to 5pm<br>
                <span class="spanText">Saturday</span>   : 9am to 2pm<br>
                <span class="spanText">Sunday</span>: Closed<br>
              
              </p>
              <h4 class="author-name"><b class="light-color">Follow us On</b></h4>
          </div>
        </div>
    </div>
</div>
 
</div> 

  <!-- footer-->
  <?php 
  include("footer.php");
?>