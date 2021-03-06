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
						<h3>ใบลาป่วย</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.bachelor')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="#">ใบลาป่วย</a></li>
								<!-- <li><a href="{{ url('degree/bachelor') }}">ปริญญาตรี</a></li>
								<li class="active">ข้อบังคับ</li> -->
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>ใบลาป่วย</h4>
						<p><a href="http://www.nurse.tu.ac.th/pdf/leave.pdf" target="_blank">1. PDF File  [PDF]</a></p>
						<p><a href="http://www.nurse.tu.ac.th/bachelor-degree/%E0%B9%83%E0%B8%9A%E0%B8%A5%E0%B8%B2%E0%B8%9B%E0%B9%88%E0%B8%A7%E0%B8%A2.doc" target="_blank">2. Word File  [DOC]</a></p>
						<!-- <span class="text-info">สอบถามรายละเอียดเพิ่มเติม</span> คณะพยาบาลศาสตร์  โทรศัพท์ 0-2986-9213 ต่อ 7323 -->
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
