<html>
<head>
<style>
body
{
		margin:0px;
		padding:0px;
		background:linear-gradient(#1fa2ff,#12d8fa,#a6ffcb);

}
.a
{
		
	width:100%;


}
.b
{

	width:100%;
	height:10%;
	background:linear-gradient(#0f0c29,#302b63,#24243e);

}
.c
{
	
	width:50%;
	height:87%;
	margin-left:32%;
	padding:5px;

}
.text
{
	font-size:2em;
	font-family:ALGERIAN;
	word-spacing:12px;
	color:white;
	
	


}
.d
{
	border:7px solid navy;
	width:30%;
	height:75%;
	margin-left:35%;
	margin-top:1.9%;
	border-radius:25px;
	background:linear-gradient(lightblue,white);

	

}
.e
{
	border:2px solid navy;
	height:20%;
	border-radius:15px;	
	background:linear-gradient(#0f0c29,#302b63,#24243e);

}
.f
{

	width:70%;
	height:60%;
	margin-left:22%;
	margin-top:6%;
	

}
.text1
{
	font-size:1.5em;
	font-family:arial;
	word-spacing:10px;
	color:white;
	
	

}
.g
{
	
	height:78%;
	margin-top:5%;
	line-height:10%;
	
	



}
.text2
{
	font-size:1.2em;
	margin-left:5%;

}
input[type=text]
{
	border:2px solid grey;
	width:65%;
	height:15%;
	margin-left:3%;
	border-radius:20px;


}
input[type=text]:focus {
    border: 3px solid navy;
}
select 
{
	border:2px solid grey;
	width: 50%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
	border-radius:15px;
}
select:focus
{
   
	border:3px solid navy;
}
.button 
{
    
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	margin-left:46%;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	background:linear-gradient(#0f0c29,#302b63,#24243e);
}
.button:hover
{
   
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	margin-left:46%;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
	color:white;
	background:linear-gradient(#0f0c29,#302b63,#24243e);
}
</style>
</head>
<body>
<form action=  "n2.php" method = "post">
<div class = "a">
<div class = "b">
<div class = "c">
<b class = "text">Student Information System </b>
</div>


</div>
<div class = "d">
<div class = "e">
<div class = "f">
<b class = "text1">Registration Form</b>
</div>
</div>
<div class = "g">
<b class ="text2">First name : <input type = "text" name = "f_name"/></b>
<br><br><br><br><br><br><br><br><b class ="text2">Last name &nbsp: <input type = "text" name = "l_name"/></b>
<br><br><br><br><br><br><br><br><br><br><br><br><b class = "text2" style = "margin-left:5%;">Courses &nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp<select name = "opt_name">
<option>B tech.</option>
<option>MCA</option>
</select></b>
<br><br><br><br><br><br><br><br><br><br><br><br><br><b class = "text2">E-mail&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type = "text" name = "email"/></b>
<br><br><br><br><br><br><br><br><br><br><br><br><br><b class = "text2">Addr.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type = "text" name = "address"/></b>
</div>
</div>
<input type = "submit" value = "Register" class = "button"/>
</div>
</form>
</body>
</html>