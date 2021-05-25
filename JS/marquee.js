var dayNumber = 0;
   var intervalCount = 0;
   var totalDays = 7;
   setInterval(function () {
       var $active = $('.TexteDefilant').parent().find(".active");//[intervalCount % totalDays];
       var $next = $($active).next().length == 0 ? $('.TexteDefilant').first() : $active.next();
       $active.removeClass('active').hide('slide', { direction: 'left' }, 10000);
       $next.addClass('active').show('slide', { direction: 'right' }, 10000);
       intervalCount++;
   }, 17000);