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
						<h3>งานกิจกรรมนักศึกษา</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.news')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="#">ศิลปวัฒนธรรม</a></li>
								<li><a href="#">กิจกรรม</a></li>
								<li class="active">ผลงานนักศึกษา</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<div class="row ">
							<div class="col-md-12">
								<table class="table table-bordered table-striped">
									<thead>
										<th>หัวข้อ</th>
										<th>รายชื่อนักศึกษา</th>
										<th>ชั้นปีที่</th>
										<th>พ.ศ.</th>
									</thead>
									<tbody>
										<tr>
											<td>ได้รับทุนการศึกษาตามโครงการเขียนเรียงความสำหรับเด็กและเยาวชนตามนโยบายของรัฐบาล</td>
											<td>นางสาวมานิดา  สุดันโธ</td>
											<td>2</td>
											<td>2546</td>
										</tr>
										<tr>
											<td>รางวัลนักศึกษาเรียนดีประจำปีการศึกษา 2546</td>
											<td>นางสาวฐิติพร  ปฐมจารุวัฒน์</td>
											<td>1</td>
											<td>2546</td>
										</tr>
										<tr>
											<td>รางวัลนักศึกษาเรียนดีประจำปีการศึกษา 2546</td>
											<td>นางสาวโจธิกา  เบ็ญชา</td>
											<td>1</td>
											<td>2546</td>
										</tr>
										<tr>
											<td>รางวัลนักศึกษาเรียนดีประจำปีการศึกษา 2546</td>
											<td>นายดุสิต  พรหมรักษ์</td>
											<td>2</td>
											<td>2546</td>
										</tr>
										<tr>
											<td>รางวัลนักศึกษาเรียนดีประจำปีการศึกษา 2546</td>
											<td>นางสาววีณา  รัตนคเชนทร์</td>
											<td>3</td>
											<td>2546</td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
