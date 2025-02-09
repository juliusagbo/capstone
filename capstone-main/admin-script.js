document.addEventListener("DOMContentLoaded", function () {
    // Loan approval and rejection handling
    const approveButtons = document.querySelectorAll(".approve");
    const rejectButtons = document.querySelectorAll(".reject");

    approveButtons.forEach(button => {
        button.addEventListener("click", function () {
            let row = this.closest("tr");
            let name = row.cells[0].textContent;
            if (confirm(`Are you sure you want to approve ${name}'s loan?`)) {
                row.cells[2].textContent = "Approved";
                this.remove(); // Remove approve button
                row.querySelector(".reject").remove(); // Remove reject button
            }
        });
    });

    rejectButtons.forEach(button => {
        button.addEventListener("click", function () {
            let row = this.closest("tr");
            let name = row.cells[0].textContent;
            if (confirm(`Are you sure you want to reject ${name}'s loan?`)) {
                row.cells[2].textContent = "Rejected";
                this.remove(); // Remove reject button
                row.querySelector(".approve").remove(); // Remove approve button
            }
        });
    });

    // Admin Login Authentication
    const loginForm = document.querySelector("#adminLoginForm");

    if (loginForm) {
        loginForm.addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent actual form submission

            let username = document.querySelector("#username").value;
            let password = document.querySelector("#password").value;

            // Basic authentication (Replace with real backend validation)
            if (username === "admin" && password === "admin123") {
                alert("Login successful!");
                window.location.href = "admin-dashboard.html"; // Redirect to dashboard
            } else {
                alert("Invalid credentials. Try again.");
            }
        });
    }
});
