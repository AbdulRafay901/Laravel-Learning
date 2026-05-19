


<!-- Acha migration ka kaam hota he Ham laravel me he commnd se database ki table banate hen
  php artisan make:migration migration_table  ye table ban gayi ab isko database
  me Dalne ke liye ke 
  php artisan migrate use karo 
  or column bhi laravel me he bnte hen 

  acha or Jo table ham laravel se migarte krke banate hen wo delete krni hoto ye commnd 
  Use hoti he 
  php artisan migrate:reset  sirf wohi table delete hongi jo hamne laravel se banai thin

  Acha or php artisan migrate:roleback kiya krta he hamne jo last migate me table banai hoti he
  ye Wo table delete krdeta bss jo last migrate me bani ho bss bahle 1 ho 2 ya 10 ho

  Acha or php artisan migrate:rollback --step 2  ye kiya krta he jese hamne 10 bar migarte
  Kara to ab hamhe to hamhe 3 last migrate table delete krni heto ham ye use krte hen
  or step ke agye likh dete hen jitne migrate/table delete krni hon

  Acha or php artisan migrate:refresh kiya krta he pehle wali sari delete migration
  Ko return krdeta hen mltb reset howi sari table wapis ajatai hen 

  Acha
   php artisan migrate --path=/database/migration/tableName
   Ye kiya krta he ab jese hamne sari migration table reset krdi hen ab iusme se 
   Aik table wapis chaiye to ye commnd chlti he 