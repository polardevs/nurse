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
								<a href="{{ url('projectKm/1') }}">
										<img src="{{ asset('/images/pages/projectKm/1.jpg') }}" class="img-responsive km-Img">
										<p>โครงการอบรมเชิงปฏิบัติการ เรื่อง “ขับเคลื่อนการจัดการความรู้ในองค์กร : สู่การพัฒนาคน งาน และองค์กร สู่ความเป็นเลิศตามแนว EdPEx” วันอังคารที่ ๑๑ ตุลาคม ๒๕๕๙ ณ ห้องประชุมสโมสร ชั้น ๔ คณะแพทยศาสตร์ มธ.ศูนย์รังสิต</p>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="{{ url('projectKm/2') }}">
										<img src="{{ asset('/images/pages/projectKm/2.jpg') }}" class="img-responsive km-Img">
										<p>โครงการอบรมเชิงปฎิบัติการ เรื่อง Thammasat Excellence Network 2559</p>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="{{ url('projectKm/3') }}">
										<img src="{{ asset('/images/pages/projectKm/3.jpg') }}" class="img-responsive km-Img">
										<p>โครงการอบรมภาษาอังกฤษหลักสูตรติวเข้ม เพื่อเตรียมสอบ TU-GET วันที่ 6-22 กันยายน 2559</p>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
							<div class="col-sm-4">
								<a href="{{ url('projectKm/4') }}">
										<img src="{{ asset('/images/pages/projectKm/4.jpg') }}" class="img-responsive km-Img">
										<p>โครงการอบรมเชิงปฏิบัติการ เรื่อง Manuscript Writing Camp</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
