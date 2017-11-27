jQuery(function(){
    console.log('script is runnnning!');


    function change_backstretch()
    {
        var table = "/wp-content/uploads/2017/11/table.jpg";
        var cabin = "/wp-content/uploads/2017/11/snow_cabin.jpg";
        var silver = "/wp-content/uploads/2017/11/silver_fork.jpg";
        var bryce = "/wp-content/uploads/2017/11/bryce.jpg";
        var backstretch = jQuery('.backstretch');
        
        var picArray = [ table, cabin, silver, bryce];
        var rand = picArray[Math.floor(Math.random() * picArray.length)];
        var string = "<img src='" + rand + "'/>";
        backstretch.html(string);
    }

    setInterval(change_backstretch, 5000);

});

