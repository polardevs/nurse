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
						<h3>หน่วยสารบรรณฯ</h3>
					</div>
				</div>
				<div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.ArchivesMenu')
				</div>
				<div class="col-md-10">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li><a href="#">สำนักงานเลขานุการ</a></li>
								<li class="active">หน่วยสารบรรณฯ</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
            <h4>แบบฟอร์มต่างๆ</h4>
						<p>1. ระเบียบการฝึกปฏิบัติ  <a href="http://www.nurse.tu.ac.th/bachelor-degree/%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B8%A2%E0%B8%9A%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9D%E0%B8%B6%E0%B8%81%E0%B8%9B%E0%B8%8F%E0%B8%B4%E0%B8%9A%E0%B8%B1%E0%B8%95%E0%B8%B4.doc" target="_blank">[DOC]</a></p>
						<p>2. ระเบียบเหตุการณ์วิสามัญ  <a href="http://www.nurse.tu.ac.th/bachelor-degree/%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B8%A2%E0%B8%9A%E0%B9%80%E0%B8%AB%E0%B8%95%E0%B8%B8%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%93%E0%B9%8C%E0%B8%A7%E0%B8%B4%E0%B8%AA%E0%B8%B2%E0%B8%A1%E0%B8%B1%E0%B8%8D.doc" target="_blank">[DOC]</a></p>
						<span class="text-info">สอบถามรายละเอียดเพิ่มเติม</span> คณะพยาบาลศาสตร์  โทรศัพท์ 0-2986-9213 ต่อ 7323
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
