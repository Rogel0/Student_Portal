<div class="max-w-4xl mx-auto bg-white  rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Settings</h2>
        <hr class="mb-6">

        <?php include("alerts/email_pass.php") ?>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Form for changing email -->
            <div class="flex flex-col md:col-span-2">
                <h3 class="text-xl font-semibold mb-4">Change Email</h3>
                <form action="submit/change_email.php" method="POST">
                    <div class="flex flex-col mb-4">
                        <label for="current_email" class="mb-2 font-semibold">Current Email</label>
                        <input type="email" name="current_email" id="current_email" value="<?php echo $current_email; ?>" class="border-2 border-gray-300 w-full h-10 text-sm p-2 bg-gray-100 cursor-not-allowed" readonly disabled>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="new_email" class="mb-2 font-semibold">New Email</label>
                        <input type="email" name="new_email" id="new_email" class="border-2 border-gray-300 w-full h-10 text-sm p-2">
                    </div>
                    <button type="submit" class="w-full h-12 bg-purple-700 text-white font-semibold rounded-lg hover:bg-purple-800 transition duration-200">Save Email</button>
                </form>
            </div>
            <div class="flex flex-col md:col-span-2 mt-8">
                <h3 class="text-xl font-semibold mb-4">Change Password</h3>
                <form action="submit/change_password.php" method="POST">
                    <div class="flex flex-col mb-4">
                        <label for="password" class="mb-2 font-semibold">New Password</label>
                        <input type="password" name="password" id="password" class="border-2 border-gray-300 w-full h-10 text-sm p-2">
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="confirm_password" class="mb-2 font-semibold">Confirm New Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" class="border-2 border-gray-300 w-full h-10 text-sm p-2">
                    </div>
                    <button type="submit" class="w-full h-12 bg-purple-700 text-white font-semibold rounded-lg hover:bg-purple-800 transition duration-200">Save Password</button>
                </form>
            </div>
        </div>
</div>