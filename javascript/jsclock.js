    var clockp = document.getElementById("clockp");
    var clockinterval = setInterval(clock, 1000);

    function clock() {
        var date = new Date();
        document.getElementById("clockp").innerHTML = date.getHours() + ":" + date.getMinutes() + " " + date.getDate() + "." + date.getMonth() + "." + date.getFullYear()
     }