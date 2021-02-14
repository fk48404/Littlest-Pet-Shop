/*---------NAV---------*/
*{
	padding: 0;
	margin: 0;
	font-family: 'Open Sans', sans-serif;
}
.header{
    position: relative;
    display: flex;
    justify-content: space-between;
    width: 100%;
    left: 5%;
    height: 5px;
	flex-wrap: wrap;
}
.header a{
	color: #880e4f;
	text-decoration: none;
	font-size: 110%;
	font-weight: bold;
}
.header ul{
	margin-left: 35%;
}
.header li{
	float: left;
	display: inline;
	padding: 0 17px 0 17px;
}
.header li:hover{
	transition: 3s;
	background-color: gray;
	opacity: 0.9;
	border-top-left-radius: 30px;
	border-bottom-right-radius: 30px;
	border-top-right-radius: 7px;
	border-bottom-left-radius: 7px;
}
.header nav{
	float:right;
	margin-top: 20px;
	margin-top: 6%; 
	margin-right: 7%;
}
.nav{
	width: 100%;
	height: 25px;
	margin-top: 5px;
}
.header #divH1{
	height: 40px;
	width: 50px;
	float: left;
}
/*---------   Dashboard  ----------*/
.submit-btn{
	width: 100%;
	padding: 5px;
	margin-left: 5%;
	margin: auto;
	background: linear-gradient(to right, purple, pink);
	border-radius: 30px;
	box-shadow: 0 0 5px 9px #ff61241f;
}
.reg-btn{
	width: 12%;
	padding: 12px;
    display: row;
	margin: auto;
	background: linear-gradient(to right, purple, pink);
	border-radius: 30px;
	box-shadow: 0 0 5px 9px #ff61241f;
    margin: 0;
}
.table{
    border-color: pink;
    margin: 5% ;
	width: 80%;
	font-size: 13px;
	text-align: center;
}
h2{
	color: purple;
	text-decoration: underline;
	margin-left: 2%;
	font-family: Apple Chancery, cursive;
}

/* --------  Footer  --------- */
#footer {
	width: 100%;
	height: 40px;
}
#footer h2{
	text-align: center;
	color: #880e4f;
}
#footer p {
	text-align: center;
	font-weight: bold;
	font-size: 100%;
}
/*----Fundi----*/
#lastFooter {
	width: 100%;
	height: 40px;
}
#lastFooter p {
	text-align: center;
	font-weight: bold;
	font-size: 100%;
	color:#880e4f;
}
