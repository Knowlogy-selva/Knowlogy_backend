  $(document).ready(function() {
    $('#over_view').summernote({height: 250});
    });

    $(document).ready(function() {
     $('#wsa').summernote({height: 250});
     });

     $(document).ready(function() {
          $('#prerequisites').summernote({height: 250});
          });

     $(document).ready(function() {
          $('#objectives').summernote({height: 250});
          });

     $(document).ready(function() {
          $('#course_outline').summernote({height: 250});
          });

     $(document).ready(function() {
          $('#course_description').summernote({height: 250});
          });

     $(document).ready(function() {
          $('#code_preview5').summernote({height: 250});
          });

     


          // display-image-before-save
          // futured-image script-functionality-start-to-here
          function showPreview(event){
               if(event.target.files.length > 0){
                 var src = URL.createObjectURL(event.target.files[0]);
                 var preview = document.getElementById("preview");
                 preview.src = src;
                 preview.style.display = "block";
               }
             }
          // futured-image script-functionality-end-to-here

