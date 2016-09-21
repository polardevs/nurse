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
						<h3>สิ่งที่นักศึกษาควรรู้</h3>
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
								<li><a href="active">สิ่งที่นักศึกษาควรรู้</a></li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>สิ่งที่นักศึกษาควรรู้</h4>
						@include('layouts.partials.underConstruction')
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
