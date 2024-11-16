<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'title' => 'Веб-разработка',
                'description' => 'Мы создаем современные и адаптивные сайты.',
                'details' => 'От разработки простых лендингов до сложных интернет-магазинов и корпоративных порталов.',
                'slug' => 'web-development',
            ],
            [
                'title' => 'Мобильные приложения',
                'description' => 'Мы разрабатываем мобильные приложения для iOS и Android.',
                'details' => 'От концепции до выпуска в App Store и Google Play.',
                'slug' => 'mobile-applications',
            ],
            [
                'title' => 'SEO-оптимизация',
                'description' => 'Оптимизируем сайты для повышения их видимости в поисковых системах.',
                'details' => 'Мы проведем анализ вашего сайта и сделаем его более привлекательным для поисковых систем.',
                'slug' => 'seo',
            ],
            [
                'title' => 'Разработка корпоративных порталов',
                'description' => 'Создаем масштабируемые корпоративные порталы для бизнеса.',
                'details' => 'Мы поможем внедрить эффективные решения для автоматизации бизнес-процессов.',
                'slug' => 'corporate-portals',
            ],
            [
                'title' => 'UX/UI Дизайн',
                'description' => 'Создаем интуитивно понятный и удобный дизайн для вашего продукта.',
                'details' => 'Мы проектируем интерфейсы, которые делают использование вашего продукта простым и приятным.',
                'slug' => 'ux-ui-design',
            ],
            [
                'title' => 'Аналитика и бизнес-решения',
                'description' => 'Предоставляем решения на основе аналитики данных для вашего бизнеса.',
                'details' => 'Используем современные методы анализа данных для оптимизации работы вашего бизнеса.',
                'slug' => 'analytics-solutions',
            ],
            [
                'title' => 'Интернет-маркетинг',
                'description' => 'Создаем стратегии для продвижения вашего бизнеса в интернете.',
                'details' => 'Мы поможем вам выбрать и настроить каналы для привлечения новых клиентов.',
                'slug' => 'internet-marketing',
            ],
            [
                'title' => 'Поддержка и обслуживание сайтов',
                'description' => 'Обеспечиваем техническую поддержку и регулярное обновление вашего сайта.',
                'details' => 'Предоставляем услуги по поддержке сайтов, включая регулярные обновления и решение проблем.',
                'slug' => 'website-maintenance',
            ]
        ]);
    }
}
