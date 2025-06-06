<?php require('../views/layout/navbar.php'); ?>
<?php require('../controllers/dashboard.controller.php') ?>

<main>
    <section class="mt-12 border-b border-gray-950 mb-10">
        <h1 class="text-6xl font-serif text-center"><?=htmlspecialchars($book['title'])?></h1>
        <p class="font-serif text-[1.1rem] text-center my-10 text-gray-700">By: <?=htmlspecialchars($book['authors'])?></p>
    </section>

    <article class="w-[90%] my-[1em] mx-auto">
        <section class="flex w-full">
            <!-- Book Cover -->
            <aside class="h-120 w-[40%] relative">
                <div class="size-full">
                    <img class="size-full object-cover" src="/assets/images/bookcover.png" alt="<?=htmlspecialchars($book['title'])?>">
                </div>

                <div class="absolute top-12 left-28">
                    <h1 class="text-2xl font-serif font-bold"><?=htmlspecialchars($book['title'])?></h1>
                    <p class="font-serif text-[1.1rem]">By <?=htmlspecialchars($book['authors'])?></p>
                </div>
            </aside>

            <!-- Content -->
            <aside class="w-[50%]">
                <div>
                    <p class="font-serif text-2xl text-gray-800 leading-12"><?=htmlspecialchars($book['description'])?></p>
                </div>
            </aside>
        </section>
    </article>
</main>