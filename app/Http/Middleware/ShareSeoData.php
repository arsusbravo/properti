<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\Response;

class ShareSeoData
{
    /**
     * SEO data for static routes (keyed by route name).
     */
    private array $staticSeo = [
        'home' => [
            'title' => 'Fasilitator Properti Terpercaya di Jakarta - Toto Prime Realty',
            'description' => 'Platform fasilitator properti terpercaya di Jakarta. Temukan rumah, apartemen, tanah, dan properti lainnya dengan transaksi yang aman dan transparan.',
            'keywords' => 'properti jakarta, jual beli rumah, fasilitator properti, rumah dijual jakarta, apartemen jakarta, tanah dijual',
            'type' => 'website',
            'jsonLd' => [
                ['@context' => 'https://schema.org', '@type' => 'Organization', 'name' => 'Toto Prime Realty', 'description' => 'Platform fasilitator properti terpercaya di Jakarta'],
                ['@context' => 'https://schema.org', '@type' => 'WebSite', 'name' => 'Toto Prime Realty', 'potentialAction' => ['@type' => 'SearchAction', 'target' => '/properti?search={search_term_string}', 'query-input' => 'required name=search_term_string']],
            ],
        ],
        'about' => [
            'title' => 'Tentang Kami - Toto Prime Realty',
            'description' => 'Kenali Toto Prime Realty — platform fasilitator properti terpercaya di Jakarta yang membantu transaksi dari pencarian hingga serah terima sertifikat.',
            'keywords' => 'tentang toto prime realty, fasilitator properti jakarta, agen properti terpercaya',
            'type' => 'website',
        ],
        'services' => [
            'title' => 'Layanan Kami - Toto Prime Realty',
            'description' => 'Layanan fasilitasi properti end-to-end dari Toto Prime Realty: pencarian, viewing, negosiasi, verifikasi dokumen, proses notaris, hingga serah terima.',
            'keywords' => 'layanan properti, fasilitasi jual beli properti, notaris properti jakarta',
            'type' => 'website',
        ],
        'contact' => [
            'title' => 'Hubungi Kami - Toto Prime Realty',
            'description' => 'Hubungi Toto Prime Realty untuk konsultasi properti di Jakarta. Telepon, WhatsApp, atau email.',
            'keywords' => 'kontak toto prime realty, konsultasi properti jakarta',
            'type' => 'website',
            'jsonLd' => [
                '@context' => 'https://schema.org',
                '@type' => 'LocalBusiness',
                'name' => 'Toto Prime Realty',
                'description' => 'Platform fasilitator properti terpercaya di Jakarta',
                'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Jakarta', 'addressCountry' => 'ID'],
                'telephone' => '0811 8806 2368',
                'email' => 'totoprimerealty@gmail.com',
                'openingHoursSpecification' => [
                    ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'], 'opens' => '09:00', 'closes' => '17:00'],
                    ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => ['Saturday'], 'opens' => '09:00', 'closes' => '13:00'],
                ],
            ],
        ],
        'properties.index' => [
            'title' => 'Cari Properti - Toto Prime Realty',
            'description' => 'Temukan properti terbaik di Jakarta: rumah, apartemen, tanah, ruko, dan lainnya. Filter berdasarkan tipe, harga, lokasi, dan spesifikasi.',
            'keywords' => 'properti dijual jakarta, rumah dijual, apartemen jakarta, cari properti, tanah dijual jakarta',
            'type' => 'website',
        ],
    ];

    public function handle(Request $request, Closure $next): Response
    {
        $routeName = $request->route()?->getName();

        if ($routeName && isset($this->staticSeo[$routeName])) {
            $seo = $this->staticSeo[$routeName];

            // Share with Inertia for Inertia pages
            Inertia::share('seo', $seo);

            // Share with Blade views for static pages
            view()->share('seo', $seo);
        }

        return $next($request);
    }
}
