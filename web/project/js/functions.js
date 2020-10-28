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
                console.log(data);
                var course = JSON.parse(data);
                console.log(course);
                course.forEach(function (element) {

                    console.log(element.students_fname);

                    // nombreEstudiantes += '<a class="dropdown-item links-resultados" href="#" data-id ="';
                    // nombreEstudiantes += element.estudianteId;
                    // nombreEstudiantes += '">';
                    // nombreEstudiantes += '&nbsp';
                    // nombreEstudiantes += element.estudianteNombres;
                    // nombreEstudiantes += '&nbsp';
                    // nombreEstudiantes += element.estudianteApellidoPaterno;
                    // nombreEstudiantes += '&nbsp';
                    // nombreEstudiantes += element.estudianteApellidoMaterno;
                    // nombreEstudiantes += '</a>';
        
        
        
                })
              
            });

    })
})