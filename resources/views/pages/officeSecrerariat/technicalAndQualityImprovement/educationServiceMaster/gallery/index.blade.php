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
						<h3>อัลบั้มรูปภาพ</h3>
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
								<li class="active">อัลบั้มรูปภาพ</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<div class=row>
							<div class="col-md-4 text-center">
								<a href="{{ url('OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/gallery/activity1') }}">
									<div class="gallery">
										<img src="{{ asset('/images/pages/degree/activity/camping.jpg') }}" class="img-responsive">
										<p>กิจกรรม 1</p>
									</div>
								</a>
							</div>
							<div class="col-md-4 text-center">
								<a href="{{ url('OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/gallery/activity2') }}">
									<div class="gallery">
										<img src="{{ asset('/images/pages/degree/activity/colorful.jpg') }}" class="img-responsive">
										<p>กิจกรรม 2</p>
									</div>
								</a>
							</div>
							<div class="col-md-4 text-center">
								<a href="{{ url('OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/gallery/activity3') }}">
									<div class="gallery">
										<img src="{{ asset('/images/pages/degree/activity/cycling.jpg') }}" class="img-responsive">
										<p>กิจกรรม 3</p>
									</div>
								</a>
							</div>
							<div class="col-md-4 text-center">
								<a href="{{ url('OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/gallery/activity4') }}">
									<div class="gallery">
										<img src="{{ asset('/images/pages/degree/activity/summer.jpg') }}" class="img-responsive">
										<p>กิจกรรม 4</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
