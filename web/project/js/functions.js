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
                
                let studentsInfo = JSON.parse(data);

                let tableStudentsCourses = '<thead>';
                tableStudentsCourses += '<tr>';
                tableStudentsCourses += '<th>#Reg.</th>';
                tableStudentsCourses += '<th>Name</th>';
                tableStudentsCourses += '<th>Last Name</th>';
                tableStudentsCourses += '<th>User Name</th>';
                tableStudentsCourses += '</tr>';
                tableStudentsCourses += '</thead>';
                tableStudentsCourses += '<tbody>';

                studentsInfo.forEach(function (element) {

                            tableStudentsCourses += '<tr>';
                            tableStudentsCourses += "<td>"+ studentsInfo.students_reg_num +"</td>";
                            tableStudentsCourses += "<td>"+ studentsInfo.students_fname +"</td>";
                            tableStudentsCourses += "<td>"+ studentsInfo.students_lname +"</td>";
                            tableStudentsCourses += "<td>"+ studentsInfo.students_user_name +"</td>";
                            tableStudentsCourses += '</tr>';
                        
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
                tableStudentsCourses += '</tbody>';

                $(".course-detail").show();
                nombresAlumnosDisplay.innerHTML = tableStudentsCourses;
              
            });

    })
})