$(document).ready(function() {
    $('#student_submit').click(function(e) {
        e.preventDefault();

        const name = $('#name').val();
        const email = $('#email').val();
        const age = $('#age').val();
        const course = $('#course').val();

        $.ajax({
            method: 'post',
            url: '/create-student-info',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'), 
                name: name,
                email: email,
                age: age,
                course: course,
            },
            success: function(response) {
                alert(response.message);
                $('#exampleModal').modal('hide'); 
            },
            error: function(xhr) {
                alert('Error: ' + xhr.responseText);
            }
        });
    });
});
