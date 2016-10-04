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
						<h3>บทความวิชาการ / วิจัย</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu hidden">
					@include('layouts.partials.navmenus.news')
				</div>
				<div class="col-md-12">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li class="active">บทความวิชาการ / วิจัย</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<div class="row ">
							<div class="col-md-12">
								<i class="fa fa-hand-o-right" aria-hidden="true"></i>
								 บทความ เรื่อง "บทความการสร้างเสริมสุขภาพผู้ป่วยความดันโลหิตสูงสำหรับอาสาสมัครสาธารณสุข"   โดย ผศ.พานทิพย์  แสงประเสริฐ 
								<a href="#" class="text-info">อ่านรายละเอียดได้ที่นี่ค่ะ</a>
							</div>
							<div class="col-md-12">
								<i class="fa fa-hand-o-right" aria-hidden="true"></i>
								บทความ เรื่อง "การสร้างเสริมสุขภาพตามกลุ่มวัยสำหรับอาสาสมัครสาธารณสุข"  โดย ผศ.พานทิพย์  แสงประเสริฐ
								<a href="#" class="text-info">อ่านรายละเอียดได้ที่นี่ค่ะ</a>
							</div>
							<div class="col-md-12">
								<i class="fa fa-hand-o-right" aria-hidden="true"></i>
								 บทความ เรื่อง "เตรียมลูกอย่างไร? เมื่อต้องเข้ารักษาในโรงพยาบาล"  โดย อาจารย์ วิภาดา  แสงนิมิตรชัยกุล 
								<a href="#" class="text-info" class="text-info">อ่านรายละเอียดได้ที่นี่ค่ะ</a>
							</div>
							<div class="col-md-12">
								<i class="fa fa-hand-o-right" aria-hidden="true"></i>
								 บทความ เรื่อง "โคลิก- เด็กร้องร้อยวัน : การดูแลสำหรับคุณพ่อ คุณแม่ มือใหม่"  โดย อ.ชิดกมล สังข์ทอง
								<a href="#" class="text-info">อ่านรายละเอียดได้ที่นี่ค่ะ</a>
							</div>
							<div class="col-md-12">
								<i class="fa fa-hand-o-right" aria-hidden="true"></i>
								บทความ เรื่อง "การใช้ยาในผู้สูงอายุที่มีโรคเรื้อรัง"  โดย อาจารย์พานทิพย์  แสงประเสริฐ 
								<a href="#" class="text-info">อ่านรายละเอียดได้ที่นี่ค่ะ</a> 
							</div>
							<div class="col-md-12">
								<i class="fa fa-hand-o-right" aria-hidden="true"></i>
								บทความ เรื่อง "บทความซึมเศร้า" โดย อาจารย์ปริยศ กิติธีระศักดิ์ 
								<a href="#" class="text-info">อ่านรายละเอียดได้ที่นี่ค่ะ</a> ประจำเดือนพฤษภาคม
							</div>
							<div class="col-md-12">
								<i class="fa fa-hand-o-right" aria-hidden="true"></i>
								บทความ เรื่อง "มะเร็งเต้านม" โดย อาจารย์จิณพิชญ์ชา มะมม
								<a href="#" class="text-info">อ่านรายละเอียดได้ที่นี่ค่ะ</a> ประจำเดือนตุลาคม
							</div>
							<div class="col-md-12">
								<i class="fa fa-hand-o-right" aria-hidden="true"></i>
								บทความจิตวิทยา เรื่อง "การจัดการความเครียด"   โดย ผศ.ดร. มรรยาท รุจิวิทย์ 
								<a href="#" class="text-info">อ่านรายละเอียดได้ที่นี่ค่ะ</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	@parent
	
@endsection
