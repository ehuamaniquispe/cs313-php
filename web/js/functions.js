// function to show text when a button is clicked
function clickButton() {
    alert("Clicked!");
}

// function to change color of div1
function changeColor() {
    var color = document.getElementById("color").value;
    console.log(color);
    var div1 = document.getElementById("div1");
    div1.style.backgroundColor = color;

}


$(document).ready(function () {

    // change color
    $('#changeColor').click(function () {
        var color = $("#color1").val();
        console.log(color);
        $("#div1").css("background-color", color);
    });

    $('#visibility').click(function () {
        $("#div3").fadeToggle("slow");

    });

    $('#introBtn').click(function () {
        $("#intro").fadeToggle("slow");

    });





});





