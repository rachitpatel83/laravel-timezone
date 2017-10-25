<?php

Route::get('timezones/{timezone?}', 
  'patel\rtimezones\TimezonesController@index');
