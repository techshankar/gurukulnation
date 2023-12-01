(function () {
    var countdown, init_countdown, set_countdown;
    var time = $('#hdntime').val();
    if (time != "") {
    $('#timeDiv').show();
    countdown = init_countdown = function () {
        countdown = new FlipClock($('.countdown'), {
            clockFace: 'MinuteCounter',
            language: 'en',
            autoStart: false,
            countdown: true,
            showSeconds: true,
            callbacks: {
                start: function () {
                 /*   return console.log('The clock has started!');*/
                },
                stop: function () {
                    /* return console.log('The clock has stopped!');*/
                    window.location = window.location.origin + "/LinkExpired.aspx?msg=The link you provided is expired or not valid";
                },
                interval: function () {
                    var time;
                    time = this.factory.getTime().time;
                    if (time) {
                       /* return console.log('Clock interval', time);*/
                    }
                }
            }
        });
        return countdown;
    };

    set_countdown = function (minutes, start) {
        var elapsed, end, left_secs, now, seconds;
        if (countdown.running) {
            return;
        }
        seconds = minutes * 60;
        now = new Date;
        start = new Date(start);
        end = start.getTime() + seconds * 1000;
        left_secs = Math.round((end - now.getTime()) / 1000);
        elapsed = false;
        if (left_secs < 0) {
            left_secs *= -1;
            elapsed = true;
        }
        countdown.setTime(left_secs);
        return countdown.start();
    };

    init_countdown();
        set_countdown($('#hdntime').val(), new Date());
    }
    }).call(this);
