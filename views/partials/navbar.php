<?php require_once __DIR__ . '/../../utiles/utiles.php'; ?>
<nav class="bg-gray-800/50">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <div class="shrink-0">
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <a href="/" aria-current="page" class="rounded-md <?php if($_SERVER["REQUEST_URI"] === "/"){echo "bg-gray-950/50 text-white";} else {echo "text-gray-300 hover:bg-white/5 hover:text-white";} ?> px-3 py-2 text-sm font-medium">Home</a>
            <a href="/about" class="rounded-md <?php echo ($_SERVER["REQUEST_URI"] === "/about") ? "bg-gray-950/50 text-white" : "text-gray-300 hover:bg-white/5 hover:text-white"; ?> px-3 py-2 text-sm font-medium">About</a>
            <a href="/contact" class="rounded-md <?php activePage("/contact") ?> px-3 py-2 text-sm font-medium">Contact-Us</a>
          </div>
        </div>
      </div>

      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6 space-x-4">
          <!-- Login/Register Buttons -->
          <a href="/login" class="rounded-md px-4 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white transition">Login</a>
          <a href="/register" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-700 transition">Register</a>

          <!-- Notification Button -->
          <button type="button" class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="sr-only">View notifications</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
              <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>

          <!-- Profile Dropdown -->
          <div class="relative ml-3">
            <button onclick="toggleDropdown()" class="relative flex max-w-xs items-center rounded-full focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
              <span class="sr-only">Open user menu</span>
              <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-8 rounded-full outline -outline-offset-1 outline-white/10" />
            </button>

            <div id="dropdown-menu" class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-gray-800 py-1 shadow-lg ring-1 ring-white/10">
              <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-white/5">Your profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-white/5">Settings</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-white/5">Sign out</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile menu button -->
      <div class="-mr-2 flex md:hidden">
        <button onclick="toggleMobileMenu()" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
          <span class="sr-only">Open main menu</span>
          <svg id="menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <svg id="close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6 hidden">
            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <div id="mobile-menu" class="hidden md:hidden">
    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
      <a href="/" class="block rounded-md <?php if($_SERVER["REQUEST_URI"] === "/"){echo "bg-gray-950/50 text-white";} else {echo "text-gray-300 hover:bg-white/5 hover:text-white";} ?> px-3 py-2 text-base font-medium">Home</a>
      <a href="/about" class="block rounded-md <?php echo ($_SERVER["REQUEST_URI"] === "/about") ? "bg-gray-950/50 text-white" : "text-gray-300 hover:bg-white/5 hover:text-white"; ?> px-3 py-2 text-base font-medium">About</a>
      <a href="/contact" class="block rounded-md text-gray-300 hover:bg-white/5 hover:text-white px-3 py-2 text-base font-medium">Contact-Us</a>
    </div>

    <!-- Mobile Login/Register -->
    <div class="border-t border-white/10 px-2 pt-4 pb-3 space-y-1">
      <a href="/login" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Login</a>
      <a href="/register" class="block rounded-md px-3 py-2 text-base font-medium bg-indigo-600 text-white hover:bg-indigo-700">Register</a>
    </div>

    <div class="border-t border-white/10 pt-4 pb-3">
      <div class="flex items-center px-5">
        <div class="shrink-0">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full outline -outline-offset-1 outline-white/10" />
        </div>
        <div class="ml-3">
          <div class="text-base/5 font-medium text-white">Tom Cook</div>
          <div class="text-sm font-medium text-gray-400">tom@example.com</div>
        </div>
        <button type="button" class="relative ml-auto shrink-0 rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
          <span class="sr-only">View notifications</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
            <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <div class="mt-3 space-y-1 px-2">
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Your profile</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Settings</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Sign out</a>
      </div>
    </div>
  </div>
</nav>

<script>
function toggleDropdown() {
  const dropdown = document.getElementById('dropdown-menu');
  dropdown.classList.toggle('hidden');
}

function toggleMobileMenu() {
  const menu = document.getElementById('mobile-menu');
  const menuIcon = document.getElementById('menu-icon');
  const closeIcon = document.getElementById('close-icon');

  menu.classList.toggle('hidden');
  menuIcon.classList.toggle('hidden');
  closeIcon.classList.toggle('hidden');
}

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
  const dropdown = document.getElementById('dropdown-menu');
  const button = event.target.closest('button[onclick="toggleDropdown()"]');

  if (!button && !dropdown.contains(event.target)) {
    dropdown.classList.add('hidden');
  }
});
</script>