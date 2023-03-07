<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta meta="viewport" content="width=device-width, initial-scale=1">
            <title>Bootstrap w/ Vite</title>

            <!--Style-->

            @vite([
                'resources/js/app.js',
                'resources/css/app.css',
                'node_modules/bootstrap/dist/css/bootstrap.min.css',
                'node_module/bootstrap/dist/js/bootstrap.bundle.js'
                ])

            </head>

            <body>
                <div class="containder py-4 px-3 mx auto">
                    <h1>Hello, Bootstrap and Vite!</h1>
                    <button class="btn btn-primary"> Primary button</button>
                </div>
            </body>
        </html>