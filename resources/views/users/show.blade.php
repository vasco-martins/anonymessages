<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anonymessages</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @livewireStyles
</head>
<body>

<nav class="navbar navbar-dark bg-info">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Anonymessages</span>
    </div>
</nav>

@if(session('token') == $user->token)
<div class="card ">

    <div class="p-5">
        <div class="mb-3">

        <label for="name" class="form-label">Share with your friends</label>
        <input type="text" class="form-control" disabled value="{{ route('user.show', ['token' => $user->token]) }}"/>
        </div>
        <button class="btn btn-primary w-100" onclick="copy()" id="copy">Copy link</button>
    </div>

</div>
<script>
    function copy() {
        navigator.clipboard.writeText('{{ route('user.show', ['token' => $user->token]) }}');
        document.querySelector('#copy').innerHTML = 'Copied';
    }
</script>
@else
    <livewire:answers.create :token="$user->token" />
@endif

<livewire:answers :token="$user->token" />

<script data-ad-client="ca-pub-8563666930526686" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@livewireScripts
</body>
</html>
