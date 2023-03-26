<div class="min-h-screen flex flex-row bg-black">
    <div class="flex flex-col w-56 bg-black rounded-r-3xl overflow-hidden">
        <div class="flex items-center justify-center h-20 shadow-md">
            <h1 class="text-2xl uppercase text-white font-medium">Canada Guide</h1>
        </div>
        <div class="bg-black">
            <ul class="flex flex-col py-4">
                <li>
                    <a href="/admin/getstats"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-200 hover:text-gray-50">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="bx bx-home"></i></span>
                        <span class="text-sm font-medium">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/housing"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-200 hover:text-gray-50">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="bx bx-bed"></i></span>
                        <span class="text-sm font-medium">Houses</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/grocery_stores"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-200 hover:text-gray-50">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="bx bx-store"></i></span>
                        <span class="text-sm font-medium">Groceries</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/tourist_places"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-200 hover:text-gray-50">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="bx bx-drink"></i></span>
                        <span class="text-sm font-medium">Places To Visit</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/users"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-200 hover:text-gray-50">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="bx bx-user"></i></span>
                        <span class="text-sm font-medium">Users</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="/admin/schedule_emails"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-200 hover:text-gray-50">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="bx bx-chat"></i></span>
                        <span class="text-sm font-medium">Schedule Emails</span>
                    </a>
                </li> --}}
                <li>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit"
                            class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-200 hover:text-gray-50">
                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                    class="bx bx-log-out"></i></span>
                            <span class="text-sm font-medium">Logout</span> </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
