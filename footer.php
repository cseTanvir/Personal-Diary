
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="jquery-2.2.4.min.js"></script>
    <script src="bootstrap.min.js"></script>
      
      <script type="text/javascript">
      
        $(".toggleForms").click(function() {
            
            $("#logInForm").toggle();
            $("#signUpForm").toggle();
            
            
            
        });
          
          $('#diary').bind('input propertychange', function() {

                $.ajax({
                  method: "POST",
                  url: "updatedatabase.php",
                  data: { content: $("#diary").val() }
                });

        });
      
      
      </script>
      
  </body>
</html>


