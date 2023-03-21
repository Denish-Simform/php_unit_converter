$(document).ready(function() {
    $("#parameter1").change(function() {
        $("#to").val('');
    })  
    $("#parameter2").change(function() {
        $("#to").val('');
    })
})
function redirect(element) {
    let id = element.id;
    window.location.href = "converter.php?data="+id;
}
function convert() {
    let pattern = /^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/;
    let fromVal = $("#from").val();
    if(pattern.test(fromVal)) {
        from = fromVal;
    } else {
        alert("Please enter Positive values");
    }
    let para1 = $("#parameter1").val();
    let para2 = $("#parameter2").val();   
    $.ajax ({
        method : "POST",
        url : "convert.php",
        dataType : "json",
        data : {
            from : from,
            para1 : para1,
            para2 : para2
        },
        success : function(data) {
            $("#to").val(data);
        }
    })
}