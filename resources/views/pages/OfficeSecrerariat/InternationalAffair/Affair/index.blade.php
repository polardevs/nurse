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
						<h3>หน่วยวิเทศสัมพันธ์และสื่อสารองค์กร</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.OfficeSecrerariat')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="#">สำนักงานเลขานุการ</a></li>
								<li class="active">หน่วยวิเทศสัมพันธ์และสื่อสารองค์กร</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>หน่วยวิเทศสัมพันธ์และสื่อสารองค์กร</h4>
						<!-- <img src="{{ asset('/images/pages/degree/bachelor/img06.jpg') }}" class="img-responsive"> -->
						<!-- <h6>หลักสูตรพยาบาลศาสตรบัณฑิต  (หลักสูตรปรับปรุง พ.ศ. 2556)</h6> -->

						<!-- <form class="form-horizontal">
							<div class="form-group">
								<label class="col-md-2 control-label">ชื่อหลักสูตร</label>
								<div class="col-md-10">
									<div class="form-control-static">หลักสูตรพยาบาลศาสตรบัณฑิต</div>
									<div class="form-control-static">Bachelor of Nursing Science Program</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword" class="col-md-2 control-label">ชื่อปริญญา</label>
								<div class="col-md-10">
									<div class="form-control-static">พยาบาลศาสตรบัณฑิต ( พย.บ. )</div>
									<div class="form-control-static">Bachelor of Nursing Science ( B.N.S. )</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword" class="col-md-12 control-label">โครงสร้างหลักสูตร</label>
								<div class="col-md-12">
									<div class="form-control-static"> 1.จำนวนหน่วยกิตรวมตลอดหลักสูตร		141 หน่วยกิต</div>
									<ul>
										<li>1.1 วิชาศึกษาทั่วไป	30 หน่วยกิต</li>
										<li>1.2 วิชาเฉพาะ	105 หน่วยกิต
											<ul>
												<li>(1) กลุ่มวิชาพื้นฐานวิชาชีพ	28 หน่วยกิต</li>
												<li>(1) กลุ่มวิชาชีพ	77 หน่วยกิต
													<ul>
														<li>- กลุ่มรายวิชาทฤษฏี	51 หน่วยกิต</li>
														<li>- กลุ่มรายวิชาปฏิบัติ	26 หน่วยกิต</li>
													</ul>
												</li>
											</ul>
										</li>
										<li>1.3 วิชาเลือกเสรี	6 หน่วยกิต</li>
									</ul>
								</div>
							</div>
						</form> -->
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
