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
						<h3>สูตรด้านส่งเสริมศิลปะและวัฒนธรรม</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.development')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="#">งานพัฒนานักศึกษา</a></li>
								<li><a href="#">กิจกรรมนักศึกษา</a></li>
								<li class="active">สูตรด้านส่งเสริมศิลปะและวัฒนธรรม</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>สูตรด้านส่งเสริมศิลปะและวัฒนธรรม</h4>
						@include('layouts.partials.underConstruction')
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
