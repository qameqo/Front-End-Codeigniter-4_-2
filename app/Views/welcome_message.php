<section>
	<div class="container-fluid p-0">
		
		<img src="<?php echo base_url('assets/img/pok.jpg') ?>" id="bg-img-home" alt="">
		<div class="overlay">
		</div>
	</div>
	<!-- <div class="overlay">
		</div> -->
		<div class="container " id="textimg">
			<div class="row justify-content-end  pt-0" style="color:white;">
				<P style="color:#fff;" class="mediumsizeover m-0">เราคือตัวกลางที่ดีที่สุด</P>
			</div>
			<div class="row justify-content-end   pt-0" style="">
				<p class="p-2 smallsizeover bortext m-0">ซื้อ-ขายรถมือสองแบบครบวงจร </p>
			</div>
			<ul class="no-bullets">
				<li class="  pt-0" style="color:white; text-align:end;">
					<p class="smallsizeover m-0">รับซื้อรถติดไฟแนนซ์</p>
				</li>
				<li class=" pt-0" style="color:white; text-align:end;">
					<p class="smallsizeover m-0">รับซื้อรถเก่า 25 ปี</p>
				</li>
				<li class="   pt-0" style="color:white; text-align:end;">
					<p class="smallsizeover m-0">รับซื้อรถบิีกไบค์ 300 CC ขึ้นไป</p>
				</li>
			</ul>
		</div>
	
	<div class="container" id="textbox">
		<div class="header">
			<div class="row m-0" style="width:100%;">
				<div class="col-sm-9 pl-0 pt-2 pr-2" style="text-align:center;">
					<H3 style="color:white;">กรอกข้อมูลประเมินราคา</H3>
				</div>
				<div class="col-sm-2 pl-0 pr-2" style="text-align:center;">
					<H1 style="color:#FFB838;">ฟรี</H1>
				</div>
			</div>
		</div>
		<div class="container" id="contenthome">
			<div class="content">
				<div class="row justify-content-center pt-4">
					<h6><b>กรอกรายละเอียดของคุณเพื่อประเมินราคาฟรี !</b></h6>
				</div>
				<div class="row justify-content-center">
					<div class="col-sm-3 mt-2 mb-2 p-0" style="text-align:center;">
						<h6><b>ประเภทรถ</b><span style="color:red;">*</span></h6>
					</div>
					<div class="col-sm-3 mt-2 mb-2 p-0" style="text-align:center;">
						<div class="form-check"><label class="form-check-label"><input type="radio"
									class="form-check-input" value="04323fc6-9460-4bb6-ace3-b28af15c2b80"
									data-name="รถยนต์" id="car" name="cartype">รถยนต์ </label></div>
					</div>
					<div class="col-sm-6 mt-2 mb-2 p-0" style="text-align:center;">
						<div class="form-check"><label class="form-check-label"><input type="radio"
									class="form-check-input" value="f99deb33-79e1-470d-b249-3a2e6a44cefe"
									data-name="รถบิ๊กไบค์" id="bigbike" name="cartype">รถบิ๊กไบค์ 300 CC ขึ้นไป </label>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-sm-10">
						<div class="form-group"><label for="beand"><b>ยี่ห้อรถ</b><span
									style="color:red;">*</span></label><select name="" class="form-control"
								id="brand"></select></div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-sm-10">
						<div class="form-group"><label for="beand"><b>รุ่นรถ</b><span
									style="color:red;">*</span></label><select name="" class="form-control"
								id="model"></select></div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-sm-10">
						<div class="form-group"><label for="beand"><b>เบอร์ติดต่อ</b><span
									style="color:red;">*</span></label><input name="" class="form-control"
								onKeypress="CheckNumber()" maxlength="10" id="phone" placeholder="เบอร์โทร 10 หลัก" />
						</div>
					</div>
				</div>
				<div class="row justify-content-center pb-4">
					<div class="col-sm-6 mt-2 mb-2 p-0" style="text-align:center;">
						<div class="form-check"><label class="form-check-label"><input type="radio"
									class="form-check-input" value="a3b51b08-60f4-442c-ab6f-bdc21e402c12"
									data-name="ขายรถด่วน" id="sellrda" name="sertype">ขายรถด่วนภายใน 3 ชม. </label>
						</div>
					</div>
					<div class="col-sm-6 mt-2 mb-2 p-0" style="text-align:center;">
						<div class="form-check"><label class="form-check-label"><input type="radio"
									class="form-check-input" value="785686bd-3253-49ad-82b8-33529172ed9b"
									data-name="สินเชื่อ" id="sinshuarda" name="sertype">สินเชื่อ </label></div>
					</div>
				</div>
				<div class="row justify-content-center mt-2" id="rowbtnbuy"><button class="btn btn-warning btnbuy"
						id="sellnow"><b>ขายด่วน</b></button></div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid mt-4">
		<div class="row">
			<div class="col-sm-4 p-0 pt-5" style="text-align:center;"><img src="<?=base_url('assets/img/11.png')?>"
					class="imgsec2" alt="">
				<h2 class="mt-3"><b>ลงทะเบียนขายรถ</b></h2>
				<h1 style="color:#FFB838;"> <b><span class="count">45021</span> คน</b></h1>
			</div>
			<div class="col-sm-4 p-0 pt-5" style="text-align:center;"><img src="<?=base_url('assets/img/12.png')?>"
					class="imgsec2" alt="">
				<h2 class="mt-3"><b>ผู้มาใช้บริการกับเรา</b></h2>
				<h1 style="color:#FFB838;"><b><span class="count">31020</span> คน</b></h1>
			</div>
			<div class="col-sm-4 p-0 pt-5" style="text-align:center;"><img src="<?=base_url('assets/img/13.png')?>"
					class="imgsec2" alt="">
				<h2 class="mt-3"><b>ปิดภาระหนี้กับเรา</b></h2>
				<h1 style="color:#FFB838;"><b><span class="count">15590</span> คน</b></h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 p-0">
				<div class=" pl-5 pr-5" id="centercontent1">
					<div class="row justify-content-center pt-3 pb-3">
						<p class="bigsize" style="color:white;"><b>อยากขายรถมือสอง รถติดไฟแนนซ์</b></p><img
							src="<?=base_url('assets/img/girls.jpg')?>" alt="" style="width:100%; height:auto;">
					</div>
				</div>
			</div>
			<div class="col-sm-6 p-0">
				<div class="pl-5 pr-5" id="centercontent2">
					<div class="row justify-content-center pt-3 pb-3">
						<p class="bigsize" style="color:white;"><b>เรารับซื้อในราคาสูงที่สุด</b></p>
						<div class="content pt-4 conte" style="background-color:white; text-align:center;">
							<p class="mediumsize">Justcar ตัวกลางเรื่องรถมือสองที่ครบวงจร ให้เราเป็นที่ปรึษาให้กับคุณ
							</p>
							<div class="pl-3 pr-3" style="text-align:start;">
								<p class="smallsize">เราไม่ใช้เต้นส์รถ เราคือ ตัวกลางระหว่างผู้ซื้อกับผู้ขาย
									เราจะช่วยให้ผู้ขาย ขายรถได้ราคาสูงที่สุด และผู้ซื้อ
									เราจะช่วยให้ซื้อรถที่ดีและมีคุณภาพมากที่สุด </p>
							</div>
							<div style="text-align:center;" class="pb-1">
								<p class="mediumsize"><i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp;
									&nbsp;
									ค้างค่างวดก็ขายได้</p>
								<p class="mediumsize"><i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp;
									&nbsp;

									ค้างค่างวดก็ขายได้</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<section class="mt-5 mb-5">
	<div class="container-fluid" style="text-align:center;">
		<p class="topic"><b>JUSTCAR ให้เราเป็นที่ปรึษาเรื่องรถที่ดีที่สุด </b></p>
	</div>
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-sm-3" style="text-align:center;"><img src="<?=base_url('assets/img/11.png')?>" alt=""
					class="imgfoot">
				<p class="mediumsize mt-3"><b>มีคนรอซื้อรถคุณพร้อมสู้ราคาให้สูงที่สุด</b></p>
			</div>
			<div class="col-sm-3" style="text-align:center;"><img src="<?=base_url('assets/img/12.png')?>" alt=""
					class="imgfoot">
				<p class="mediumsize mt-3"><b>ตรวจสภาพรถฟรีมากกว่า 150 จุด</b></p>
			</div>
			<div class="col-sm-3" style="text-align:center;"><img src="<?=base_url('assets/img/13.png')?>" alt=""
					class="imgfoot">
				<p class="mediumsize mt-3"><b>ปิดทุกภาระให้คุณรับเงินไวใน 3 ชม.</b></p>
			</div>
			<div class="col-sm-3" style="text-align:center;"><img src="<?=base_url('assets/img/14.png')?>" alt=""
					class="imgfoot">
				<p class="mediumsize mt-3"><b>ไม่พอใจราคาขายเรามีบริการสินเชื่อรถยังมีขับ</b></p>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid service">
		<div class="row justify-content-center pt-5">
			<p class="bigsize" style="color:white;"><b>บริการกับ JUSTCAR</b></p>
		</div>
		<div class="row pt-2 pb-5">
			<div class="col-sm-4 mt-4" style="text-align:center;"><a href="#"
					class="btn  btn-warning btnservice mediumsize">ซื้อรถ</a></div>
			<div class="col-sm-4 mt-4" style="text-align:center;"><a href="#"
					class="btn btn-warning btnservice mediumsize">ซ่อมรถ</a></div>
			<div class="col-sm-4 mt-4" style="text-align:center;"><a href="#"
					class="btn  btn-warning btnservice mediumsize">สินเชื่อรถ</a></div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid">
		<div class="row justify-content-center mt-3  mb-3">
			<span id="texx" class="pl-2 pr-2 bigsize"><b>รับซื้อรถยนต์และบิ๊กไบค์ ขายรถเก่า ขายรถติดไฟแนนซ์</b> </span>
		</div>
	</div>
</section>