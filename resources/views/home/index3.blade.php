<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Device Repair Counter</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    background-color: #f0f0f0;
}

.funfact-section {
    padding: 50px 0;
    text-align: center;
    background-color: #8bc34a;
    color: white;
}

.big-text {
    font-size: 2em;
    margin-bottom: 20px;
}

.bg-layer {
    position: relative;
}

.bg-1, .bg-2 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.1;
}

.auto-container {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
}

.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.counter-block {
    margin: 15px;
}

.counter-block-one {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.count-outer {
    font-size: 2em;
    margin-bottom: 10px;
}

.icon-box {
    background-color: rgba(0, 0, 0, 0.1); /* Background color */
    padding: 20px; /* Padding around the image */
    border-radius: 10px; /* Rounded corners */
    display: inline-block; /* To wrap around the image */
    margin-top: 10px;
}

.icon-box img {
    max-width: 100px;
}

    </style>
</head>
<body>
    <section class="funfact-section centred green-bg">
        <span class="big-text">Our Happy customers!</span>
        
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-start="0" data-stop="400000">0</span><sup>+</sup>L
                            </div>
                            <h5> of Liquid Helium Supplied</h5>
                            <div class="icon-box">
                                <img src="assets/images/helium-liquid-supplied.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-start="0" data-stop="100">0</span><sup>+</sup>
                            </div>
                            <h5>Magnets Supported</h5>
                            <div class="icon-box">
                                <img src="assets/images/NMR Magnet icon.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-start="0" data-stop="500">0</span><sup>+</sup>
                            </div>
                            <h5>Customers Covered</h5>
                            <div class="icon-box">
                                <img src="assets/images/customer-covered.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-start="0" data-stop="25">0</span>
                            </div>
                            <h5>Years of Service</h5>
                            <div class="icon-box">
                                <img src="assets/images/year-of-services.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>

    <script>

document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.count-text');

    const animateCounters = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const speed = parseInt(counter.getAttribute('data-speed'));
                const start = parseInt(counter.getAttribute('data-start'));
                const stop = parseInt(counter.getAttribute('data-stop'));
                const increment = stop / speed;

                const current = parseInt(counter.innerText.replace(/,/g, ''));

                if (current < stop) {
                    counter.innerText = Math.ceil(current + increment).toLocaleString();
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = stop.toLocaleString();
                }
            };

            updateCount();
        });
    };

    animateCounters();
});

    </script>
</body>
</html>
