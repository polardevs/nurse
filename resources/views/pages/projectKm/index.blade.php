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
						<h3>โครงการ KM </h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.projectKm')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li class="active">โครงการ KM </li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>โครงการ KM</h4>
						<div class="row">
							<div class="col-sm-4">
								<a href="{{ url('projectKm/1') }}" target="_blank">
										<img src="{{ asset('/images/pages/projectKm/1.jpg') }}" class="img-responsive km-Img">
										<p>โครงการอบรมเชิงปฏิบัติการ เรื่อง “ขับเคลื่อนการจัดการความรู้ในองค์กร : สู่การพัฒนาคน งาน และองค์กร สู่ความเป็นเลิศตามแนว EdPEx” วันอังคารที่ ๑๑ ตุลาคม ๒๕๕๙ ณ ห้องประชุมสโมสร ชั้น ๔ คณะแพทยศาสตร์ มธ.ศูนย์รังสิต</p>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="{{ url('projectKm/2') }}" target="_blank">
										<img src="{{ asset('/images/pages/projectKm/2.jpg') }}" class="img-responsive km-Img">
										<p>โครงการอบรมเชิงปฎิบัติการ เรื่อง Thammasat Excellence Network 2559</p>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="{{ url('projectKm/3') }}" target="_blank">
										<img src="{{ asset('/images/pages/projectKm/3.jpg') }}" class="img-responsive km-Img">
										<p>โครงการอบรมภาษาอังกฤษหลักสูตรติวเข้ม เพื่อเตรียมสอบ TU-GET วันที่ 6-22 กันยายน 2559</p>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<a href="{{ url('projectKm/4') }}" target="_blank">
									<img src="{{ asset('/images/pages/projectKm/4.jpg') }}" class="img-responsive km-Img">
									<p>โครงการอบรมเชิงปฏิบัติการ เรื่อง Manuscript Writing Camp</p>
							</a>
						</div>
						<div class="col-sm-4">
							<a href="{{ url('projectKm/5') }}" target="_blank">
									<img src="{{ asset('/images/pages/projectKm/5/1.jpg') }}" class="img-responsive km-Img">
									<p>โครงการอบรมเชิงปฏิบัติการ เรื่อง “การขับเคลื่อนการจัดการความรู้ในองค์กร สู่การพัฒนาคน งาน และองค์กร”</p>
							</a>
						</div>
						<div class="col-sm-4">
							<a href="{{ url('projectKm/6') }}" target="_blank">
									<img src="{{ asset('/images/pages/projectKm/6/1.jpg') }}" class="img-responsive km-Img">
									<p>โครงการอบรมเชิงปฏิบัติการ เรื่อง Manuscript Writing Camp ระหว่างวันที่ 26-28 สิงหาคม 2559 ณ ห้องประชุม 1023 คณะพยาบาลศาสตร์ มหาวิทยาลัยธรรมศาสตร์ ศูนย์รังสิต</p>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<a href="{{ url('projectKm/7') }}" target="_blank">
									<img src="{{ asset('/images/pages/projectKm/7/1.jpg') }}" class="img-responsive km-Img">
									<p>โครงการจัดแสดงนิทรรศการ และประกวดนักคิดรุ่นใหม่ นวัตกรรม สิ่งประดิษฐ์ทางการพยาบาลประจำปี 2559</p>
							</a>
						</div>
						<div class="col-sm-4">
							<a href="{{ url('projectKm/8') }}" target="_blank">
									<img src="{{ asset('/images/pages/projectKm/8/1.jpg') }}" class="img-responsive km-Img">
									<p>โครงการรางวัลผลงานวิจัยตีพิมพ์ และรางวัล ระดับนานาชาติ และเงินทุนภายนอกหน่วยงาน คณะพยาบาลศาสตร์ ประจําปีงบประมาณ ๒๕๕๘-๓๐ พฤษภาคม ๒๕๕๙</p>
							</a>
						</div>
						<div class="col-sm-4">
							<a href="{{ url('projectKm/9') }}" target="_blank">
									<img src="{{ asset('/images/pages/projectKm/9/1.jpg') }}" class="img-responsive km-Img">
									<p>โครงการสนับสนุนการตีพิมพ์ผลงานวิจัย/ผลงานวิชาการในวารสารระดับนานานาชาติ สำหรับอาจารย์และนักวิจัยคณะพยาบาลศาสตร์ ประจำปีงบประมาณ ๒๕๕๙</p>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<a href="{{ url('projectKm/10') }}" target="_blank">
									<img src="{{ asset('/images/pages/projectKm/10/1.jpg') }}" class="img-responsive km-Img">
									<p>โครงการจัดแสดงนิทรรศการ</p>
							</a>
						</div>
						<div class="col-sm-4">
							<a href="{{ url('projectKm/11') }}" target="_blank">
									<img src="{{ asset('/images/pages/projectKm/11/1.jpg') }}" class="img-responsive km-Img">
									<p>โครงการจัดแสดงนิทรรศการ</p>
							</a>
						</div>
						<div class="col-sm-4">
							<a href="{{ url('projectKm/12') }}" target="_blank">
									<img src="{{ asset('/images/pages/projectKm/12/1.jpg') }}" class="img-responsive km-Img">
									<p>โครงการจัดแสดงนิทรรศการ</p>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<a href="{{ url('projectKm/13') }}" target="_blank">
									<img src="{{ asset('/images/pages/projectKm/13/1.jpg') }}" class="img-responsive km-Img">
									<p>โครงการจัดแสดงนิทรรศการ</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
