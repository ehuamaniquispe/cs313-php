$(document).ready(function(){


    $(".course-view").click(function(){

        // let display =  $("#courseDetail").css("display");


        // if(display=="none")
        // {
        //     $("#courseDetail").attr("style", "display:block");
        // }
        // else{
        //     $("#courseDetail").attr("style", "display:none");
        // }


        let courseId = $(this).attr("course_id");
       

        $.ajax({
            method: "POST",
            url: "../courses/index.php",
            data: { action: "viewDetail", courseId: courseId }
          })
            .done(function(data) {
                
                let studentsInfo = JSON.parse(data);
                console.log(studentsInfo);

                let tableStudentsCourses = '<b> Course Detail </b> <br>';
                tableStudentsCourses += '<b> Students List </b> <br>';
                tableStudentsCourses += '<table class="table table-striped ">';
                tableStudentsCourses += '<thead>';
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
                            tableStudentsCourses += "<td>"+ element.students_reg_num +"</td>";
                            tableStudentsCourses += "<td>"+ element.students_fname +"</td>";
                            tableStudentsCourses += "<td>"+ element.students_lname +"</td>";
                            tableStudentsCourses += "<td>"+ element.students_user_name +"</td>";
                            tableStudentsCourses += '</tr>';
        
                })
                tableStudentsCourses += '</tbody>';
                tableStudentsCourses += '</table>';
               
                
                $("#courseDetail").html(tableStudentsCourses);
              
            });

    })
})