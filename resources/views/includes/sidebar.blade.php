<nav
    class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div
        class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button
            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
            href="../../index.html">
            Akamathi
        </a>
        <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative">
                <a class="text-blueGray-500 block py-1 px-3" href="#pablo"
                    onclick="openDropdown(event,'notification-dropdown')"><i class="fas fa-bell"></i></a>
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                    id="notification-dropdown">
                    <a href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
                        action</a><a href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
                        else here</a>
                    <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                    <a href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                        link</a>
                </div>
            </li>
            <li class="inline-block relative">
                <a class="text-blueGray-500 block" href="#pablo"
                    onclick="openDropdown(event,'user-responsive-dropdown')">
                    <div class="items-center flex">
                        <span
                            class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img
                                alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                                src="../../assets/img/team-1-800x800.jpg" /></span>
                    </div>
                </a>
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                    id="user-responsive-dropdown">
                    <a href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
                        action</a><a href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
                        else here</a>
                    <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                    <a href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                        link</a>
                </div>
            </li>
        </ul>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                            href="../../index.html">
                            akamathi
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button"
                            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                            onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            <form class="mt-6 mb-4 md:hidden">
                <div class="mb-3 pt-0">
                    <input type="text" placeholder="Search"
                        class=" px-3 py-2 h-12 border border-solid border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal" />
                </div>
            </form>
            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                Admin Layout Pages
            </h6>

            {{-- test --}}
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="{{url('dashboard')}}"
                        class="text-xs uppercase py-3 font-bold block text-blue-700 hover:text-blue-500">
                        <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                        Dashboard
                    </a>
                </li>
                <li class="items-center">
                    <button type="button" class="flex items-center w-full border-none focus:outline-none" aria-controls="network"
                        data-collapse-toggle="network">
                        <i class="fa-solid fa-network-wired mr-2 text-sm text-blue-700 opacity-75"></i>
                        <span class="text-xs uppercase py-3 font-bold block text-blue-700 hover:text-blue-500"
                            sidebar-toggle-item>Network</span>
                        <i class="fa-solid fa-caret-down text-sm text-blue-700 opacity-75 ml-2"></i>
                    </button>
                    <ul id="network" class="hidden py-2 space-y-2 ">
                        <li class="items-center ml-4">
                            <button type="button" class="flex items-center w-full border-none focus:outline-none mr-5" aria-controls="network"
                                data-collapse-toggle="check">
                                <i class="fas fa-clipboard-check mr-2 text-sm text-blue-600 opacity-75"></i>
                                {{-- <i class="fa-solid fa-network-wired mr-2 text-sm text-blue-600 opacity-75"></i> --}}
                                <span class="text-xs uppercase py-3 font-bold block text-blue-600 hover:text-blue-600 mr-4"
                                    sidebar-toggle-item>Check list</span>
                                <i class="fa-solid fa-caret-down text-sm text-blue-600 opacity-75 "></i>
                            </button>
                            <ul id="check" class="hidden py-2 space-y-2">
                                <li class="items-center">
                                    <a href="{{url('tools')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blue-400 hover:text-blueGray-500">
                                        <i class="fas fa-tools mr-2 text-sm text-blue-400"></i>
                                        TOOLS
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('camacc')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blue-400 hover:text-blueGray-500">
                                        <i class="fas fa-camera mr-2 text-sm text-blue-400"></i>
                                        CAMERA & ACCESSORIES
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('wiringacc')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blue-400 hover:text-blueGray-500">
                                        {{-- <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i> --}}
                                        <i class="fas fa-bell mr-2 text-sm text-blue-400"></i>
                                        WIRING ACCESSORIES
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('vehicle')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blue-400 hover:text-blueGray-500">
                                        <i class="fas fa-car mr-2 text-sm text-blue-400"></i>
                                        VEHICLE
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="items-center ml-4">
                            <button type="button" class="flex items-center w-full border-none focus:outline-none mr-5" aria-controls="network"
                                data-collapse-toggle="report">
                                <i class="fa-solid fa-clipboard mr-2 text-sm text-blue-600 opacity-75"></i>
                                {{-- <i class="fa-solid fa-network-wired mr-2 text-sm text-blue-600 opacity-75"></i> --}}
                                <span class="text-xs uppercase py-3 font-bold block text-blue-600 hover:text-blue-600 mr-7"
                                    sidebar-toggle-item>Reports</span>
                                <i class="fa-solid fa-caret-down text-sm text-blue-600 opacity-75"></i>
                            </button>
                            <ul id="report" class="hidden py-2 space-y-2">
                                <li class="items-center">
                                    <a href="{{url('firstreport')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blue-400 hover:text-blueGray-500">
                                        <i class="fas fa-file-alt mr-2 text-sm text-blue-400"></i>
                                        8.30 REPORT
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('secondreport')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blue-400 hover:text-blueGray-500">
                                        <i class="fas fa-file-alt mr-2 text-sm text-blue-400"></i>
                                        12.45 REPORT
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('thirdreport')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blue-400 hover:text-blueGray-500">
                                        {{-- <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i> --}}
                                        <i class="fas fa-file-alt mr-2 text-sm text-blue-400"></i>
                                        4.30 REPORT
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('endreport')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blue-400 hover:text-blueGray-500">
                                        <i class="fas fa-file-alt mr-2 text-sm text-blue-400"></i>
                                        END REPORT
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="items-center ml-4">
                            <button type="button" class="flex items-center w-full border-none focus:outline-none mr-5" aria-controls="network"
                                data-collapse-toggle="worktime">
                                <i class="fas fa-business-time mr-2 text-sm text-blue-600 opacity-75"></i>
                                {{-- <i class="fa-solid fa-network-wired mr-2 text-sm text-blue-600 opacity-75"></i> --}}
                                <span class="text-xs uppercase py-3 font-bold block text-blue-600 hover:text-blue-600 mr-4"
                                    sidebar-toggle-item>Work Time</span>
                                <i class="fa-solid fa-caret-down text-sm text-blue-600 opacity-75 "></i>
                            </button>
                            <ul id="worktime" class="hidden py-2 space-y-2">
                                <li class="items-center">
                                    <a href="{{url('overtime')}}"
                                        class="text-blueGray-700 hover:text-blue-400 text-xs uppercase py-3 font-bold block">
                                        <i class="fas fa-file-alt text-blue-400 mr-2 text-sm"></i>
                                        OVER TIME
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="items-center">
                    <button type="button" class="flex items-center w-full border-none focus:outline-none" aria-controls="network"
                        data-collapse-toggle="software" disabled>
                        <i class="fa-solid fa-laptop-code mr-2 text-sm text-blue-700 opacity-75"></i>
                        {{-- <i class="fa-solid fa-network-wired mr-2 text-sm text-blue-700 opacity-75"></i> --}}
                        <span class="text-xs uppercase py-3 font-bold block text-blue-700 hover:text-blue-500"
                            sidebar-toggle-item>Software</span>
                        <i class="fa-solid fa-caret-down text-sm text-blue-700 opacity-75 ml-2"></i>
                    </button>
                    <ul id="software" class="hidden py-2 space-y-2 ">
                        <li class="items-center ml-4">
                            <button type="button" class="flex items-center w-full border-none focus:outline-none mr-5" aria-controls="network"
                                data-collapse-toggle="scheck">
                                <i class="fa-solid fa-network-wired mr-2 text-sm text-blue-600 opacity-75"></i>
                                <span class="text-xs uppercase py-3 font-bold block text-blue-600 hover:text-blue-600 mr-4"
                                    sidebar-toggle-item>Check list</span>
                                <i class="fa-solid fa-caret-down text-sm text-blue-600 opacity-75 "></i>
                            </button>
                            <ul id="scheck" class="hidden py-2 space-y-3">
                                <li class="items-center">
                                    <a href="{{url('tools')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                        <i class="fas fa-tools mr-2 text-sm text-blueGray-300 "></i>
                                        TOOLS
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('camacc')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                        <i class="fas fa-camera mr-2 text-sm text-blueGray-300 "></i>
                                        CAMERA & ACCESSORIES
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('wiringacc')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                        {{-- <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i> --}}
                                        <i class="fas fa-bell mr-2 text-sm text-blueGray-300 "></i>
                                        WIRING ACCESSORIES
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('vehicle')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                        <i class="fas fa-car mr-2 text-sm text-blueGray-300"></i>
                                        VEHICLE
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="items-center ml-4">
                            <button type="button" class="flex items-center w-full border-none focus:outline-none mr-5" aria-controls="network"
                                data-collapse-toggle="sreport">
                                <i class="fa-solid fa-network-wired mr-2 text-sm text-blue-600 opacity-75"></i>
                                <span class="text-xs uppercase py-3 font-bold block text-blue-600 hover:text-blue-600 mr-7"
                                    sidebar-toggle-item>Reports</span>
                                <i class="fa-solid fa-caret-down text-sm text-blue-600 opacity-75"></i>
                            </button>
                            <ul id="sreport" class="hidden py-2 space-y-2">
                                <li class="items-center">
                                    <a href="{{url('tools')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                        <i class="fas fa-file-alt mr-2 text-sm text-blueGray-300"></i>
                                        8.30 REPORT
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('camacc')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                        <i class="fas fa-file-alt mr-2 text-sm text-blueGray-300"></i>
                                        12.45 REPORT
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('wiringacc')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                        {{-- <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i> --}}
                                        <i class="fas fa-file-alt mr-2 text-sm text-blueGray-300"></i>
                                        4.30 REPORT
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('vehicle')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                        <i class="fas fa-file-alt mr-2 text-sm text-blueGray-300"></i>
                                        END REPORT
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="items-center ml-4">
                            <button type="button" class="flex items-center w-full border-none focus:outline-none mr-5" aria-controls="network"
                                data-collapse-toggle="sworktime">
                                <i class="fa-solid fa-network-wired mr-2 text-sm text-blue-600 opacity-75"></i>
                                <span class="text-xs uppercase py-3 font-bold block text-blue-600 hover:text-blue-600 mr-4"
                                    sidebar-toggle-item>Work Time</span>
                                <i class="fa-solid fa-caret-down text-sm text-blue-600 opacity-75 "></i>
                            </button>
                            <ul id="sworktime" class="hidden py-2 space-y-2 ">
                                <li class="items-center">
                                    <a href="../profile.html"
                                        class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                                        <i class="fas fa-file-alt text-blueGray-300 mr-2 text-sm"></i>
                                        END REPORT
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="items-center">
                    <button type="button" class="flex items-center w-full border-none focus:outline-none" aria-controls="network"
                        data-collapse-toggle="admin">
                        <i class="fa-solid fa-user-tie mr-2 text-sm text-blue-700 opacity-75"></i>
                        <span class="text-xs uppercase py-3 font-bold block text-blue-700 hover:text-blue-500"
                            sidebar-toggle-item>admin</span>
                        <i class="fa-solid fa-caret-down text-sm text-blue-700 opacity-75 ml-2"></i>
                    </button>
                    <ul id="admin" class="hidden py-2 space-y-2 ">
                        <li class="items-center ml-4">
                            <button type="button" class="flex items-center w-full border-none focus:outline-none mr-5" aria-controls="network"
                                data-collapse-toggle="anetwork">
                                <i class="fa-solid fa-network-wired mr-2 text-sm text-blue-600 opacity-75"></i>
                                <span class="text-xs uppercase py-3 font-bold block text-blue-600 hover:text-blue-600 mr-4"
                                    sidebar-toggle-item>Network</span>
                                <i class="fa-solid fa-caret-down text-sm text-blue-600 opacity-75 "></i>
                            </button>
                            <ul id="anetwork" class="hidden py-2 space-y-2">
                                <li class="items-center">
                                    <a href="{{url('addchecklist')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                        <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
                                        Add Check List
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('reportdetails')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                        <i class="fas fa-camera mr-2 text-sm text-blueGray-300"></i>
                                        Report Details
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('overtimedetails')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                        {{-- <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i> --}}
                                        <i class="fas fa-bell mr-2 text-sm text-blueGray-300"></i>
                                        Overtime Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="items-center ml-4">
                            <button type="button" class="flex items-center w-full border-none focus:outline-none mr-5" aria-controls="network"
                                data-collapse-toggle="report">
                                <i class="fa-solid fa-network-wired mr-2 text-sm text-blue-600 opacity-75"></i>
                                <span class="text-xs uppercase py-3 font-bold block text-blue-600 hover:text-blue-600 mr-7"
                                    sidebar-toggle-item>Reports</span>
                                <i class="fa-solid fa-caret-down text-sm text-blue-600 opacity-75"></i>
                            </button>
                            <ul id="report" class="hidden py-2 space-y-2">
                                <li class="items-center">
                                    <a href="{{url('tools')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                        <i class="fas fa-file-alt mr-2 text-sm text-blueGray-300"></i>
                                        8.30 REPORT
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('camacc')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                        <i class="fas fa-file-alt mr-2 text-sm text-blueGray-300"></i>
                                        12.45 REPORT
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('wiringacc')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                        {{-- <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i> --}}
                                        <i class="fas fa-file-alt mr-2 text-sm text-blueGray-300"></i>
                                        4.30 REPORT
                                    </a>
                                </li>

                                <li class="items-center">
                                    <a href="{{url('vehicle')}}"
                                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                        <i class="fas fa-file-alt mr-2 text-sm text-blueGray-300"></i>
                                        END REPORT
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="items-center ml-4">
                            <button type="button" class="flex items-center w-full border-none focus:outline-none mr-5" aria-controls="network"
                                data-collapse-toggle="worktime">
                                <i class="fa-solid fa-network-wired mr-2 text-sm text-blue-600 opacity-75"></i>
                                <span class="text-xs uppercase py-3 font-bold block text-blue-600 hover:text-blue-600 mr-4"
                                    sidebar-toggle-item>Work Time</span>
                                <i class="fa-solid fa-caret-down text-sm text-blue-600 opacity-75 "></i>
                            </button>
                            <ul id="worktime" class="hidden py-2 space-y-2">
                                <li class="items-center">
                                    <a href="../profile.html"
                                        class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                                        <i class="fas fa-file-alt text-blueGray-300 mr-2 text-sm"></i>
                                        END REPORT
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            {{-- end test --}}
            <!-- Navigation -->
            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                Auth Layout Pages
            </h6>
            <!-- Navigation -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                <li class="items-center">
                    <a href="../auth/login.html"
                        class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                        <i class="fas fa-fingerprint text-blueGray-300 mr-2 text-sm"></i>
                        Logout
                    </a>
                </li>

                <li class="items-center">
                    <a href="../auth/register.html"
                        class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                        <i class="fas fa-clipboard-list text-blueGray-300 mr-2 text-sm"></i>
                        Register
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
