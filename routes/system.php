<?php
use Illuminate\Support\Facades\Route;
use App\Livewire\System\Dashbord;
use App\Livewire\System\Stores;






Route::domain('admin.box.com')->group(function () {
    Route::get('/',Dashbord::class);
    Route::get('stores',Stores::class);

    Route::get('newstore/{name?}', function ($name) { 
        // التأكد من أن اسم قاعدة البيانات غير فارغ
        if (empty($name)) {
            return response()->json(['error' => 'Database name is required'], 400);
        }
    
        try {
            // محاولة إنشاء قاعدة بيانات جديدة إذا لم تكن موجودة
            DB::statement("CREATE DATABASE IF NOT EXISTS `$name`");
    
            // تعيين قاعدة البيانات الجديدة في إعدادات الاتصال
            Config::set('database.connections.mysql.database', $name);
            // تطهير الاتصال الحالي بقاعدة البيانات الجديدة
            DB::purge('mysql');
            DB::reconnect();
    
            // تنفيذ المهاجرات على قاعدة البيانات الجديدة
            Artisan::call('migrate', [
                '--path' => 'database/migrations',  // حدد المسار الخاص بك هنا
            ]);
    
            // العودة إلى القاعدة الأصلية (مثل 'admin.box.com')
            Config::set('database.connections.mysql.database', 'admin.box.com');
            DB::purge('mysql');
            DB::reconnect();
    
            // إظهار المستخدمين من قاعدة البيانات الأصلية
            return dd(User::all());
    
        } catch (\Exception $e) {
            // التعامل مع الخطأ في حال فشل أي جزء من العملية
            return response()->json(['error' => $e->getMessage()], 500);
        }
    });
    });