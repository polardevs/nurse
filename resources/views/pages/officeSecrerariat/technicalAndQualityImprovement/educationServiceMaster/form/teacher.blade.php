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
						<h3>สำหรับอาจารย์และเจ้าหน้าที่</h3>
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
								<li>แบบฟอร์ม</li>
								<li class="active">สำหรับอาจารย์และเจ้าหน้าที่</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>สำหรับอาจารย์และเจ้าหน้าที่</h4>
						@include('layouts.partials.underConstruction')
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
