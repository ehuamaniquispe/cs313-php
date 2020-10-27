$(document).ready(function(){


    $(".course-view").click(function(){
        console.log("me clikeo");
        let courseId = $(this).attr("course-id");
        console.log(courseId);
    })
})