// This is gonna be for The update Post in the Dashboard using ajax
$(document).ready(function () {

    // $('#mclose').trigger('click');

    setTimeout(function () {
        $('#uploadnotification').fadeOut(2000);
    }, 4000)

    // This is all for the Update Modal
    $('#editmodal').on('show.bs.modal', function(e) {
        var postid = $(e.relatedTarget).data('pid');
        $(e.currentTarget).find('input[name="postid"]').val(postid);



        // This is to update the inputs in the update Modal
        // author = $('selector').val();
        url = 'backend/updatepost.php';
        mydata = {
            pid: postid,
        } 
        // $.get(url, mydata,
        //     function (data, textStatus, jqXHR) {
        //         console.log(data)                
        //         console.log(textStatus)                
        //         console.log(data)                
        //     },
        // );        

        $.ajax({
            type: "get",
            url: url,
            data: mydata,
            // dataType: "dataType",
            success: function (res) {
                res = JSON.parse(res)
                handle_filling_of_input_tags(res)
            },
            error: function (err){
                console.log('Error in the Ajax Call')

            }
        });
    });


    function handle_filling_of_input_tags (data) {
        place = "pdf_images/"+data.image
        $("img#old_pic").attr("src", place);
        // console.log(data.course_name)
        
        $('#id').val(data.id);
        $('#author').val(data.posted_by);
        $('#name').val(data.course_name);
        $('#code').val(data.course_code);
        $('#paper').val(data.paperID);
        $('#faculty').val(data.facultyID);
        $('#level').val(data.levelID);
        $('#dept').val(data.departmentID);
        $('#year').val(data.year);
        $('#post_img').val(data.image);
        $('#pdf').val(data.pdf);
        
    }






    // This is for the delete Modal
    $('#deletemodal').on('show.bs.modal', function(e) {
        var postid = $(e.relatedTarget).data('pid');
        $(e.currentTarget).find('input[name="postid"]').val(postid);
        
            // This is for the delete button
            $("#deleteButton").click(function (e) { 
                e.preventDefault();
                url = 'backend/updatepost.php';
                $.ajax({
                    type: "get",
                    url: url,
                    data: {
                        postid:postid
                    },
                    success: function (res) { 
                        // console.log(res)
                    }
                });

                window.location.href=""
            });

    })

    // This is for the registration page
    $('#regenerationform').submit(function (e) { 
        password = $('#password').val();
        cpassword = $('#cpassword').val();
        // console.log(password)
        // console.log(cpassword)
        if (condition) {
            
        }
        if (password !== cpassword) {
            e.preventDefault();
            console.log("The passwords are not the same!")
        } else{
            console.log("The passwords are the same And you are good to go to the backend")
        }
    });
});
































