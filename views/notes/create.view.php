<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<?php require basePath('views/partials/head.php') ?>

<body class="h-full">
    <div class="min-h-full">
        <?php require basePath('views/partials/nav.php') ?>
        <?php require basePath('views/partials/banner.php') ?>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="mt-5 md:col-span-2 md:mt-0">
                            <form action="/notes" method="POST">
                                <div class="shadow sm:overflow-hidden sm:rounded-md">
                                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                        <div>
                                            <label for="about" class="block text-sm font-medium text-gray-700">Body</label>
                                            <div class="mt-1">
                                                <textarea id="body" name="body" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="your note body..."><?= $_POST['body'] ?? '' ?></textarea>

                                                <?php if (isset($errors['body'])) : ?>
                                                    <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                <a href="/notes">cancel</a>
                                            </button>
                                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="hidden sm:block" aria-hidden="true">
                    <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>
            </div>
        </main>

        <?php require basePath('views/partials/footer.php') ?>
    </div>
</body>

</html>