<?php

namespace Spatie\LaravelPackageTools\Tests\PackageServiceProviderTests;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\Tests\TestClasses\TestCommand;

beforeAll(function () {
    $package = new Package();
    $package
        ->name('laravel-package-tools')
        ->hasCommand(TestCommand::class);
    PackageServiceProviderConcreteTestCase::package($package);
});

it('can_execute_a_registered_commands',function(){
    $this
        ->artisan('test-command')
        ->assertExitCode(0);
});
