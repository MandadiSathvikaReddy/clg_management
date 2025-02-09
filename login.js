document
  .getElementById("loginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();

    // Example: Simulating stored student credentials
    let storedStudents = [
      {
        name: "John Doe",
        email: "john@example.com",
        password: "password123",
        department: "Computer Science",
        section: "A",
      },
      {
        name: "Alice Smith",
        email: "alice@example.com",
        password: "alicepass",
        department: "Mathematics",
        section: "B",
      },
    ];

    // Find the student based on email and password
    let student = storedStudents.find(
      (user) => user.email === email && user.password === password
    );

    if (student) {
      localStorage.setItem("student", JSON.stringify(student)); // Store student data
      window.location.href = "dashboard.html"; // Redirect to dashboard
    } else {
      document.getElementById("message").innerText =
        "❌ Incorrect email or password!";
      document.getElementById("message").style.color = "red";
    }
  });
