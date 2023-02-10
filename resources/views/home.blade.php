<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trains Home</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>

        {{-- $table->id();
        $table->string('agency', 255); \\\
        $table->string('departure_station', 255);
        $table->string('arrival_station', 255);
        $table->dateTime('departure_time');
        $table->dateTime('arrival_time');
        $table->string('train_code', 255); \\\\
        $table->tinyInteger('cab');\\\
        $table->boolean('on_time');
        $table->boolean('delayed'); --}}

        <div class="container">
            <div class="row">
                    @forelse ($trains as $train)
                    <div class="card me-5 mb-5" style="width: 15rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{ $train['agency'] }}</h5>
                          <h6 class="">{{ $train['train_code'] }}</h5>
                          <span class="card-text"> {{ $train['cab'] }}</span>
                          <span>
                            {{  $train['departure_station'] }}
                          </span>
                          <span>
                            {{  $train['arrival_station'] }}
                          </span>
                        </div>
                    </div>
                    @empty
                        <p>Mi disp non ci sono treni</p>
                    @endforelse
            </div>
        </div>
    </main>   
</body>

</html>
