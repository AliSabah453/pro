<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class DatabaseSwitcher
{
    /**
     * تغيير قاعدة البيانات بناءً على النطاق.
     *
     * @return void
     */
    public static  function switchDatabaseBasedOnDomain()
    {
        // الحصول على النطاق (Domain)
        $domain = request()->getHost();
        // تعيين قاعدة البيانات بنفس اسم النطاق
        $database = $domain;
        // تحقق من وجود قاعدة البيانات
            // تعيين قاعدة البيانات الجديدة في إعدادات الاتصال
            Config::set('database.connections.mysql.database', $database);
            // تطهير الاتصال الحالي لإعادة الاتصال بقاعدة البيانات الجديدة
            DB::purge('mysql');
            DB::reconnect();

            \Artisan::call('migrate', [
                '--path' => 'database/migrations/Admin',  // حدد المسار الخاص بك هنا
            ]);
       
    }
   
    
}
