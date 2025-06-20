<?php require("layout/navbar.php") ?>
<?php require("../controllers/home.controller.php") ?>

<header class="h-120 w-[90%] my-[1em] mx-auto rounded-2xl bg-[url(/assets/images/bookselfs.png)] bg-no-repeat bg-cover bg-center flex justify-center items-center relative before:absolute before:content-[''] before:bg-black/80 before:w-full before:h-full z-[1] before:rounded-[inherit]">
    <section class="relative z-[2]">
        <h1 class="font-light font-serif text-[5em] text-white ">Free literature for your device</h1>
    </section>
</header>

<main class="w-[90%] my-[2em] mx-auto">
    <h2 class="font-serif relative text-3xl">A list of all our 
        <span class="relative before:absolute before:content-[''] before:h-full before:-inset-1 before:bg-blue-800 before:-skew-y-8 before:block before:z-[-1] before:text-white">
            <span class="text-white font-black"> free </span>
    </span> 
    eBooks
</h2>

    <article>
        <section class="grid grid-cols-3 gap-4 my-[1em]">

            <?php foreach($books as $key => $book): ?>
                <a href="/book?id=<?=$book['id']?>" class="group hover:bg-slate-100 py-2 px-4 rounded-[0.5rem]">
                    <h1 class="text-[1.3rem] font-serif group-hover:text-blue-800 group-hover:underline">
                        <?= htmlspecialchars($book['title'])?></h1>
                    <p class="text-slate-700">
                        By <?= htmlspecialchars($book['authors'])?>
                    </p>
                </a>
            <?php endforeach; ?>
        </section>
    </article>
</main>
<?php require("layout/footer.php") ?>