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

						<div class="row ">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/about/familyMidwife/teacher1.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อ. ลาวัลย์ ใบมณฑา</b>
									<p>หัวหน้ากลุ่มวิชาการพยาบาลครอบครัวและผดุงครรภ์</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/familyMidwife/teacher2.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์ ดร.</b>
									<p>พวงผกา คงวัฒนานนท์</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/familyMidwife/teacher3.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์ ดร.</b>
									<p>มยุรี นิรัตธราดร</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/familyMidwife/teacher4.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์ ดร.</b>
									<p>สุดาพร กมลวารินทร์</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/familyMidwife/teacher5.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>รองศาสตร์จารย์</b>
									<p>วิไลลักษณ์ วงศ์อาษา</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/familyMidwife/teacher6.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์ ดร.</b>
									<p>ณัฐพัชร์ บัวบุญ</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/familyMidwife/teacher7.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์ ดร.</b>
									<p>ณัฏฐนันท์พร สงวนกลิ่น</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>รองศาสตร์จารย์ ดร.</b>
									<p>รศ.ดร. พวงรัตน์ บุญญานุรักษ์</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์</b>
									<p>ปิยะพร กองเงิน</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์</b>
									<p>ศิริขวัญ พรหมจำปา</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์</b>
									<p>พรสวรรค์ คำทิพย์</p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
