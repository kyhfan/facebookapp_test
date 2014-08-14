<!doctype html>
<html>
  <head>
    <title>facebook app test</title>
    <script type="text/javascript">
	function go_sns(media, gubun)
	{
		if (media == "facebook")
		{
			if (gubun == "share")
			{
				var goUrl = "http://www.facebook.com/sharer.php?u=stayfoolish.co.kr&t=test";
				var win = window.open(goUrl, "viewTrace", "resizable=yes, width=660, height=310,status=no,toolbar=no,location=no,scrollbars=no,menubar=no,titlebar=no");
			}
			else if (gubun == "good")
			{
				var goUrl = "http://www.facebook.com/sharer.php?u=stayfoolish.co.kr&t=test";
				var win = window.open(goUrl, "viewTrace", "resizable=yes, width=660, height=310,status=no,toolbar=no,location=no,scrollbars=no,menubar=no,titlebar=no");
			}
		}
		else if (media == "twitter")
		{
			if (gubun == "share")
			{
				var openURL = "http://twitter.com/home?status=test stayfoolish.co.kr";
				var win = window.open(openURL, "viewTrace", "resizable=yes, width=660, height=310,status=no,toolbar=no,location=no,scrollbars=no,menubar=no,titlebar=no");
			}
		}

	}
    </script>
  </head>
  <body>
    <a href="#" onclick="go_sns('facebook','share')">facebook share</a>
    <a href="#" onclick="go_sns('twitter','share')">twitter share</a>
    <br />
    <a href="#" onclick="go_sns('facebook','good')">facebook good</a>
    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
  </body>
</html>
