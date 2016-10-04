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
						<h3>คณะกรรมการการศึกษา</h3>
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
								<li><a href="#">คณะกรรมการการศึกษา</a></li>
								<!-- <li><a href="{{ url('degree/bachelor') }}">ปริญญาตรี</a></li>
								<li class="active">ข้อบังคับ</li> -->
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						
            <div class="content">
              <h4>คณะกรรมการการศึกษา</h4>
              @include('layouts.partials.underConstruction')
            </div>
						<!-- <span class="text-info">สอบถามรายละเอียดเพิ่มเติม</span> คณะพยาบาลศาสตร์  โทรศัพท์ 0-2986-9213 ต่อ 7323 -->
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
