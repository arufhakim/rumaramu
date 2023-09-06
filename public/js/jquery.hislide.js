(function ($) {
    var x = window.screen.availWidth;
    var slide = function (ele, options) {
        var $ele = $(ele);
        var setting = {
            speed: 200,
            interval: 1000,
        };
        $.extend(true, setting, options);
        if (x <= 450) {
            var states = [
                {
                    $zIndex: 1,
                    width: 120,
                    height: 265,
                    top: 22,
                    left: 3,
                    $opacity: 0.9,
                },
                {
                    $zIndex: 3,
                    width: 180,
                    height: 315,
                    top: 0,
                    left: 20,
                    $opacity: 1,
                },
                {
                    $zIndex: 1,
                    width: 120,
                    height: 265,
                    top: 22,
                    left: 95,
                    $opacity: 0.9,
                },
            ];
        } else if (x <= 576) {
            var states = [
                {
                    $zIndex: 1,
                    width: 180,
                    height: 365,
                    top: 35,
                    left: 10,
                    $opacity: 0.9,
                },
                {
                    $zIndex: 3,
                    width: 230,
                    height: 425,
                    top: 10,
                    left: 105,
                    $opacity: 1,
                },
                {
                    $zIndex: 1,
                    width: 180,
                    height: 365,
                    top: 35,
                    left: 245,
                    $opacity: 0.9,
                },
            ];
        } else if (x <= 768) {
            var states = [
                {
                    $zIndex: 1,
                    width: 200,
                    height: 365,
                    top: 35,
                    left: 100,
                    $opacity: 0.9,
                },
                {
                    $zIndex: 3,
                    width: 250,
                    height: 425,
                    top: 10,
                    left: 175,
                    $opacity: 1,
                },
                {
                    $zIndex: 1,
                    width: 200,
                    height: 365,
                    top: 35,
                    left: 295,
                    $opacity: 0.9,
                },
            ];
        } else if (x > 768) {
            var states = [
                {
                    $zIndex: 2,
                    width: 200,
                    height: 450,
                    top: 35,
                    left: 110,
                    $opacity: 0.9,
                },
                {
                    $zIndex: 3,
                    width: 340,
                    height: 500,
                    top: 10,
                    left: 210,
                    $opacity: 1,
                },
                {
                    $zIndex: 1,
                    width: 200,
                    height: 450,
                    top: 35,
                    left: 470,
                    $opacity: 0.9,
                },
            ];
        }

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
