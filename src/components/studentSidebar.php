<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="hidden md:flex lg:flex flex-col bg-transparent text-white w-auto h-auto fixed top-[355px] transform -translate-y-1/2 p-6">
    <div class="flex flex-col flex-grow p-0 m-0">
        <ul class="flex flex-col flex-grow py-auto space-y-2 bg-black">
            <li class="flex items-center px-6 py-5 border border-white <?php echo $current_page == 'studentDashboard.php' ? 'bg-[#81007E]' : 'text-white'; ?> hover:bg-[#81007E] active:bg-gray-800 flex-grow">
                <a href="./studentDashboard.php" class="flex items-center w-full h-full">
                    <svg class="h-6 w-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m0 0h4m-4 0H7m4 0v-8m0 0l7 7-7 7-7-7 7-7z"></path>
                    </svg>
                    Dashboard
                </a>
            </li>
            <li class="flex items-center px-6 py-5 border border-white <?php echo $current_page == 'studentAccount.php' ? 'bg-[#81007E]' : 'text-white'; ?> hover:bg-[#81007E] active:bg-gray-600 flex-grow">
                <a href="./studentAccount.php" class="flex items-center w-full h-full">
                    <svg class="h-6 w-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1112 21a9 9 0 01-6.879-3.196z"></path>
                    </svg>
                    Student Account
                </a>
            </li>
            <li class="flex items-center px-6 py-5 border border-white <?php echo $current_page == 'studentInfoForm.php' ? 'bg-[#81007E]' : 'text-white'; ?> hover:bg-[#81007E] active:bg-gray-600 flex-grow">
                <a href="./studentAnnouncements.php" class="flex items-center w-full h-full">
                    <svg class="h-6 w-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1112 21a9 9 0 01-6.879-3.196z"></path>
                    </svg>
                    Announcements
                </a>
            </li>
            <li class="flex items-center px-6 py-5 border border-white <?php echo $current_page == 'studentSettings.php' ? 'bg-[#81007E]' : 'text-white'; ?> hover:bg-[#81007E] active:bg-gray-600 flex-grow">
                <a href="studentSettings.php" class="flex items-center w-full h-full">
                    <svg class="h-6 w-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Settings
                </a>
            </li>
        </ul>
    </div>
</div>