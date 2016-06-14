<div class="main-header">
	<div class="sub-header">
		<div class="container">
			<div class="row" style="margin-bottom: 15px; margin-top: 10px;	">
				<div class="col-sm-6" >
					<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="img-logo">
					<div class="inline" style="position: absolute; padding-top: 20px">
						<span class="h2">คณะพยาบาลศาสตร์</span>
						<br>
						<span class="h4">มหาวิทยาลัยธรรมศาสตร์</span>
					</div>
				</div>

				<div class="col-sm-6 line-right hidden-xs">
					<div class="row">
						<nav class="navbar pull-right nav-link">
							 <ul class="nav navbar-nav">
			        			<li><a href="#">ชมรมศิษย์เก่า</a></li>
			        			<li><a href="#">วิจัยและจริยธรรมการวิจัย</a></li>
			        			<li><a href="#">ฝ่ายวิจัย</a></li>
			        			<li><a href="#">บริการวิชาการ</a></li>
			        			<li><a href="#">ฝ่ายการนักศึกษา</a></li>
			        		</ul>
						</nav>
					</div>
					<div class="row pull-right">
						
					</div>
				</div>
			</div>		
		</div>
	</div>
</div>

<nav class="navbar navbar-default {{ Request::segment(1) ? 'bg-black' : '' }}" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- <a class="navbar-brand" href="#">คณะเรา</a> -->
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">
						คณะเรา <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="/history">ความเป็นมา</a></li>
						<li><a href="#">ผู้บริหาร</a></li>
						<li ><a href="#">บุคลากร</a></li>
						<li role="separator" class="divider"></li>
						<li ><a href="#">กลุ่มวิชาการพยาบาลครอบครัวและผดุงครรภ์</a></li>
						<li ><a href="#">กลุ่มวิชาการพยาบาลผู้ใหญ่และผู้สูงอายุ</a></li>
						<li ><a href="#">กลุ่มวิชาการพยาบาลเด็กและวัยรุ่น</a></li>
						<li ><a href="#">กลุ่มวิชาการพยาบาลสุขภาพจิตและจิตเวช</a></li>
						<li ><a href="#">กลุ่มวิชาการพยาบาลอนามัยชุมชน</a></li>
						<li ><a href="#">สำนักงานเลขานุการคณะ</a></li>
					</ul>
				</li>
				<li><a href="#">ศิลปวัฒนธรรม</a></li>
				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">
						ประกันคุณภาพการศึกษา <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">บทความ</a></li>
						<li><a href="#">รายงานวิเคราะห์</a></li>
						<li><a href="#">ดาวน์โหลด</a></li>
					</ul>
				</li>
				<li><a href="#">International Affairs</a></li>
				<li><a href="#">มุมดาวน์โหลด</a></li>
				<li><a href="#">ติดต่อ</a></li>

			</ul>
		</div>
	</div>
</nav>