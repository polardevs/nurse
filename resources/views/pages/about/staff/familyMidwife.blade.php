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
								<li class="active">สาขาการพยาบาลครอบครัวและผดุงครรภ์</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>สาขาการพยาบาลครอบครัวและผดุงครรภ์</h4>
						<div class="row img-advisors">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/about/familyMidwife/teacher1.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.ลาวัลย์ ใบมณฑา</b>
									<p>หัวหน้ากลุ่มวิชาการพยาบาลครอบครัวและผดุงครรภ์</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/familyMidwife/teacher2.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.ดร.พวงผกา คงวัฒนานนท์</b>
									<!-- <p></p> -->
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/familyMidwife/teacher3.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ดร.มยุรี นิรัตธราดร</b>
									<!-- <p></p> -->
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/familyMidwife/teacher4.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.สุดาพร กมลวารินทร์</b>
									<!-- <p></p> -->
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/familyMidwife/teacher5.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>รศ.วิไลลักษณ์ วงศ์อาษา</b>
									<!-- <p></p> -->
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/familyMidwife/teacher6.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.ดร.ณัฐพัชร์ บัวบุญ</b>
									<!-- <p></p> -->
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/familyMidwife/teacher7.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.ดร.ณัฏฐนันท์พร สงวนกลิ่น</b>
									<!-- <p></p> -->
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>รศ.ดร.พวงรัตน์ บุญญานุรักษ์</b>
									<!-- <p></p> -->
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.ปิยะพร กองเงิน</b>
									<!-- <p></p> -->
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.ศิริขวัญ พรหมจำปา</b>
									<!-- <p></p> -->
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.พรสวรรค์ คำทิพย์</b>
									<!-- <p></p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
