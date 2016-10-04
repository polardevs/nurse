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
						<h3>โครงการอบรมเชิงปฏิบัติการ เรื่อง การสื่บค้นสิทธิบัตร อนุสิทธิบัตร เพื่องานวิจัย</h3>
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
								<li class="active">โครงการอบรมเชิงปฏิบัติการ เรื่อง การสื่บค้นสิทธิบัตร อนุสิทธิบัตร เพื่องานวิจัย</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h3>โครงการอบรมเชิงปฏิบัติการ เรื่อง การสื่บค้นสิทธิบัตร อนุสิทธิบัตร เพื่องานวิจัย</h3>
						<div class="text-center">
							<img src="{{ asset('/images/pages/projectKm/10/1.jpg') }}" class="img-responsive center-block">
							<p class="padding-t-15">
								18 เมษายน 2558 รองศาสตราจารย์ ดร.มรรยาท รุจิวิชชญ์ คณบดีคณะพยาบาลศาสตร์ มธ. เป็นประธานในพิธีเปิดโครงการ เรื่อง “การสือค้นสิทธิบัตร อนุสิทธิบัตร เพื่องานวิจัย” จัดโดย คณะพยาบาลศาสตร์ ร่วมกับ สำนักทรัพย์สินทางปัญญาและบ่มเพาะวิสาหกิจ มหาวิทยาลัยธรรมศาสตร์ วิทยากรโดย คุณวีระเวช อรธนาลัย กรรมการผู้จัดการ บจก.อินเตอร์เล็คชวล ดี”ซน์ กรุ๊ป ณ ห้องปฏิบัติการคอมพิวเตอร์คอมพิวเตอร์ ชั้น 7 อาคารปิยชาติ มหาวิทยาลัยธรรมศาสตร์ ศูนย์รังสิต
							</p>
							<div class="row">
								@for ($i = 2; $i <= 10; $i++)
							    <div class="col-sm-3 padding-t-15">
										<a href="{{ asset('/images/pages/projectKm/10/' . $i . '.jpg') }}" target="_blank">
											<img src="{{ asset('/images/pages/projectKm/10/' . $i . '.jpg') }}" class="img-responsive center-block km-Img">
										</a>
									</div>
								@endfor
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
