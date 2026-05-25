<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\bladeController;
use App\Http\Controllers\formController;
use App\Http\Controllers\namedController;
use App\Http\Controllers\groupController;
use App\Http\Controllers\fetchController;
use App\Http\Controllers\studentsController;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\QueryBuilderController;
use App\Http\Controllers\methodController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\uploadfileController;
use App\Http\Controllers\insertController;
use App\Http\Controllers\readController;
use App\Http\Controllers\relationshipsController;
use App\Http\Controllers\emailController;
use App\Http\Controllers\bindingController;
use App\Http\Controllers\inlineBladeController;
use App\Http\Controllers\serviceLayerController;
use App\Http\Controllers\ApiResourcejsonController;
use App\Http\Controllers\Api\V1\StudentController as V1StudentController;
use App\Http\Controllers\Api\v2\StudentController as V2StudentController;
use App\Http\Controllers\RedisController;
use App\Http\Controllers\TransactionwController;

Route::get('/', function (){
    return view('welcome');
});


// First Route Create Acha isme aik faida Hame file ko kesi bhi name se open krskhte hen
Route::view('/Hides','Home');


Route::get('/about/{name}', function($name){
    return view('about', ['name' => $name] );
});


Route::get('/redirect', function(){
     return view('redirect');
});

// Acha ab dekho Redirect ka kaam ye he Mene kaha jaab bhi url me Hides ho to Hides 
// Hides page par maat jao joke Home he ius par maat jao redirect page par jao or 
// Agar redirect fucntion chalana heto hides wale ko disable krdo

Route::redirect('/Hides', '/redirect');



// Pass Data from Router to Controller Start

Route::get('/user', [UserController::class, 'getUser']);
Route::get('/about', [UserController::class, 'aboutUser']);
Route::get('userid/{id}',[UserController::class, 'getUserName']);


// Pass Data from Router to Controller End


// Blade Template Start

Route::get('/blade', [bladeController::class, 'blade']);

// Blade Template End



// Form Handling Start

Route::view('/form', 'form-handling.user-form');
Route::post('/adduser', [formController::class, 'getUser']);


// Form Handling End


// Url Generation Start

Route::get('url', function(){
    return view('Url.url');
});

Route::get('change', function(){
    return view('Url.url');
});

// Url Generation End


// Named Route Start

// Acha ab ye jo route ke agye->name('username') ye isliye likha he ab jaab kabhi
// Url lamba hoto iuska name apni marzi se rkhdo jese route->name(apni mrzi se name rkhdo) aur jab bhi url lamba ho to is name se url ko access krlo jese url('username') aur ye username route ke agye jo name diya he usi se url ko access krlo

// Ab isme hamne controller me bhi short name he  user kara he  pura path nhi likha he 


Route::view('named/username', 'RouteNamed.named')->name('username');
Route::view('named/user/{xyz}', 'RouteNamed.named')->name('user');

Route::get("show", [namedController::class, 'named']);
Route::get("get", [namedController::class, 'user']);

// Name Route End


// Route Group Prefix Start

// Acha ye prefix kiya hota he ye hoti Group Route jese ke hamare admin panel he 
// Or iusme admin ke ander 10 file hen to 10 file ke saat admin/order admin/user 
// likhna parega bar bar na likhna pare isliye ham prefic use krte hen prefix
// Me aik bar likhdo bss 

// Aik or or chez isme dekho hame aik he controller Me se alag alag function call 
// Krne he to bar bar aik controller ka name likhna parta iske liye  bhi hamne 
// Make route Controller Group use kara he jis se bss aik bar name likha he controller ka
// or group function call krdiya he 

Route::prefix('admin')->group(function(){
    Route::controller(groupController::class)->group(function(){
         Route::get('/dashboard', 'dashboard');
         Route::get('/users', 'users');
         Route::get('/orders', 'orders');
         Route::get('users/{id}', 'usersid');
    });
});

// Route Group Prefix End

// Middleware Code  Start

// ye green howa wa code jo he isme hamne har route par middleware apply kari he 
// leken iske neche hamne group bana kr apply kari he jis se bar bar nhi likhna prta he

// Route::view('middleware/home', 'Middleware.home')->middleware('check1');
// Route::view('middleware/about', 'Middleware.about')->middleware('check1');

Route::middleware('check1')->group(function(){
    Route::view('middleware/home', 'Middleware.home');
    Route::view('middleware/about', 'Middleware.about');
});

// Middleware Code  End


// Database Code Start
   Route::get('fetch', [fetchController::class, 'fetch']);
// Database Code End



// Eloquent Code Start
   
   Route::get('eloquent',[studentsController::class,  'students']);

// Eloquent Code End


// Http Client Code Start


Route::get('http',[HttpController::class, 'http']);

// Http Client Code End



// Query Builder Code Start

Route::get('querybuilder', [QueryBuilderController::class, 'querybuilder']);

