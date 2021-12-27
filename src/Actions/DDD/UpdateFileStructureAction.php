<?php

namespace RalphJSmit\TallInstall\Actions\DDD;

use RalphJSmit\Stubs\Stubs;

class UpdateFileStructureAction
{
    public function execute(string $basePath): void
    {
        $stubs = Stubs::dir($basePath)->namespaces([
            'Support' => '/src/Support/',
            'Domain' => '/src/Domain/',
            'App' => '/src/App/',
        ]);

        $stubs->getFile('/app/Console/Kernel.php')->namespace('Support\App\Console');
        $stubs->getFile('/app/Exceptions/Handler.php')->namespace('Support\App\Exceptions');
        $stubs->getFile('/app/Http/Controllers/Controller.php')->namespace('Support\App\Http\Controllers');
        $stubs->getFile('/app/Http/Kernel.php')->namespace('Support\App\Http');
        $stubs->getFile('/app/Http/Middleware/Authenticate.php')->namespace('Support\App\Http\Middleware');
        $stubs->getFile('/app/Http/Middleware/EncryptCookies.php')->namespace('Support\App\Http\Middleware');
        $stubs->getFile('/app/Http/Middleware/PreventRequestsDuringMaintenance.php')->namespace('Support\App\Http\Middleware');
        $stubs->getFile('/app/Http/Middleware/RedirectIfAuthenticated.php')->namespace('Support\App\Http\Middleware');
        $stubs->getFile('/app/Http/Middleware/TrimStrings.php')->namespace('Support\App\Http\Middleware');
        $stubs->getFile('/app/Http/Middleware/TrustHosts.php')->namespace('Support\App\Http\Middleware');
        $stubs->getFile('/app/Http/Middleware/TrustProxies.php')->namespace('Support\App\Http\Middleware');
        $stubs->getFile('/app/Http/Middleware/VerifyCsrfToken.php')->namespace('Support\App\Http\Middleware');
        $stubs->getFile('/app/Providers/AppServiceProvider.php')->namespace('Support\App\Providers');
        $stubs->getFile('/app/Providers/AuthServiceProvider.php')->namespace('Support\App\Providers');
        $stubs->getFile('/app/Providers/BladeServiceProvider.php')->namespace('Support\App\Providers');
        $stubs->getFile('/app/Providers/BroadcastServiceProvider.php')->namespace('Support\App\Providers');
        $stubs->getFile('/app/Providers/EventServiceProvider.php')->namespace('Support\App\Providers');
        $stubs->getFile('/app/Providers/RouteServiceProvider.php')->namespace('Support\App\Providers');

        $stubs->getFile('/app/Models/User.php')->namespace('Support\Models');
        $stubs->getFile('/app/View/Components/Layouts/Admin.php')->namespace('Support\View\Components\Layouts');
        $stubs->getFile('/app/View/Components/Layouts/App.php')->namespace('Support\View\Components\Layouts');
    }
}