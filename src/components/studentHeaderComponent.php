<?php
$firstname = isset($firstname) ? $firstname : 'Student';
$lastname = isset($lastname) ? $lastname : '';
?>

<header class="flex fixed w-full bg-[#81007E] flex-row md:pr-12 md:pl-12 lg:pr-20 lg:pl-20 z-50">
    <nav class="flex flex-row justify-between items-center w-full p-4">
        <div class="flex items-center">
            <img src="./images/logoo.png" alt="Logo" class="w-[50px] h-auto sm:w-[60px] md:w-[70px] lg:w-[80px] xl:w-[90px]">
        </div>
        <div class="sm:block md:hidden lg:hidden relative z-50">
            <img src="./images/hamburgeer.png" alt="hamburger" id="hamburger" class="w-[20px] h-[20px]">
            <img src="./images/close2.png" alt="close" id="close" class="w-[20px] h-[20px] hidden">
        </div>
        <div class="hidden sm:flex md:hidden lg:hidden fixed inset-0 flex-col justify-center items-center gap-20 bg-opacity-95 bg-[#0A0A0A] z-40 shadow-b" id="mobileNav">
            <ul class="flex flex-col gap-8 justify-center items-center h-full">
                <div class="rounded-[5px] w-48 h-12 items-center text-white justify-center flex bg-[#81007E] cursor-pointer hover:bg-[#515e20] hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <li><a href="./studentDashboard.php">Dashboard</a></li>
                </div>
                <div class="rounded-[5px] w-48 h-12 text-white items-center justify-center flex bg-[#81007E] cursor-pointer hover:bg-[#515e20] hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <li><a href="./studentAccount.php">Student Account</a></li>
                </div>
                <div class="rounded-[5px] w-48 h-12 text-white items-center justify-center flex bg-[#81007E] cursor-pointer hover:bg-[#515e20] hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <li><a href="./studentGrades.php">Grades</a></li>
                </div>
                <div class="rounded-[5px] w-48 h-12 text-white items-center justify-center flex bg-[#81007E] cursor-pointer hover:bg-[#515e20] hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <li><a href="./studentAnnouncements.php">Announcements</a></li>
                </div>
                <div class="rounded-[5px] w-48 h-12 items-center text-white justify-center flex bg-[#81007E] cursor-pointer hover:bg-[#515e20] hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <li><a href="./StudentProfile.php">Profile</a></li>
                </div>
                <div class="rounded-[5px] w-48 h-12 items-center text-white justify-center flex bg-[#81007E] cursor-pointer hover:bg-[#515e20] hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <li><a href="./studentSettings.php">Settings</a></li>
                </div>
                <div class="rounded-[5px] w-48 h-12 items-center justify-center flex text-white bg-[#81007E] cursor-pointer hover:bg-[#515e20] hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <form action="./auth/logout.php" method="POST" class="w-full h-full flex items-center justify-center">
                        <button type="submit" class="w-full h-full flex items-center justify-center">
                            Logout
                        </button>
                    </form>
                </div>
            </ul>
        </div>
        <ul class="hidden md:flex lg:flex items-center space-x-7 text-white">
            <li>
                <h1 class="text-lg font-semibold">Welcome <?php echo $firstname . ' ' . $lastname; ?></h1>
            </li>
            <li>
                <a href="./studentProfile.php" class="hover:underline">Profile</a>
            </li>
            <li>
                <form action="./auth/logout.php" method="POST" class="flex items-center">
                    <button type="submit" class="hover:underline">
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</header>