// Query Builder Code End


// laravel Route Methods    Start

Route::get('user', [methodController::class, 'get']);
Route::post('user', [methodController::class, 'post']);
Route::put('user', [methodController::class, 'put']);
Route::delete('user', [methodController::class, 'delete']);


// Acha ab Route me Any method Taab use hota he jaab form me se get post put delete 
// Par controller me se aik he function call krna ho taab any use hota he 
// Agar any method chalake check krna heto green mark hata do or iuper walo 
// ko green mark krdo 

// Route::any('user', [methodController::class, 'any']);

// Acha ab ye he Match Method Ab ye taab use hota he jaab hamhe 2 ya jitni bhi  request par 
// Alag function chalana hota heto ham match ka use krte hen or iusme array me 
// likh dete hen kon kon se method par ye function chale ab jese neche dekho 
// Hamhe post or get method par group1 functio chalana to hamne neche 
// Match me post or get he likha he or delete or Put par hamhe group 2 function 
// Chalana tha to hamne match me delete or put likha he 

// Route::match(['post', 'get'], 'user', [methodController::class, 'group1']);
// Route::match(['delete', 'put'], 'user', [methodController::class, 'group2']);

Route::view('methodform', 'LaravelRouteMethods.methods');

// laravel Route Methods    End


// Laravel Sessions             Start

Route::view('sessionform', 'LaravelSessions.session');

Route::post('login', [sessionController::class, 'session']);

Route::view('profile', 'LaravelSessions.profile');

Route::get('logout', [sessionController::class, 'logout']);

// Laravel Sessions             End


// Upload File And Display         Start

Route::view('uploadfile', 'UploadFile.upload');
Route::post('file', [uploadfileController::class, 'filefunc']);

// Upload File And Display         End


// Localilization ------ Start

Route::view("abouth1", "Localilization.about");

// Acha Ab ye App::setLocale() kiya krta he bss jaab bolte hen tab he ye APP_LOCALE= en file 
//  Se change krta he bss jese hamne kaha jaab abouts ke saat koi value aye 
//  Wohi value wali language en file me krdo hamhe example abouts/ur krke behja to ab
// APP_LOCALE=ur  en me bhi ye hogaya bss jaab hoga ye jaab route me about/value hogi 
Route::get('abouts/{lang}', function($lang){
    App::setLocale($lang);
    return view('localilization.about');
});

Route::middleware('lang')->group(function(){

Route::get('/', function (){
    return view('welcome');
});

Route::get('welcome/{lang}', function($lang){
    Session::put('lang', $lang);
    return redirect('/');
});

});



// Localilization ------ End


// Laravel + Database Handling     Start

// User Insert Start

Route::view('userInsert', 'LaravelDatabase.insert');

Route::post('InsertUser', [insertController::class, 'Insert']);

// User Insert Delete

// User Read ----------- Start

Route::get('readData', [readController::class, 'Read']);

// User Read ----------- End

// User Delete ----------- Start

Route::get('userDelete/{id}', [insertController::class, 'Delete']);

// User Delete ----------- End

// User Update ------------------- Start

Route::get('userUpdate/{id}', [insertController::class, 'Update']);

Route::put('updateUser/{id}', [insertController::class, 'DataUpdate']);

// User Update ------------------- End

// User Search ------------------- Start

Route::post('search', [insertController::class, 'Search']);

// User Search ------------------- End

// Multiple User Delete with Checkbox ------------------- Start

Route::post('deletes', [insertController::class, 'deletes']);

// Multiple User Delete with Checkbox ------------------- End

// Building Layouts With Components          Start

// Acha Ab ye Hamne Components use kara he mltb Website Me navbar he to aik bar banao
// Or har page par show krdo or agar har page ke navbar me se kuch change krna heto
// Wo bhi dynamic hoskhta he Components ka Use krke isliye Componenets use hota he 

Route::view('layoutHome', 'BuildingLayourWithComponents.home');
Route::view('layoutAbout', 'BuildingLayourWithComponents.about');

// Building Layouts With Components          End


//  Layout Using Template Inheritance              Start

Route::view('inheritanceHome', 'LayoutUsingTemplateinheritance.Home');
Route::view('inheritanceAbout', 'LayoutUsingTemplateinheritance.About');

//  Layout Using Template Inheritance              End

// Laravel + Database Handling     End



// Relationsships in Laravel ----------------- Start

Route::get('onetoone', [relationshipsController::class, 'onetoone']);
Route::get('onetomany', [relationshipsController::class, 'onetomany']);
Route::get('many-to-one', [relationshipsController::class, 'manyToone']);
Route::get('many-to-many', [relationshipsController::class, 'manytomany']);

// Relationsships in Laravel ----------------- End


// Send Email --------------- Start

Route::get('sendEmail', [emailController::class, 'sendEmail']);

// Send Email --------------- End



