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
						<h3>แบบฟอร์มต่างๆ ของมธ.</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.GeneralAffairsMenu')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="{{ url('OfficeSecrerariat') }}">สำนักงานเลขานุการ</a></li>
								<li><a href="{{ url('OfficeSecrerariat/ManageAndHr/GeneralAffairs') }}">หน่วยการเจ้าหน้าที่</a></li>
								<li class="active">แบบฟอร์มต่างๆ ของมธ.</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>แบบฟอร์มต่างๆ ของมธ.</h4>
						<!-- <img src="{{ asset('/images/pages/degree/bachelor/img06.jpg') }}" class="img-responsive"> -->

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
