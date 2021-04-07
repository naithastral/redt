<script>
var link = document.location +"";
var data = link.split("?");
var link= data[[data.length - 1]];
var s=link.split("-");
var newLink="";
for(i=0;i<s.length;i++){
	s[i]=s[i].replace(/^c.*/g, '&utm_campaign=c');
	s[i]=s[i].replace(/^o.*/g, '&utm_campaign=o');
	s[i]=s[i].replace(/^l.*/g, '&utm_campaign=l');
	s[i]=s[i].replace(/^u.*/g, '&utm_campaign=u');
	s[i]=s[i].replace(/^s.*_/g, '&utm_source=');
	s[i]=s[i].replace(/^e.*_/g, '&em=');
	newLink=newLink+s[i];
}

if(newLink!=null && newLink.length>10){
	window.location.replace("http://100xmissions.org/?" + newLink);
}else{
	window.location.replace("http://100xmissions.org/404");
}
</script>
