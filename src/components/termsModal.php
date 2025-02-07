<div id="termsModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden overflow-y-auto z-50 pt-16">
    <div class="bg-white p-10 rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-2/3 max-h-full overflow-y-auto relative">
        <button class="absolute top-4 right-4 text-gray-600 hover:text-gray-900" onclick="closeTermsModal()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <h2 class="text-xl font-bold mb-4">Terms and Conditions</h2>
        <p class="mb-4">
            Welcome to our Student Portal. By accessing or using our services, you agree to be bound by the following terms and conditions:
        </p>
        <ul class="list-disc pl-5 mb-4">
            <li><strong>Account Responsibility:</strong> You are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer. You agree to accept responsibility for all activities that occur under your account or password.</li>
            <li><strong>Prohibited Conduct:</strong> You agree not to use the portal for any unlawful purpose or in any way that could harm, disable, overburden, or impair the portal.</li>
            <li><strong>Content Ownership:</strong> All content provided on this portal is the property of the portal administrators. You may not reproduce, distribute, or create derivative works from any content without explicit permission.</li>
            <li><strong>Termination:</strong> We reserve the right to terminate or suspend your access to the portal at any time, without notice, for conduct that we believe violates these terms or is harmful to other users of the portal, us, or third parties, or for any other reason.</li>
            <li><strong>Changes to Terms:</strong> We reserve the right to modify these terms at any time. Your continued use of the portal following any changes signifies your acceptance of the new terms.</li>
        </ul>
        <h2 class="text-xl font-bold mb-4">Data Privacy Notice</h2>
        <p class="mb-4">
            We respect your privacy and are committed to protecting your personal data. Before proceeding, please review the following information regarding data collection and usage:
        </p>
        <ul class="list-disc pl-5 mb-4">
            <li>Data Collection: We collect and store the information you provide, including name, email, preferences.</li>
            <li>Purpose: Your data will be used for account creation, service improvement, personalized experience.</li>
            <li>Storage & Security: Your data is securely stored and will not be shared with third parties without your consent, except as required by law.</li>
            <li>Your Rights: You have the right to access, modify, or delete your data at any time. For assistance, contact [support email or link].</li>
        </ul>
        <p class="mb-4">By proceeding, you acknowledge that you have read and agree to our <a href="[Privacy Policy URL]" class="text-blue-500 underline">Privacy Policy</a>.</p>
        <div class="flex items-center mb-4">
            <input type="checkbox" id="termsCheckbox" class="mr-2">
            <label for="termsCheckbox">I agree to the terms and conditions and the data privacy notice</label>
        </div>
        <button type="button" class="w-full bg-gray-400 text-white py-2 md:py-5 md:text-lg rounded-lg cursor-not-allowed" id="registerButton" disabled>Register</button>
    </div>
</div>