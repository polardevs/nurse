@extends('layouts.app')

@section('htmlheader_title')
  Faculty of Nursing Thammasat University
@endsection

@section('main-content')
	<div class="template-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12 menu-title">
						<h3>กิจกรรม 3</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.bachelor')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="#">หลักสูตร</a></li>
								<li><a href="{{ url('degree/bachelor') }}">ปริญญาตรี</a></li>
								<li><a href="#">กิจกรรมนักศึกษา</a></li>
								<li><a href="{{ url('degree/bachelor/gallery') }}">ภาพกิจกรรมต่างๆ</a></li>
								<li class="active">กิจกรรม 3</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>กิจกรรม 3</h4>
						<div class="row">
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity3/girls.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity3/girls.jpg') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity3/cycling.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity3/cycling.jpg') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity3/summer.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity3/summer.jpg') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity3/political.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity3/political.jpg') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity3/Logo_Nurseing_TU.png') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity3/Logo_Nurseing_TU.png') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity3/colorful.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity3/colorful.jpg') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity3/camping.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity3/camping.jpg') }}" class="img-responsive">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
