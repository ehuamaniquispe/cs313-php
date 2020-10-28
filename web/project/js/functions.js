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
                for(x of data){

                    console.log(x.students_fname);
                }
            });

    })
})