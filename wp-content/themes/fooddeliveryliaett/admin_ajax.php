<script>
function formValidation() {
	  event.preventDefault();
	  var name = document.forms["contactForm"]["name"].value;
	  var email = document.forms["contactForm"]["email"].value;
	  var subject = document.forms["contactForm"]["subject"].value;
	  var message = document.forms["contactForm"]["message"].value;
	  document.getElementById('status').innerHTML = '';
      var errorMessage="<span class='error'>All fields are required.</span>";
	  var regEx = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

         if (name.trim() == "" ||email.trim() == "" || subject.trim() == "" || message.trim() == "") {
             document.getElementById('status').innerHTML = errorMessage;
             return false;
           }
       if (!regEx.test(email)) {
    	   var errorMessage="<span class='error'>Invalid email.</span>";
 		    document.getElementById('status').innerHTML = errorMessage;
 		    return false;
 		  }
	  processContactSubmit();
      return true;
	}

function processContactSubmit() {
                var request = new XMLHttpRequest();
                request.open("POST", "/wordpress/wp-admin/admin-ajax.php?action=process_contact_form");
                request.onreadystatechange = function() {
                    if(this.readyState === 4 && this.status === 200) {
                        document.getElementById("status").innerHTML = this.responseText;
                    }
                };
                var myForm = document.getElementById("contactForm");
                var formData = new FormData(contactForm);
                request.send(formData);
}
</script>