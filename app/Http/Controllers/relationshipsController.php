<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sellers;
use App\Models\products;
use App\Models\student;
use App\Models\courses;

class relationshipsController extends Controller
{
    // Ye one to one Relationship Ka code he ------------------ Start
    // Acha ab isme sellers me id 1 hogi or products me seller_id i hogi sirf aik row
    // Ka data ayega q ke isme One to one relationship he or isme sirf Jo table jese 
    // has->one('products') hoi he sirf iuska data ayega bss iska baki code models seller
    // Me he 
    function onetoone(){
        return sellers::find(1)->products;
    }
    // Ye one to one Relationship Ka code he ------------------ End

    // Ye one to Many Relationship Ka code he ------------------ Start

    // Acha One to many me kiya hota he jese ke seller me id 1 he or products me 
    // seller_id me 1 wali 3 row to hasMany 3 tenno row lekar ayega 
    // Or relationships me data ius he table ka ata he jo hasone ya hasmany ke ander
    // Ho bss 

    // Acha yejo with hena ye he Eager loading ab kya hota he hamne relation banya 
    // Hamhe chaiye saree seller or iunki products to agar ham eager loading use nhi krte
    // To pehle seller ate phr har seller ki products lane ke liye alag query chlti
    // mltb saab seller 1 query me agaye leken har seller ki product ki row hen 100
    // to without eager loading 101 row chalengi or agar  with use krenge to 
    // Sari row aik query me ayengi aese [1,2,3,4,5]  mtlb eager loading system
    // Ko fast krne ke lye hota he 

    function onetomany(){
        return sellers::with('productsMany')->get();
    }

    // Ye one to Many Relationship Ka code he ------------------ End


    // Many to One Relationship Code -------------- Start

    // Acha jaab hamhe foregin key ka use krke primary key wali row nikalni hoti heto
    // Ham use krte hen belongsTo(primary key wali table)
    // Or agar hamhe primary key or foregin key dono table ka data nikalna ho aik saat
    // to use krte hen ::with('tableName')->get()

    function manyToone(){
        return products::find(2)->manytoone;

        // Acha ab  hamhe Data nikalna he jese products me seller_id or seller me
        // Primary id same ho wo table merge krke show karo to use hota he
        // with('function name jo models me he')->get(); baki seller_id models me likhi he
        
        // return products::with('manytoone')->get();
    }

    // Many to One Relationship Code -------------- End


    // Many to Many Relationship Code ----------------- Start

    // Acha Many to Many isliye use hota jaab dono tables aik dusre se bhot ziyada
    // Connected ho jese aik student table he iusme studens bhot ziayda hen 
    // Or dusri he Courses table iusme bhi bhot sare courses hen 
    // Mtlb aik student bhot sare courses le skhta he or aik course ko bhot sare student 
    // Le skhte hen isliye ham dono ki primary key ko aik Table me foregin key bana kar 
    // Rkhte hen student_courses ab isme hamhe find krna he php course kis kis ne khareeda he
    // TO hame kiya krenge belongsToMany use krenge or student table or in dono table ki
    //  bech wali table jisme honge dono table ki foregin key iunko connect krenge 
    //   return $this->belongsToMany('App\Models\student', 'courses_student', 'course_id','student_id');
    // Aese phr kiya hoga neche dekho hamne kaha course 1 find karo course 1 find howa 
    // Phr ye gaya bech wali table me waha student_id or Course_id dono hen ab isne kari 
    // Course_id find phr iuske saat student_id bhi phr ye student_id se student table me
    // Gaya or student table ka data le aya simple :

    function manytomany(){
        return courses::find(1)->student;
    }

    // Many to Many Relationship Code ----------------- End
}
