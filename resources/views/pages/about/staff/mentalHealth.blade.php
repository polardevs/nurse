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
								<li class="active">กลุ่มวิชาการพยาบาลสุขภาพจิตและจิตเวช</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>กลุ่มวิชาการพยาบาลสุขภาพจิตและจิตเวช</h4>

						<div class="row ">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/about/mentalHealth/nuchjanang.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.ดร. นุชนาถ บรรทุมพร</b>
									<p>ผู้รักษาการต่ำแหน่งหัวหน้ากลุ่มวิชา</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/mentalHealth/marayat.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>รองศาสตร์จารย์ ดร.</b>
									<p>มรรยาท รุจิวิชชญ์</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>รองศาสตร์จารย์</b>
									<p>สุวนีย์ เกี่ยวกิ่งแก้ว</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/mentalHealth/kasorn.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์</b>
									<p>เกสร มุ้ยจีน</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/mentalHealth/chomchaoem.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์ ดร.</b>
									<p>ชมชื่น สมประเสริฐ</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/mentalHealth/nitaya.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์ ดร.</b>
									<p>นิตยา ตากวิริยะนันท์</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์ ดร.</b>
									<p>รังสิมันต์ สุนทรไชยา</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/mentalHealth/sararud.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ดร.</b>
									<p>สารรัตน์ วุฒิอาภา</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/mentalHealth/supawadee_j.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์</b>
									<p>สุภาวดี เจริญวานิช</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์</b>
									<p>ปริยศ กิตติธีระศักดิ์</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/mentalHealth/eekuma.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์ ดร.</b>
									<p>เอกอุมา อิ้มคำ</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/mentalHealth/angkana.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์</b>
									<p>อังคณา จิรโรจน์</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/mentalHealth/tipsuda.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์</b>
									<p>ทิพย์สุดา สำเนียงเสนาะ</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
