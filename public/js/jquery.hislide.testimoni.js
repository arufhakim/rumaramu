(function ($) {
    var x = window.screen.availWidth;
    var slide = function (ele, options) {
        var $ele = $(ele);
        var setting = {
            speed: 50,
            interval: 1000,
        };
        $.extend(true, setting, options);
        if (x < 451) {
            var states = [
                { $zIndex: 1, width: 0, $opacity: 0 },
                { $zIndex: 2, width: 200, $opacity: 1 },
                { $zIndex: 3, width: 0, $opacity: 0 },
            ];
        } else if (x < 577) {
            var states = [
                { $zIndex: 1, width: 0, $opacity: 0 },
                { $zIndex: 2, width: 370, $opacity: 1 },
                { $zIndex: 3, width: 0, $opacity: 0 },
            ];
        } else if (x < 769) {
            var states = [
                { $zIndex: 1, width: 0, $opacity: 0 },
                { $zIndex: 2, width: 490, $opacity: 1 },
                { $zIndex: 3, width: 0, $opacity: 0 },
            ];
        } else if (x < 1241) {
            var states = [
                { $zIndex: 1, width: 0, $opacity: 0 },
                { $zIndex: 2, width: 900, $opacity: 1 },
                { $zIndex: 3, width: 0, $opacity: 0 },
            ];
        } else if (x > 1242) {
            var states = [
                { $zIndex: 1, width: 0, $opacity: 0 },
                { $zIndex: 2, width: 1200, $opacity: 1 },
                { $zIndex: 3, width: 0, $opacity: 0 },
            ];
        }
        // var states = [
        //     { $zIndex: 1, width: 0, height: 450, top: 35, left: 110, $opacity: 0},
        //     { $zIndex: 2, width: 1000, height: 750, top: 60, left: 10, $opacity: 1},
        //     { $zIndex: 3, width: 0, height: 450, top: 35, left: 470, $opacity: 0},
        // ];

        var $lis = $ele.find("li");
        var timer = null;

        $ele.find(".hi-next").on("click", function () {
            next();
        });
        $ele.find(".hi-prev").on("click", function () {
            states.push(states.shift());
            move();
        });

        move();

        function move() {
            $lis.each(function (index, element) {
                var state = states[index];
                $(element)
                    .css("zIndex", state.$zIndex)
                    .finish()
                    .animate(state, setting.speed)
                    .find("img")
                    .css("opacity", state.$opacity);
            });
        }

        function next() {
            states.unshift(states.pop());
            move();
        }

        function autoPlay() {
            timer = setInterval(next, setting.interval);
        }
    };
    $.fn.hiSlide = function (options) {
        $(this).each(function (index, ele) {
            slide(ele, options);
        });
        return this;
    };
})(jQuery);
