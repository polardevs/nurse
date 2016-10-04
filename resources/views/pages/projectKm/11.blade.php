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
						<h3>โครงการนำเสนอ ผลงาน เรื่อง “นวัตกรรม และสิ่งประดิษฐ์ ก้าวล้ำสู่ระดับสากล”</h3>
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
								<li class="active">โครงการนำเสนอ ผลงาน เรื่อง “นวัตกรรม และสิ่งประดิษฐ์ ก้าวล้ำสู่ระดับสากล”</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h3>โครงการนำเสนอ ผลงาน เรื่อง “นวัตกรรม และสิ่งประดิษฐ์ ก้าวล้ำสู่ระดับสากล”</h3>
						<div class="">
							<p class="padding-t-15">
								 ฝ่ายวิจัย คณะพยาบาลศาสตร์ มหาวิทยาลัยธรรมศาสตร์ จัดโครงการนำเสนอ ผลงาน เรื่อง “นวัตกรรม และสิ่งประดิษฐ์ ก้าวล้ำสู่ระดับสากล”
									เพื่อสนับสนุน ให้กำลังใจ และเป็นแรงบันดาลใจให้อาจารย์ นักวิจัย นำเสนอผลงานวิจัย/สิ่งประดิษฐ์/นวัตกรรมที่ได้รับการสร้างสรรค์หรือรับรางวัล แสดงความรู้ความสามารถต่อสาธารณชน และเพื่อเปิดโอกาสให้อาจารย์ นักวิจัย และนักศึกษา ได้แลกเปลี่ยนเรียนรู้และเสริมสร้างบรรยากาศการวิจัย/สร้างสรรค์สิ่งประดิษฐ์/นวตกรรมร่วมกัน โดยมีผู้เข้าร่วมได้แก่ อาจารย์ นักศึกษา บุคลากรจากงานบริหารการวิจัยและงานประชาสัมพันธ์ มหาวิทยาลัยธรรมศาสตร์ และบุคลากรคณะพยาบาลศาสตร์
									โดยมีการนำเสนอสิ่งประดิษฐ์ที่ได้รับรางวัลดังนี้
									<br>
									1. นำเสนอผลงาน เรื่อง เตียงพลิกตะแคงตัวระบบไฟฟ้า<br>
									โดย ผู้ช่วยศาสตราจารย์ จิณพิชญ์ชา มะมม อาจารย์ประจำกลุ่มวิชาการพยาบาลผู้ใหญ่และผู้สูงอายุ<br>
									– รางวัลเหรียญทอง (Gold Medal Award)<br>
									– รางวัลพิเศษ (Special Award)<br>
									จากประเทศไต้หวัน ในด้านการพัฒนา คุณภาพชีวิตและครอบครัวในงาน “43th International Exhibitions of Inventions of Geneva”ระหว่างวันที่ 15-19 เมษายน 2558 ณ กรุงเจนีวา สมาพันธรัฐสวิส
									<br>

									2. นำเสนอผลงาน เรื่อง เครื่องตรวจจับเสียงเสมหะเพื่อการวินิจฉัยและควบคุมเตียงอัตโนมัติ(Automatic Lung Congestion Sensor –PPG)<br>
									โดย อาจารย์สุภาวดี ทับกล่ำ อาจารย์ประจำกลุ่มวิชาการพยาบาลเด็กและวัยรุ่น
									– รางวัล Semi-Grand Prize (คนไทยคนเดียวที่ได้รับรางวัลระดับ Semi Grand Prize)<br>
									– รางวัล Special Award เหรียญทองเกียรติยศ (Gold with Honors) จากประเทศโปแลนด์<br>
									ในงาน “SEOUL International Invention Fair (SIIF 2015)” ระหว่างวันที่ 26-29 พฤศจิกายน 2558
									ประเทศเกาหลีใต้
							</p>
							<div class="row">
								@for ($i = 1; $i <= 4; $i++)
							    <div class="col-sm-3 padding-t-15">
										<a href="{{ asset('/images/pages/projectKm/11/' . $i . '.jpg') }}" target="_blank">
											<img src="{{ asset('/images/pages/projectKm/11/' . $i . '.jpg') }}" class="img-responsive center-block km-Img">
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
