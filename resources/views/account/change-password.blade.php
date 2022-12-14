@extends('layouts.app')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-header">
              <h3>Change Password</h3>
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
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="right-sideabr">
                  <h4>Manage Account</h4>
                  <ul class="list-item">
                    <li><a href="resume.blade.php">My Resume</a></li>
                    <li><a href="bookmarked.blade.php">Bookmarked Jobs</a></li>
                    <li><a href="notifications.blade.php">Notifications <span class="notinumber">2</span></a></li>
                    <li><a href="manage-applications.blade.php">Manage Applications</a></li>
                    <li><a href="job-alerts.blade.php">Job Alerts</a></li>
                    <li><a class="active" href="change-password.blade.php">Change Password</a></li>
                    <li><a href="index.html">Sing Out</a></li>
                  </ul>
              </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <div class="job-alerts-item">
                <h3 class="alerts-title">Change Password</h3>
                <form class="form">
                  <div class="form-group is-empty">
                    <label class="control-label">Old Password*</label>
                    <input class="form-control" type="text">
                    <span class="material-input"></span>
                  </div>
                  <div class="form-group is-empty">
                    <label class="control-label">New Password*</label>
                    <input class="form-control" type="text">
                    <span class="material-input"></span>
                  </div>
                  <a href="#" id="submit" class="btn btn-common">Save Change</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Content -->

@endsection
