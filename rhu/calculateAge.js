function calculateAgeInMonths() {
    const birthDateInput = document.getElementById("date_of_birth").value;
    const measureDateInput = document.getElementById("date_last_measured").value;

    if (!birthDateInput || !measureDateInput) {
        document.getElementById("result").innerText = '';
        return; // Exit if any input is missing
    }

    const birthDate = new Date(birthDateInput);
    const measureDate = new Date(measureDateInput);

    // Calculate total months
    let totalMonths = (measureDate.getFullYear() - birthDate.getFullYear()) * 12;
    totalMonths += measureDate.getMonth() - birthDate.getMonth();

    // If the current day is before the birth day in the current month, subtract one month
    if (measureDate.getDate() < birthDate.getDate()) {
        totalMonths--;
    }

    document.getElementById("age_by_months") .value = totalMonths;
}