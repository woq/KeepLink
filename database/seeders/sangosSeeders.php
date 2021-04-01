<?php
public function run()
{
    \App\Models\sango::create([
        'ip' => 'John Doe',
        'url' => 'doejohn@gmail.com',
        'sanID' => '1234567890',
    ]);
}