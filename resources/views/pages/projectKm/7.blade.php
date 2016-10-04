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
						<h3>โครงการจัดแสดงนิทรรศการ และประกวดนักคิดรุ่นใหม่ นวัตกรรม สิ่งประดิษฐ์ทางการพยาบาลประจำปี 2559</h3>
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
								<li class="active">โครงการจัดแสดงนิทรรศการ และประกวดนักคิดรุ่นใหม่ นวัตกรรม สิ่งประดิษฐ์ทางการพยาบาลประจำปี 2559</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h3>โครงการจัดแสดงนิทรรศการ และประกวดนักคิดรุ่นใหม่ นวัตกรรม สิ่งประดิษฐ์ทางการพยาบาลประจำปี 2559</h3>
						<div class="text-center">
							<img src="{{ asset('/images/pages/projectKm/7/1.jpg') }}" class="img-responsive center-block">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
