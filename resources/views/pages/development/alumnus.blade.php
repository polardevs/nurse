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
						<h3>สมาคมศิษย์เก่าฯ</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.developmentGoal')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="#">งานพัฒนานักศึกษา</a></li>
								<li><a href="{{ url('development/goal') }}" target="_blank">เป้าหมาย</a></li>
								<li class="active">สมาคมศิษย์เก่าฯ</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>สมาคมศิษย์เก่าฯ</h4>
						Under Construction Page
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
