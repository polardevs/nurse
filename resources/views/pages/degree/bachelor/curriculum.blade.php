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
						<h3>ปริญญาตรี</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.bachelor')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="#">หลักสูตร</a></li>
								<li><a href="{{ url('degree/bachelor') }}">ปริญญาตรี</a></li>
								<li class="active">การเรียนการสอน ภาคทฤษฎี/ปฏิบัติ</li>
								

							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<h4>การเรียนการสอน ภาคทฤษฎี/ปฏิบัติ</h4>
						<h6>หลักสูตรพยาบาลศาสตรบัณฑิต  (หลักสูตรปรับปรุง พ.ศ. 2556)</h6>

						<div class="row">
							<div class="col-md-12">
								<iframe name="54" width="100%" height="600px" src="{{ asset('/pdf/degree/bachelor/curriculum/curriculum.pdf') }}" frameborder="0"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
