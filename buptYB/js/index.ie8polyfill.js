$(function(){
    var vw = $(window).width()/100;
    var vh = $(window).height()/100;
    var vmin = Math.min(vw,vh);
    var vmax = Math.max(vw,vh);
    if ($(window).width()>1000) {
        $(".boxType").css("height",50*vh+"px");
        $(".boxType").css("width",50*vh+"px");
        
        $(".littleBoxType").css("height",25*vh+"px");
        $(".littleBoxType").css("width",25*vh+"px");
        
        $(".boxType h1").css("font-size",3*vmin+"px");
        
        $(".boxType p").css("font-size",2*vmin+"px");
        
        $(".littleBoxType h2").css("font-size",2*vmin+"px");
        
        $(".littleBoxType p").css("font-size",1.8*vmin+"px");
        
        $(".littleBoxType:hover,.littleBoxType:active,.littleBoxType:focus").css("height",26*vh+"px");
        $(".littleBoxType:hover,.littleBoxType:active,.littleBoxType:focus").css("width",26*vh+"px");
        
        $(".littleBoxType:hover h2,.littleBoxType:active h2,.littleBoxType:focus h2").css("font-size",2.08*vmin+"px");
        $(".littleBoxType:hover p,.littleBoxType:active p,.littleBoxType:focus p").css("font-size",1.872*vmin+"px");
        
        $("#boxWelcome").css("left",50*vw-25*vh+"px");
        
        $("#boxWelcome:hover,#boxWelcome:active,#boxWelcome:focus").css("height",52*vh+"px");
        $("#boxWelcome:hover,#boxWelcome:active,#boxWelcome:focus").css("width",52*vh+"px");
        $("#boxWelcome:hover,#boxWelcome:active,#boxWelcome:focus").css("left",50*vw-26*vh+"px");
        $("#boxWelcome:hover,#boxWelcome:active,#boxWelcome:focus").css("top",14*vh+"px");
        
        $("#boxWelcome:hover h1,#boxWelcome:active h1,#boxWelcome:focus h1").css("font-size",3.12*vmin+"px");
        
        $("#boxWelcome:hover p,#boxWelcome:active p,#boxWelcome:focus p").css("font-size",2.08*vmin+"px");
        
        $("#boxSchool").css("left",50*vw-51*vh+"px");
        $("#boxMap").css("left",50*vw-53*vh+"px");
        $("#boxDate").css("left",50*vw-34*vh+"px");
        $("#boxRegister").css("left",50*vw+9*vh+"px");
        $("#boxSafety").css("left",50*vw+28*vh+"px");
        $("#boxNote").css("left",50*vw+26*vh+"px");
        
    } else if($(window).width()>768) {
        
        $(".boxType").css("height",50*vh+"px");
        $(".boxType").css("width",50*vh+"px");
        $(".boxType").css("left",50*vw-25*vh+"px");
        
        $(".littleBoxType").css("height",20*vh+"px");
        $(".littleBoxType").css("width",20*vh+"px");
        
        $(".boxType h1").css("font-size",5*vmin+"px");
        $(".boxType h1").css("margin-top",25*vh-5*vmin+"px");
        
        $(".boxType p").css("font-size",3*vmin+"px");
        
        $(".littleBoxType h2").css("font-size",3*vmin+"px");
        
        $(".littleBoxType:hover,.littleBoxType:active,.littleBoxType:focus").css("height",21*vh+"px");
        $(".littleBoxType:hover,.littleBoxType:active,.littleBoxType:focus").css("width",21*vh+"px");
        
        $(".littleBoxType:hover h2,.littleBoxType:active h2,.littleBoxType:focus h2").css("font-size",3.15*vmin+"px");
        $(".littleBoxType:hover h2,.littleBoxType:active h2,.littleBoxType:focus h2").css("margin-top",10.5*vh-5.25*vmin+"px");
        
        $(".littleBoxType:hover p,.littleBoxType:active p,.littleBoxType:focus p").css("font-size",1.872*vmin+"px");
        
        $("#boxWelcome").css("left",50*vw-25*vh+"px");
        $("#boxWelcome").css("top",7*vh+"px");
        
        $("#boxWelcome:hover,#boxWelcome:active,#boxWelcome:focus").css("height",52*vh+"px");
        $("#boxWelcome:hover,#boxWelcome:active,#boxWelcome:focus").css("width",52*vh+"px");
        $("#boxWelcome:hover,#boxWelcome:active,#boxWelcome:focus").css("left",50*vw-26*vh+"px");
        $("#boxWelcome:hover,#boxWelcome:active,#boxWelcome:focus").css("top",6*vh+"px");
        
        $("#boxWelcome:hover h1,#boxWelcome:active h1,#boxWelcome:focus h1").css("font-size",4.16*vmin+"px");
        
        $("#boxWelcome:hover p,#boxWelcome:active p,#boxWelcome:focus p").css("font-size",3.12*vmin+"px");
        
        $("#boxSchool").css("left",vh+"px");
        $("#boxMap").css("left",50*vw-10*vh+"px");
        $("#boxDate").css("left",100*vw-21*vh+"px");
        $("#boxRegister").css("left",vh+"px");
        $("#boxSafety").css("left",50*vw-10*vh+"px");
        $("#boxNote").css("left",100*vw-21*vh+"px");
        
    } else {
        $(".littleBoxType").css("height",30*vw+"px");
        $(".littleBoxType").css("width",30*vw+"px");
        
        $(".boxType h1").css("font-size",8*vmin+"px");
        $(".boxType h1").css("margin-top",10*vmin+"px");
        
        $(".boxType p").css("margin-top",8*vmin+"px");
        $(".boxType p").css("font-size",4*vmin+"px");
        
        $(".littleBoxType h2").css("font-size",5*vmin+"px");
        $(".littleBoxType h2").css("margin-top",15*vw-6*vmin+"px");
        
        $("#boxWelcome").css("left",50*vw-25*vh+"px");
        $("#boxWelcome").css("top",7*vh+"px");
        
        $("#boxSchool").css("left",2*vw+"px");
        $("#boxMap").css("left",33.3*vw+"px");
        $("#boxDate").css("left",64.6*vw+"px");
        $("#boxRegister").css("left",2*vw+"px");
        $("#boxSafety").css("left",33.3*vw+"px");
        $("#boxNote").css("left",64.6*vw+"px"); 
        } 
    
    
});