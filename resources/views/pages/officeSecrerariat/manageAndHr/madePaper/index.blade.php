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
						<h3>หน่วยการเจ้าหน้าที่</h3>
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
								<li class="active">หน่วยการเจ้าหน้าที่</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>หน่วยการเจ้าหน้าที่</h4>
						<!-- <img src="{{ asset('/images/pages/degree/bachelor/img06.jpg') }}" class="img-responsive"> -->
						<h6>หลักสูตรพยาบาลศาสตรบัณฑิต  (หลักสูตรปรับปรุง พ.ศ. 2556)</h6>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
