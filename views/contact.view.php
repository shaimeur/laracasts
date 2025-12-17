<?php include('partials/header.php')?>

<?php include('partials/navbar.php')?>

<?php include('partials/banner.php')?>

<main>
  <div class="max-w-2xl mx-auto px-4 py-12">
    <div class="bg-white rounded-lg shadow-md p-8">
      <h2 class="text-3xl font-bold text-gray-900 mb-2">Get in Touch</h2>
      <p class="text-gray-600 mb-8">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>

      <form action="" method="post" class="space-y-6">
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="John Doe"
            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
          />
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="john@example.com"
            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
          />
        </div>

        <div>
          <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
          <textarea
            id="message"
            name="message"
            placeholder="Tell us what's on your mind..."
            rows="6"
            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition resize-none"
          ></textarea>
        </div>

        <button
          type="submit"
          class="w-full bg-indigo-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-indigo-700 transition duration-200 shadow-lg hover:shadow-xl"
        >
          Send Message
        </button>
      </form>
    </div>
  </div>
</main>

<?php include('partials/footer.php')?>