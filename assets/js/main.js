(function($){
    class Clock {
        constructor() {
            this.initializeClock();
        }
        initializeClock() {
            let t = setInterval( () => this.time(), 1000);
        }
        numPad( num ) {
           let str = num < 10 ? "0"+num : num;
           return str;
        }
        time() {
            let currDate = new Date();
            let currSec = currDate.getSeconds();
            let currMin = currDate.getMinutes();
            let curr24Hour = currDate.getHours();
            let ampm = curr24Hour <= 12 ? 'AM' : 'PM';
            let currHr = curr24Hour % 12;
                currHr = currHr ? currHr : 12;

            let dayNight = curr24Hour >= 6 || curr24Hour <= 18 ? 'Day' : 'Night';

            let stringTime = currHr + ':' + this.numPad(currMin) + ':' + this.numPad(currSec);
            $("#time").text(stringTime);
            $("#ampm").text(ampm);
            $("#time-emoji").text(dayNight);
        }
    }
    new Clock();
})(jQuery)