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
						<h3>ข่าวประชาสัมพันธ์ชาว สนล.</h3>
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
								<li><a href="{{ url('OfficeSecrerariat') }}">สำนักงานเลขานุการ</a></li>
								<li class="active">ข่าวประชาสัมพันธ์</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h2>ข่าวประชาสัมพันธ์ชาว สนล.</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="panel-group catg" id="accordion1" aria-multiselectable="true">
									<div class="panel panel-default">
										<a class="catg" data-toggle="collapse" data-parent="#accordion1" href="#catg1" aria-expanded="true" >
											<div class="panel-heading" >
												<h4 class="panel-title">
													หัวข้อข่าว 1
												</h4>
											</div>
										</a>
										<div id="catg1" class="panel-collapse collapse in">
											<a href="{{ url('OfficeSecrerariat/news/news1') }}"><div class="panel-body">ข่าว 1</div></a>
											<a href="#"><div class="panel-body">ข่าว 2</div></a>
											<a href="#"><div class="panel-body">ข่าว 3</div></a>
											<a href="#"><div class="panel-body">ข่าว 4</div></a>
										</div>
									</div>
									<div class="panel panel-default">
										<a class="catg" data-toggle="collapse" data-parent="#accordion1" href="#catg2" aria-expanded="false" >
											<div class="panel-heading">
												<h4 class="panel-title">
													หัวข้อข่าว 2
												</h4>
											</div>
										</a>
										<div id="catg2" class="panel-collapse collapse" >
											<a href="#"><div class="panel-body">ข่าว 1</div></a>
											<a href="#"><div class="panel-body">ข่าว 2</div></a>
											<a href="#"><div class="panel-body">ข่าว 3</div></a>
											<a href="#"><div class="panel-body">ข่าว 4</div></a>
										</div>
									</div>
									<div class="panel panel-default">
										<a class="catg" data-toggle="collapse" data-parent="#accordion1" href="#catg3" aria-expanded="false" >
											<div class="panel-heading">
												<h4 class="panel-title">
													หัวข้อข่าว 3
												</h4>
											</div>
										</a>
										<div id="catg3" class="panel-collapse collapse" >
											<a href="#"><div class="panel-body">ข่าว 1</div></a>
											<a href="#"><div class="panel-body">ข่าว 2</div></a>
											<a href="#"><div class="panel-body">ข่าว 3</div></a>
											<a href="#"><div class="panel-body">ข่าว 4</div></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
