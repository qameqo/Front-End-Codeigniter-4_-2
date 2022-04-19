<style>
    .hero {
	background-color: #000000;
	background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(https://images.unsplash.com/photo-1580841129862-bc2a2d113c45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1353&q=80);
  background-position: center;
	background-size: cover;
	color: #ffffff;
	padding: 1em;
	text-align: center;
}
</style>
<div class="hero">
	<h1>This is a crab</h1>
	<p>I want an image of a crab behind this text.</p>
</div>
<style>
.text-js{
  opacity: 0;
}
.cursor{
  display: block;
  position: absolute;
  height: 100%;
  top: 0;
  right: -5px;
  width: 2px;
  /* Change colour of Cursor Here */
  background-color: white;
  z-index: 1;
  animation: flash 0.5s none infinite alternate;
}
@keyframes flash{
  0%{
    opacity: 1;
  }
  100%{
    opacity: 0;
  }
}

// Rest of CSS (Purely for this pen)
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400');

*{
  margin: 0;
  padding: 0;
  boz-sizing: border-box;
  font-family: "Open Sans", sans-serif
}

.headline{
  margin: 20px;
  color: white;
  font-size: 32px;
  text-align: center;
  h1{
    letter-spacing: 1.6px;
    font-weight: 300;
  }
}

.twitterLink{
  position: absolute;
  bottom: 0;
  right: 0;
  margin: 10px 15px;
  z-index: 3;
  svg{
    width: 25px;
  }
}

</style>
<div class="type-js headline">
  <h1 class="text-js" style="color:black;">You have been hacked. #deadsec</h1>
</div>
<script>

</script>
<!-- COPY THIS AND THEN USE IT ON YOUR WEBPAGE
<!DOCTYPE html>
<html>
<body>

<form id="DemoForm" action="https://www.SnapHost.com/captcha/send.aspx" method="post" target="_top">
<input id="skip_SnapHostID" name="skip_SnapHostID" type="hidden" value="DEMO12345678">
<input id="skip_WhereToSend" name="skip_WhereToSend" type="hidden" value="support[[]]snaphost.com">
<input id="skip_WhereToReturn" name="skip_WhereToReturn" type="hidden" value="https://www.snaphost.com/captcha/ThankYou.aspx?isSent=success">
<input id="skip_Subject" name="skip_Subject" type="hidden" value="Subject test">

<table border="0" cellpadding="5" cellspacing="0">
<tbody><tr>
    <td colspan="2" align="center">  </td>
</tr>






</tbody></table>
<br>

<table cellspacing="0" border="0" cellpadding="8">
<tbody><tr>
    
</tr>
<tr style="background-color:#ffcc66; vertical-align:bottom;">
    <td>
        <input id="skip_CaptchaCode" name="skip_CaptchaCode" type="text" style="width:130px;height:48px;font-size:38px;" maxlength="6"><br>
        <i>Enter web form code</i>
    </td>
    <td>
        <a href="#" onclick="return ReloadCaptchaImage('CaptchaImage');"><span style="font-size:12px;">reload image</span></a><br>
        <a href="https://www.SnapHost.com/captcha/ProCaptchaOverview.aspx"><img id="CaptchaImage" alt="Web Form Code" style="border-width:0px;" src="https://www.SnapHost.com/captcha/CaptchaImage.aspx?id=DEMO12345678"></a>
        <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script type="text/javascript">
            function ReloadCaptchaImage(captchaImageId) {
                var obj = document.getElementById(captchaImageId);
                var src = '' + obj.src;
                obj.src = '';
                var date = new Date();
                var pos = src.indexOf('&rad=');
                if (pos >= 0) { src = src.substr(0, pos); }
                obj.src = src + '&rad=' + date.getTime();
                return false;
            }
        </script>
    </td>
</tr>
</tbody></table>

<br><br>

<input id="skip_DemoSubmit" name="skip_DemoSubmit" type="submit" value="Submit">
    
<br>

</form>
</body>
</html> -->