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
								<li class="active">สำนักงานเลขานุการ</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>สำนักงานเลขานุการ</h4>
						<div class="row img-advisors">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/about/secretariat/jutamand.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>นางจุฑามาศ อินทรปรีชา</b>
									<p>เลขานุการคณะ คณะพยาบาลศาสตร์ มหาวิทยาลัยธรรมศาสตร์</p>
									<p>เลขานุการคณะพยาบาลศาสตร์</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/about/secretariat/jim.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>นางธัญญา วรินทรเวช</b>
									<p>เจ้าหน้าที่บริหารงานทั่วไปชำนาญการพิเศษ</p>
									<p>หัวหน้างานบริหารและพัฒนาทรัพยากรมนุษย์</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวสรรเสริญ สุขสว่าง</b>
									<p>เจ้าหน้าที่บริหารงานทั่วไปชำนาญการ</p>
									<p>หน่วยสารบรรณ</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/secretariat/rattikorn.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวรัตน์ติกร วรรธโนทัย</b>
									<p>เจ้าหน้าที่บริหารงานทั่วไป</p>
									<p>หน่วยสารบรรณ</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางพรทิพย์ ศรีวรรณพฤกษ์</b>
									<p>ผู้ปฏิบัติงานบริหาร</p>
									<p>หน่วยสารบรรณ</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวธมลวรรณ โดมกระจ่าง</b>
									<p>ผู้ปฏิบัติงานบริหาร</p>
									<p>หน่วยสารบรรณ</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางอนงค์ หะรีเมา</b>
									<p>บุคคลากรชำนาญการ</p>
									<p>หน่วยการเจ้าหน้าที่</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวอำภา วรรณรัตน์วงทอง</b>
									<p>เจ้าหน้าที่บริหารงานทั่วไป</p>
									<p>หน่วยการเจ้าหน้าที่</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นายพิพัฒน์ แสนธิ</b>
									<p>พนักงานขับรถยนต์</p>
									<p>หน่วยอาคารสถานที่และยานพาหนะ</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/secretariat/chaisin.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>นายฉายศิลป์ พรรณโคตร</b>
									<p>พนักงานขับรถยนต์</p>
									<p>หน่วยอาคารสถานที่และยานพาหนะ</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางจันทร์เพ็ญ จันทร์อยู่สุข</b>
									<p>พนักงานทั่วไป</p>
									<p>หน่วยผลิตเอกสาร</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางนงค์นุช จันทร์มา</b>
									<p>พนักงานสถานที่</p>
									<p>หน่วยผลิตเอกสาร</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/about/secretariat/nardtaya.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>นางนาตยา ทัพใหญ่</b>
									<p>นักวิชาการเงินและบัญชีชำนาญการพิเศษ  </p>
									<p>หัวหน้างานวางแผนและงบประมาณ</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวธราภรณ์ แสงโสดา</b>
									<p>นักวิชาการเงินและบัญชีชำนาญการ</p>
									<p>หน่วยคลัง</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาววัฒนาพร ไชยศิริ</b>
									<p>นักวิชาการเงินและบัญชี</p>
									<p>หน่วยคลัง</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสุภาพรรณ บุณยรัตพันธ์</b>
									<p>นักวิชาการพัสดุปฏิบัติการ</p>
									<p>หน่วยพัสดุ</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวศิริกาญจน์ดา สร้อยฟ้า</b>
									<p>นักวิเคราะห์นโยบายและแผนปฏิบัติการ</p>
									<p>หน่วยหน่วยแผนพัสดุ</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวสุรีย์พร โลหะชาติกุล</b>
									<p>นักวิเคราะห์นโยบายและแผน</p>
									<p>หน่วยหน่วยแผนพัสดุ</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/about/secretariat/natenapha.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>นางเนตรนภาภรณ์ เพ็ขรผึ้ง</b>
									<p>นักวิชาการศึกษาชำนาญการพิเศษ</p>
									<p>หัวหน้างานวิจัย วิเทศสัมพันธ์ และสื่อสารองค์การ</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-3">
								<img src="{{ asset('/images/pages/about/secretariat/venus.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาววีนัส ปาลาเลย์</b>
									<p>นักวิชาการศึกษา</p>
									<p>หน่วยวิจัยตำราและบทความทางวิชาการ</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสลิลดา เกตกะโกมล</b>
									<p>นักวิเทศสัมพันธ์ปฏิบัติการ</p>
									<p>หน่วยวิเทศสัมพันธ์และสื่อสารองค์กร</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นายประวิทย์ แว่นแค้น</b>
									<p>นักวิเทศสัมพันธ์ปฏิบัติการ</p>
									<p>หน่วยวิเทศสัมพันธ์และสื่อสารองค์กร</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวกาจญจณี พันธุ์ไฟโรจน์</b>
									<p>นักวิจัยปฏิบัติการ</p>
									<p>ศูนย์วิจัยทางการพยาบาลศาสตร์และพฤติกรรมศาสตร์</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางอุไร อาดหมาด</b>
									<p>ผู้ปฏิบัติการบริหาร</p>
									<p>ศูนย์วิจัยทางการพยาบาล</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวชุติมา อบเหลือง</b>
									<p>ผู้ช่วยนักวิจัย</p>
									<p>คณะอนุกรรมการจริยธรรม</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวบิลละห์ มิงสะ</b>
									<p>ผู้ช่วยนักวิจัย</p>
									<p>คณะอนุกรรมการจริยธรรม</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/about/secretariat/ratchaneechai.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวรัชนีฉาย บรรณทอง</b>
									<p>นักวิชาการศึกษาชำนาญการ </p>
									<p>หัวหน้างานวิชาการและพัฒนานักศึกษา</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวขวัญชนก ทองชมภู</b>
									<p>นักวิชาการศึกษา</p>
									<p>หน่วยปริญญาตรี</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสุภาพร คำศรี</b>
									<p>ผู้ปฏิบัติงานวิทยาศาสตร์</p>
									<p>หน่วยปริญญาตรี</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวทิฆัมพร ขวาของ</b>
									<p>นักวิชาการศึกษา</p>
									<p>หน่วยบันฑิตศึกษา</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวปริศนา ไชยแสง</b>
									<p>ผู้ปฏิบัติการงานบริหาร</p>
									<p>หน่วยบันฑิตศึกษา</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวศรีสลวย รอนไพริน</b>
									<p>นักวิชาการศึกษาปฏิบัติการ</p>
									<p>หน่วยกิจการนักศึกษา</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวกมลวรรณ สุดจิตร</b>
									<p>ผู้ปฏิบัติงานบริหาร</p>
									<p>หน่วยกิจการนักศึกษา</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นายวิชาญ แสงวันดี</b>
									<p>นักวิชาการคอมพิวเตอร์ปฏิบัติการ</p>
									<p>หน่วยเทคโนโลยีสารสนเทศ</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นายอรรถพล สุขความดี</b>
									<p>นักวิชาการคอมพิวเตอร์ปฏิบัติการ</p>
									<p>หน่วยเทคโนโลยีสารสนเทศ</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-4 col-md-offset-4">
								<img src="{{ asset('/images/pages/about/secretariat/pawon.jpg') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวภาวรรณ พันธ์ไพโรจน์</b>
									<p>นักวิชาการศึกษาชำนาญการ</p>
									<p>หัวหน้างานบริการวิชาการและพัฒนาคุณภาพ</p>
								</div>
							</div>
						</div>
						<div class="row img-advisors">
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสมฤทัย ลามอ</b>
									<p>นักวิชาการศึกษาปฏิบัติการ</p>
									<p>หน่วยบริการวิชาการ</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวศุภิชญา จันทร์มีทรัพย์</b>
									<p>ผู้ปฏิบัติการบริหาร</p>
									<p>หน่วยประกันคุณภาพการศึกษา</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-responsive">
								<div class="text-center">
									<b>นางสาวทักษพร ทิตติพงษ์</b>
									<p>นักวิชาการศึกษา</p>
									<p>โครงการหลักสูตรจิตเวช</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
