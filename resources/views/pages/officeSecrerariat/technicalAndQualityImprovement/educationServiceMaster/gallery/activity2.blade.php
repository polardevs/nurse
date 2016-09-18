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
						<h3>กิจกรรม 2</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.EducationServiceMasterMenu')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="{{ url('OfficeSecrerariat') }}">สำนักงานเลขานุการ</a></li>
								<li>บริการวิชาการและประกันคุณภาพ</li>
								<li><a href="{{ url('OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/') }}">โครงการบริการ การศึกษาหลักสูตรพยาบาลศาสตรมหาบัณฑิตสาขาการพยาบาลจิตเวชและสุขภาพจิต</a></li>
								<li><a href="{{ url('OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/gallery') }}">อัลบั้มรูปภาพ</a></li>
								<li class="active">กิจกรรม 2</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>กิจกรรม 2</h4>
						<div class="row">
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity2/girls.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity2/girls.jpg') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity2/cycling.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity2/cycling.jpg') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity2/summer.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity2/summer.jpg') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity2/political.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity2/political.jpg') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity2/Logo_Nurseing_TU.png') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity2/Logo_Nurseing_TU.png') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity2/colorful.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity2/colorful.jpg') }}" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="img-gallery">
									<a href="{{ asset('/images/pages/degree/activity/activity2/camping.jpg') }}" target="_blank">
										<img src="{{ asset('/images/pages/degree/activity/activity2/camping.jpg') }}" class="img-responsive">
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
