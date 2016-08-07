<<<<<<< HEAD
var calendar = {

    init: function() {
         /**
         * Get current date
         */
        var d = new Date();
        var strDate = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate();

        /**
         * Get current month and set as '.current-month' in title
         */
        var monthNumber = d.getMonth() + 1;

        /**
         * Get current day and set as '.current-day'
         * 八月或者九月
         */
        if(monthNumber==7||monthNumber==8||monthNumber==10)
        $('tbody td[date-day="' + d.getDate() + '"][date-month="' + monthNumber + '"]').addClass('current-day');

        /**
         * Add class '.active' on calendar date
         */
        $('tbody td').on('click', function(e) {
            if ($(this).hasClass('event')) {
                $('tbody td').removeClass('active');
                $(this).addClass('active');
            } else {
                $('tbody td').removeClass('active');
            };
        });

        /**
         * Add '.event' class to all days that has an event
         */
        $('.day-event').each(function(i) {
            var eventMonth = $(this).attr('date-month');
            var eventDay = $(this).attr('date-day');
            $('tbody tr td[date-month="' + eventMonth + '"][date-day="' + eventDay + '"]').addClass('event');
        });

        /**
         * Get current day on click in calendar
         * and find day-event to display
         */
        $('tbody td').on('click', function(e) {
            $('.day-event').hide();
            var monthEvent = $(this).attr('date-month');
            var dayEvent = $(this).text();
            var $newEvent=$('.day-event[date-month="' + monthEvent + '"][date-day="' + dayEvent + '"]');

            $newEvent.show();

            setTimeout(function(){$newEvent.niceScroll({
                cursorcolor: "rgba(154, 202, 159, 0.4)",//#CC0071 光标颜色
                cursoropacitymax: 1, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
                touchbehavior: false, //使光标拖动滚动像在台式电脑触摸设备
                cursorwidth: "5px", //像素光标的宽度
                cursorborder: "1px solid rgba(51,136,3,0.7)", //   游标边框css定义
                cursorborderradius: "5px",//以像素为光标边界半径
                autohidemode: false //是否隐藏滚动条
            })},100);
        });

        /**
         * Close day-event
         */
        $('.close').on('click', function(e) {
            $(this).parent().hide(400);
        });
    },
};

$(document).ready(function() {

    calendar.init();

=======
var calendar = {

    init: function() {
         /**
         * Get current date
         */
        var d = new Date();
        var strDate = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate();

        /**
         * Get current month and set as '.current-month' in title
         */
        var monthNumber = d.getMonth() + 1;

        /**
         * Get current day and set as '.current-day'
         * 八月或者九月
         */
        if(monthNumber==7||monthNumber==8||monthNumber==10)
        $('tbody td[date-day="' + d.getDate() + '"][date-month="' + monthNumber + '"]').addClass('current-day');

        /**
         * Add class '.active' on calendar date
         */
        $('tbody td').on('click', function(e) {
            if ($(this).hasClass('event')) {
                $('tbody td').removeClass('active');
                $(this).addClass('active');
            } else {
                $('tbody td').removeClass('active');
            };
        });

        /**
         * Add '.event' class to all days that has an event
         */
        $('.day-event').each(function(i) {
            var eventMonth = $(this).attr('date-month');
            var eventDay = $(this).attr('date-day');
            $('tbody tr td[date-month="' + eventMonth + '"][date-day="' + eventDay + '"]').addClass('event');
        });

        /**
         * Get current day on click in calendar
         * and find day-event to display
         */
        $('tbody td').on('click', function(e) {
            $('.day-event').hide();
            var monthEvent = $(this).attr('date-month');
            var dayEvent = $(this).text();
            var $newEvent=$('.day-event[date-month="' + monthEvent + '"][date-day="' + dayEvent + '"]');

            $newEvent.show();

            setTimeout(function(){$newEvent.niceScroll({
                cursorcolor: "rgba(154, 202, 159, 0.4)",//#CC0071 光标颜色
                cursoropacitymax: 1, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
                touchbehavior: false, //使光标拖动滚动像在台式电脑触摸设备
                cursorwidth: "5px", //像素光标的宽度
                cursorborder: "1px solid rgba(51,136,3,0.7)", //   游标边框css定义
                cursorborderradius: "5px",//以像素为光标边界半径
                autohidemode: false //是否隐藏滚动条
            })},100);
        });

        /**
         * Close day-event
         */
        $('.close').on('click', function(e) {
            $(this).parent().hide(400);
        });
    },
};

$(document).ready(function() {

    calendar.init();

>>>>>>> 01c3a36ad1b0b0fadf0ebc54ff294852988aa5f3
});