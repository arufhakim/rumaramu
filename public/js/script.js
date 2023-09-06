const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click', function () {
    nav.classList.toggle('slide');
});

(function($) {
    var slide = function(ele,options) {
        var $ele = $(ele);
        var setting = {
            speed: 200,
            interval: 1000,
            
        };
        $.extend(true, setting, options);
        var states = [
            { $zIndex: 2, width: 200, height: 450, top: 35, left: 110, $opacity: 0.9 },
            { $zIndex: 3, width: 340, height: 500, top: 10, left: 210, $opacity: 1 },
            { $zIndex: 1, width: 200, height: 450, top: 35, left: 470, $opacity: 0.9 },
        ];

        var $lis = $ele.find('li');
        var timer = null;

        $ele.find('.hi-next').on('click', function() {
            next();
        });
        $ele.find('.hi-prev').on('click', function() {
            states.push(states.shift());
            move();
        });
        // $ele.on('mouseenter', function() {
        //     clearInterval(timer);
        //     timer = null;
        // }).on('mouseleave', function() {
        //     autoPlay();
        // });

        move();
        // autoPlay();

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
