var majorset = {
    
        "请选择" : [],
    
        "信息与通信工程学院" : ["电子信息工程","通信工程","信息工程","通信工程(双培)","电子信息工程(双培)","军事通信学","电子与通信工程"],
        
        "电子工程学院" : ["电子信息科学与技术","电子科学与技术","生物医学工程","光电信息科学与工程","生物医学工程","电子与通信工程"],
        
        "计算机学院" : ["计算机科学与技术","网络工程","信息安全","智能科学与技术","信息安全(双培)","密码学","计算机技术"],
        
        "自动化学院" : ["机械工程","自动化","测控技术与仪器","物流工程","控制科学与工程","机械电子工程"],
        
        "软件学院" : ["软件工程","软件工程(双培)"],
        
        "数字媒体与设计艺术学院" : ["数字媒体技术","工业设计","数字媒体艺术","新闻传播学","设计艺术学","艺术"],
        
        "现代邮政学院" : ["工商管理（邮政快递管理工程）","物流工程（邮政快递智能工程）"],
        
        "光电信息学院" : ["电磁场与无线技术"],
        
        "经济管理学院" : ["工程管理","工商管理","电子商务","信息管理与信息系统","经济学","会计学","市场营销","国际经济与贸易","电子商务(双培)","应用经济学","管理科学与工程","国际商务","工商管理硕士"],
        
        "人文学院" : ["英语","日语","法学","外国语言文学","翻译硕士"],
        
        "公共管理学院" : ["公共事业管理","公共管理硕士"],
        
        "理学院" : ["数学与应用数学","信息与计算科学","应用物理学","应用物理学(通信基础科学)","数学","物理学","电子科学与技术"],
        
        "国际学院" : ["电信工程及管理","电子商务及法律","物联网工程"],
        
        "马克思主义学院" : ["马克思主义哲学","马克思主义理论"],
        
        "网络技术研究院" : ["信息与通信工程","计算机科学与技术","信息安全","软件工程","密码学","电子与通信工程","计算机技术"],
        
        "网络教育学院" : ["教育技术学","信息与通信工程","计算机科学与技术"],
        
        "信息光子学与光通信研究院" : ["光学工程","电子科学与技术","信息与通信工程","电子与通信工程"]
    }
$(function(){
    window.rewriteOK = 0;
    var schoolS = $("#form1School");
    var majorS = $("#form1Major");
    $.each(majorset,function(name,value){
        if (name == "请选择") schoolS.append("<option selected disabled>"+name+"</option>");
        else schoolS.append("<option>"+name+"</option>");
                       });
    var majorChange = function(){
            $.each(majorset,function(n,v){
                if (schoolS.val() == n) {
                    majorS.text("");
                    majorS.append("<option selected disabled>请选择您所在专业</option>");
                    for (x in v) {
                        majorS.append("<option>"+v[x]+"</option>");
                    }
                }
                            });
        
     };
    $.getJSON("backend/regDataQuery.php",function (data) {
        $.each(data, function(key, value){
            var $ctrl = $('[name='+key+']');
            switch($ctrl.attr("type"))
            {
                case "text" :
                case "hidden":
                    $ctrl.val(value);
                    break;
                case "radio" : case "checkbox":
                $ctrl.each(function(){
                    if(value == "yes") { $(this).attr("checked","on"); }});
                    //if($(this).attr('value') == value) {  $(this).attr("checked",value); } });
                break;
                default:
                    $ctrl.val(value);
            }
        });
    });
    
    schoolS.on('change',majorChange);
    majorChange();
    
    $.getJSON("backend/regDataQuery.php",function (data) {
        var $ctrl = $('#form1Major');
        $ctrl.val(data['form1Major']);
    });
});
