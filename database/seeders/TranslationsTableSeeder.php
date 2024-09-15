<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Translation;

class TranslationsTableSeeder extends Seeder
{
    public function run()
    {
        $translations = [
            ['key' => 'hero_title', 'locale' => 'en', 'value' => 'Building Tomorrow’s Digital Solutions, Today.'],
            ['key' => 'hero_title', 'locale' => 'ar', 'value' => 'بناء حلول رقمية للمستقبل، اليوم.'],
            ['key' => 'lead_paragraph', 'locale' => 'en', 'value' => 'We specialize in crafting advanced digital solutions tailored to your business needs. From innovative mobile apps to robust web applications, we drive digital transformation and help businesses thrive in the modern landscape.'],
            ['key' => 'lead_paragraph', 'locale' => 'ar', 'value' => 'نحن متخصصون في إنشاء حلول رقمية متقدمة مصممة وفقًا لاحتياجات عملك. من التطبيقات المحمولة المبتكرة إلى تطبيقات الويب القوية، نقود التحول الرقمي ونساعد الشركات على الازدهار في المشهد العصري.'],
        ];

        foreach ($translations as $translation) {
            Translation::create($translation);
        }
    }
}


