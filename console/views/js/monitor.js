var c=$(window.parent.document);


var g_blinkid = 0;
var g_blinkswitch = 0;
var g_blinktitle = document.title;
var msg="新消息"
function blinkNewMsg(msg)
{
 document.title = g_blinkswitch % 2==0 ? "【　　　】 - " + g_blinktitle :"【"+ msg+"】 - " + g_blinktitle;
 g_blinkswitch++;
}
function stopBlinkNewMsg()
{
	if (g_blinkid)
    {
        clearInterval(g_blinkid);
        g_blinkid = 0;
        document.title = g_blinktitle;
    }
}
function ajax(){
	$.ajax({
	  url: "ajax.php",
	  success: function(data) {
		var jsonobj=eval('('+data+')');
		msg=jsonobj.state[0].state1;
	  }
	}).done(function() { 
	  stopBlinkNewMsg();
	  g_blinkid = setInterval('blinkNewMsg(msg)', 1000);
	});
}
setInterval('ajax()', 10000);