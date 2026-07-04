<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>VRA Hospital - Settings</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#135bec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1a2233",
                        "text-main": "#0d121b",
                        "text-secondary": "#4c669a",
                        "border-light": "#e7ebf3",
                        "border-dark": "#2a3447",
                    },
                    fontFamily: {
                        "display": ["Manrope", "Noto Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>
<x-layout>
    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col h-full overflow-hidden relative">
        <!-- Top Mobile Header (visible only on small screens) -->
        <div class="lg:hidden flex items-center justify-between p-4 border-b border-border-light bg-surface-light dark:bg-surface-dark dark:border-border-dark">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">local_hospital</span>
                <span class="font-bold text-text-main dark:text-white">VRA Hospital</span>
            </div>
            <button class="text-text-main dark:text-white">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
        <!-- Scrollable Content -->
        <div class="flex-1 overflow-y-auto p-4 md:p-8 lg:p-12 pb-24 scroll-smooth">
            <div class="max-w-5xl mx-auto flex flex-col gap-8">
                <!-- Page Heading -->
                <div class="flex flex-col gap-2">
                    <h1 class="text-3xl md:text-4xl font-black text-text-main dark:text-white tracking-tight">Settings</h1>
                    <p class="text-text-secondary dark:text-slate-400 text-base">Manage your account preferences and system configurations.</p>
                </div>
                <!-- Tabs -->
                <div class="border-b border-border-light dark:border-border-dark">
                    <div class="flex gap-6 md:gap-8 overflow-x-auto no-scrollbar">
                        <a class="flex items-center justify-center border-b-[3px] border-primary text-text-main dark:text-white pb-3 pt-2 px-1 whitespace-nowrap" href="#">
                            <span class="text-sm font-bold tracking-wide">Profile & Account</span>
                        </a>
                        <a class="flex items-center justify-center border-b-[3px] border-transparent text-text-secondary dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors pb-3 pt-2 px-1 whitespace-nowrap" href="#">
                            <span class="text-sm font-bold tracking-wide">Security</span>
                        </a>
                        <a class="flex items-center justify-center border-b-[3px] border-transparent text-text-secondary dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors pb-3 pt-2 px-1 whitespace-nowrap" href="#">
                            <span class="text-sm font-bold tracking-wide">Notifications</span>
                        </a>
                        <a class="flex items-center justify-center border-b-[3px] border-transparent text-text-secondary dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors pb-3 pt-2 px-1 whitespace-nowrap" href="#">
                            <span class="text-sm font-bold tracking-wide">Payroll Config</span>
                        </a>
                    </div>
                </div>
                <!-- Profile Header Card -->
                <div class="bg-surface-light dark:bg-surface-dark rounded-xl p-6 md:p-8 shadow-sm border border-border-light dark:border-border-dark">
                    <div class="flex flex-col md:flex-row gap-6 items-start md:items-center justify-between">
                        <div class="flex items-center gap-6">
                            <div class="relative">
                                <div class="bg-center bg-no-repeat bg-cover rounded-full h-24 w-24 md:h-28 md:w-28 shadow-md border-4 border-background-light dark:border-background-dark" data-alt="Detailed portrait of Dr. Sarah Jenkins" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDPPlCTCezdA3p9dlEvdvpc7w9jNa3Pt1Igx6xMD7xULOampJsNd51ScS0IC4EMiDERHpz7RurGoZV_dNpoYxpMB4kkYmR-8T0Yioqmm9zCj2bcHKBPv8qtQzrDumBArTbyXmaU68lIqWJX8teujjldS6VnvYKf4i1Y4o_miEw_BsCIWC31BJUoCDIp72ASDjZFwozAvj46rViMVcjGkzNAWxH2svT4X_XCzPpij1fG9XxXrolNqaIQX_stQsxK3C18oJ8Eo9UKvLg");'></div>
                                <button class="absolute bottom-1 right-1 bg-primary text-white p-1.5 rounded-full hover:bg-blue-600 transition-colors shadow-sm" title="Change Avatar">
                                    <span class="material-symbols-outlined text-[18px]">edit</span>
                                </button>
                            </div>
                            <div class="flex flex-col">
                                <h2 class="text-xl md:text-2xl font-bold text-text-main dark:text-white">Dr. Sarah Jenkins</h2>
                                <p class="text-text-secondary dark:text-slate-400 font-medium">Chief Surgeon</p>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="bg-primary/10 text-primary text-xs font-bold px-2 py-0.5 rounded-full uppercase tracking-wider">Admin</span>
                                    <p class="text-text-secondary dark:text-slate-500 text-sm">ID: #88392</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-3 w-full md:w-auto">
                            <button class="flex-1 md:flex-none items-center justify-center rounded-lg h-10 px-5 bg-border-light dark:bg-slate-700 text-text-main dark:text-white text-sm font-bold hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors">
                                Remove Photo
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Personal Information Section -->
                <div class="flex flex-col gap-5">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-bold text-text-main dark:text-white">Personal Information</h3>
                    </div>
                    <div class="bg-surface-light dark:bg-surface-dark rounded-xl p-6 md:p-8 shadow-sm border border-border-light dark:border-border-dark">
                        <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-text-main dark:text-white">First Name</label>
                                <input class="w-full rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-slate-800 text-text-main dark:text-white px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="Enter first name" type="text" value="Sarah"/>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-text-main dark:text-white">Last Name</label>
                                <input class="w-full rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-slate-800 text-text-main dark:text-white px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="Enter last name" type="text" value="Jenkins"/>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-text-main dark:text-white">Email Address</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-2.5 text-text-secondary dark:text-slate-500 material-symbols-outlined text-[20px]">mail</span>
                                    <input class="w-full rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-slate-800 text-text-main dark:text-white pl-11 pr-4 py-2.5 text-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="Enter email" type="email" value="sarah.jenkins@vrahospital.com"/>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-text-main dark:text-white">Phone Number</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-2.5 text-text-secondary dark:text-slate-500 material-symbols-outlined text-[20px]">call</span>
                                    <input class="w-full rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-slate-800 text-text-main dark:text-white pl-11 pr-4 py-2.5 text-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="Enter phone number" type="tel" value="+1 (555) 012-3456"/>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 md:col-span-2">
                                <label class="text-sm font-semibold text-text-main dark:text-white">Residential Address</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-2.5 text-text-secondary dark:text-slate-500 material-symbols-outlined text-[20px]">home</span>
                                    <input class="w-full rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-slate-800 text-text-main dark:text-white pl-11 pr-4 py-2.5 text-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="Street address" type="text" value="4821 Ridgeview Drive, San Francisco, CA 94103"/>
                                </div>
                            </div>
                        </form>
                        <div class="mt-8 flex justify-end">
                            <button class="rounded-lg bg-primary hover:bg-blue-600 text-white px-6 py-2.5 text-sm font-bold shadow-sm shadow-blue-500/30 transition-all">Save Changes</button>
                        </div>
                    </div>
                </div>
                <!-- Administrator Settings (Conditional Render in real app) -->
                <div class="flex flex-col gap-5 pt-4">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary text-2xl">admin_panel_settings</span>
                        <h3 class="text-lg font-bold text-text-main dark:text-white">Payroll Configuration</h3>
                        <span class="bg-gray-100 dark:bg-slate-700 text-xs font-semibold px-2 py-1 rounded text-text-secondary dark:text-slate-300">Admin Only</span>
                    </div>
                    <div class="bg-surface-light dark:bg-surface-dark rounded-xl p-6 md:p-8 shadow-sm border border-border-light dark:border-border-dark">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Pay Period Settings -->
                            <div class="flex flex-col gap-4">
                                <h4 class="text-sm uppercase tracking-wide text-text-secondary dark:text-slate-500 font-bold mb-1">Schedule & Cycle</h4>
                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-semibold text-text-main dark:text-white">Pay Frequency</label>
                                    <select class="w-full rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-slate-800 text-text-main dark:text-white px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                                        <option>Weekly</option>
                                        <option selected="">Bi-Weekly (Every 2 weeks)</option>
                                        <option>Semi-Monthly (15th & 30th)</option>
                                        <option>Monthly</option>
                                    </select>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-semibold text-text-main dark:text-white">Next Pay Date</label>
                                    <input class="w-full rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-slate-800 text-text-main dark:text-white px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none" type="date" value="2023-11-15"/>
                                </div>
                            </div>
                            <!-- System Integrations -->
                            <div class="flex flex-col gap-4">
                                <h4 class="text-sm uppercase tracking-wide text-text-secondary dark:text-slate-500 font-bold mb-1">Integrations</h4>
                                <div class="flex items-center justify-between p-3 rounded-lg border border-border-light dark:border-border-dark bg-background-light/50 dark:bg-slate-800/50">
                                    <div class="flex items-center gap-3">
                                        <div class="bg-blue-100 dark:bg-blue-900/30 p-2 rounded-md text-blue-600 dark:text-blue-400">
                                            <span class="material-symbols-outlined">account_balance</span>
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-text-main dark:text-white">QuickBooks Sync</p>
                                            <p class="text-xs text-text-secondary dark:text-slate-500">Last synced: 2 hours ago</p>
                                        </div>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input checked="" class="sr-only peer" type="checkbox"/>
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                                    </label>
                                </div>
                                <div class="flex items-center justify-between p-3 rounded-lg border border-border-light dark:border-border-dark bg-background-light/50 dark:bg-slate-800/50">
                                    <div class="flex items-center gap-3">
                                        <div class="bg-green-100 dark:bg-green-900/30 p-2 rounded-md text-green-600 dark:text-green-400">
                                            <span class="material-symbols-outlined">table_view</span>
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-text-main dark:text-white">Export to Excel</p>
                                            <p class="text-xs text-text-secondary dark:text-slate-500">Auto-generate monthly reports</p>
                                        </div>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input class="sr-only peer" type="checkbox"/>
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-border-light dark:border-border-dark flex justify-between items-center">
                            <p class="text-sm text-text-secondary dark:text-slate-500">Changes to payroll config will affect the next cycle.</p>
                            <button class="rounded-lg bg-primary hover:bg-blue-600 text-white px-6 py-2.5 text-sm font-bold shadow-sm shadow-blue-500/30 transition-all">Update Config</button>
                        </div>
                    </div>
                </div>
                 </div>
        </div>
    </main>
</x-layout>
