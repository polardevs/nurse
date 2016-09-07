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
						<h3>คณะเรา</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.about')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="#">คณะเรา</a></li>
								<li><a href="#">บุคลากร</a></li>
								<li class="active">การพยาบาลเด็กและวัยรุ่น</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>การพยาบาลเด็กและวัยรุ่น</h4>

						<div class="row ">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/about/childTeen/chikamong.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.ชิดกมล สังข์ทอง</b>
									<p>ผู้รักษาการแทนในตำแหน่งหัวหน้ากลุ่มวิชาฯ</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.ดร.ปรีย์กมล รัชนกุล</b>
									<p></p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/childTeen/panida.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.ดร.พนิดา ศิริอำพันธ์กุล</b>
									<!-- <p></p> -->
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/childTeen/jurirat.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.จุไรรัตน์ กีบาง</b>
									<!-- <p>จุไรรัตน์ กีบาง</p> -->
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/childTeen/patchporn.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.พัชรพร แก้ววิมล</b>
									<!-- <p>พัชรพร แก้ววิมล</p> -->
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/childTeen/wipada.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.วิภาดา แสงนิมิตรชัยกุล</b>
									<!-- <p>วิภาดา แสงนิมิตรชัยกุล</p> -->
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.ดร.วาริยา หมื่นสา</b>
									<!-- <p>วาริยา หมื่นสา</p> -->
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/childTeen/sayamong.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.ศยามล รมพิพัฒน์</b>
									<!-- <p>ศยามล รมพิพัฒน์</p> -->
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/childTeen/supawadee.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.สุภาวดี ทับกล่ำ</b>
									<!-- <p>สุภาวดี ทับกล่ำ</p> -->
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
