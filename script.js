document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("form"); // Ensure form ID matches HTML
    const selectClass = document.getElementById("Class");
    const selectSubject = document.getElementById("Subject");
    const selectDate = document.getElementById("date");

    // Form Submission Handling
    form.addEventListener("submit", function (event) {
        const selectedClass = selectClass.value;
        const selectedSubject = selectSubject.value;
        const selectedDate = selectDate.value;

        let errorMessage = ""; // Store error messages

        if (!selectedClass) {
            errorMessage += "Please select a Class.\n";
        }
        if (!selectedSubject) {
            errorMessage += "Please select a Subject.\n";
        }
        if (!selectedDate) {
            errorMessage += "Please select a Date.\n";
        }

        if (errorMessage) {
            alert(errorMessage); // Show all missing fields
            event.preventDefault(); // Stop form submission
        }
    });
});
