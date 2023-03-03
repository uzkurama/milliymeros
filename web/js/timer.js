class CountdownTimer {
    // setup timer values
    constructor({ selector, targetDate, backgroundColor = null, foregroundColor = null }) {
        this.selector = selector;
        this.targetDate = targetDate;

        // grab divs on frontend using supplied selector ID
        this.refs = {
            mins: document.querySelector(`${this.selector} [data-value="minutes"]`),
            secs: document.querySelector(`${this.selector} [data-value="seconds"]`),
        };
    }

    getTimeRemaining(endtime) {
        const total = Date.parse(endtime) - Date.parse(new Date());
        const mins = Math.floor((total / 1000 / 60) % 60);
        const secs = Math.floor((total / 1000) % 60);
        return {
            total,
            mins,
            secs,
        };
    }

    updateTimer({ mins, secs }) {
        this.refs.mins.textContent = mins;
        this.refs.secs.textContent = secs;
    }

    startTimer() {
        const timer = this.getTimeRemaining(this.targetDate);
        this.updateTimer(timer);
        setInterval(() => {
            const timer = this.getTimeRemaining(this.targetDate);
            this.updateTimer(timer);
        }, 1000);
    }
}