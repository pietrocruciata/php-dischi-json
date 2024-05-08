<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./index.css">

    <title>Document</title>
</head>

<body>

    <div id="app">
        <header class="bg-dark-blue">
            <div class="container-lg d-flex justify-content-center">
               <img src="data:image/png;base64,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" alt="" class="size-logo">
            </div>
        </header>

        <main class="p-5 c-main">
            <div class="container">
                <div class="row gap-3 justify-content-center">
                    <div class=" col-3  p-4 bg-dark-blue text-white "  v-for="disk in disks">
                        <img :src="disk.poster" class="card-img-top" alt="...">
                        <div class="card-body d-flex align-items-center flex-column p-2">
                            <h5 class="card-title">{{disk.title}}</h5>
                            <p class="card-text">{{disk.author}}</p>
                            <div><strong>{{disk.year}}</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="size-footer">

        </footer>
    </div>
    <script src="./app.js"></script>

</body>

</html>