<div class="panel-group" id="accordion" aria-multiselectable="true">
	<div class="panel panel-default">
		<div class="panel-heading"  id="headingOne">
			<h4 class="panel-title">
				<a href="{{ url('history') }}" >
					ความเป็นมา
				</a>
			</h4>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading" id="headingTwo">
			<h4 class="panel-title">
				<a href="{{ url('manager') }}">
					ผู้บริหาร
				</a>
			</h4>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading" id="headingTwo">
			<h4 class="panel-title">
				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" >
					บุคลากร
				</a>
			</h4>
		</div>
		<div id="collapseTwo" class="panel-collapse collapse" >
			<a href="{{ url('familyMidwife') }}" target="_blank"><div class="panel-body">กลุ่มวิชาการพยาบาลครอบครัวและผดุงครรภ์</div></a>
			<a href="{{ url('adultOld') }}" target="_blank"><div class="panel-body">กลุ่มวิชาการพยาบาลผู้ใหญ่และผู้สูงอายุ</div></a>
			<a href="{{ url('childTeen') }}" target="_blank"><div class="panel-body">กลุ่มวิชาการพยาบาลเด็กและวัยรุ่น</div></a>
			<a href="{{ url('mentalHealth') }}" target="_blank"><div class="panel-body">กลุ่มวิชาการพยาบาลสุขภาพจิตและจิตเวช</div></a>
			<a href="{{ url('communityHealth') }}" target="_blank"><div class="panel-body">กลุ่มวิชาการพยาบาลอนามัยชุมชน</div></a>
			<a href="{{ url('secretariat') }}" target="_blank"><div class="panel-body">สำนักงานเลขานุการคณะ</div></a>
		</div>
	</div>
</div>
<div class="Sidebar-Server">
	<div class="panel-head">
		บริการวิชาการและสังคม
	</div>
	<div class="panel-body">
		<a href="http://www.nurse.tu.ac.th/Home/Hindex%2017_11_53.html" target="_blank">ศูนย์ส่งเสริมสุขภาพ</a>
	</div>
	<div class="panel-body">
		<a href="http://childhood.nurse.tu.ac.th/" target="_blank">ศูนย์พัฒนาเด็กปฐมวัย</a>
	</div>
	<div class="panel-body">
		<a href="http://researchcenter.nurse.tu.ac.th/" target="_blank">ศูนย์วิจัยทางการพยาบาล</a>
	</div>
</div>
