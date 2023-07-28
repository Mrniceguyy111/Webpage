<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
    $this->comment('Arkia nos casamos?');
})->purpose('Display an inspiring quote');

Artisan::command('build', function() {
    $this->comment('
        La relación entre este comando, y el que utilizamos
        para crear esta maravillosa pagina solo hay un toque
    ');
});

Artisan::command('best.duo', function() {
    $this->comment('
        El mejor duo siempre fue @rcomunica y @arka_dev
    ');
});
