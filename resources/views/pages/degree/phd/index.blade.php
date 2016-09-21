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
						<h3>ปริญญาเอก</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.phd')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="">หลักสูตร</a></li>
								<li class="active">ปริญญาเอก</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>ปริญญาเอก</h4>
						@include('layouts.partials.underConstruction')
						<!-- <h6>หลักสูตรพยาบาลดุษฎีบัณฑิต  </h6> -->
            <form class="form-horizontal">
							<div class="form-group">
								<!-- <label class="col-md-2 control-label">History</label> -->
								<div class="col-md-10">
									<div class="form-control-static">History</div>
									<div class="form-control-static">The faculty of nursing was established on June 28th, 1996. It is the fourteenth faculty of Thammasat University. There are approximately 80-100 students enrolled in each year. They are selected by means of a quota and an admission process.</div>
								</div>
							</div>
						<form class="form-horizontal">
							<div class="form-group">
								<!-- <label class="col-md-2 control-label">History</label> -->
								<div class="col-md-10">
									<div class="form-control-static">PHILOSOPHY</div>
									<div class="form-control-static">The Faculty of Nursing believes that the nursing profession is an essential part of society. Nursing plays a vital role in Holistic health care, ranging from infants to the elderly, from those with perfect health to those with severe illness. The goal of nursing is to assist individuals to maintain the well-being of their families and communities. Clients and families are of the utmost importance for the nursing profession. There are the centers of nursing care. Clients must have the right to be informed and to make decisions about their own care. Nursing education is a socialization process that provides knowledge, develops professional ethics, and nursing skill so that the nurses can work effectively as professionals at all levels. The quality of the teaching-learning process focuses on a student-centered approach to develop critical thinking and the self-directed learning skills that lead to life-long learning</div>
								</div>
							</div>
							<!-- <div class="form-group">
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
								</div> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
