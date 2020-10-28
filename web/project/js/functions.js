$(document).ready(function(){


    $(".course-view").click(function(){
        
        let courseId = $(this).attr("course_id");
        console.log(courseId);

        $.ajax({
            method: "POST",
            url: "../courses/index.php",
            data: { action: "viewDetail", courseId: courseId }
          })
            .done(function(data) {
              let data = json_decode(data);
              console.log(data);
            });

    })
})