// Fluent String ---------------------- Start

Route::view('Fluent-String', 'Fluent-String.view');

// Fluent String ---------------------- End

// Route Model Binding ----------------- Start

// Acha Route-model-binding ka Kaam kiya he jaab url me koi id ho jese 
// routing-model-binding/1 ab hamhe iska database se nikal kr fetch krna he
// To hame use krte he route-model-binding isme yehe code bhot kaam likha prta he
// Without query likhe ham data fetch krlete hen database se

Route::get("routing-model-binding/{key}", [bindingController::class, 'binding']);

// Route Model Binding ----------------- End

// Inline Blade Template ------------- Start

// Acha Ab inline Blade Template Isliye use hota he Jaab hamhe Kuch aik Line ki 
// Html likhni ho new page me Ab aik Line ki Html likhne ke liye 
// New view file to nhi banane ge isliye yaha use  hota he inline blade template
// Ye kiya krta  he jaab ham controller chalne ke baad kuch aik line ki
// html show krni he hoti he waha ham use Krte hen use Illuminate\Support\Facades\Blade;
// return Blade::render('<h1>{{$Total}} Products</h1>', ['Total' => $total]);
// is se aik line ki html bhi likhdi hamhe or new file bhi nhi bani 

Route::get('inline-blade-template', [inlineBladeController::class, 'productList']);

// Inline Blade Template ------------- End







// Service Layer -------------- Start

// Acha ye servie layer isliye use hota he haam business logic 
// Controller me nhi likhte hen App\Service\FileName.php yaha likhe 
// Is se code clean hojata he Service Ko controller Me inlcude krke use krte hen
Route::get('serviceLayer', [serviceLayerController::class, 'serviceLayer']);
Route::get('serviceLayer2', [serviceLayerController::class, 'serviceLayer2']);

// Service Layer -------------- End



// Api Resource Json ------------- Start

// Acah ye Api resource isliye use hota he jaab hamhe backend se kuch data lena he jese 
// User lena he or hamhe user ki sari details nhi chaiye bss hamhe chaiye 
// Name Email Number leken Student::find(1) row ki puri details lata he
// isliye ham use krte hen Api Resource is he sirf wohi column front-end par behjte
// Hen jiski hamhe zaroort hoti he 
// Acha ye  return StudentResource::collection($students);  table ki har row le ata  he
// Phr is se  wohi column ate hen jo hamne resource me likhe hote he 
// or ye return new StudentResource($students);  sirf aik row ka data leta he 
// or filtering karke response me deta he

Route::get('ApiResourceJson', [ApiResourcejsonController::class, 'json']);

// Api Resource Json ------------- End



// Api Versioning ------------------------------ Start

// Acha Ab ye Api Versioning kya hoti he 
// Ab dekho hamne starting me website banai thk hena ab hamhe iusme kuch update krna he
// To ab purana wale me change nhi krenge q ke kuch user update nhi krte hen to 
// isliye purane wale me se change nhi karenge to ab kya krte  he 
// New Controller banate hen purane wale ko rehne dete hen new bana 
// Ius jo change krna hota he wo krdete hen ham phr hamhe front-end se Api
// Change krni hoti he jese pehle thi localhost/V1/students ab krdenge 
// localhost/V2/students   ab ham route me bhi change krdenge prefix me V2 ke baad
// Students hoto new wala controller call karo purana wala jaab he call hoga jiske pass
// Purani website hogi jo update nhi karega mltb purana kuch change nhi hota he 
// Update krte howe new bnta ab koi aesa user aya jiske pass website update nhi he
// To ye api hogi localhost/V1/students  to route ye hit hoga 
//  Route::prefix('v1')->group(function (){
//     Route::get('/students', [V1StudentController::class, 'V1']);
// });
// Or koi aesa user ayega jiske pass latest version hoga to ye api hogi 
// localhost/V1/students or ye route hit hoga 
// Route::prefix('v2')->group(function (){
//     Route::get('/students', [V2StudentController::class, 'V2']);
// });

Route::prefix('v1')->group(function (){
    Route::get('/students', [V1StudentController::class, 'V1']);
});

Route::prefix('v2')->group(function (){
    Route::get('/students', [V2StudentController::class, 'V2']);
});

// Api Versioning ------------------------------ End



// Redis Learning -------------------------- Start

// Acha Ab ye throttle:5,1 kya hota he Request handle krta he 
// Mltb isko kehte hen Rate Limiting mltb 1 mint  me bss 5 request askhti hen
// is route 5 se zaiyda request ke baad error ajyega 
// 429 Too Many Requests  

Route::middleware('throttle:5,1')->group(function(){

Route::get('Redis', [RedisController::class, 'Redis']);

});
// Redis Learning -------------------------- End



// Transaction ----------------------- Start
Route::get('Transaction', [TransactionController::class, 'Transaction']);
// Transaction ----------------------- End



