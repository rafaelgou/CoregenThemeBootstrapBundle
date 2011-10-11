# Coregen Admin Generator

Symfony2 Admin Generator based on symfony 1.4 version

## deps

    [CoregenAdminGeneratorBundle]
        git=git://github.com/rafaelgou/CoregenAdminGeneratorBundle.git
        target=bundles/Coregen/AdminGeneratorBundle

    [ThemeBootstrapBundle]
        git=git://github.com/rafaelgou/ThemeBootstrapBundle.git
        target=bundles/Theme/BootstrapBundle

    [CoregenThemeBootstrapBundle]
        git=git://github.com/rafaelgou/CoregenThemeBootstrapBundle.git
        target=bundles/Coregen/ThemeBootstrapBundle


(add to deps file and run `./bin/vendors install`)

## AppKernel

      //...

      new Coregen\AdminGeneratorBundle\CoregenAdminGeneratorBundle(),
      new Coregen\ThemeBootstrapBundle\CoregenThemeBootstrapBundle(),
      new Theme\BootstrapBundle\ThemeBootstrapBundle(),

      //...


## autoload

      //...

      'Coregen'            => __DIR__.'/../vendor/bundles',
      'Theme'              => __DIR__.'/../vendor/bundles',

      //...

