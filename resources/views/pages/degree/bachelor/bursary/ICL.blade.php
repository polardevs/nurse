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
						<h3>กองทุนให้กู้ยืมเพื่อการศึกษา (กรอ.)</h3>
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
								<li><a href="#">หลักสูตร</a></li>
								<li><a href="{{ url('degree/bachelor') }}">ปริญญาตรี</a></li>
								<li><a href="#">บริการนักศึกษา</a></li>
								<li class="active">กองทุนให้กู้ยืมเพื่อการศึกษา (กรอ.)</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>กองทุนให้กู้ยืมเพื่อการศึกษา (กรอ.)</h4>
						คณะพยาบาลศาสตร์ ได้รับการสถาปนาเป็นคณะลำดับที่ 14 ของมหาวิทยาลัยธรรมศาสตร์ เมื่อวันที่ 28 มิถุนายน 2539 ตามประกาศในราชกิจจานุเบกษา ฉบับกฤษฎีกา เล่มที่ 113 ตอนที่ 24 ก คณะพยาบาลศาสตร์ ได้รับการก่อตั้งตามแผนพัฒนาการศึกษา ระดับอุดมศึกษาระยะที่ 7 (พ.ศ. 2535 - 2539) ในการจัดการศึกษาสาขาวิชาชีพการพยาบาล ของมหาวิทยาลัยธรรมศาสตร์ เพื่อผลิตพยาบาล ในการให้บริการด้านการดูแลสุขภาพแก่สังคม และเพื่อปฏิบัติงานใน โรงพยาบาลธรรมศาสตร์เฉลิมพระเกียรติ โดยได้ตัดโอนบุคลากรที่เกี่ยวข้องกับการศึกษาพยาบาลทั้งหมด รวมทั้งหลักสูตรประกาศนียบัตรผู้ช่วยพยาบาล (หลักสูตร 1 ปี) พ.ศ. 2538 จากคณะแพทยศาสตร์ มหาวิทยาลัยธรรมศาสตร์ ในปีการศึกษา 2539 คณะพยาบาลศาสตร์ ได้เริ่มจัดการเรียนการสอนเป็นปีแรก โดยเปิดสอน 2 หลักสูตร คือ หลักสูตรพยาบาลศาสตรบัณฑิต (พย.บ.) และหลักสูตรประกาศนียบัตรผู้ช่วยพยาบาล (หลักสูตร 1 ปี) ทั้งนี้ได้จัดการเรียนการสอน หลักสูตรประกาศนียบัตรผู้ช่วยพยาบาลเพียง 1 รุ่น สำหรับหลักสูตรพยาบาลศาสตรบัณฑิต ได้มีการปรับปรุงหลักสูตรเป็นบางส่วน 2 ครั้ง ในปี พ.ศ. 2540 และ พ.ศ. 2541 และปรับปรุงหลักสูตรทั้งหลักสูตร ในปี พ.ศ. 2546 เป็น หลักสูตรพยาบาลศาสตรบัณฑิต (ฉบับปรับปรุง พ.ศ. 2547) และเริ่มใช้หลักสูตรนี้ ตั้งแต่ปีการศึกษา 2547 เป็นต้นมาในปีการศึกษา 2548 คณะพยาบาลศาสตร์ได้เปิดสอน หลักสูตรพยาบาลศาสตรมหาบัณฑิต 2 สาขาวิชาได้แก่ สาขาการพยาบาลสุขภาพจิตและจิตเวช และสาขาการพยาบาลเวชปฏิบัติครอบครัว คณะพยาบาลศาสตร์ เน้นความสำคัญของการดูแลสุขภาพแบบองค์รวมตั้งแต่วัยเด็กจนถึงวัยผู้สูงอายุ จึงได้จัดตั้งศูนย์พัฒนาเด็กปฐมวัย ในปี พ.ศ. 2542 และศูนย์ส่งเสริมสุขภาพ ในปี พ.ศ. 2547 เพื่อเป็นแหล่งฝึกปฏิบัติของนักศึกษาพยาบาลทุกหลักสูตร ให้บริการวิชาการแก่ประชาคมธรรมศาสตร์และสังคม และเป็นแหล่งการทำวิจัยควบคู่กันไป กับการเรียนการสอนและการบริการอย่างสม่ำเสมอและต่อเนื่อง เพื่อก้าวสู่การเป็นศูนย์แห่งความเป็นเลิศในอนาคต
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
