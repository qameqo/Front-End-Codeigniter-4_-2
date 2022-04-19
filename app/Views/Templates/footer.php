<a href="#" id="toTop"><img src="https://img.icons8.com/fluent/48/000000/circled-up-2.png" /></a>
<footer id="footer">
    <div class="container-fluid pt-5 pb-5">
        <div class="row justify-content-center" style="color:white;">
            <div class="col-sm-1 textaliicon">
                <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col-sm-3 pt-1 textali">
                <p class="mediumsize">CONTACT US</p>
                <p class="smallsize">Just Car สาขาสํานักงานใหญ่
                    เลขที่ 55 อาคารซีคอนสแควร์ ชั้น G
                    ห้องเลขที่ CW6 ถ.ศรี​นครินทร์​ แขวงหนองบอน
                    เขต​ประเวศ​ กรุงเทพ 10250
                </p>
            </div>
            <div class="col-sm-2 textali">
                <p class="mediumsize">Menu</p>
                <ul class="pl-1 no-bullets">
                    <li><a class="" href="">- ขายรถด่วน</a></li>
                    <li><a class="" href="">- ซื้อรถ</a></li>
                    <li> <a class="" href="">- ข่าวสาร</a></li>
                    <li><a class="" href="">- เกี่ยวกับเรา</a></li>
                    <li> <a class="" href="">- ติดต่อเรา</a></li>

                </ul>
                <a class="mt-2 btn btn-warning" href="">สมัครงาน</a>
            </div>
            <div class="col-sm-2 textali">
                <ul class=" no-bullets">
                    <li><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></li>
                    <li>
                        <p class="smallsize"> info@justcar.co.th</p>
                    </li>
                    <li>
                        <div class=""> <a href="https://www.facebook.com/Justcarthailand/" target="_blank">
                                <img src="https://img.icons8.com/color/50/000000/facebook.png" alt="Facebook">
                            </a> <a href="https://bit.ly/2M1U3kO" target="_blank">
                                <img src="https://img.icons8.com/color/48/000000/line-me.png" alt="Line">
                            </a><a href="https://www.instagram.com/justcarthailand/?hl=en" target="_blank">
                                <img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" alt="Instragram">
                            </a><a href="https://www.youtube.com/channel/UC6H4jZhw7ZfJRSBsjqDIwGA" target="_blank">
                                <img src="https://img.icons8.com/color/50/000000/youtube-play.png" alt="Youtube">
                            </a></div>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2 textali">
                <ul class=" no-bullets">
                    <li><i class="fa fa-phone-square fa-2x" aria-hidden="true"></i></li>
                    <li>
                        <p class="smallsize">02-821-5700</p>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2 textali">

                <input type="text" class="form-control" placeholder="Enter Email">
                <button class="btn btn-danger mt-2">submit</button>
            </div>
        </div>
    </div>

