$(document).ready(function() {
    $("#home-background").addClass("background-img1");
    $("#second_card").hide();
    $("#third_card").hide();
})

$("#eat1").click(function(){
    $("#home-background").removeClass("background-img1 background-img3").addClass("background-img2");
    $("#first_card").hide();
    $("#second_card").show();
    $("#third_card").hide();
    return false;
});

$("#ride1").click(function(){
    $("#home-background").removeClass("background-img1 background-img2").addClass("background-img3");
    $("#first_card").hide();
    $("#second_card").hide();
    $("#third_card").show();
    return false;
});

$('#drive2').click(function(){
    $("#home-background").removeClass("background-img2 background-img3").addClass("background-img1");
    $("#first_card").show();
    $("#second_card").hide();
    $("#third_card").hide();
    return false;
});

$("#ride2").click(function(){
    $("#home-background").removeClass("background-img1 background-img2").addClass("background-img3");
    $("#first_card").hide();
    $("#second_card").hide();
    $("#third_card").show();
    return false;
});

$('#drive3').click(function(){
    $("#home-background").removeClass("background-img2 background-img3").addClass("background-img1");
    $("#first_card").show();
    $("#second_card").hide();
    $("#third_card").hide();
    return false;
});

$("#eat3").click(function(){
    $("#home-background").removeClass("background-img1 background-img3").addClass("background-img2");
    $("#first_card").hide();
    $("#second_card").show();
    $("#third_card").hide();
    return false;
});
