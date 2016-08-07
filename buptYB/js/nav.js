var domStr = "<div data-am-widget=\"navbar\" class=\"am-navbar am-cf am-navbar-default \"id=\"\"><ul class=\"am-navbar-nav am-cf am-avg-sm-12\" style=\"background-color:rgb(54, 59, 63);\"><li ><a id=\"prevA\" href=\"\" class=\"\"><span class=\"am-icon-arrow-left am-icon-md\"></span><span class=\"am-navbar-label\">上一步</span></a></li><li ><a id=\"nextA\" href=\"\" class=\"\"><span class=\"am-icon-arrow-right am-icon-md\"></span><span class=\"am-navbar-label\">下一步</span></a></li></ul></div>";

var linkStr = window.location.href;
if(linkStr.lastIndexOf("?")>=0) { //获取末尾网址
    var currLink = linkStr.slice(linkStr.lastIndexOf("/")+1,linkStr.lastIndexOf("?"));
} else {
    var currLink = linkStr.slice(linkStr.lastIndexOf("/")+1);
}
if (currLink == "") currLink = "index.php";

var strArray = new Array("#","index.php","note.html","recent.html","school.html","mapbb.html","maphh.html","safe.html","register.php"); //网址数组

if (parseInt(Cookies.get("done")) != 1) { //处理上一页/下一页的指向地址
    $("body").append(domStr);
    $("header ul").hide();
    var pos = $.inArray(currLink,strArray);
    if (pos>=0) {
        var prevLink = pos-1;
        if (currLink == "register.php") var nextLink = 1;
        else var nextLink = pos+1;
    }
    else {
        var prevLink = 0;
        var nextLink = 0;
    }
    $("#prevA").attr("href",strArray[prevLink]);
    $("#nextA").attr("href",strArray[nextLink]);
}

if(Cookies.get("school")) $("#boxSchool span").show();
if(Cookies.get("map")) $("#boxMap span").show();
if(Cookies.get("recent")) $("#boxDate span").show();
if(Cookies.get("register")) $("#boxRegister span").show();
if(Cookies.get("safe")) $("#boxSafety span").show();
if(Cookies.get("note")) $("#boxNote span").show();

if(Cookies.get("school") && Cookies.get("map") && Cookies.get("recent") && Cookies.get("register") && Cookies.get("safe") && Cookies.get("note")) Cookies.set("done",1);
