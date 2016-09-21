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
						<h3>แบบฟอร์มขอถ่ายเอกสาร</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.MadePaperMenu')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="{{ url('OfficeSecrerariat') }}">สำนักงานเลขานุการ</a></li>
								<li>บริหารพัฒนาทรัพยากรคน</li>
								<li><a href="{{ url('OfficeSecrerariat/ManageAndHr/MadePaper') }}">หน่วยผลิตเอกสาร</a></li>
								<li class="active">แบบฟอร์มขอถ่ายเอกสาร</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>แบบฟอร์มขอถ่ายเอกสาร</h4>
						@include('layouts.partials.underConstruction')
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
