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
						<h3>กิจกรรม 1</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.activity')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li>กิจกรรม</li>
								<li><a href="{{ url('activity/gallery') }}">ภาพกิจกรรม</a></li>
								<li class="active">กิจกรรม 1</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>กิจกรรม 1</h4>
						<div class="row">
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity1/girls.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity1/girls.jpg') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity1/cycling.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity1/cycling.jpg') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity1/summer.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity1/summer.jpg') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity1/political.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity1/political.jpg') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity1/Logo_Nurseing_TU.png') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity1/Logo_Nurseing_TU.png') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity1/colorful.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity1/colorful.jpg') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity1/camping.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity1/camping.jpg') }}" class="img-responsive">
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
