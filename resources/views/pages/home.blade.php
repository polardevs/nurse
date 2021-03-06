@extends('layouts.app')

@section('htmlheader_title')
  Faculty of Nursing Thammasat University
@endsection

@section('main-content')
	<!-- <div class="sidebar">
		<div class="sidebar-item">
			<a href="http://childhood.nurse.tu.ac.th/" data-toggle="tooltip" title="ศูนย์พัฒนาเด็กปฐมวัย" data-placement="right" target="_blank">
				<img src="{{ asset('/images/pages/home/services/Childhood.png') }}" class="center-block">
			</a>
		</div>
		<div class="sidebar-item">
			<a href="http://www.nurse.tu.ac.th/Home/Hindex%2017_11_53.html" data-toggle="tooltip" title="ศูนย์ส่งเสริมสุขภาพ " data-placement="right" target="_blank">
				<img src="{{ asset('/images/pages/home/services/health.png') }}" class="center-block">
			</a>
		</div>
		<div>
			<a href="http://researchcenter.nurse.tu.ac.th/" data-toggle="tooltip" title="ศูนย์วิจัยทางการพยาบาลและพฤติกรรมศาสตร์" data-placement="right" target="_blank">
				<img src="{{ asset('/images/partials/header/Logo_Nurseing_TU.png') }}" class="center-block">
			</a>
		</div>
	</div> -->
    <section class="Home-Course">
        <div class="slider-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="content-mission">
                            <h1>พัฒนาคณะฯให้เป็นสถาบันการศึกษาพยาบาลชั้นนำ ลำดับ 1 ใน 3 ของประเทศและเป็นที่ยอมรับในระดับนานาชาติ</h1>
                            <!-- <h2></h2> -->
                            <!-- <span class="btn btn-warning">หลักสูตรทั้งหมด</span> -->
                        </div>
                    </div>
	            </div> <!-- row end  -->
	            <div class="row">
                    <div class="col-md-12">
                        <div class="row article-news">
            				<a href="{{ url('degree/bachelor') }}" target="_blank">
	            				<div class="col-md-4">
									<img src="{{ asset('/images/pages/home/services/bachelor.png') }}" class="img-responsive">
									<div class="caption">
						            	<h4>หลักสูตรปริญญาตรี</h4>
									</div>
	            				</div>
	            			</a>
            				<!-- <a href="{{ url('degree/master') }}"> -->
            				<a href="http://www.nurse.tu.ac.th/master_degree_new/" target="_blank">
	            				<div class="col-md-4">
									<img src="{{ asset('/images/pages/home/services/masterDegree.png') }}" class="img-responsive">
									<div class="caption">
						            	<h4>หลักสูตรปริญญาโท</h4>
				    				</div>
	            				</div>
	            			</a>
            				<a href="{{ url('degree/phd') }}" target="_blank">
	            				<div class="col-md-4">
									<img src="{{ asset('/images/pages/home/services/phd.png') }}" class="img-responsive">
									<div class="caption">
						            	<h4>หลักสูตรปริญญาเอก</h4>
				    				</div>
	            				</div>
	            			</a>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <!-- <span class="btn btn-warning" style="margin-top:30px;">ข่าวทั้งหมด</span> -->
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
    				<p>“เป็นศูนย์กลางนวัตกรรมทางการพยาบาลชั้นนำของภูมิภาคเอเชีย” </p>
    			</div>
    			<div class="heading-inner col-md-12">
    				<h2 class="sec-title">พันธกิจ</h2>
    				<p>
              “เป็นคณะพยาบาลศาสตร์ชั้นนำ 1 ใน 25 ของภูมิภาคเอเชียภายในปี 2565”
    				<br>
    					1.	พัฒนาความเป็นเลิศด้านการเรียนการสอน โดยใช้นวัตกรรมและเทคโนโลยีที่ทันสมัย เพื่อผลิตบัณฑิตทุกระดับให้เป็นไปตามอัตลักษณ์นักศึกษาพยาบาลธรรมศาสตร์
    				<br>
    					2.	เป็นศูนย์ความเป็นเลิศทางการวิจัย นวัตกรรม และสิ่งประดิษฐ์ และนำผลผลิตไปใช้ประโยชน์ในการสร้างมูลค่าทรัพย์สินทางวิชาการของคณะฯ
    				<br>
						  3.  ให้บริการวิชาการแก่สังคมที่เกี่ยวข้องกับการพยาบาลและสุขภาพอย่างมีคุณภาพและได้มาตรฐานระดับชาติและระดับสากล
					<br>
						  4.	ส่งเสริมศิลปะและวัฒนธรรมไทย พร้อมทั้งแลกเปลี่ยนเรียนรู้ศิลปะและวัฒนธรรมระหว่างประเทศ
					<br>
    			</div>
          <div class="heading-inner col-md-12">
            <h2 class="sec-title">ค่านิยมองค์กร</h2>
            <p>	“นำวิจัยสู่การพัฒนา และนำประชาธิปไตยสู่ความเป็นเอกภาพ” </p>
            <p>	 นำวิจัยสู่การพัฒนา หมายถึง การพัฒนาองค์ความรู้ทางการพยาบาลและทางสุขภาพ และการพัฒนาองค์กร ที่ใช้การวิจัยเป็นฐาน นำไปสู่ความโดดเด่นในการคิดและการตัดสินใจอย่างเป็นระบบ
	นำประชาธิปไตยสู่ความเป็นเอกภาพ  หมายถึง การมีเสรีภาพทางวิชาการ เสรีภาพทางความคิดและการกระทำ  และการเคารพในความคิดและการกระทำที่แตกต่างของผู้อื่น เนื่องจากความแตกต่างในหลายมุมมองทำให้เกิดความคิดริเริ่มสร้างสรรค์  ที่มิใช่เป็นไปในทางสร้างความขัดแย้ง</p>
            <p>	นอกจากนี้ได้กำหนดแนวทางการบริหารคณะฯ  การปรับปรุงกระบวนงานในการนำองค์กรเพื่อให้เกิดความมั่นใจว่ามีการดำเนินการอย่างถูกต้องตามกฎหมาย และมีจริยธรรม ตอบสนองความรับผิดชอบต่อสังคม โดยใช้ค่านิยมหลัก (Core values) และ แนวคิดการจัดการ (Managerial concepts) ตามเกณฑ์คุณภาพการศึกษาเพื่อการดำเนินการที่เป็นเลิศ (EdPEx, 2015) ดังต่อไปนี้<br/>
            •	มุมมองเชิงระบบ<br/>
            •	การนำองค์กรอย่างมีวิสัยทัศน์<br/>
            •	ความเป็นเลิศที่มุ่งเน้นผู้เรียน<br/>
            •	การให้ความสำคัญกับคน<br/>
            •	การเรียนรู้ระดับสถาบันและความคล่องตัว<br/>
            </p>
          </div>
    		</div> <!-- heading row end -->
    	</div><!-- container end -->
    </section>

	<section class="Home-News">
		<div class="container">
			<div class="row article-news">
    			<div class="row">
    				<div class="col-md-12">
    					<h3>ข่าวประชาสัมพันธ์</h3>
    					<div class="panel-group" id="accordion1" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading"  id="headingOne">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" aria-expanded="true" >
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
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" aria-expanded="false" >
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
    			</div>
    		</div>
		</div>
	</section>
  <section class="Home-News">
		<div class="container">
			<div class="row article-news">
    			<div class="row">
    				<div class="col-md-12">
    					<h2>ข่าวรับสมัครงาน</h2>
    					<div class="panel-group" id="accordion2" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading"  id="headingThree">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree" aria-expanded="true" >
											ข่าวรับสมัครงาน
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse in">
									<a href="http://www.nurse.tu.ac.th/pdf/94-59.pdf" target="_blank"><div class="panel-body">รายชื่อผู้เข้ารับการคัดเลือกเป็นพนักงานมหาลัย ตำแหน่งนักวิชาการการศึกษาปฏิบัติการ</div></a>
									<a href="http://www.nurse.tu.ac.th/pdf/90-59.pdf" target="_blank"><div class="panel-body">รับสมัครบุคคลเข้าเป็นพนักงานมหาวิทยาลัย ตำแหน่ง อาจารย์ คณะพยาบาลศาสตร์ สาขาการพยาบาลครอบครัวและผดุงครรภ์</div></a>
									<a href="http://www.nurse.tu.ac.th/pdf/88-59.pdf" target="_blank"><div class="panel-body">รับสมัครบุคคลเข้าบรรจุเป็นพนักงานเงินรายได้ประเภทประจำ ตำแหน่งนักวิชาการ การศึกษา</div></a>
									<!-- <a href="#"><div class="panel-body">อ่านทั้งหมด</div></a> -->
								</div>
							</div>
						</div>
    				</div>
    			</div>
    		</div>
		</div>
	</section>

	<section class="Home-Manager">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="text-center">ผู้บริหาร</h2>
					<div class="row">
						<div class="col-md-4 col-md-offset-4 personal">
							<img src="{{ asset('/images/pages/home/persons/person1.png') }}" class="img-circle img-responsive center-block">
						<div class="text-center">
							<span>รศ.ดร.มรรยาท รุจิวิชชญ์</span><br>
							<small>คณบดี คณะพยาบาลศาสตร์ มหาวิทยาลัยธรรมศาสตร์ </small>
						</div>
						</div>
					</div>
					<div class="row">

					</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-1 personal">
							<img src="{{ asset('/images/pages/home/persons/person2.png') }}" class="img-circle img-responsive center-block">
							<div class="text-center">
    							<span>ผศ.ดร.ธีรนุช	ห้านิรัติศัย</span><br>
    							<small>ฝ่ายบริหารและวิชาการ</small>
    						</div>
						</div>
						<div class="col-md-4 col-md-offset-2 personal">
							<img src="{{ asset('/images/pages/home/persons/person3.png') }}" class="img-circle img-responsive center-block">
							<div class="text-center">
    							<span>ผศ.ดร.ปรีย์กมล รัชนกุล</span><br>
    							<small>ฝ่ายวางแผนและพัฒนาคุณภาพ</small>
    						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-1 personal">
							<img src="{{ asset('/images/pages/home/persons/person4.png') }}" class="img-circle img-responsive center-block">
							<div class="text-center">
    							<span>ผศ.ดร. พวงผกา คงวัฒนานนท์</span><br>
    							<small>ฝ่ายพัฒนานักศึกษาและบริการวิชาการ</small>
    						</div>
						</div>
						<div class="col-md-4 col-md-offset-2 personal">
							<img src="{{ asset('/images/pages/home/persons/person5.png') }}" class="img-circle img-responsive center-block">
							<div class="text-center">
    							<span>ดร. สารรัตน์ วุฒิอาภา</span><br>
    							<small>ฝ่ายวิจัย วิเทศสัมพันธ์และสื่อสารองค์กร</small>
    						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="Home-Services">
    	<div class="container">
    		<div class="row">
    			<div class="heading-inner col-md-12">
    				<h2 class="sec-title">การบริการวิชาการและสังคม</h2>
    			<div class="heading-inner col-md-4">
					<a href="http://childhood.nurse.tu.ac.th/" target="_blank">
	    				<img src="{{ asset('/images/pages/home/services/childHoodImg.png') }}" class="img-responsive">
	    				<div class="caption">
			            	<h4>ศูนย์พัฒนาเด็กปฐมวัย </h4>
	    				</div>
	    			</a>
    			</div>
    			<div class="heading-inner col-md-4">
					<a href="http://www.nurse.tu.ac.th/Home/Hindex%2017_11_53.html" target="_blank">
	    				<img src="{{ asset('/images/pages/home/services/healthImg.png') }}" class="img-responsive">
	    				<div class="caption">
			            	<h4>ศูนย์ส่งเสริมสุขภาพ </h4>
	    				</div>
	    			</a>
    			</div>
    			<div class="heading-inner col-md-4">
					<a href="http://researchcenter.nurse.tu.ac.th/" target="_blank">
	    				<img src="{{ asset('/images/pages/home/services/researchImg.png') }}" class="img-responsive">
	    				<div class="caption">
			            	<h4>ศูนย์วิจัยทางการพยาบาลและพฤติกรรมศาสตร์ </h4>
	    				</div>
	    			</a>
    			</div>
    			<div class="heading-inner col-md-4">
					<a href="{{ url('managementEducation') }}" target="_blank">
	    				<img src="{{ asset('/images/pages/home/services/managementEducation.png') }}" class="img-responsive">
	    				<div class="caption">
			            	<h4>โครงการบริการการศึกษา </h4>
	    				</div>
	    			</a>
    			</div>
    			<div class="heading-inner col-md-4">
					<a href="{{ url('socialServices') }}" target="_blank">
	    				<img src="{{ asset('/images/pages/home/services/socialServices.png') }}" class="img-responsive">
	    				<div class="caption">
			            	<h4>โครงการบริการสังคม/หลักสูตรอบรมระยะสั้น </h4>
	    				</div>
	    			</a>
    			</div>
    			<div class="heading-inner col-md-4">
					<a href="{{ url('thammasatUniversity') }}" target="_blank">
	    				<img src="{{ asset('/images/pages/home/services/thammasatUniversity.png') }}" class="img-responsive">
	    				<div class="caption">
			            	<h4>ศูนย์ธรรมศาสตร์ ธรรมรักษ์ </h4>
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
    					<h2>
    						กิจกรรมรายเดือน
    						<a href="{{ url('activity/eventsOfMonth') }}">
    							<small class="pull-right">อ่านทั้งหมด <i class="fa fa-angle-double-right"></i></small>
    						</a>
    					</h2>
    					<a href="#">
    						<div class="col-md-12">
    							<h3 class="text-danger">ความร่วมมือระหว่างประเทศ</h3>
    							<p>
    								2 มิถุนายน 2559 ผู้ช่วยศาสตราจารย์ ดร.ธีรนุช ห้านิรัติศัย รองคณบดีฝ่ายบริหารและวิชาการ รักษาการแทนคณบดีคณะพยาบาลศาสตร์ มธ. ให้การต้อนรับคณาจารย์และนักศึกษา จำนวน 15 คน จาก College of Nursing, University of Santo Tomas ในโอกาสที่เดินทางมาแลกเปลี่ยนเรียนรู้ระหว่างมหาวิทยาลัย ในระหว่างวันที่ 2-4 มิถุนายน 2559
    							</p>
    						</div>
    					</a>
    				</div>
    				<div class="col-md-6">
    					<h2>
    						ภาพกิจกรรม
    						<a href="{{ url('activity/gallery') }}">
    							<small class="pull-right">อ่านทั้งหมด <i class="fa fa-angle-double-right"></i></small>
    						</a>
    					</h2>
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
    					<h2>
    						ปฏิทินกิจกรรม
    						<a href="{{ url('activity/calendar') }}">
    							<small class="pull-right">อ่านทั้งหมด <i class="fa fa-angle-double-right"></i></small>
    						</a>
    					</h2>
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
    				<h2>
    					กิจกรรมนักศึกษา/ศิษย์เก่า
    					<a href="{{ url('activity/alumnus') }}">
    						<small class="pull-right">อ่านทั้งหมด <i class="fa fa-angle-double-right"></i></small>
    					</a>
    				</h3>
    			</div>
    		</div>

			<div class="row">
				<a href="#">
					<div class="col-md-4">
						<h3>วันสถาปนาคณะพยาบาลศาสตร์</h3>
						<p>
							ขอเชิญ คณาจารย์ เจ้าหน้าที่ นักศึกษา ศิษย์เก่า แขกผู้มีเกียรติ ร่วมงาน วันสถาปนาคณะพยาบาลศาสตร์ มหาวิทยาลัยธรรมศาสตร์ ครบรอบ ๒๐ ปี ในวันอังคารที่ ๒๘ มิถุนายน ๒๕๕๙
						</p>
					</div>
				<a href="#">
					<div class="col-md-4">
						<h3>กฎหมายและจริยธรรมสำหรับผู้ประกอบวิชาชีพการพยาบาล</h3>
						<p>
							วันที่ 23 พฤษภาคม 2559 รองศาสตราจารย์ดร.มรรยาท รุจิวิชชญ์ คณบดีคณะพยาบาลศาสตร์ มธ. และรองศาสตราจารย์ ณรงค์ ใจหาญ คณบดีคณะนิติศาสตร์ มธ. เป็นประธานเปิดโครงการอบรม“กฎหมายและจริยธรรมสำหรับผู้ประกอบวิชาชีพการพยาบาล” รุ่น 3 ซึ่งจัดโดย คณะพยาบาลศาสตร์ มธ. และศูนย์กฎหมายสุขภาพและจริยศาสตร์ คณะนิติศาสตร์ มธ. ระหว่างวันจันทร์ที่ 23 ถึงวันศุกร์ที่ 27 พฤษภาคม 2559 ณ ห้องราชเทวี 2 ชั้น 3 โรงแรมเอเชีย ราชเทวี กรุงเทพมหานคร
						</p>
					</div>
				</a>
				<a href="#">
					<div class="col-md-4">
						<h3>โครงการศิลปะและวัฒนธรรมทางการพยาบาลในการมอบขีดหมวกและเข็มธรรมศาสตร์ </h3>
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
    					<h2>สุขภาพดีมีที่นี่</h2>
    					<p>comming soon</p>
    					<!-- <img src="{{ asset('/images/pages/home/healthy.jpg') }}" class="img-responsive center-block"> -->
    				</div>
    				<div class="col-md-6">
    					<h2>บทความวิชาการ / วิจัย</h3>
    					<div class="row">
    						<div class="col-md-12">
								<div class="panel-group"  aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" >
											<h4 class="panel-title">
												<a href="{{ url('articles') }}" target="_blank">
													ประจำปี 2554
												</a>
											</h4>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" id="headingTwo">
											<h4 class="panel-title">
												<a href="{{ url('articles') }}" target="_blank">
													ประจำปี 2553
												</a>
											</h4>
										</div>
									</div>
								</div>
							</div>
    					</div>
    					<h2>จรรยาบรรณวิชาชีพ</h2>
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
