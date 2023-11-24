const dateInput = document.getElementById("passport-giveDate");
const minDate = "1970-01-01";

dateInput.addEventListener("input", function() {
    if (dateInput.value < minDate) {
        dateInput.value = minDate;
    }
});
