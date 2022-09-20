@extends('layouts.account')

@section('account_content')

{{--    <!-- Page Header Start -->--}}
{{--    <div class="page-header">--}}
{{--      <div class="container">--}}
{{--        <div class="row">--}}
{{--          <div class="col-lg-12">--}}
{{--            <div class="inner-header">--}}
{{--              <h3>Notifications</h3>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--    <!-- Page Header End -->--}}

{{--    <!-- Start Content -->--}}
{{--    <div id="content">--}}
{{--      <div class="container">--}}
{{--        <div class="row">--}}
{{--          <div class="col-lg-4 col-md-6 col-xs-12">--}}
{{--            <div class="right-sideabr">--}}
{{--              <h4>Manage Account</h4>--}}
{{--              <ul class="list-item">--}}
{{--                <li><a href="resume.blade.php">My Resume</a></li>--}}
{{--                <li><a href="bookmarked.blade.php">Bookmarked Jobs</a></li>--}}
{{--                <li><a class="active" href="notifications.blade.php">Notifications <span class="notinumber">2</span></a></li>--}}
{{--                <li><a href="manage-applications.blade.php">Manage Applications</a></li>--}}
{{--                <li><a href="job-alerts.blade.php">Job Alerts</a></li>--}}
{{--                <li><a href="change-password.blade.php">Change Password</a></li>--}}
{{--                <li><a href="index.html">Sing Out</a></li>--}}
{{--              </ul>--}}
{{--            </div>--}}
{{--          </div>--}}
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="job-alerts-item notification">
              <h3 class="alerts-title">Your Notifications</h3>
              <div class="notification-item">
                <div class="thums">
                  <img src="assets/img/jobs/img-1.jpg" alt="">
                </div>
                <div class="text-left">
                  <p>Your Bookmarked job "Web designer needed" from Banana Inc, has expired.</p>
                  <span class="time"><i class="lni-alarm-clock"></i>3 Hours ago</span>
                </div>
              </div>
              <div class="notification-item">
                <div class="thums">
                  <img src="assets/img/jobs/img-2.jpg" alt="">
                </div>
                <div class="text-left">
                  <p>Your Bookmarked job "Web designer needed" from Banana Inc, has expired.</p>
                  <span class="time"><i class="lni-alarm-clock"></i>3 Hours ago</span>
                </div>
              </div>
              <div class="notification-item">
                <div class="thums">
                  <img src="assets/img/jobs/img-3.jpg" alt="">
                </div>
                <div class="text-left">
                  <p>Your Bookmarked job "Web designer needed" from Banana Inc, has expired.</p>
                  <span class="time"><i class="lni-alarm-clock"></i>3 Hours ago</span>
                </div>
              </div>
              <div class="notification-item">
                <div class="thums">
                  <img src="assets/img/jobs/img-4.jpg" alt="">
                </div>
                <div class="text-left">
                  <p>Your Bookmarked job "Web designer needed" from Banana Inc, has expired.</p>
                  <span class="time"><i class="lni-alarm-clock"></i>3 Hours ago</span>
                </div>
              </div>
              <div class="notification-item">
                <div class="thums">
                  <img src="assets/img/jobs/img-5.jpg" alt="">
                </div>
                <div class="text-left">
                  <p>Your Bookmarked job "Web designer needed" from Banana Inc, has expired.</p>
                  <span class="time"><i class="lni-alarm-clock"></i>3 Hours ago</span>
                </div>
              </div>
              <div class="notification-item">
                <div class="thums">
                  <img src="assets/img/jobs/img-6.jpg" alt="">
                </div>
                <div class="text-left">
                  <p>Your Bookmarked job "Web designer needed" from Banana Inc, has expired.</p>
                  <span class="time"><i class="lni-alarm-clock"></i>3 Hours ago</span>
                </div>
              </div>
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
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
    <!-- End Content -->

@endsection
