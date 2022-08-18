<style>
.form-parent {
  width:323px;height:auto;
  background: transparent url('https://3.bp.blogspot.com/-gvfHlb6JnY4/VPnwlkELmhI/AAAAAAAAKDU/9lgOeCd279E/s1600/contact-button.png') no-repeat right 10px;position:fixed;top:30%;left: -275px;z-index:9999999;transition:all ease .6s;-moz-transition:all ease .6s;-webkit-transition:all ease .6s;-o-transition:all ease .6s;}
.form-parent:hover {left:0;}
.cc-float-form {
	color:#000;
	padding:10px;
	width:250px;
	border:2px solid #000;
	border-radius: 15px;
	}
#ContactForm1 {display:none;}
.contact-form-area {
	background: linear-gradient(-145deg,rgba(219,138,222,1) 0%,rgba(246,191,159,1) 100%)!important;
	width: 245px;padding: 10px 0px;border: 1px solid #111;box-shadow: 2px 2px 2px #111 inset;    -webkit-box-shadow: 2px 2px 2px #111 inset;font-family:Verdana, Geneva, sans-serif;color:#fafafa;font-size: 12px;}
#cc {float:right;font-size:9px;margin-top:-10px;color:#777;}#cc a {    color: #777;text-decoration:none;}

h2 {
  margin-bottom: 20px;
  font-family: fantasy;
    font-size: 40px;
}

input, textarea {
  padding: 10px;
  border: 1px solid #E5E5E5;
  width: 200px;
  color: #999999;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px; 
}

textarea {
  width: 200px;
  height: 150px;
  max-width: 400px;
  line-height: 18px;
}

input:hover, textarea:hover,
input:focus, textarea:focus {
  border-color: 1px solid #C9C9C9;
  box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;  
}

.form label {
  margin-left: 10px;
  font-family:monospace;
    font-size: 15px;
}

.usersubmit input {
  width: 100px; 
  height: 40px;
  background-color: #474E69; 
  color: #FFF;
  border-radius: 3px;
}

.form {
    padding-left: 10px;
}

.form_style {
    border: 2px sold;
}
</style>

<div class='form-parent'>
<form class="form" action="subscribers.php" method="POST">
<div class="form_style">
<p></p>
Name:<br />
<input class="contact-form-area" name="name" size="30" value="" type="text" />
<p></p>
Email:
<span style="color:red;">*</span><br />
<input class="contact-form-area" name="email" size="30" value="" type="email" />
<p></p>
Mobile:
<span style="color:red;">*</span><br />
<input class="contact-form-area" name="phone" size="30" value="" type="number" />
<p></p>
Comments: <span style="color:red;">*</span><br />
<textarea style="height:80px;" class="contact-form-area"  name="message" cols="25" rows="5"></textarea>
<p></p>
<p class="usersubmit">
<input type="submit" name="submit" value="Send" >
</p>
<p></p>
<div id="form">
By <a href="https://drgalen.org/" target="_blank">Dr.Galen</a>
</div>
</div>
</form>
</div>
