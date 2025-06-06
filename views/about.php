<?php require("layout/navbar.php") ?>
<?php require("../controllers/home.controller.php") ?>

<header class="h-120 w-[90%] my-[1em] mx-auto rounded-2xl bg-[url(/assets/images/books.jpg)] bg-no-repeat bg-cover bg-center flex justify-center items-center relative before:absolute before:content-[''] before:bg-black/80 before:w-full before:h-full z-[1] before:rounded-[inherit]">
    <section class="relative z-[2]">
        <h1 class="font-light font-serif text-[5em] text-white ">About</h1>
    </section>
</header>

<main class="w-[90%] my-[2em] mx-auto">
    <h2 class="font-serif relative text-3xl">📚 About
        <span class="relative before:absolute before:content-[''] before:h-full before:-inset-1 before:bg-blue-800 before:-skew-y-3 before:block before:z-[-1] before:text-white">
            <span class="text-white font-black"> Bookonline </span>
        </span>
        eBook.
    </h2>

    <article>
        <section class="my-[1em]">
                    <p class="text-slate-700">
                        Bookonline is your go-to platform for discovering and downloading free books in PDF format. Whether you're a student, a casual reader, or a lifelong learner, our mission is to make knowledge and literature easily accessible to everyone — without any cost.

                        We believe in open access to education and the power of reading to transform lives. That’s why we’ve created a curated collection of high-quality eBooks across various genres — from fiction and non-fiction to academic and self-help resources.

                        With a simple and clean interface, Bookonline makes it easy to find, preview, and download the books you love. No sign-ups, no paywalls — just knowledge, one click away.
                    </p>
        </section>
    </article>
</main>
<?php require("layout/footer.php") ?>