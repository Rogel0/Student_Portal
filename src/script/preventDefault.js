document.getElementById('regForm').addEventListener('submit', function(event) {
    event.preventDefault();
    disableSubmitButton();
    this.submit();
});

function disableSubmitButton() {
    const submitBtn = document.getElementById('submitBtn');
    submitBtn.disabled = true;
    submitBtn.innerText = 'Submitting...';
}