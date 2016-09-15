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
						<h3>คณะกรรมการฯ</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.quality')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="#">งานพัฒนานักศึกษา</a></li>
								<li class="active">คณะกรรมการฯ</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>คณะกรรมการพัฒนานักศึกษา ส่งเสริมศิลปวัฒนธรรมและศิษย์เก่าสัมพันธ์</h4>
						<div class="row img-advisors">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/development/board/puangphaka.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ประธานกรรมการ</b>
									<p>ผศ.ดร.พวงผกา คงวัฒนานนท์</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/development/board/kasorn.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>รองประธานกรรมการ</b>
									<p>อ.เกษร มุ้ยจีน</p>
								</div>
							</div>
						</div>
						<h4>กรรมการ</h4>
						<div class="row img-advisors">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/saowarat.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.เสาวลักษณ์ ค้าของ</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.ปิยะพร กองเงิน</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.ปริญญา แร่ทอง</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/jeeraporn.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.จีราภรณ์ กรรมบุตร</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/pagaypatch.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.ประกายเพชร วินัยประเสริฐ</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/sayamong.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.ศยามล รมพิพัฒน์</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.ศิริขวัญ พรหมจำปา</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/jurirat.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.จุไรรัตน์ กีบาง</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/sutasinee.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.รอ.หญิง สุธาสินี ศรีนุ่น</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/touchsanee.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.ทัศนีย์ ภู่สำอางค์</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.ฐิติพร ปฐมจารุวัฒน์</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางธัญญา วรินทรเวช</b>
								</div>
							</div>					
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางอนงค์ หะรีเมา</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวธราภรณ์ แสงโสดา</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวพรทิพย์ แม่นทรง</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นายอรรถพล สุขความดี</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางรจนา ณ นคร</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวสุภาพร คำศรี</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวธมลวรรณ โคมกระจ่าง</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวศรีสลวย รอนไพริน</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวพรทิพย์ ศรีวรรณพฤกษ์</b>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/development/board/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวกมลวรรณ สุดจิตร</b>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
