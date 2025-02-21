<div class="bg-white shadow-lg rounded-lg p-8">
    <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Student Profile</h2>
    <div class="flex flex-col md:flex-row items-center md:items-start">
        <div class="md:w-1/3 mb-4 md:mb-0 flex justify-center relative">
            <form method="POST" action="./submit/updateProfilePicture.php" enctype="multipart/form-data">
                <label for="profilePicture" class="cursor-pointer">
                    <img src="./uploads/<?php echo htmlspecialchars($studentProfile['Picture']); ?>" alt="Profile Picture" class="rounded-full w-40 h-40 border-4 border-gray-300 shadow-lg hover:opacity-75">
                    <input type="file" id="profilePicture" name="profile_picture" class="hidden" onchange="this.form.submit()">
                </label>
            </form>
        </div>
        <div class="md:w-2/3 md:pl-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-4">
                    <p class="text-lg"><strong class="text-gray-600">LRN:</strong> <?php echo htmlspecialchars($studentProfile['LRN']); ?></p>
                    <p class="text-lg"><strong class="text-gray-600">Lastname:</strong> <?php echo htmlspecialchars($studentProfile['Lastname']); ?></p>
                    <p class="text-lg"><strong class="text-gray-600">Firstname:</strong> <?php echo htmlspecialchars($studentProfile['Firstname']); ?></p>
                    <p class="text-lg"><strong class="text-gray-600">Username:</strong> <?php echo htmlspecialchars($studentProfile['username']); ?></p>
                    <p class="text-lg"><strong class="text-gray-600">Email:</strong> <?php echo htmlspecialchars($studentProfile['email']); ?></p>
                    <p class="text-lg"><strong class="text-gray-600">Middle Initial:</strong> <?php echo htmlspecialchars($studentProfile['Mi']); ?></p>
                    <p class="text-lg"><strong class="text-gray-600">Student Type:</strong> <?php echo htmlspecialchars($studentProfile['StudType']); ?></p>
                </div>
                <div class="space-y-4">
                    <p class="text-lg"><strong class="text-gray-600">Birthdate:</strong> <?php echo htmlspecialchars($studentProfile['Bdate']); ?></p>
                    <p class="text-lg"><strong class="text-gray-600">Age:</strong> <?php echo htmlspecialchars($studentProfile['Age']); ?></p>
                    <p class="text-lg"><strong class="text-gray-600">Birthplace:</strong> <?php echo htmlspecialchars($studentProfile['Birthplace']); ?></p>
                    <p class="text-lg"><strong class="text-gray-600">Gender:</strong> <?php echo htmlspecialchars($studentProfile['Gender']); ?></p>
                    <p class="text-lg"><strong class="text-gray-600">Address:</strong> <?php echo htmlspecialchars($studentProfile['Address']); ?></p>
                    <p class="text-lg"><strong class="text-gray-600">Barangay:</strong> <?php echo htmlspecialchars($studentProfile['Brgy']); ?></p>
                    <p class="text-lg"><strong class="text-gray-600">City:</strong> <?php echo htmlspecialchars($studentProfile['City']); ?></p>
                    <p class="text-lg"><strong class="text-gray-600">Date Registered:</strong> <?php echo htmlspecialchars($studentProfile['DateRegistered']); ?></p>
                    <p class="text-lg"><strong class="text-gray-600">Status:</strong> <?php echo htmlspecialchars($studentProfile['Status']); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>