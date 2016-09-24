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
						<h3>โครงการอบรมภาษาอังกฤษหลักสูตรติวเข้ม เพื่อเตรียมสอบ TU-GET วันที่ 6-22 กันยายน 2559</h3>
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
								<li class="active">โครงการอบรมภาษาอังกฤษหลักสูตรติวเข้ม เพื่อเตรียมสอบ TU-GET วันที่ 6-22 กันยายน 2559</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h3>โครงการอบรมภาษาอังกฤษหลักสูตรติวเข้ม เพื่อเตรียมสอบ TU-GET วันที่ 6-22 กันยายน 2559</h3>
						<div class="text-center">
							<div class="row">
								<div class="col-sm-3">
									<img src="{{ asset('/images/pages/projectKm/3/1.jpg') }}" class="img-responsive center-block">
								</div>
								<div class="col-sm-3">
									<img src="{{ asset('/images/pages/projectKm/3/2.jpg') }}" class="img-responsive center-block">
									
								</div>
								<div class="col-sm-3">
									<img src="{{ asset('/images/pages/projectKm/3/3.jpg') }}" class="img-responsive center-block">
									
								</div>
								<div class="col-sm-3">
									<img src="{{ asset('/images/pages/projectKm/3/5.jpg') }}" class="img-responsive center-block">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
