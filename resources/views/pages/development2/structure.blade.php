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
						<h3>โครงสร้าง</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.development')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="#">งานพัฒนานักศึกษา</a></li>
								<li class="active">โครงสร้าง</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>โครงสร้าง</h4>
						<div class="row img-advisors">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/development/structure/manyat.jpg') }}" class="img-responsive center-block">
								<div class="text-center">
									<b>คณบดี คณะพยาบาลศาสตร์ มหาวิทยาลัยธรรมศาสตร์</b>
									<p>รศ.ดร.มรรยาท รุจิวิชชญ์</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/development/structure/puangphaka.jpg') }}" class="img-responsive center-block">
								<div class="text-center">
									<b>รองคณะบดีฝ่ายพัฒนานักศึกษา</b>
									<p>ผศ.ดร.พวงผกา คงวัฒนานนท์</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/development/structure/kasorn.jpg') }}" class="img-responsive center-block">
								<div class="text-center">
									<b>ผู้ช่วยคณะบดีฝ่ายพัฒนานักศึกษา</b>
									<p>อ.เกสร มุ้ยจีน</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-3 col-md-offset-3">
								<img src="{{ asset('/images/pages/development/structure/Logo_Nurseing_TU.png') }}" class="img-responsive center-block">
								<div class="text-center">
									<b>นักวิชาการศึกษาปฏิบัติการ</b>
									<!-- <p>นาง จุฑามาศ อินทรปรีชา</p> -->
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/structure/Logo_Nurseing_TU.png') }}" class="img-responsive center-block">
								<div class="text-center">
									<b>ผู้ปฏิบัติงานบริหาร</b>
									<!-- <p>นาง จุฑามาศ อินทรปรีชา</p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
