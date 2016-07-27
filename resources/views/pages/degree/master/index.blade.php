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
						<h3>ปริญญาโท</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.master')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="#">หลักสูตร</a></li>
								<li class="active">ปริญญาโท</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>ปริญญาโท</h4>
						<img src="{{ asset('/images/pages/degree/master/img06.jpg') }}" class="img-responsive">
						<h6>หลักสูตรบัณฑิตศึกษา</h6>
						เปิดรับนักศึกษา 3 สาขา ได้แก่<br>
						<div class="text-danger">1.  หลักสูตรพยาบาลศาสตรมหาบัณฑิต สาขาวิชาการพยาบาลเวชปฏิบัติชุมชน</div>
						Master of Nursing Science Program in Community Nurse Practitioner  <br>
						       
						<div class="text-danger">2.  หลักสูตรพยาบาลศาสตรมหาบัณฑิต   สาขาการพยาบาลผู้ใหญ่</div>
					    Master of Nursing Science Program in Adult Nursing <br>

						<div class="text-danger">3.  พยาบาลศาสตรมหาบัณฑิต  สาขาวิชาการพยาบาลสุขภาพจิตและจิตเวช</div>
					    Master of Nursing Science Program in Mental Health and Psychiatric Nursing<br>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
