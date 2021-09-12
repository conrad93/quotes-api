$(document).ready(function(){
     
    $.get("./getTodaysQuote.php", function(data, status){
        let response = JSON.parse(data);
        if(response.status){
            if(response.data.length == 1){
                $("blockquote p").html(response.data[0].quote);
                $("cite").html(response.data[0].author);
            }
        } else {
            $("blockquote p").html("No response from API");
            $("cite").html('');
        }
    });

});