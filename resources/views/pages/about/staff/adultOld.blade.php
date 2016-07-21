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
								<li class="active">การพยาบาลผู้ใหญ่และผู้สูงอายุ</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>การพยาบาลผู้ใหญ่และผู้สูงอายุ</h4>

						<div class="row ">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/about/adultOld/siriruk_k.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.ดร. ศิริลักษณ์ กิจศรีไพศาล</b>
									<p>ผู้รักษาการต่ำแหน่งหัวหน้ากลุ่มวิชา</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/adultOld/panoong.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ศาสตราจารย์ ดร.</b>
									<p>ประนอม โอทกานนท์</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/adultOld/bunjai.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>รองศาสตราจารย์ ดร.</b>
									<p>บุญใจ ศรีสถิตย์นรากูร</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์</b>
									<p>บังอร ปีประทุม</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/adultOld/teeranut.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>รองศาสตร์จารย์ ดร.</b>
									<p>ธีรนุช ห้านิรัติศัย</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์ ดร.</b>
									<p>เยาวรัตน์ มัชฌิม</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/adultOld/parinya.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์</b>
									<p>ปริญญา แร่ทอง</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/adultOld/yutagar.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ดร.</b>
									<p>โยทะกา ภคพงศ์</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/adultOld/suntara.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์ ดร.</b>
									<p>สุนทรา เลี้ยงเชวงวงศ์</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/adultOld/siriruk.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ดร.</b>
									<p>ศิริลักษณ์ แก้วศรีวงค์</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/adultOld/benjaporn.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ดร.</b>
									<p>เบญญพร บรรณสาร</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/adultOld/touchsanee.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์</b>
									<p>ทัศนีย์ ภู่สำอางค์</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์</b>
									<p>บุณฑริกา ชาตรีวัฒนกุล</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์</b>
									<p>บวรลักษณ์ ทองทวี</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/adultOld/patsanee.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์</b>
									<p>ปรัศนีย์ พันธุ์กสิกร</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์</b>
									<p>ฐิติพร ปฐมจารุวัฒน์</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์</b>
									<p>ธัญญารัตน์ บุญโทย</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/adultOld/jinpichar.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์</b>
									<p>จิณพิชญ์ชา มะมม</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/adultOld/peeyawon.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผู้ช่วยศาสตร์จารย์</b>
									<p>ปิยะวรรณ ขนาน</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อาจารย์</b>
									<p>วิชิยา ยลพันธ์</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
