@extends('layouts.app')

@section('htmlheader_title')
  Faculty of Nursing Thammasat University
@endsection

@section('main-content')
	<div class="sidebar">
		<div class="sidebar-item">
			<a href="http://childhood.nurse.tu.ac.th/" data-toggle="tooltip" title="ศูนย์พัฒนาเด็กปฐมวัย" data-placement="right" >
				<img src="{{ asset('/images/pages/home/services/Childhood.png') }}" class="center-block">
			</a>
		</div>
		<div class="sidebar-item">
			<a href="http://www.nurse.tu.ac.th/Home/Hindex%2017_11_53.html" data-toggle="tooltip" title="ศูนย์ส่งเสริมสุขภาพ " data-placement="right" >
				<img src="{{ asset('/images/pages/home/services/health.png') }}" class="center-block">
			</a>
		</div>
		<div>
			<a href="http://researchcenter.nurse.tu.ac.th/" data-toggle="tooltip" title="ศูนย์วิจัยทางการพยาบาลและพฤติกรรมศาสตร์" data-placement="right" >
				<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="center-block">
			</a>
		</div>
	</div>
    <section class="Home-Course">
        <div class="slider-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="content-mission">
                            <h1>พัฒนาคณะให้เป็นสถาบันการศึกษาพยาบาลชั้นนำ</h1>
                            <h2>เป็นที่ยอมรับทั้งในระดับชาติและนานาชาติ</h2>
                            <span class="btn btn-warning">หลักสูตรทั้งหมด</span>
                        </div>
                    </div>
	            </div> <!-- row end  -->
	            <div class="row">
                    <div class="col-md-12">
                        <div class="row article-news">
            				<a href="#">
	            				<div class="col-md-4">
									<img src="{{ asset('/images/pages/home/news/1.jpg') }}" class="img-responsive">
									<div class="caption">
						            	<h4>จัดทำโครงร่างองค์การระดับมหาวิทยาลัย</h4>
									</div>
	            				</div>
	            			</a>
            				<a href="#">
	            				<div class="col-md-4">
									<img src="{{ asset('/images/pages/home/news/2.jpg') }}" class="img-responsive">
									<div class="caption">
						            	<h4>การสือค้นสิทธิบัตร อนุสิทธิบัตร เพื่องานวิจัย</h4>
				    				</div>
	            				</div>
	            			</a>
            				<a href="#">
	            				<div class="col-md-4">
									<img src="{{ asset('/images/pages/home/news/3.jpg') }}" class="img-responsive">
									<div class="caption">
						            	<h4>๒๐ ปี คณะพยาบาลศาสตร์ </h4>
				    				</div>
	            				</div>
	            			</a>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <span class="btn btn-warning" style="margin-top:30px;">ข่าวทั้งหมด</span>
                    </div>
	            </div>
	        </div>
        </div>
    </section>

    <section class="Home-Vision">
    	<div class="container">
    		<div class="row">
    			<div class="heading-inner col-md-12">
    				<h2 class="sec-title">วิสัยทัศน์</h2>
    				<p>"เป็นสถาบันการศึกษาพยาบาลชั้นนำในการผลิตบัณฑิตทุกระดับที่มีคุณภาพและได้มาตรฐานระดับสากล  มีความโดดเด่นด้านคุณธรรมจริยธรรม และความเป็นธรรมศาสตร์  เป็นศูนย์วิจัยทางการพยาบาล ที่บูรณาการองค์ความรู้ทางการพยาบาลและศาสตร์ที่เกี่ยวข้อง เพื่อนำไปใช้ประโยชน์ในการ ให้บริการวิชาการแก่สังคมและการเรียนการสอนได้อย่างต่อเนื่อง" </p>
    			</div>
    			<div class="heading-inner col-md-12">
    				<h2 class="sec-title">พันธกิจ</h2>
    				<p>
    					ด้วยปณิธานและวิสัยทัศน์ดังกล่าวข้างต้น จึงได้กำหนดพันธกิจหลักในการบริหารคณะไว้ 6 ด้าน ในวาระ 3 ปีข้างหน้า ดังนี้
    				<br>
    					1.   ผลิตบัณฑิตทั้งในระดับปริญญาตรีและระดับบัณฑิตศึกษาที่มีคุณภาพและได้มาตรฐานแห่งวิชาชีพ มีคุณธรรมจริยธรรม และความเป็นธรรมศาสตร์
    				<br>
    					2.   พัฒนาอาจารย์ให้มีความรู้และทักษะในการสอนและการทำวิจัยอย่างมีประสิทธิภาพ เพื่อสร้างผลงานวิจัย ที่มีคุณภาพและได้มาตรฐาน สามารถตีพิมพ์เผยแพร่ผลงานวิจัยในฐานข้อมูลสากล
    				<br>
						3.   เป็นศูนย์วิจัยทางการพยาบาล เพื่อสร้างองค์ความรู้ทางการพยาบาลในสาขาต่างๆ และองค์ความรู้เชิงบูรณาการ ในศาสตร์อื่นที่เกี่ยวข้อง
					<br>
						4.   บูรณาการการเรียนการสอน การวิจัย และการบริการวิชาการแก่สังคม เพื่อสร้างองค์ความรู้ใหม่ในการ ช่วยแก้ไขปัญหาสุขภาพที่เกิดขึ้นทั้งในประเทศและในภูมิภาคต่างๆของโลก
					<br>
						5.   สร้างและพัฒนาเครือข่ายความร่วมมือทางวิชาการ การวิจัย ศิลปะและวัฒนธรรมระหว่างประเทศ เพื่อให้คณะ เป็นที่รู้จักในเวทีนานาชาติ
					<br>
						6.   พัฒนาประสิทธิภาพของการบริหารจัดการโดยใช้หลักธรรมาภิบาล และหลักการพัฒนาคุณภาพอย่างต่อเนื่อง
					</p>
    			</div>
    		</div> <!-- heading row end -->
    	</div><!-- container end -->
    </section>

	<section class="Home-News">
		<div class="container">
			<div class="row article-news">
    			<div class="row">
    				<div class="col-md-6">
    					<h3>ข่าวประชาสัมพันธ์</h3>
    					<div class="panel-group" id="accordion" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading"  id="headingOne">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" >
											โครงการพัฒนาศักยภาพเจ้าหน้าที่ผู้ปฎิบัติการงานสร้างเสริมภูมิคุ้มกันโรค
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<a href="#"><div class="panel-body">แผนที่โรงแรมการจัดฝึกอบรม โครงการวัคซีน</div></a>
									<a href="#"><div class="panel-body">แผนที่โรงแรมการจัดฝึกอบรม โครงการวัคซีน</div></a>
									<a href="#"><div class="panel-body">รายละเอียดการจัดอบรม โครงการวัคซีน</div></a>
									<a href="#"><div class="panel-body">อ่านทั้งหมด</div></a>
								</div>
							</div>
								<div class="panel panel-default">
								<div class="panel-heading" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" >
											ฝ่ายงานวิจัย
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" >
									<a href="#"><div class="panel-body">แผนที่โรงแรมการจัดฝึกอบรม โครงการวัคซีน</div></a>
									<a href="#"><div class="panel-body">แผนที่โรงแรมการจัดฝึกอบรม โครงการวัคซีน</div></a>
									<a href="#"><div class="panel-body">รายละเอียดการจัดอบรม โครงการวัคซีน</div></a>
									<a href="#"><div class="panel-body">อ่านทั้งหมด</div></a>
								</div>
							</div>
						</div>
    				</div>
    				<div class="col-md-6">
    					<h3>ผู้บริหาร</h3>
    					<div class="row">
    						<div class="col-md-4 col-md-offset-4 personal">
								<img src="{{ asset('/images/pages/home/persons/person1.png') }}" class="img-circle img-responsive">

    						</div>
    					</div>
    					<div class="row">
    						<div class="col-md-12 text-center">
    							<span>รศ.ดร.มรรยาท รุจิวิชชญ์</span><br>
								<small>คณบดี คณะพยาบาลศาสตร์ มหาวิทยาลัยธรรมศาสตร์ </small>
    						</div>
    					</div>
    					<div class="row">
    						<div class="col-md-4 col-md-offset-1 personal">
								<img src="{{ asset('/images/pages/home/persons/person2.png') }}" class="img-circle img-responsive">
    						</div>
    						<div class="col-md-4 col-md-offset-2 personal">
								<img src="{{ asset('/images/pages/home/persons/person3.png') }}" class="img-circle img-responsive">
    						</div>
    					</div>
    					<div class="row">
    						<div class="col-md-6 text-center">
    							<span>ผศ.ดร.ธีรนุช	ห้านิรัติศัย</span><br>
    							<small>ฝ่ายบริหารและวิชาการ</small>
    						</div>
    						<div class="col-md-6 text-center">
    							<span>ผศ.ดร.ปรีย์กมล รัชนกุล</span><br>
    							<small>ฝ่ายวางแผนและประกันคุณภาพ</small>
    						</div>
    					</div>
    					<div class="row">
    						<div class="col-md-4 col-md-offset-1 personal">
								<img src="{{ asset('/images/pages/home/persons/person4.png') }}" class="img-circle img-responsive">
    						</div>
    						<div class="col-md-4 col-md-offset-2 personal">
								<img src="{{ asset('/images/pages/home/persons/person5.png') }}" class="img-circle img-responsive">
    						</div>
    					</div>
    					<div class="row">
    						<div class="col-md-6 text-center">
    							<span>ผศ.ดร. พวงผกา คงวัฒนานนท์</span><br>
    							<small>ฝ่ายพัฒนานักศึกษาและบริการวิชาการ</small>
    						</div>
    						<div class="col-md-6 text-center">
    							<span>ดร. สารรัตน์ วุฒิอาภา</span><br>
    							<small>ฝ่ายวิจัยแล้ว วิเทศสัมพันธ์และสื่อสารองค์กร</small>
    						</div>
    					</div>

    				</div>
    			</div>
    		</div> <!-- heading row end -->
		</div>	<!-- container end -->
	</section>

    <section class="Home-Services">
    	<div class="container">
    		<div class="row">
    			<div class="heading-inner col-md-12">
    				<h2 class="sec-title">การบริการวิชาการและสังคม</h2>
    			<div class="heading-inner col-md-4">
					<a href="http://childhood.nurse.tu.ac.th/">
	    				<img src="{{ asset('/images/pages/home/services/Child.jpg') }}" class="img-responsive">
	    				<div class="caption">
			            	<h4>ศูนย์พัฒนาเด็กปฐมวัย </h4>
	    				</div>
	    			</a>
    			</div>
    			<div class="heading-inner col-md-4">
					<a href="http://www.nurse.tu.ac.th/Home/Hindex%2017_11_53.html">
	    				<img src="{{ asset('/images/pages/home/services/Healthy.jpg') }}" class="img-responsive">
	    				<div class="caption">
			            	<h4>ศูนย์ส่งเสริมสุขภาพ </h4>
	    				</div>
	    			</a>
    			</div>
    			<div class="heading-inner col-md-4">
					<a href="http://researchcenter.nurse.tu.ac.th/">
	    				<img src="{{ asset('/images/pages/home/services/run.jpg') }}" class="img-responsive">
	    				<div class="caption">
			            	<h4>ศูนย์วิจัยทางการพยาบาลและพฤติกรรมศาสตร์ </h4>
	    				</div>
	    			</a>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="Home-Activity">
		<div class="container">
			<div class="row article-news">
    			<div class="row">
    				<div class="col-md-6">
    					<h3>
    						กิจกรรมรายเดือน
    						<a href="#">
    							<small class="pull-right">อ่านทั้งหมด <i class="fa fa-angle-double-right"></i></small>
    						</a>
    					</h3>
    					<a href="#">
    						<div class="col-md-12">
    							<h5>ความร่วมมือระหว่างประเทศ</h5>
    							<p>
    								2 มิถุนายน 2559 ผู้ช่วยศาสตราจารย์ ดร.ธีรนุช ห้านิรัติศัย รองคณบดีฝ่ายบริหารและวิชาการ รักษาการแทนคณบดีคณะพยาบาลศาสตร์ มธ. ให้การต้อนรับคณาจารย์และนักศึกษา จำนวน 15 คน จาก College of Nursing, University of Santo Tomas ในโอกาสที่เดินทางมาแลกเปลี่ยนเรียนรู้ระหว่างมหาวิทยาลัย ในระหว่างวันที่ 2-4 มิถุนายน 2559
    							</p>
    						</div>
    					</a>
    				</div>
    				<div class="col-md-6">
    					<h3>
    						ภาพกิจกรรม
    						<a href="#">
    							<small class="pull-right">อ่านทั้งหมด <i class="fa fa-angle-double-right"></i></small>
    						</a>
    					</h3>
    					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						    <!-- Indicators -->
						    <ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
						    </ol>

						    <!-- Wrapper for slides -->
						    <div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="{{ asset('/images/pages/home/activitys/a1.jpg') }}" alt="Chania" width="460" height="345" class="center-block">
								</div>

								<div class="item">
									<img src="{{ asset('/images/pages/home/activitys/a2.jpg') }}" alt="Chania" width="460" height="345" class="center-block">
								</div>

								<div class="item">
									<img src="{{ asset('/images/pages/home/activitys/a3.jpg') }}" alt="Flower" width="460" height="345" class="center-block">
								</div>

								<div class="item">
									<img src="{{ asset('/images/pages/home/activitys/a4.jpg') }}" alt="Flower" width="460" height="345" class="center-block">
								</div>
						    </div>

						    <!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="margin-top: 150px;"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="margin-top: 150px;"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-md-12">
    					<h3>
    						ปฏิทินกิจกรรม
    						<a href="#">
    							<small class="pull-right">อ่านทั้งหมด <i class="fa fa-angle-double-right"></i></small>
    						</a>
    					</h3>
	    				<div class="row">
    						<a href="#">
		    					<div class="col-md-6">
		    						<div class="col-md-12 date">
										<div class="col-md-2 text-center">
											<div class="month">MAY</div>
											<div class="day">31</div>
										</div>
			    						<div class="col-md-10">
			    							วันที่ 31 พฤษภาคม 2559 รองศาสตราจารย์ดร.มรรยาท รุจิวิชชญ์ คณบดีคณะพยาบาลศาสตร์ มธ. พร้อมทีมบริหาร ร่วมประชุมและนำเสนอความก้าวหน้าแผนพัฒนาคุณภาพสู่ความเป็นเลิศตามเกณฑ์ EdPEx ต่อ สกอ. ในโครงการบ่มเพาะคุณภาพการศึกษาสู่ความเป็นเลิศ ระยะที่ 2 (Midterm Review) ที่สำนักงานคณะกรรมการการอุดมศึกษาฯ
										</div>
									</div>
		    					</div>
		    				</a>
    						<a href="#">
		    					<div class="col-md-6">
		    						<div class="col-md-12 date">
										<div class="col-md-2 text-center">
											<div class="month">JUN</div>
											<div class="day">1</div>
										</div>
			    						<div class="col-md-10">
			    							1-2 มิถุนายน 2559 รองศาสตราจารย์ดร.มรรยาท รุจิวิชชญ์ คณบดีคณะพยาบาลศาสตร์ มธ. บรรยายพิเศษใน Joint symposium entitled 'Asian Medicine: From macro analysis to micro analysis' จัดขึ้นระหว่าง Thammasat University, National Defense Medical Center (NDMC), Taiwan, และ Catholic University, South Korea
										</div>
									</div>
		    					</div>
		    				</a>
	    				</div>
    				</div>
    			</div>
    		</div> <!-- heading row end -->
		</div>	<!-- container end -->
	</section>

	<section class="Home-StdAct">
		<div class="container">
			<div class="row">
    			<div class="heading-inner col-md-12">
    				<h3>
    					กิจกรรมนักศึกษา/ศิษย์เก่า
    					<a href="#">
    						<small class="pull-right">อ่านทั้งหมด <i class="fa fa-angle-double-right"></i></small>
    					</a>
    				</h3>
    			</div>
    		</div>

			<div class="row">
				<a href="#">
					<div class="col-md-4">
						<h5>วันสถาปนาคณะพยาบาลศาสตร์</h5>
						<p>
							ขอเชิญ คณาจารย์ เจ้าหน้าที่ นักศึกษา ศิษย์เก่า แขกผู้มีเกียรติ ร่วมงาน วันสถาปนาคณะพยาบาลศาสตร์ มหาวิทยาลัยธรรมศาสตร์ ครบรอบ ๒๐ ปี ในวันอังคารที่ ๒๘ มิถุนายน ๒๕๕๙
						</p>
					</div>
				<a href="#">
					<div class="col-md-4">
						<h5>กฎหมายและจริยธรรมสำหรับผู้ประกอบวิชาชีพการพยาบาล</h5>
						<p>
							วันที่ 23 พฤษภาคม 2559 รองศาสตราจารย์ดร.มรรยาท รุจิวิชชญ์ คณบดีคณะพยาบาลศาสตร์ มธ. และรองศาสตราจารย์ ณรงค์ ใจหาญ คณบดีคณะนิติศาสตร์ มธ. เป็นประธานเปิดโครงการอบรม“กฎหมายและจริยธรรมสำหรับผู้ประกอบวิชาชีพการพยาบาล” รุ่น 3 ซึ่งจัดโดย คณะพยาบาลศาสตร์ มธ. และศูนย์กฎหมายสุขภาพและจริยศาสตร์ คณะนิติศาสตร์ มธ. ระหว่างวันจันทร์ที่ 23 ถึงวันศุกร์ที่ 27 พฤษภาคม 2559 ณ ห้องราชเทวี 2 ชั้น 3 โรงแรมเอเชีย ราชเทวี กรุงเทพมหานคร
						</p>
					</div>
				</a>
				<a href="#">
					<div class="col-md-4">
						<h5>โครงการศิลปะและวัฒนธรรมทางการพยาบาลในการมอบขีดหมวกและเข็มธรรมศาสตร์ </h5>
						<p>
							วันที่ 16 พฤษภาคม 2559 รองศาสตราจารย์ ดร.มรรยาท รุจิวิชชญ์ คณบดีคณะพยาบาลศาสตร์ มธ. เป็นประธานโครงการศิลปะและวัฒนธรรมทางการพยาบาลในการมอบขีดหมวกและเข็มธรรมศาสตร์ แก่ผู้สำเร็จการศึกษา หลักสูตรพยาบาลศาสตรบัณฑิต รุ่นที่ 17 ประจำปีการศึกษา 2558 ณ ห้อง 248 อาคารเรียนรวมศูนย์สุขศาสตร์ มธ. ศูนย์รังสิต
						</p>
					</div>
				</a>
			</div>
		</div>
	</section>

	<section class="Home-Healthy">
		<div class="container">
			<div class="row article-news">
    			<div class="row">
    				<div class="col-md-6">
    					<h3>สุขภาพดีมีที่นี่</h3>
    					<img src="{{ asset('/images/pages/home/healthy.jpg') }}" class="img-responsive center-block">
    				</div>
    				<div class="col-md-6">
    					<h3>บทความวิชาการ / วิจัย</h3>
    					<div class="row">
    						<div class="col-md-12">
								<div class="panel-group"  aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" >
											<h4 class="panel-title">
												<a data-toggle="collapse" href="">
													ประจำปี 2554
												</a>
											</h4>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" href="">
													ประจำปี 2553
												</a>
											</h4>
										</div>
									</div>
								</div>
							</div>
    					</div>
    					<h3>จรรยาบรรณวิชาชีพ</h3>
    					<div class="row">
    						<div class="col-md-12">
								<div class="panel-group"  aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" >
											<h4 class="panel-title">
												<a data-toggle="collapse" href="">
													ประจำปี 2554
												</a>
											</h4>
										</div>
									</div>
								</div>
							</div>
    					</div>

    				</div>
    			</div>
    		</div> <!-- heading row end -->
		</div>	<!-- container end -->
	</section>

@endsection

@section('scripts')
	@parent
	<script>
		$('[data-toggle="tooltip"]').tooltip();
	</script>
@endsection

