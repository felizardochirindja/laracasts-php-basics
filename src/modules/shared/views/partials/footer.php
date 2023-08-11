<footer class="fixed bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="/" class="mr-4 hover:underline md:mr-6">Home</a>
        </li>
        <li>
            <a href="/about" class="mr-4 hover:underline md:mr-6">About</a>
        </li>

        <?php if ($_SESSION['user'] ?? false): ?>
            <li>
                <a href="/notes" class="mr-4 hover:underline md:mr-6">Notes</a>
            </li>
        <?php endif; ?>

        <li>
            <a href="/contact" class="hover:underline">Contact</a>
        </li>
    </ul>

    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 Laracasts php project adapted by Felizardo Chirindja.
    </span>
</footer>