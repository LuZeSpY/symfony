<?php
// echo phpinfo();

use App\Kernel;
use Symfony\Bundle\MakerBundle\MakerBundle;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
