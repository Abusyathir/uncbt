function mapel_mtkipa(){
	//alert(niktentor);
	//nikpilihtentor = encodeURIComponent(document.getElementById("nikpilihtentor").value);
	//alert(nikpilihtentor+" "+bulanlihattentor+" "+talihattentor);
	var xmlhttp;
	if(window.XMLHttpRequest)
	{
		//jika IE7+, firefox, chrome, opera, safarai
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		//jika ie6, ie5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState!=4)
			{
				document.getElementById("content").innerHTML="<p align='center' style='margin-top:80px; margin-bottom:80px;'><img src='../img/ajax-loader2.gif' /></p>";
			}
			if(xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("content").innerHTML=xmlhttp.responseText;
				//alert(xmlhttp.responseText);
			}
		}
	xmlhttp.open("POST","../ajax/function/function_mapel.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("op=mtkipa");
}
function mapel_load(mapel){
	alert(mapel);
	//nikpilihtentor = encodeURIComponent(document.getElementById("nikpilihtentor").value);
	/*
	var xmlhttp;
	if(window.XMLHttpRequest)
	{
		//jika IE7+, firefox, chrome, opera, safarai
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		//jika ie6, ie5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState!=4)
			{
				document.getElementById("content").innerHTML="<p align='center' style='margin-top:80px; margin-bottom:80px;'><img src='../img/ajax-loader2.gif' /></p>";
			}
			if(xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("content").innerHTML=xmlhttp.responseText;
				//alert(xmlhttp.responseText);
			}
		}
	xmlhttp.open("POST","../ajax/function/function_mapel.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("op=fisika");
	*/
}
function paket_kode(kode){
	//alert(kode);
	var xmlhttp;
	if(window.XMLHttpRequest)
	{
		//jika IE7+, firefox, chrome, opera, safarai
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		//jika ie6, ie5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState!=4)
			{
				document.getElementById("paketdansoal").innerHTML="<p align='center' style='margin-top:80px; margin-bottom:80px;'><img src='../img/ajax-loader2.gif' /></p>";
			}
			if(xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("paketdansoal").innerHTML=xmlhttp.responseText;
				//alert(xmlhttp.responseText);
			}
		}
	xmlhttp.open("POST","../ajax/function/function_mapel.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("op=loadnumber&kode="+kode);
}
function load_soal(n,k){
	//alert(k+'-'+n);
	var xmlhttp;
	if(window.XMLHttpRequest)
	{
		//jika IE7+, firefox, chrome, opera, safarai
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		//jika ie6, ie5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState!=4)
			{
				document.getElementById("content_mapel_soal").innerHTML="<p align='center' style='margin-top:80px; margin-bottom:80px;'><img src='../img/ajax-loader2.gif' /></p>";
			}
			if(xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("content_mapel_soal").innerHTML=xmlhttp.responseText;
				//alert(xmlhttp.responseText);
			}
		}
	xmlhttp.open("POST","../ajax/function/function_mapel.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("op=loadsoal&kode="+k+"&no="+n);
}
function load_per_soal(n,k){
	//alert(n+'-'+k);
	var xmlhttp;
	if(window.XMLHttpRequest)
	{
		//jika IE7+, firefox, chrome, opera, safarai
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		//jika ie6, ie5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState!=4)
			{
				document.getElementById("wraper_soal_option").innerHTML="<p align='center' style='margin-top:80px; margin-bottom:80px;'><img src='../img/ajax-loader2.gif' /></p>";
			}
			if(xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("wraper_soal_option").innerHTML=xmlhttp.responseText;
				//alert(xmlhttp.responseText);
			}
		}
	xmlhttp.open("POST","../ajax/function/function_mapel.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("op=load_soal_dipilih&kode="+k+"&nodipilih="+n);
}