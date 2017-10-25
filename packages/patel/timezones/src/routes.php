<?php

Route::get('timezones/{timezone?}', 
  'patel\timezones\TimezonesController@index');
