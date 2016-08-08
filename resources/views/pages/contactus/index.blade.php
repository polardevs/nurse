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
						<h3>ติดต่อเรา</h3>
					</div>
				</div>
				<!-- <div class="col-md-2 side-menu">
					@include('layouts.partials.navmenus.news')
				</div> -->
				<div class="col-md-12">
					<div class="sub-menu">
						<small>
							<ol class="breadcrumb">
								<li><a href="/">หน้าหลัก</a></li>
								<li class="active">ติดต่อเรา</li>
							</ol>
						</small>
						<hr>
					</div>
					<div class="content">
						<div class="row">
							<div class="col-md-12">
								ชื่อสถาบัน : คณะพยาบาลศาสตร์<br>
								มหาวิทยาลัยธรรมศาสตร์ <br>
								ที่ตั้ง : อาคารปิยชาติ 99 หมู่ 18 ถนนพหลโยธิน <br>
								ตำบลคลองหนึ่ง อำเภอคลองหลวง จังหวัดปทุมธานี <br>
								รหัสไปรษณีย์ 12120 <br>
								โทรศัพท์ : 66-2-986 9213 ต่อ 7316-8 <br>
								โทรสาร : 66--2-516 5381 <br>
								http://www.nurse.tu.ac.th <br><br>
							</div>
							<div class="col-md-12">
								<div id="googleMap" style="height:380px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	@parent
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script>
		var myCenter=new google.maps.LatLng(14.0830617,100.5876353);
		function initialize(){
			var mapProp = {
				center:myCenter,
				zoom:10,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			};
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
			var marker=new google.maps.Marker({
			  	position:myCenter,
			  });
			marker.setMap(map);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
@endsection
