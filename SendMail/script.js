document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
  
    var form = event.target;
    var formData = new FormData(form);
  
    // You can access the form data using the formData object
    // For example, to get the value of the name field:
    var name = formData.get("name");
    console.log("Name:", name);
  
    // You can perform additional validations or processing here
    // before sending the data to the server
  
    // Clear the form
    form.reset();
  });
  