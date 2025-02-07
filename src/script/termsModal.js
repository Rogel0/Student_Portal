function showTermsModal() {
    const form = document.getElementById('regForm');
    if (form.reportValidity()) {
        document.getElementById('termsModal').classList.remove('hidden');
    }
}

function closeTermsModal() {
    document.getElementById('termsModal').classList.add('hidden');
}

document.getElementById('termsCheckbox').addEventListener('change', function() {
    const registerButton = document.getElementById('registerButton');
    if (this.checked) {
        registerButton.disabled = false;
        registerButton.classList.remove('bg-gray-400', 'cursor-not-allowed');
        registerButton.classList.add('bg-[#81007E]', 'hover:bg-purple-700');
    } else {
        registerButton.disabled = true;
        registerButton.classList.remove('bg-[#81007E]', 'hover:bg-purple-700');
        registerButton.classList.add('bg-gray-400', 'cursor-not-allowed');
    }
});

document.getElementById('registerButton').addEventListener('click', function() {
    const form = document.getElementById('regForm');
    closeTermsModal();
    form.submit();
});