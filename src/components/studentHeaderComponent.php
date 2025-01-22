<header class="flex fixed w-full bg-[#81007E] flex-row md:pr-12 md:pl-12 lg:pr-20 lg:pl-20 z-50">
    <nav class="flex flex-row justify-between w-full p-4">
        <div>
            <h3 class="text-white">Logo</h3>
        </div>
        <div class="sm:block md:hidden lg:hidden relative z-50">
            <img src="./images/hamburgeer.png" alt="hamburger" id="hamburger" class="w-[20px] h-[20px]">
            <img src="./images/close2.png" alt="close" id="close" class="w-[20px] h-[20px] hidden">
        </div>
        <div class="hidden sm:flex md:hidden lg:hidden fixed inset-0 flex-col justify-center items-center gap-20 bg-opacity-95 bg-[#0A0A0A] z-40" id="mobileNav">
            <ul class="flex flex-col gap-12 justify-center items-center h-full">
                <div class="rounded-[5px] w-48 h-12 items-center text-white justify-center flex bg-[#81007E] cursor-pointer hover:bg-[#515e20] hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <li><a href="">Dashboard</a></li>
                </div>
                <div class="rounded-[5px] w-48 h-12 text-white items-center justify-center flex bg-[#81007E] cursor-pointer hover:bg-[#515e20] hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <li><a href="">Profile</a></li>
                </div>
                <div class="rounded-[5px] w-48 h-12 items-center text-white justify-center flex bg-[#81007E] cursor-pointer hover:bg-[#515e20] hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <li><a href="">Settings</a></li>
                </div>
                <div class="rounded-[5px] w-48 h-12 items-center justify-center flex text-white bg-[#81007E] cursor-pointer hover:bg-[#515e20] hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <li><a href="">Logout</a></li>
                </div>
            </ul>
        </div>
        <ul class="hidden md:flex lg:flex space-x-7 text-white">
            <li><a href="">Dashboard</a></li>
            <li><a href="">Profile</a></li>
            <li><a href="">Settings</a></li>
            <li><a href="">Logout</a></li>
        </ul>
    </nav>
</header>