(function($) {
  
    var slide = function(ele,options) {
        var $ele = $(ele);
        var setting = {
        	
            speed: 1000,
       
            interval: 2000,
            
        };
        // 对象合并
        $.extend(true, setting, options);
       
        var states = [
            { $zIndex: 1, width: 130, height: 50, top: 69, left: 44, $opacity: 0.2 },
            { $zIndex: 2, width: 30, height: 70, top: 59, left: 0, $opacity: 0.4 },
            { $zIndex: 3, width: 70, height: 118, top: 35, left: 20, $opacity: 0.7 },
            { $zIndex: 4, width: 124, height: 178, top: 0, left: 73, $opacity: 1 },
            { $zIndex: 3, width: 70, height: 118, top: 35, left: 180, $opacity: 0.7 },
            { $zIndex: 2, width: 30, height: 70, top: 59, left: 130, $opacity: 0.4 },
            { $zIndex: 1, width: 90, height: 60, top: 69, left: 190, $opacity: 0.2 }
        ];

        var $lis = $ele.find('li');
        var timer = null;

        //
        $ele.find('.hi-next').on('click', function() {
            next();
        });
        $ele.find('.hi-prev').on('click', function() {
            states.push(states.shift());
            move();
        });
        $ele.on('mouseenter', function() {
            clearInterval(timer);
            timer = null;
        }).on('mouseleave', function() {
            autoPlay();
        });

        move();
       autoPlay();

       
        function move() {
            $lis.each(function(index, element) {
                var state = states[index];
                $(element).css('zIndex', state.$zIndex).finish().animate(state, setting.speed).find('img').css('opacity', state.$opacity);
            });
        }

        function next() {
        
            states.unshift(states.pop());
            move();
        }

        function autoPlay() {
            timer = setInterval(next, setting.interval);
        }
    }
 
    $.fn.hiSlide = function(options) {
        $(this).each(function(index, ele) {
            slide(ele,options);
        });
    
        return this;
    }
})(jQuery);
