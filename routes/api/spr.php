<?php

Route::get('V1/semak-pemilih/{ic}', 'API\V1\SemakPemilihController@ApiSpr')->name('semak-pemilih-V1');
Route::get('V2/semak-pemilih/{ic}', 'API\V2\SemakPemilihController@ApiSpr')->name('semak-pemilih-V2');