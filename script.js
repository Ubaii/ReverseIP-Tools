$(document).ready(function(){
    $("#reverse").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        $.ajax({
            type: "POST",
            url: './ajax.php',
            dataType : "html",
            data: {
                domain: $('#domain').val()
            },
            success: function(result) {
                $("#results").text(result);
            },            
            error: function(result){
                $("#results").text(result);
            }
        });
    });
});