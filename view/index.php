<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dist.css">
    <title>Document</title>
</head>

<body>
    <header class="container mx-auto py-10 text-4xl">
        <h1 class="font-mono font-bold font-size">bokete</h1>
    </header>
    <main class="container mx-auto">
        <article class="container mx-auto">
            <h2 class="text-xl py-5">写真で一言ボケて</h2>
            <form method="post" type="multipart/form">
                <label for="text-L">一言</label>
                <input type="text" name="text" class="border-b">
                <label for="file-L">写真</label>
                <input type="file" name="file">
                <button type="submit" name="submit">送信</button>
            </form>
            <div class="">
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <div class="" style="width: 150px;height: 150px;">
                        <p><img alt="写真"></p>
                    </div>
                    <p>タイトル</p>
                <?php } ?>
            </div>
        </article>
    </main>
    <footer class="container mx-auto">
        <p class="text-center font-sankou">ph24</p>
    </footer>
</body>

</html>