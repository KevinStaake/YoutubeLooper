<html>

<body bgcolor=white>



<title>Used Gamer - A place for stuff and things</title>


<center>
<script type="text/javascript">
var youtubeURL = prompt("enter the 11 char youtube code");
//Get 11 character video code from user for youtube vid they wanna loop

showYoutube();
function showYoutube()
{
var allURL ='<object width="1280" height="720"><param name="movie" value="http://www.youtube.com/v/'+ youtubeURL + '&hl=en&fs=1&rel=0&ap=%2526fmt%3D22&autoplay=1&loop=1"></param><param name="allowscriptaccess" value="always"></param><param name="volume" value="100"></param><param name="wmode" value="transparent"></param><embed src="http://www.youtube.com/v/' + youtubeURL + '&hl=en&fs=1&rel=0&ap=%2526fmt%3D22&autoplay=1&loop=1" type="application/x-shockwave-flash" allowscriptaccess="always" wmode="transparent" width="1280" height="720" volume="100"></embed></object>';
//Ugly youtube embed code.
document.write(allURL);
}

</script>

</head>
<body>



</center>
</body>
</html>
