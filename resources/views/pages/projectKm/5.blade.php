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
						<h3>โครงการอบรมเชิงปฏิบัติการ เรื่อง “การขับเคลื่อนการจัดการความรู้ในองค์กร สู่การพัฒนาคน งาน และองค์กร”</h3>
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
								<li class="active">โครงการอบรมเชิงปฏิบัติการ เรื่อง “การขับเคลื่อนการจัดการความรู้ในองค์กร สู่การพัฒนาคน งาน และองค์กร”</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h3>โครงการอบรมเชิงปฏิบัติการ เรื่อง “การขับเคลื่อนการจัดการความรู้ในองค์กร สู่การพัฒนาคน งาน และองค์กร”</h3>
						<div class="text-center">
							<img src="{{ asset('/images/pages/projectKm/5/1.jpg') }}" class="img-responsive center-block km-Img">
							<p>ลงทะเบียนเข้าร่วมโครงการในระบบออนไลน์   https://goo.gl/forms/zbNUai41r34uffB02</p>
							<p>ตั้งแต่บัดนี้ – 26 สิงหาคม 2559</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
