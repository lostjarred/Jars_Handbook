    var clockp = document.getElementById("clockp");
    var clockinterval = setInterval(clock, 1000);

    function clock() {
        var date = new Date();
        var hours = date.getHours();
        var minutes = date.getMinutes();
        if (minutes < 10) { minutes = '0' + minutes }
        var day = date.getDate();
        var month = date.getMonth();
        var year = date.getFullYear();
        document.getElementById("clockp").innerHTML = hours + ":" + minutes + " " + day + "." + month + "." + year
     }