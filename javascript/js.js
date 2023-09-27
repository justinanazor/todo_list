// Check if the URL parameter 'registrationSuccess' is present
const urlParams = new URLSearchParams(window.location.search);
const registrationSuccess = urlParams.get('registrationSuccess');
const existinguser = urlParams.get('existinguser');

console.log('Existing user:', existinguser); // Debug line
console.log('Registration success:', registrationSuccess); // Debug line
if (registrationSuccess === '1') {
   alert("Registeration succesful!"); 
   const modal = document.getElementById('exampleModalToggle2');
   if (modal) {
       modal.classList.add('show'); // Add the 'show' class to display the modal
       modal.style.display = 'block'; // Set the modal's display style to 'block'
   }
}else if(existinguser === '1'){
    alert("User already Exist");
    const modal = document.getElementById('exampleModalLabel');
    if(modal){
        modal.classList.add('show');
        modal.style.display = 'block';
    }
}

  // Add an event listener to the close button and trigger modal close action
  $(document).ready(function () {
    $("#closemodalbtn4").click(function () {
      $("#exampleModalToggle2").modal("hide");
    });
  });
