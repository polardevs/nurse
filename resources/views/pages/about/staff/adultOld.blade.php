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
						<div class="row img-advisors">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/about/adultOld/siriruk_k.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.ดร.ศิริลักษณ์ กิจศรีไพศาล</b>
									<p>ผู้รักษาการตำแหน่งหัวหน้ากลุ่มวิชา</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/adultOld/teeranut.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.ดร.ธีรนุช ห้านิรัติศัย</b>
									<!-- <p></p> -->
								</div>
							</div>
              <div class="col-md-3">
                <img src="{{ asset('/images/pages/about/adultOld/benjaporn.jpg') }}" class="img-responsive">
                <div class="text-center">
                  <b>อ.ดร.เบญญพร บรรณสาร</b>
                  <!-- <p></p> -->
                </div>
              </div>
      				<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/adultOld/yutagar.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.ดร.โยทะกา ภคพงศ์</b>
									<!-- <p></p> -->
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/adultOld/suntara.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>ผศ.ดร.สุนทรา เลี้ยงเชวงวงศ์</b>
									<!-- <p></p> -->
								</div>
							</div>
						</div>
						<div class="row img-advisors">
              <div class="col-md-3">
                <img src="{{ asset('/images/pages/about/adultOld/jinpichar.jpg') }}" class="img-responsive">
                <div class="text-center">
                  <b>ผศ.จิณพิชญ์ชา มะมม</b>
                  <!-- <p></p> -->
                </div>
              </div>
              <div class="col-md-3">
                <img src="{{ asset('/images/pages/about/adultOld/touchsanee.jpg') }}" class="img-responsive">
                <div class="text-center">
                  <b>อ.ทัศนีย์ ภู่สำอางค์</b>
                  <!-- <p></p> -->
                </div>
              </div>
              <div class="col-md-3">
                <img src="{{ asset('/images/pages/about/adultOld/patsanee.jpg') }}" class="img-responsive">
                <div class="text-center">
                  <b>อ.ปรัศนีย์ พันธุ์กสิกร</b>
                  <!-- <p></p> -->
                </div>
              </div>
              <div class="col-md-3">
                <img src="{{ asset('/images/pages/about/adultOld/peeyawon.jpg') }}" class="img-responsive">
                <div class="text-center">
                  <b>ผศ.ปิยะวรรณ ขนาน</b>
                  <!-- <p></p> -->
                </div>
              </div>
						</div>
						<div class="row img-advisors">
              <div class="col-md-3">
                <img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
                <div class="text-center">
                  <b>ผศ.ดร.เยาวรัตน์ มัชฌิม</b>
                  <!-- <p></p> -->
                </div>
              </div>
              <div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.วิชิยา ยลพันธ์</b>
									<!-- <p></p> -->
								</div>
							</div>
              <div class="col-md-3">
                <img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
                <div class="text-center">
                  <b>อ.บังอร ปีประทุม</b>
                  <!-- <p></p> -->
                </div>
              </div>
              <div class="col-md-3">
                <img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
                <div class="text-center">
                  <b>อ.ธัญญารัตน์ บุญโทย</b>
                  <!-- <p></p> -->
                </div>
              </div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.บวรลักษณ์ ทองทวี</b>
									<!-- <p></p> -->
								</div>
							</div>
              <div class="col-md-3">
                <img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
                <div class="text-center">
                  <b>อ.บุณฑริกา ชาตรีวัฒนกุล</b>
                  <!-- <p></p> -->
                </div>
              </div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>อ.ฐิติพร ปฐมจารุวัฒน์</b>
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
