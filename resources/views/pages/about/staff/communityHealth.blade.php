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
								<li class="active">การพยาบาลอนามัยชุมชน</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>การพยาบาลอนามัยชุมชน</h4>

						<div class="row ">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.สุกัญญา พูลโพธิ์กลาง</b>
									<p>หัวหน้ากลุ่มวิชาการพยาบาลอนามัยชุมชน</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/communityHealth/pagaypatch.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์</b>
									<p>ประกายเพชร วินัยประเสริฐ์</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/communityHealth/saowarat.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์</b>
									<p>เสาวลักษณ์ ค้าของ</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/communityHealth/sutasinee.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์</b>
									<p>เรือเอกหญิงสุธาสินี ศรีนุ่น</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์</b>
									<p>แสงวรรณ ตั้งแสงสกุล</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/communityHealth/pandtip.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>รองศาสตร์จารย์</b>
									<p>พานทิพย์ แสงประเสริฐ</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์ ดร.</b>
									<p>จุลจราพร สินศิริ</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/communityHealth/jeeraporn.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์ ดร.</b>
									<p>จีราภรณ์ กรรมบุตร</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/communityHealth/wanalada.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ดร.</b>
									<p>วนลดา ทองใบ</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
