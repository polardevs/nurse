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
								<li class="active">ผู้บริหาร</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>คณบดี</h4>
						<div class="row ">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/about/manager/manyat.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>คณบดี คณะพยาบาลศาสตร์ มหาวิทยาลัยธรรมศาสตร์</b>
									<p>รศ.ดร.มรรยาท รุจิวิชชญ์</p>
								</div>
							</div>
						</div>

						<h4>ดำรงตำแหน่งรองคณบดี</h4>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/manager/teeranuch.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ฝ่ายบริหารและวิชาการ์</b>
									<p>ผศ.ดร.ธีรนุช	ห้านิรัติศัย</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/manager/peekamount.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ฝ่ายวางแผนและประกันคุณภาพ</b>
									<p>ผศ.ดร.ปรีย์กมล รัชนกุล</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/manager/punkpaka.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ฝ่ายพัฒนานักศึกษาและบริการวิชาการ</b>
									<p>ผศ.ดร. พวงผกา คงวัฒนานนท์</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/manager/sararud.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ฝ่ายวิจัย วิเทศสัมพันธ์ และสื่อสารองค์กร</b>
									<p>ดร. สารรัตน์ วุฒิอาภา</p>
								</div>
							</div>
						</div>

						<h4>ผู้ช่วยคณบดี</h4>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>ฝ่ายวิเทศสัมพันธ์และสื่อสารองค์กร</b>
									<p>ดร.วาริยา หมื่นสา</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/manager/nuttanunporn.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ฝ่ายพัฒนาบุคลากรและเทคโนโลยีทางการศึกษา</b>
									<p>ณัฏฐนันท์พร สงวนกลิ่น</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/manager/kasorn.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ฝ่ายพัฒนานักศึกษาและศิษย์เก่าสัมพันธ์</b>
									<p>อ.เกสร มุ้ยจีน์</p>
								</div>
							</div>
						</div>

						<h4>เลขานุการคณะพยาบาลศาสตร์</h4>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/manager/jutamand.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>เลขานุการคณะ</b>
									<p>นาง จุฑามาศ อินทรปรีชา</p>
								</div>
							</div>
						</div>

						<h4>หัวหน้างาน</h4>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/manager/thanya.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>งานบริหารและพัฒนาทรัพยากรมนุษย์</b>
									<p>นางธัญญา วรินทรเวช</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/manager/ratchaneechai.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>งานวิชาการและพัฒนานักศึกษา</b>
									<p>นางสาวรัชนีฉาย บรรณทอง</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/manager/pawon.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>งานบริการวิชาการและพัฒนาคุณภาพ</b>
									<p>นางสาวภาวรรณ พันธ์ไพโรจน์</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/manager/natenapha.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>งานวิจัย วิเทศสัมพันธ์ และสื่อสารองค์กร</b>
									<p>นางเนตรนภาภรณ์ เพ็ชรผึ้ง</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/manager/nardtaya.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>งานวางแผนและงบประมาณ</b>
									<p>นางนาตยา ทัพใหญ่</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
