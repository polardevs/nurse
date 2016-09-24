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
						<h3>โครงการอบรมเชิงปฏิบัติการ เรื่อง Manuscript Writing Camp</h3>
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
								<li class="active">โครงการอบรมเชิงปฏิบัติการ เรื่อง Manuscript Writing Camp</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h3>โครงการอบรมเชิงปฏิบัติการ เรื่อง Manuscript Writing Camp</h3>
						<div class="text-center">
							<img src="{{ asset('/images/pages/projectKm/4/1.jpg') }}" class="img-responsive center-block">
							วันที่ 27 สิงหาคม 2559 รองศาสตราจารย์ ดร.มรรยาท รุจิวิชชญ์ คณบดีคณะพยาบาลศาสตร์ มหาวิทยาลัยธรรมศาสตร์ เป็นประธานเปิดโครงการอบรมเชิงปฏิบัติการ เรื่อง Manuscript Writing Camp พร้อมบรรยายเรื่อง “ความสำเร็จในการนำ manuscript ตีพิมพ์นานาชาติ” และได้รับเกียรติจาก ศาสตราจารย์ ดร.ผดุงศักดิ์ รัตนเดโช คณะวิศวกรรมศาสตร์ มหาวิทยาลัยธรรมศาสตร์ บรรยายเรื่อง “การเขียนบทความวิจัยเพื่อตีพิมพ์ในวารสารวิชาการนานาชาติ” โดยโครงการจัดขึ้นระหว่างวันที่ 27-28 สิงหาคม 2559 ณ ห้องประชุม 1023 คณะพยาบาลศาสตร์ มหาวิทยาลัยธรรมศาสตร์ ศูนย์รังสิต
							<div class="row">
								<div class="col-sm-3">
									<img src="{{ asset('/images/pages/projectKm/4/2.jpg') }}" class="img-responsive center-block">
								</div>
								<div class="col-sm-3">
									<img src="{{ asset('/images/pages/projectKm/4/3.jpg') }}" class="img-responsive center-block">
									
								</div>
								<div class="col-sm-3">
									<img src="{{ asset('/images/pages/projectKm/4/4.jpg') }}" class="img-responsive center-block">
									
								</div>
								<div class="col-sm-3">
									<img src="{{ asset('/images/pages/projectKm/4/5.jpg') }}" class="img-responsive center-block">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
