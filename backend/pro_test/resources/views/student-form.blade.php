<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>
    <form id="student-form">
        <input type="text" name="fname" placeholder="First Name">
        <input type="text" name="message" placeholder="Message">
        <textarea name="ccEmails" placeholder="CC Email Addresses"></textarea>
  @csrf
  <button type="button" id="submit-button">Create Student</button>


    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- ... Your other script imports ... -->
<script>
    $(document).ready(function() {
        $("submit-button").click(function() {
            // Collect form data
            var formData = {
                fname: $("input[name=fname]").val(),
                messsage: $("input[name=messsage]").val(),
                ccEmails: $("textarea[name=ccEmails]").val()
            };

            // Send data to Laravel backend API
            $.ajax({
                type: "POST",
                url: "http://127.0.0.1:8000/api/student",
                data: formData,
                success: function(response) {
                    alert(response.message);
                },
                error: function(xhr, status, error) {
                    alert("Error: " + error);
                }
            });
        });
    });
</script>

</body>
</html>
