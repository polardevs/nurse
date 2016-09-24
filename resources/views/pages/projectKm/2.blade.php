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
						<h3>โครงการอบรมเชิงปฎิบัติการ เรื่อง Thammasat Excellence Network 2559</h3>
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
								<li class="active">โครงการอบรมเชิงปฎิบัติการ เรื่อง Thammasat Excellence Network 2559</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h3>โครงการอบรมเชิงปฎิบัติการ เรื่อง Thammasat Excellence Network 2559</h3>
						<div class="text-center">
							<img src="{{ asset('/images/pages/projectKm/2/1.jpg') }}" class="img-responsive center-block">
							โครงการอบรมเชิงปฎิบัติการ เรื่อง Thammasat Excellence Network 2559 ก้าวสู่ความเป็นเลิศด้วยการจัดการความรู้และความเสี่ยง ในวันที่ 9 – 11 กันยายน 2559 ณ โรงแรมแคนทารี จังหวัดปราจีนบุรี
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
