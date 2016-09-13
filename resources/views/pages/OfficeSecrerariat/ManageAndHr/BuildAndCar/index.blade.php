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
						<h3>หน่วยอาคารสถานที่และยานพาหนะ</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.BuildAndCarMenu')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="#">สำนักงานเลขานุการ</a></li>
								<li class="active">หน่วยอาคารสถานที่และยานพาหนะ</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>หน่วยอาคารสถานที่และยานพาหนะ</h4>
						<!-- <img src="{{ asset('/images/pages/degree/bachelor/img06.jpg') }}" class="img-responsive"> -->
						<h6>หน่วยอาคารสถานที่และยานพาหนะ </h6>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
