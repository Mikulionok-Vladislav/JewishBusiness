@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Account</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Start Content -->
    <div class="section">
        <div class="container">
            <div class="row">



                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="right-sideabr">
                        <h4>Manage Account</h4>

                        {{--@foreach($resumes as $resume)--}}
                        <ul class="list-item">
                            <li><a
                                    {{--                                    class="active"--}}
                                    href="{{route('resume', ['id'=>1])}}">My Resume</a></li>
                            <li><a style="color:red" href="bookmarked.blade.php">Bookmarked Jobs</a></li>
                            <li><a href="{{route('notifications')}}">Notifications <span class="notinumber">2</span></a></li>
                            <li><a style="color:red" href="manage-applications.blade.php">Manage Applications</a></li>
                            <li><a style="color:red" href="job-alerts.blade.php">Job Alerts</a></li>
                            <li><a style="color:red" href="change-password.blade.php">Change Password</a></li>
                            <li><a style="color:red" href="index.html">Sing Out</a></li>
                        </ul>

                        {{--                        @endforeach--}}
                    </div>
                </div>

                @yield('account_content')

            </div>
        </div>
    </div>
    <!-- End Content -->

@endsection
