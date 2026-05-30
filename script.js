document.getElementById("studentForm").addEventListener("submit", function(e){

    let studentId = document.getElementById("student_id").value;
    let fullname = document.getElementById("fullname").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let gender = document.getElementById("gender").value;
    let department = document.getElementById("department").value;

    if(studentId === "" ||
       fullname === "" ||
       email === "" ||
       phone === "" ||
       gender === "" ||
       department === ""){

        alert("Please fill all fields.");
        e.preventDefault();
    }

});