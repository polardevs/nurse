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
						<h3>โครงการอบรมเชิงปฏิบัติการ เรื่อง “ขับเคลื่อนการจัดการความรู้ในองค์กร : สู่การพัฒนาคน งาน และองค์กร สู่ความเป็นเลิศตามแนว EdPEx” วันอังคารที่ ๑๑ ตุลาคม ๒๕๕๙ ณ ห้องประชุมสโมสร ชั้น ๔ คณะแพทยศาสตร์ มธ.ศูนย์รังสิต</h3>
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
								<li><a href="{{ url('projectKm') }}">โครงการ KM </a></li>
								<li class="active">โครงการอบรมเชิงปฏิบัติการ เรื่อง “ขับเคลื่อนการจัดการความรู้ในองค์กร : สู่การพัฒนาคน งาน และองค์กร สู่ความเป็นเลิศตามแนว EdPEx” วันอังคารที่ ๑๑ ตุลาคม ๒๕๕๙ ณ ห้องประชุมสโมสร ชั้น ๔ คณะแพทยศาสตร์ มธ.ศูนย์รังสิต</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h3>โครงการอบรมเชิงปฏิบัติการ เรื่อง “ขับเคลื่อนการจัดการความรู้ในองค์กร : สู่การพัฒนาคน งาน และองค์กร สู่ความเป็นเลิศตามแนว EdPEx” วันอังคารที่ ๑๑ ตุลาคม ๒๕๕๙ ณ ห้องประชุมสโมสร ชั้น ๔ คณะแพทยศาสตร์ มธ.ศูนย์รังสิต</h3>
						<div class="text-center">
							<img src="{{ asset('/images/pages/projectKm/1/1.jpg') }}" class="img-responsive center-block">
							<h2>ลงทะเบียนออนไลน์</h2>

							<h2>สามารพคลิ๊กที่ QR-CODE ได้ค่ะ</h2>
							<img src="{{ asset('/images/pages/projectKm/1/2.png') }}" class="img-responsive center-block">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
