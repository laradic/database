<?php
/**
 * Part of the Laradic packages.
 * MIT License and copyright information bundled with this package in the LICENSE file.
 *
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
namespace Laradic\Database;

use Laradic\Config\Traits\ConfigProviderTrait;
use Laradic\Support\ServiceProvider;

/**
 * Class DatabaseServiceProvider
 *
 * @package Laradic\Database
 */
class DatabaseServiceProvider extends ServiceProvider
{
    use ConfigProviderTrait;
    protected $providers = [
        'Laradic\Database\Providers\SluggableServiceProvider'
    ];

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->addConfigComponent('laradic/database', 'laradic/database', __DIR__ . '/../resources/config');
    }
}
