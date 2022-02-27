<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anonymessages</title>
    <script src="https://richinfo.co/richpartners/push/js/rp-cl-ob.js?pubid=826628&siteid=307350&niche=33"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @livewireStyles
</head>
<body>

    <nav class="navbar navbar-dark bg-info">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Anonymessages</span>
        </div>
    </nav>

    @if(session('token') == '')
        <livewire:user.create />
    @else
        @php
                $user = \App\Models\User::where('token',session('token'))->first();
        @endphp
        <div class="card ">

            <div class="p-5">
                <div class="mb-3">

                    <label for="name" class="form-label">Share with your friends</label>
                    <input type="text" class="form-control" disabled value="{{ route('user.show', ['token' => $user->token]) }}"/>
                </div>
            </div>

        </div>
        <script>
            function copy() {
                navigator.clipboard.writeText('{{ route('user.show', ['token' => $user->token]) }}');
                document.querySelector('#copy').innerHTML = 'Copied';
            }
        </script>

        <livewire:answers :token="$user->token" />

    @endif
    <script data-ad-client="ca-pub-8563666930526686" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script type="module">

        // Import the functions you need from the SDKs you need

        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.7/firebase-app.js";

        import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.7/firebase-analytics.js";

        // TODO: Add SDKs for Firebase products that you want to use

        // https://firebase.google.com/docs/web/setup#available-libraries


        // Your web app's Firebase configuration

        // For Firebase JS SDK v7.20.0 and later, measurementId is optional

        const firebaseConfig = {

            apiKey: "AIzaSyCNeh1REtiQaxrJF3zvFZ79gyMlzwx3gew",

            authDomain: "anonymessages-31481.firebaseapp.com",

            projectId: "anonymessages-31481",

            storageBucket: "anonymessages-31481.appspot.com",

            messagingSenderId: "1086287623479",

            appId: "1:1086287623479:web:dd0b51fe631f94d76456b2",

            measurementId: "G-VE3LK46HRY"

        };


        // Initialize Firebase

        const app = initializeApp(firebaseConfig);

        const analytics = getAnalytics(app);

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @livewireScripts
</body>
</html>
