

  @extends('layouts.app')

  @section('content')
    <!-- Page Header Start -->
    <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-header">
              <h3>Bookmarked</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="right-sideabr">
              <h4>Manage Account</h4>
              <ul class="list-item">
                <li><a href="resume.blade.php">My Resume</a></li>
                <li><a class="active" href="bookmarked.blade.php">Bookmarked Jobs</a></li>
                <li><a href="notifications.blade.php">Notifications <span class="notinumber">2</span></a></li>
                <li><a href="manage-applications.blade.php">Manage Applications</a></li>
                <li><a href="job-alerts.blade.php">Job Alerts</a></li>
                <li><a href="change-password.blade.php">Change Password</a></li>
                <li><a href="index.html">Sing Out</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-8 col-md-6 col-xs-12">
            <div class="job-alerts-item bookmarked">
              <h3 class="alerts-title">Bookmarked Jobs</h3>
              <a class="job-listings" href="job-details.html">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="job-company-logo">
                      <img src="assets/img/features/img1.png" alt="">
                    </div>
                    <div class="job-details">
                      <h3>App Developer</h3>
                      <span class="company-neme">
                        AmazeSoft
                      </span>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12 col-xs-12 text-right">
                   <div class="location">
                     <i class="lni-map-marker"></i> New Yourk, US
                   </div>
                  </div>
                  <div class="col-lg-2 col-md-12 col-xs-12 text-right">
                    <span class="btn-full-time">Full Time</span>
                  </div>
                  <div class="col-lg-3 col-md-12 col-xs-12 text-right">
                    <span class="btn-apply">Apply Now</span>
                  </div>
                </div>
              </a>
              <a class="job-listings" href="job-details.html">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="job-company-logo">
                      <img src="assets/img/features/img2.png" alt="">
                    </div>
                    <div class="job-details">
                      <h3>Graphic Designer</h3>
                      <span class="company-neme">
                        Hunter Inc.
                      </span>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12 col-xs-12 text-right">
                   <div class="location">
                     <i class="lni-map-marker"></i> New Yourk, US
                   </div>
                  </div>
                  <div class="col-lg-2 col-md-12 col-xs-12 text-right">
                    <span class="btn-full-time">Full Time</span>
                  </div>
                  <div class="col-lg-3 col-md-12 col-xs-12 text-right">
                    <span class="btn-apply">Apply Now</span>
                  </div>
                </div>
              </a>
              <a class="job-listings" href="job-details.html">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="job-company-logo">
                      <img src="assets/img/features/img3.png" alt="">
                    </div>
                    <div class="job-details">
                      <h3>Managing Director</h3>
                      <span class="company-neme">
                        MagNews
                      </span>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12 col-xs-12 text-right">
                   <div class="location">
                     <i class="lni-map-marker"></i> New Yourk, US
                   </div>
                  </div>
                  <div class="col-lg-2 col-md-12 col-xs-12 text-right">
                    <span class="btn-full-time">Full Time</span>
                  </div>
                  <div class="col-lg-3 col-md-12 col-xs-12 text-right">
                    <span class="btn-apply">Apply Now</span>
                  </div>
                </div>
              </a>
              <a class="job-listings" href="job-details.html">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="job-company-logo">
                      <img src="assets/img/features/img4.png" alt="">
                    </div>
                    <div class="job-details">
                      <h3>Software Engineer</h3>
                      <span class="company-neme">
                        AmazeSoft
                      </span>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12 col-xs-12 text-right">
                   <div class="location">
                     <i class="lni-map-marker"></i> New Yourk, US
                   </div>
                  </div>
                  <div class="col-lg-2 col-md-12 col-xs-12 text-right">
                    <span class="btn-full-time">Full Time</span>
                  </div>
                  <div class="col-lg-3 col-md-12 col-xs-12 text-right">
                    <span class="btn-apply">Apply Now</span>
                  </div>
                </div>
              </a>
              <!-- Start Pagination -->
              <ul class="pagination">
                <li class="active"><a href="#" class="btn btn-common" ><i class="ti-angle-left"></i> prev</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li class="active"><a href="#" class="btn btn-common">Next <i class="ti-angle-right"></i></a></li>
              </ul>
              <!-- End Pagination -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Content -->

@endsection