</footer>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>" type="text/javascript"></script>
<script>
    var btn = $('#toTop');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        $('html, body').animate({
            scrollTop: 0
        }, 'slow');
    });
    $("#car").change(function () {
        Onbrand();
        $("#brand").val("");
        $("#model").val("");
        $("#model").css('border-color', 'red');
        $("#brand").css('border-color', 'red');

    });
    $("#bigbike").change(function () {
        Onbrand();
        $("#brand").val("");
        $("#model").val("");
        $("#model").css('border-color', 'red');
        $("#brand").css('border-color', 'red');
    });

    function Onbrand() {
        $.ajax({
            type: "POST",
            url: "http://203.151.136.136:9871/api/Master/CarBrandData",
            data: '{}',
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (response) {

                $('#brand').html('');
                var options = '';
                options += '<option value="" class="lang" disabled key="chprovince">' + "เลือกยี่ห้อรถ..." +
                    '</option>';
                for (var i = 0; i < response.length; i++) {
                    options += '<option value="' + response[i].id + '">' + response[i].nameEng +
                        '</option>';
                }
                $('#brand').append(options);
                $('#brand').val("");
            }
        });

    };
    $("#brand").change(function () {

        var idtype = $("input[name='cartype']:checked").val();
        var idbrand = $("#brand option:selected").val();
        if (idbrand == "23d8fa5e-bd96-4b5d-a9c6-09477d9df20d") {
            $("#brand").css('border-color', 'red');
            $("#model").css('border-color', 'red');
        } else {
            if (idtype != "" && idbrand != "") {
                $("#brand").css('border-color', 'green');
                $.ajax({
                    type: "POST",
                    url: "http://203.151.136.136:9871/api/Master/CarModelData",
                    data: JSON.stringify({
                        id: idtype,
                        code: idbrand,

                    }),
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {

                        $('#model').html('');
                        var options = '';
                        options += '<option value=""class="lang" disabled key="chdistrict">' +
                            "เลือกรุ่นรถ..." +
                            '</option>';
                        for (var i = 0; i < response.length; i++) {
                            options += '<option value="' + response[i].id + '">' + response[i]
                                .nameEng +
                                '</option>';
                        }
                        $('#model').append(options);
                        $('#model').val("");

                    },

                });
            } else {

                $("#model").val("");
                $("#model").css('border-color', 'red');
                $("#brand").val("");
                $("#brand").css('border-color', 'red');

            }
        }

    });
    $("#model").change(function () {
        var id = $("#model option:selected").val();
        if (id == "389b4ed3-1dac-488b-8994-0340eb94e8c1") {
            $("#model").css('border-color', 'red');


        } else {

            if (id != "") {
                $("#model").css('border-color', 'green');

            } else {
                $("#model").css('border-color', 'red');

            }
        }
    });

    function CheckNumber() {
        if (event.keyCode < 48 || event.keyCode > 57) {
            Swal.fire({
                icon: 'warning',
                title: 'คำเตือน',
                text: 'กรุณากรอกเป็นตัวเลข...',
                showConfirmButton: false,
                timer: 1500
            });
            event.returnValue = false;
        } else {

        }
    };
    $("#phone").change(function () {
        var phonef = $("#phone").val().length;
        var phonesub = $("#phone").val();
        var res = phonesub.substring(0, 1);
        if (phonef == 10 && res == 0 && phonesub != "") {
            $("#phone").css('border-color', 'green');
        } else {
            $("#phone").css('border-color', 'red');

        }
    });
    $("#sellnow").click(function () {

        var _data = new Object();
        _data.typeservice = $("input[name='sertype']:checked").val();
        _data.brand = $("#brand").val();
        _data.model = $("#model").val();
        _data.cartype = $("input[name='cartype']:checked").val();
        _data.phone = $("#phone").val();
        console.log(_data);
        if (!OnValidateLength(_data)) {
            return false;
        }

        var phone = $("#phone").val();
        var brandtxt = $("#brand option:selected").text();
        var modeltxt = $("#model option:selected").text();
        var cartypetxt = $("input[name='cartype']:checked").data('name');
        var typeservicetxt = $("input[name='sertype']:checked").data('name');

        var datatypeservice = $("input[name='sertype']:checked").val();
        var databrand = $("#brand option:selected").val();
        var datamodel = $("#model option:selected").val();
        var datacartype = $("input[name='cartype']:checked").val();
        var dataphone = $("#phone").val();
        var message = "\n" + "" + "เบอร์โทรศัพท์ : " + "" + phone + "" + "\n" + "" + "ประเภทรถ : " + "" +
            cartypetxt + "" + "\n" + "" + "ยี่ห้อรถ : " + "" + brandtxt + "" + "\n" + "" + "รุ่นรถ : " + "" +
            modeltxt + "" + "\n" + "" + "เลือกบริการ : " + "" + typeservicetxt + "" + "\n" + "" +
            "justcar.co.th";
        $.ajax({
            url: 'http://203.151.136.136:9874/api/Sell/RequestEstimatePrice',
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                // datatech
                typeOfServiceID: datatypeservice,
                carTypeID: datacartype,
                carBrandID: databrand,
                carModelID: datamodel,
                phone: dataphone,
                lineMessage: message
            }),
            contentType: 'application/json',
            success: function (res) {

                console.log(res);
                if (res.status) {
                    Swal.fire({
                            icon: 'success',
                            title: 'ขอบคุณที่รับบริการจากเรา',
                            text: 'เจ้าหน้าที่ JUSTCAR จะติดต่อกลับภายใน 3 นาที',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                        })
                        .then(function () {

                            window.location.href = "Home";
                        });
                }
            }
        });
    });

    function OnValidateLength(_data) {
        if (_data.cartype == undefined) {
            MessagePopup('กรุณาเลือกประเภทรถ');

            return false;
        }
        if (_data.brand == null) {
            MessagePopup('กรุณาเลือกยี่ห้อรถ');
            $("#brand").css('border-color', 'red');

            return false;
        }
        if (_data.model == null) {
            MessagePopup('กรุณาเลือกรุ่นรถ');
            $("#model").css('border-color', 'red');

            return false;
        }
        if (_data.phone == "") {
            MessagePopup('กรุณากรอกเบอร์ติดต่อ');
            $("#phone").css('border-color', 'red');

            return false;
        }
        if (_data.typeservice == undefined) {
            MessagePopup('กรุณาเลือกประเภทบริการ');

            return false;
        }
        return true;
    }

    function MessagePopup(_text) {
        Swal.fire({
            icon: 'warning',
            title: 'Warning',
            text: _text,
            showConfirmButton: false,
            timer: 2000
        });
    }
    $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>
</body>

</html>