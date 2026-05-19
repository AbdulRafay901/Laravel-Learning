<?php

use Illuminate\Support\Str;

// Acha Fluent String kiya hota he jaab bhi hamhe kesi Varible me se String jese 
//  "hello mera name rafay he" hamne change krna ho jese hamhe is me se hamhe first letter 
// ke Alphbat H krna he or First letter ko hello se Change krna to alag alag code likhne
//  Likhne se acha ham use Illuminate\Support\Str; Include krke isme build in chezze hoti he
// Jo hamne neche use kari he inki chaining bana kr use kr skhte he 

$str = "hello mera name rafay he";

$str = Str::of($str)->ucfirst($str)->replaceFirst("Hello", "Change", $str);

echo $str 

// Acha echo $str me Hoga ---------- Change mera name rafay he


?>