<?php return array (
  'Caches' => 
  array (
    'Eel_Expression_Code' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\StringFrontend',
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Default' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\VariableFrontend',
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
      'backendOptions' => 
      array (
        'defaultLifetime' => 0,
      ),
      'persistent' => false,
    ),
    'Flow_Cache_ResourceFiles' => 
    array (
    ),
    'Flow_Core' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\StringFrontend',
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_I18n_AvailableLocalesCache' => 
    array (
    ),
    'Flow_I18n_XmlModelCache' => 
    array (
    ),
    'Flow_I18n_Cldr_CldrModelCache' => 
    array (
    ),
    'Flow_I18n_Cldr_Reader_DatesReaderCache' => 
    array (
    ),
    'Flow_I18n_Cldr_Reader_NumbersReaderCache' => 
    array (
    ),
    'Flow_I18n_Cldr_Reader_PluralsReaderCache' => 
    array (
    ),
    'Flow_I18n_Cldr_Reader_CurrencyReaderCache' => 
    array (
    ),
    'Flow_Monitor' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\StringFrontend',
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_Mvc_Routing_Route' => 
    array (
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
    ),
    'Flow_Mvc_Routing_Resolve' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\VariableFrontend',
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
    ),
    'Flow_Mvc_ViewConfigurations' => 
    array (
    ),
    'Flow_Object_Classes' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\PhpFrontend',
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_Object_Configuration' => 
    array (
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_Persistence_Doctrine' => 
    array (
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_Persistence_Doctrine_Results' => 
    array (
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
      'backendOptions' => 
      array (
        'defaultLifetime' => 60,
      ),
    ),
    'Flow_Persistence_Doctrine_SecondLevel' => 
    array (
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_Reflection_Status' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\StringFrontend',
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_Reflection_CompiletimeData' => 
    array (
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_Reflection_RuntimeData' => 
    array (
    ),
    'Flow_Reflection_RuntimeClassSchemata' => 
    array (
    ),
    'Flow_Resource_Status' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\StringFrontend',
    ),
    'Flow_Security_Authorization_Privilege_Method' => 
    array (
    ),
    'Flow_Security_Cryptography_RSAWallet' => 
    array (
      'backendOptions' => 
      array (
        'defaultLifetime' => 30,
      ),
    ),
    'Flow_Security_Cryptography_HashService' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\StringFrontend',
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
      'persistent' => true,
      'backendOptions' => 
      array (
        'defaultLifetime' => 0,
      ),
    ),
    'Flow_Session_MetaData' => 
    array (
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
      'persistent' => true,
    ),
    'Flow_Session_Storage' => 
    array (
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
      'persistent' => true,
    ),
    'Flow_Aop_RuntimeExpressions' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\StringFrontend',
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_PropertyMapper' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\VariableFrontend',
      'backend' => 'Neos\\Cache\\Backend\\NullBackend',
    ),
    'Fluid_TemplateCache' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\PhpFrontend',
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
    ),
    'Neos_Media_ImageSize' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\VariableFrontend',
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
      'backendOptions' => 
      array (
        'defaultLifetime' => 0,
      ),
    ),
    'Neos_Fusion_Content' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\StringFrontend',
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
    ),
    'Neos_Fusion_ObjectTree' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\VariableFrontend',
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
    ),
    'Neos_Fusion_ParsePartials' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\VariableFrontend',
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
    ),
    'Neos_Neos_Configuration_Version' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\StringFrontend',
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
    ),
    'Neos_Neos_Fusion' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\VariableFrontend',
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
    ),
    'Neos_Neos_XliffToJsonTranslations' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\VariableFrontend',
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
    ),
    'Neos_Neos_NodeType_Schema' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\VariableFrontend',
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
    ),
    'Neos_Neos_LoginTokenCache' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\StringFrontend',
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
      'backendOptions' => 
      array (
        'defaultLifetime' => 30,
      ),
    ),
  ),
  'Objects' => 
  array (
    'Neos.Http.Factories' => 
    array (
    ),
    'Neos.Diff' => 
    array (
    ),
    'Neos.Eel' => 
    array (
      'Neos\\Eel\\CompilingEvaluator' => 
      array (
        'scope' => 'singleton',
        'properties' => 
        array (
          'expressionCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Eel_Expression_Code',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Eel\\EelEvaluatorInterface' => 
      array (
        'className' => 'Neos\\Eel\\CompilingEvaluator',
      ),
      'Neos\\Eel\\FlowQuery\\OperationResolverInterface' => 
      array (
        'className' => 'Neos\\Eel\\FlowQuery\\OperationResolver',
      ),
    ),
    'Neos.Flow' => 
    array (
      'DateTime' => 
      array (
        'scope' => 'prototype',
        'autowiring' => 'off',
      ),
      'Composer\\Autoload\\ClassLoader' => 
      array (
        'scope' => 'singleton',
        'autowiring' => 'off',
      ),
      'Neos\\Cache\\CacheFactoryInterface' => 
      array (
        'className' => 'Neos\\Flow\\Cache\\CacheFactory',
        'arguments' => 
        array (
          1 => 
          array (
            'setting' => 'Neos.Flow.context',
          ),
          3 => 
          array (
            'setting' => 'Neos.Flow.cache.applicationIdentifier',
          ),
        ),
      ),
      'Neos\\Flow\\Cache\\CacheFactory' => 
      array (
        'arguments' => 
        array (
          1 => 
          array (
            'setting' => 'Neos.Flow.context',
          ),
          3 => 
          array (
            'setting' => 'Neos.Flow.cache.applicationIdentifier',
          ),
        ),
      ),
      'Neos\\Flow\\Cache\\CacheManager' => 
      array (
        'properties' => 
        array (
          'logger' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Log\\PsrLoggerFactoryInterface',
              'factoryMethodName' => 'get',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'systemLogger',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\I18n\\Service' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_I18n_AvailableLocalesCache',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\I18n\\Cldr\\CldrModel' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_I18n_Cldr_CldrModelCache',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\I18n\\Xliff\\Service\\XliffFileProvider' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_I18n_XmlModelCache',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\I18n\\Cldr\\Reader\\DatesReader' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_I18n_Cldr_Reader_DatesReaderCache',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\I18n\\Cldr\\Reader\\NumbersReader' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_I18n_Cldr_Reader_NumbersReaderCache',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\I18n\\Cldr\\Reader\\PluralsReader' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_I18n_Cldr_Reader_PluralsReaderCache',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\I18n\\Cldr\\Reader\\CurrencyReader' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_I18n_Cldr_Reader_CurrencyReaderCache',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Log\\Backend\\FileBackend' => 
      array (
        'autowiring' => 'off',
      ),
      'Neos\\Flow\\Log\\Backend\\NullBackend' => 
      array (
        'autowiring' => 'off',
      ),
      'Neos\\Flow\\Log\\ThrowableStorageInterface' => 
      array (
        'scope' => 'singleton',
        'className' => 'Neos\\Flow\\Log\\ThrowableStorage\\FileStorage',
      ),
      'Neos\\Flow\\Log\\PsrLoggerFactory' => 
      array (
        'scope' => 'singleton',
        'autowiring' => 'off',
      ),
      'Neos\\Flow\\Log\\PsrLoggerFactoryInterface' => 
      array (
        'className' => 'Neos\\Flow\\Log\\PsrLoggerFactory',
      ),
      'Neos.Flow:SystemLogger' => 
      array (
        'className' => 'Psr\\Log\\LoggerInterface',
        'scope' => 'singleton',
        'factoryObjectName' => 'Neos\\Flow\\Log\\PsrLoggerFactoryInterface',
        'factoryMethodName' => 'get',
        'arguments' => 
        array (
          1 => 
          array (
            'value' => 'systemLogger',
          ),
        ),
      ),
      'Neos.Flow:SecurityLogger' => 
      array (
        'className' => 'Psr\\Log\\LoggerInterface',
        'scope' => 'singleton',
        'factoryObjectName' => 'Neos\\Flow\\Log\\PsrLoggerFactoryInterface',
        'factoryMethodName' => 'get',
        'arguments' => 
        array (
          1 => 
          array (
            'value' => 'securityLogger',
          ),
        ),
      ),
      'Neos.Flow:SqlLogger' => 
      array (
        'className' => 'Psr\\Log\\LoggerInterface',
        'scope' => 'singleton',
        'factoryObjectName' => 'Neos\\Flow\\Log\\PsrLoggerFactoryInterface',
        'factoryMethodName' => 'get',
        'arguments' => 
        array (
          1 => 
          array (
            'value' => 'sqlLogger',
          ),
        ),
      ),
      'Neos.Flow:I18nLogger' => 
      array (
        'className' => 'Psr\\Log\\LoggerInterface',
        'scope' => 'singleton',
        'factoryObjectName' => 'Neos\\Flow\\Log\\PsrLoggerFactoryInterface',
        'factoryMethodName' => 'get',
        'arguments' => 
        array (
          1 => 
          array (
            'value' => 'i18nLogger',
          ),
        ),
      ),
      'Psr\\Log\\LoggerInterface' => 
      array (
        'scope' => 'singleton',
        'factoryObjectName' => 'Neos\\Flow\\Log\\PsrLoggerFactoryInterface',
        'factoryMethodName' => 'get',
        'arguments' => 
        array (
          1 => 
          array (
            'value' => 'systemLogger',
          ),
        ),
      ),
      'Neos\\Flow\\Monitor\\ChangeDetectionStrategy\\ModificationTimeStrategy' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Monitor',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Monitor\\FileMonitor' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Monitor',
                ),
              ),
            ),
          ),
          'logger' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Log\\PsrLoggerFactoryInterface',
              'factoryMethodName' => 'get',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'systemLogger',
                ),
              ),
            ),
          ),
        ),
      ),
      'Psr\\Http\\Client\\ClientInterface' => 
      array (
        'className' => 'Neos\\Flow\\Http\\Client\\Browser',
      ),
      'Neos\\Flow\\Http\\Client\\RequestEngineInterface' => 
      array (
        'className' => 'Neos\\Flow\\Http\\Client\\CurlEngine',
      ),
      'Psr\\Http\\Message\\ServerRequestFactoryInterface' => 
      array (
        'className' => 'Neos\\Http\\Factories\\ServerRequestFactory',
      ),
      'Neos\\Http\\Factories\\ServerRequestFactory' => 
      array (
        'arguments' => 
        array (
          2 => 
          array (
            'setting' => 'Neos.Flow.http.serverRequestDefaults.userAgent',
          ),
          3 => 
          array (
            'setting' => 'Neos.Flow.http.serverRequestDefaults.scriptPath',
          ),
          4 => 
          array (
            'setting' => 'Neos.Flow.http.serverRequestDefaults.protocolVersion',
          ),
        ),
      ),
      'Psr\\Http\\Message\\RequestFactoryInterface' => 
      array (
        'className' => 'Neos\\Http\\Factories\\RequestFactory',
      ),
      'Psr\\Http\\Message\\ResponseFactoryInterface' => 
      array (
        'className' => 'Neos\\Http\\Factories\\ResponseFactory',
      ),
      'Psr\\Http\\Message\\StreamFactoryInterface' => 
      array (
        'className' => 'Neos\\Http\\Factories\\StreamFactory',
      ),
      'Psr\\Http\\Message\\UploadedFileFactoryInterface' => 
      array (
        'className' => 'Neos\\Http\\Factories\\UploadedFileFactory',
      ),
      'Psr\\Http\\Message\\UriFactoryInterface' => 
      array (
        'className' => 'Neos\\Http\\Factories\\UriFactory',
      ),
      'Neos\\Flow\\Http\\Middleware\\MiddlewaresChain' => 
      array (
        'factoryObjectName' => 'Neos\\Flow\\Http\\Middleware\\MiddlewaresChainFactory',
        'arguments' => 
        array (
          1 => 
          array (
            'setting' => 'Neos.Flow.http.middlewares',
          ),
        ),
      ),
      'Neos\\Flow\\Mvc\\Routing\\RouterInterface' => 
      array (
        'className' => 'Neos\\Flow\\Mvc\\Routing\\Router',
      ),
      'Neos\\Flow\\Mvc\\Routing\\RouterCachingService' => 
      array (
        'properties' => 
        array (
          'routeCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Mvc_Routing_Route',
                ),
              ),
            ),
          ),
          'resolveCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Mvc_Routing_Resolve',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Mvc\\ViewConfigurationManager' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Mvc_ViewConfigurations',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface' => 
      array (
        'className' => 'Neos\\Flow\\ObjectManagement\\ObjectManager',
        'scope' => 'singleton',
        'autowiring' => 'off',
      ),
      'Neos\\Flow\\ObjectManagement\\ObjectManager' => 
      array (
        'autowiring' => 'off',
      ),
      'Neos\\Flow\\ObjectManagement\\CompileTimeObjectManager' => 
      array (
        'autowiring' => 'off',
      ),
      'Doctrine\\ORM\\EntityManagerInterface' => 
      array (
        'scope' => 'singleton',
        'factoryObjectName' => 'Neos\\Flow\\Persistence\\Doctrine\\EntityManagerFactory',
      ),
      'Doctrine\\DBAL\\Connection' => 
      array (
        'scope' => 'singleton',
        'factoryObjectName' => 'Neos\\Flow\\Persistence\\Doctrine\\ConnectionFactory',
      ),
      'Neos\\Flow\\Persistence\\PersistenceManagerInterface' => 
      array (
        'className' => 'Neos\\Flow\\Persistence\\Doctrine\\PersistenceManager',
      ),
      'Neos\\Flow\\Persistence\\Doctrine\\Logging\\SqlLogger' => 
      array (
        'properties' => 
        array (
          'logger' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Log\\PsrLoggerFactoryInterface',
              'factoryMethodName' => 'get',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'sqlLogger',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Property\\PropertyMapper' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_PropertyMapper',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Reflection\\ReflectionService' => 
      array (
        'factoryObjectName' => 'Neos\\Flow\\Reflection\\ReflectionServiceFactory',
      ),
      'Neos\\Flow\\ResourceManagement\\ResourceManager' => 
      array (
        'properties' => 
        array (
          'statusCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Resource_Status',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Security\\Authentication\\AuthenticationManagerInterface' => 
      array (
        'className' => 'Neos\\Flow\\Security\\Authentication\\AuthenticationProviderManager',
      ),
      'Neos\\Flow\\Security\\Cryptography\\RsaWalletServiceInterface' => 
      array (
        'className' => 'Neos\\Flow\\Security\\Cryptography\\RsaWalletServicePhp',
        'scope' => 'singleton',
        'properties' => 
        array (
          'keystoreCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Security_Cryptography_RSAWallet',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Security\\Authorization\\PrivilegeManagerInterface' => 
      array (
        'className' => 'Neos\\Flow\\Security\\Authorization\\PrivilegeManager',
      ),
      'Neos\\Flow\\Security\\Authorization\\FirewallInterface' => 
      array (
        'className' => 'Neos\\Flow\\Security\\Authorization\\FilterFirewall',
      ),
      'Neos\\Flow\\Security\\Cryptography\\HashService' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Security_Cryptography_HashService',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Security\\Cryptography\\Pbkdf2HashingStrategy' => 
      array (
        'scope' => 'singleton',
        'arguments' => 
        array (
          1 => 
          array (
            'setting' => 'Neos.Flow.security.cryptography.Pbkdf2HashingStrategy.dynamicSaltLength',
          ),
          2 => 
          array (
            'setting' => 'Neos.Flow.security.cryptography.Pbkdf2HashingStrategy.iterationCount',
          ),
          3 => 
          array (
            'setting' => 'Neos.Flow.security.cryptography.Pbkdf2HashingStrategy.derivedKeyLength',
          ),
          4 => 
          array (
            'setting' => 'Neos.Flow.security.cryptography.Pbkdf2HashingStrategy.algorithm',
          ),
        ),
      ),
      'Neos\\Flow\\Security\\Cryptography\\BCryptHashingStrategy' => 
      array (
        'scope' => 'singleton',
        'arguments' => 
        array (
          1 => 
          array (
            'setting' => 'Neos.Flow.security.cryptography.BCryptHashingStrategy.cost',
          ),
        ),
      ),
      'Neos\\Flow\\Security\\Authorization\\Privilege\\Method\\MethodTargetExpressionParser' => 
      array (
        'scope' => 'singleton',
      ),
      'Neos\\Flow\\Security\\Authorization\\Privilege\\Method\\MethodPrivilegePointcutFilter' => 
      array (
        'scope' => 'singleton',
        'properties' => 
        array (
          'objectManager' => 
          array (
            'object' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
          ),
        ),
      ),
      'Neos\\Flow\\Security\\Authorization\\Privilege\\Entity\\Doctrine\\EntityPrivilegeExpressionEvaluator' => 
      array (
        'properties' => 
        array (
          'expressionCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Eel_Expression_Code',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Security\\Authentication\\Provider\\TestingProvider' => 
      array (
        'arguments' => 
        array (
          1 => 
          array (
            'value' => 'TestingProvider',
          ),
        ),
      ),
      'Neos\\Flow\\Security\\Authentication\\Token\\UsernamePasswordTokenInterface' => 
      array (
        'className' => 'Neos\\Flow\\Security\\Authentication\\Token\\UsernamePassword',
      ),
      'Neos\\Flow\\Security\\Authentication\\Token\\PasswordTokenInterface' => 
      array (
        'className' => 'Neos\\Flow\\Security\\Authentication\\Token\\PasswordToken',
      ),
      'Neos\\Flow\\Session\\SessionInterface' => 
      array (
        'factoryObjectName' => 'Neos\\Flow\\Session\\SessionManagerInterface',
        'factoryMethodName' => 'getCurrentSession',
      ),
      'Neos\\Flow\\Session\\Session' => 
      array (
        'properties' => 
        array (
          'metaDataCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Session_MetaData',
                ),
              ),
            ),
          ),
          'storageCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Session_Storage',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Session\\SessionManagerInterface' => 
      array (
        'className' => 'Neos\\Flow\\Session\\SessionManager',
      ),
      'Neos\\Flow\\Session\\SessionManager' => 
      array (
        'properties' => 
        array (
          'metaDataCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Session_MetaData',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Utility\\SchemaGenerator' => 
      array (
        'scope' => 'singleton',
      ),
      'Neos\\Utility\\SchemaValidator' => 
      array (
        'scope' => 'singleton',
      ),
    ),
    'Neos.Form' => 
    array (
      'Neos\\Form\\Persistence\\FormPersistenceManagerInterface' => 
      array (
        'className' => 'Neos\\Form\\Persistence\\YamlPersistenceManager',
      ),
    ),
    'Neos.Twitter.Bootstrap' => 
    array (
    ),
    'Neos.Setup' => 
    array (
    ),
    'Neos.Imagine' => 
    array (
      'Imagine\\Image\\ImagineInterface' => 
      array (
        'factoryObjectName' => 'Neos\\Imagine\\ImagineFactory',
      ),
    ),
    'Neos.FluidAdaptor' => 
    array (
      'Neos\\FluidAdaptor\\Core\\Cache\\CacheAdaptor' => 
      array (
        'properties' => 
        array (
          'flowCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Fluid_TemplateCache',
                ),
              ),
            ),
          ),
        ),
      ),
      'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\TagBuilder' => 
      array (
        'scope' => 'prototype',
      ),
      'Neos\\FluidAdaptor\\Core\\ViewHelper\\AbstractViewHelper' => 
      array (
        'properties' => 
        array (
          'logger' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Log\\PsrLoggerFactoryInterface',
              'factoryMethodName' => 'get',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'systemLogger',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.Media' => 
    array (
      'Neos\\Media\\Domain\\Service\\ImageService' => 
      array (
        'properties' => 
        array (
          'imagineService' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Imagine\\ImagineFactory',
            ),
          ),
          'imageSizeCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Neos_Media_ImageSize',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Media\\Domain\\Model\\ImageInterface' => 
      array (
        'className' => 'Neos\\Media\\Domain\\Model\\Image',
      ),
      'Neos\\Media\\Domain\\Strategy\\AssetModelMappingStrategyInterface' => 
      array (
        'className' => 'Neos\\Media\\Domain\\Strategy\\ConfigurationAssetModelMappingStrategy',
      ),
    ),
    'Neos.ContentRepository' => 
    array (
      'Neos\\ContentRepository\\Domain\\Repository\\ContentDimensionRepository' => 
      array (
        'properties' => 
        array (
          'dimensionsConfiguration' => 
          array (
            'setting' => 'Neos.ContentRepository.contentDimensions',
          ),
        ),
      ),
      'Neos\\ContentRepository\\Domain\\Service\\PublishingServiceInterface' => 
      array (
        'className' => 'Neos\\ContentRepository\\Domain\\Service\\PublishingService',
      ),
      'Neos\\ContentRepository\\Domain\\Model\\NodeInterface' => 
      array (
        'className' => 'Neos\\ContentRepository\\Domain\\Model\\Node',
      ),
      'Neos\\ContentRepository\\Domain\\Service\\ConfigurationContentDimensionPresetSource' => 
      array (
        'properties' => 
        array (
          'configuration' => 
          array (
            'setting' => 'Neos.ContentRepository.contentDimensions',
          ),
        ),
      ),
      'Neos\\ContentRepository\\Domain\\Service\\ContentDimensionPresetSourceInterface' => 
      array (
        'className' => 'Neos\\ContentRepository\\Domain\\Service\\ConfigurationContentDimensionPresetSource',
      ),
      'Neos\\ContentRepository\\Domain\\Model\\NodeLabelGeneratorInterface' => 
      array (
        'className' => 'Neos\\ContentRepository\\Domain\\Model\\ExpressionBasedNodeLabelGenerator',
      ),
      'Neos\\ContentRepository\\Domain\\Service\\NodeServiceInterface' => 
      array (
        'className' => 'Neos\\ContentRepository\\Domain\\Service\\NodeService',
      ),
    ),
    'Neos.Party' => 
    array (
    ),
    'Neos.Fusion' => 
    array (
      'Neos\\Fusion\\Core\\Cache\\ContentCache' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Neos_Fusion_Content',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Fusion\\Aspects\\FusionCachingAspect' => 
      array (
        'properties' => 
        array (
          'fusionCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Neos_Fusion_ObjectTree',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Fusion\\Core\\Cache\\ParserCache' => 
      array (
        'properties' => 
        array (
          'parsePartialsCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Neos_Fusion_ParsePartials',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.Fusion.Afx' => 
    array (
    ),
    'Neos.Fusion.Form' => 
    array (
    ),
    'Neos.RedirectHandler' => 
    array (
    ),
    'Neos.Neos.Ui.Compiled' => 
    array (
    ),
    'Neos.RedirectHandler.DatabaseStorage' => 
    array (
    ),
    'Neos.Behat' => 
    array (
    ),
    'Neos.Kickstarter' => 
    array (
    ),
    'Neos.SiteKickstarter' => 
    array (
    ),
    'Neos.Media.Browser' => 
    array (
    ),
    'Neos.Neos' => 
    array (
      'Neos\\Neos\\ViewHelpers\\Backend\\ConfigurationCacheVersionViewHelper' => 
      array (
        'properties' => 
        array (
          'configurationCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Neos_Neos_Configuration_Version',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\ContentRepository\\Domain\\Service\\ContextFactoryInterface' => 
      array (
        'className' => 'Neos\\Neos\\Domain\\Service\\ContentContextFactory',
      ),
      'Neos\\ContentRepository\\Domain\\Service\\PublishingServiceInterface' => 
      array (
        'className' => 'Neos\\Neos\\Service\\PublishingService',
      ),
      'Neos\\Neos\\Aspects\\FusionCachingAspect' => 
      array (
        'properties' => 
        array (
          'fusionCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Neos_Neos_Fusion',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\ContentRepository\\Domain\\Service\\ContentDimensionPresetSourceInterface' => 
      array (
        'className' => 'Neos\\Neos\\Domain\\Service\\ConfigurationContentDimensionPresetSource',
      ),
      'Neos\\ContentRepository\\Domain\\Service\\NodeServiceInterface' => 
      array (
        'className' => 'Neos\\Neos\\TYPO3CR\\NeosNodeService',
      ),
      'Neos\\Neos\\TYPO3CR\\NeosNodeServiceInterface' => 
      array (
        'className' => 'Neos\\Neos\\TYPO3CR\\NeosNodeService',
      ),
      'Neos\\Neos\\Domain\\Service\\ContentDimensionPresetSourceInterface' => 
      array (
        'className' => 'Neos\\Neos\\Domain\\Service\\ConfigurationContentDimensionPresetSource',
      ),
      'Neos\\Neos\\Domain\\Service\\ConfigurationContentDimensionPresetSource' => 
      array (
        'properties' => 
        array (
          'configuration' => 
          array (
            'setting' => 'Neos.ContentRepository.contentDimensions',
          ),
        ),
      ),
      'Neos\\Neos\\Routing\\FrontendNodeRoutePartHandlerInterface' => 
      array (
        'className' => 'Neos\\Neos\\Routing\\FrontendNodeRoutePartHandler',
      ),
      'Neos\\Neos\\Domain\\Service\\NodeSearchServiceInterface' => 
      array (
        'className' => 'Neos\\Neos\\Domain\\Service\\NodeSearchService',
      ),
      'Neos\\Neos\\Service\\XliffService' => 
      array (
        'properties' => 
        array (
          'xliffToJsonTranslationsCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Neos_Neos_XliffToJsonTranslations',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Neos\\Controller\\Backend\\SchemaController' => 
      array (
        'properties' => 
        array (
          'nodeTypeSchemaCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Neos_Neos_NodeType_Schema',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Neos\\Controller\\Backend\\BackendController' => 
      array (
        'properties' => 
        array (
          'loginTokenCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Neos_Neos_LoginTokenCache',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Neos\\Controller\\LoginController' => 
      array (
        'properties' => 
        array (
          'loginTokenCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Neos_Neos_LoginTokenCache',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.NodeTypes.BaseMixins' => 
    array (
    ),
    'Neos.Neos.Ui' => 
    array (
    ),
    'Neos.Neos.Setup' => 
    array (
    ),
    'Neos.NodeTypes.AssetList' => 
    array (
    ),
    'Neos.RedirectHandler.NeosAdapter' => 
    array (
    ),
    'Neos.CliSetup' => 
    array (
    ),
    'Neos.NodeTypes.Navigation' => 
    array (
    ),
    'Neos.RedirectHandler.Ui' => 
    array (
    ),
    'Neos.Seo' => 
    array (
    ),
    'Neos.NodeTypes.ContentReferences' => 
    array (
    ),
    'Neos.NodeTypes.Html' => 
    array (
    ),
    'Neos.Demo' => 
    array (
    ),
  ),
  'Settings' => 
  array (
    'Neos' => 
    array (
      'Flow' => 
      array (
        'compatibility' => 
        array (
        ),
        'aop' => 
        array (
          'globalObjects' => 
          array (
            'securityContext' => 'Neos\\Flow\\Security\\Context',
            'userInformation' => 'Neos\\Neos\\Service\\UserService',
          ),
        ),
        'cache' => 
        array (
          'applicationIdentifier' => (defined('FLOW_PATH_ROOT') ? constant('FLOW_PATH_ROOT') : null) . '~' . (defined('FLOW_APPLICATION_CONTEXT') ? constant('FLOW_APPLICATION_CONTEXT') : null),
        ),
        'core' => 
        array (
          'context' => 'Development',
          'applicationPackageKey' => 'Neos.Neos',
          'applicationName' => 'Neos',
          'phpBinaryPathAndFilename' => (defined('PHP_BINDIR') ? constant('PHP_BINDIR') : null) . '/php',
          'subRequestEnvironmentVariables' => 
          array (
            'XDEBUG_CONFIG' => 'idekey=FLOW_SUBREQUEST remote_port=9001',
          ),
          'subRequestPhpIniPathAndFilename' => NULL,
          'subRequestIniEntries' => 
          array (
          ),
        ),
        'error' => 
        array (
          'exceptionHandler' => 
          array (
            'className' => 'Neos\\Flow\\Error\\DebugExceptionHandler',
            'defaultRenderingOptions' => 
            array (
              'viewClassName' => 'Neos\\FluidAdaptor\\View\\StandaloneView',
              'viewOptions' => 
              array (
              ),
              'renderTechnicalDetails' => true,
              'logException' => true,
            ),
            'renderingGroups' => 
            array (
              'notFoundExceptions' => 
              array (
                'matchingStatusCodes' => 
                array (
                  0 => 403,
                  1 => 404,
                  2 => 410,
                ),
                'options' => 
                array (
                  'logException' => false,
                  'viewOptions' => 
                  array (
                    'templatePathAndFilename' => NULL,
                  ),
                  'variables' => 
                  array (
                    'errorDescription' => 'Sorry, the page you requested was not found.',
                  ),
                  'viewClassName' => '\\Neos\\Neos\\View\\FusionExceptionView',
                ),
              ),
              'databaseConnectionExceptions' => 
              array (
                'matchingExceptionClassNames' => 
                array (
                  0 => 'Neos\\Flow\\Persistence\\Doctrine\\Exception\\DatabaseException',
                  1 => 'Neos\\Flow\\Persistence\\Doctrine\\Exception\\DatabaseConnectionException',
                  2 => 'Neos\\Flow\\Persistence\\Doctrine\\Exception\\DatabaseStructureException',
                ),
                'options' => 
                array (
                  'viewOptions' => 
                  array (
                    'templatePathAndFilename' => 'resource://Neos.Neos/Private/Templates/Error/Welcome.html',
                    'layoutRootPaths' => 
                    array (
                      0 => 'resource://Neos.Neos/Private/Layouts/',
                    ),
                  ),
                  'variables' => 
                  array (
                    'errorDescription' => 'Sorry, the database connection couldn\'t be established.',
                  ),
                  'viewClassName' => 'Neos\\FluidAdaptor\\View\\StandaloneView',
                ),
              ),
              'noHomepageException' => 
              array (
                'matchingExceptionClassNames' => 
                array (
                  0 => 'Neos\\Neos\\Routing\\Exception\\NoHomepageException',
                ),
                'options' => 
                array (
                  'viewClassName' => 'Neos\\FluidAdaptor\\View\\StandaloneView',
                  'viewOptions' => 
                  array (
                    'templatePathAndFilename' => 'resource://Neos.Neos/Private/Templates/Error/Welcome.html',
                    'layoutRootPaths' => 
                    array (
                      0 => 'resource://Neos.Neos/Private/Layouts/',
                    ),
                  ),
                ),
              ),
              'fusionParserExceptions' => 
              array (
                'matchingExceptionClassNames' => 
                array (
                  0 => 'Neos\\Fusion\\Core\\ObjectTreeParser\\Exception\\ParserException',
                ),
                'options' => 
                array (
                  'logException' => true,
                  'viewClassName' => 'Neos\\Fusion\\View\\FusionView',
                  'viewOptions' => 
                  array (
                    'fusionPath' => 'Neos/Fusion/FusionParserException',
                    'fusionPathPatterns' => 
                    array (
                      0 => 'resource://Neos.Neos/Private/Fusion/Error/Root.fusion',
                    ),
                    'enableContentCache' => false,
                  ),
                  'variables' => 
                  array (
                    'flowPathRoot' => (defined('FLOW_PATH_ROOT') ? constant('FLOW_PATH_ROOT') : null),
                  ),
                ),
              ),
            ),
          ),
          'errorHandler' => 
          array (
            'exceptionalErrors' => 
            array (
              0 => (defined('E_USER_ERROR') ? constant('E_USER_ERROR') : null),
              1 => (defined('E_RECOVERABLE_ERROR') ? constant('E_RECOVERABLE_ERROR') : null),
              2 => (defined('E_WARNING') ? constant('E_WARNING') : null),
              3 => (defined('E_NOTICE') ? constant('E_NOTICE') : null),
              4 => (defined('E_USER_WARNING') ? constant('E_USER_WARNING') : null),
              5 => (defined('E_USER_NOTICE') ? constant('E_USER_NOTICE') : null),
              6 => (defined('E_STRICT') ? constant('E_STRICT') : null),
            ),
          ),
          'debugger' => 
          array (
            'ignoredClasses' => 
            array (
              'Neos\\\\Flow\\\\Aop.*' => true,
              'Neos\\\\Flow\\\\Cac.*' => true,
              'Neos\\\\Flow\\\\Core\\\\.*' => true,
              'Neos\\\\Flow\\\\Con.*' => true,
              'Neos\\\\Flow\\\\Http\\\\RequestHandler' => true,
              'Neos\\\\Flow\\\\Uti.*' => true,
              'Neos\\\\Flow\\\\Mvc\\\\Routing.*' => true,
              'Neos\\\\Flow\\\\Log.*' => true,
              'Neos\\\\Flow\\\\Obj.*' => true,
              'Neos\\\\Flow\\\\Pac.*' => true,
              'Neos\\\\Flow\\\\Persistence\\\\(?!Doctrine\\\\Mapping).*' => true,
              'Neos\\\\Flow\\\\Pro.*' => true,
              'Neos\\\\Flow\\\\Ref.*' => true,
              'Neos\\\\Flow\\\\Sec.*' => true,
              'Neos\\\\Flow\\\\Sig.*' => true,
              'Neos\\\\Flow\\\\.*ResourceManager' => true,
              '.+Service$' => true,
              '.+Repository$' => true,
              'PHPUnit_Framework_MockObject_InvocationMocker' => true,
              'Neos\\\\FluidAdaptor\\\\.*' => true,
              'Neos\\\\ContentRepository\\\\Domain\\\\Service\\\\NodeTypeManager' => true,
              'Neos\\\\ContentRepository\\\\Domain\\\\Factory\\\\NodeFactory' => true,
              'Neos\\\\ContentRepository\\\\Domain\\\\Service\\\\Cache\\\\FirstLevelNodeCache' => true,
              'Neos\\\\Neos\\\\Domain\\\\Service\\\\ContentContextFactory' => true,
            ),
            'recursionLimit' => 5,
          ),
        ),
        'http' => 
        array (
          'applicationToken' => 'MinorVersion',
          'baseUri' => NULL,
          'middlewares' => 
          array (
            'standardsCompliance' => 
            array (
              'position' => 'start 100',
              'middleware' => 'Neos\\Flow\\Http\\Middleware\\StandardsComplianceMiddleware',
            ),
            'trustedProxies' => 
            array (
              'position' => 'start 50',
              'middleware' => 'Neos\\Flow\\Http\\Middleware\\TrustedProxiesMiddleware',
            ),
            'methodOverride' => 
            array (
              'position' => 'start 30',
              'middleware' => 'Neos\\Flow\\Http\\Middleware\\MethodOverrideMiddleware',
            ),
            'session' => 
            array (
              'position' => 'start 10',
              'middleware' => 'Neos\\Flow\\Http\\Middleware\\SessionMiddleware',
            ),
            'routing' => 
            array (
              'middleware' => 'Neos\\Flow\\Mvc\\Routing\\RoutingMiddleware',
            ),
            'poweredByHeader' => 
            array (
              'middleware' => 'Neos\\Flow\\Http\\Middleware\\PoweredByMiddleware',
            ),
            'flashMessages' => 
            array (
              'middleware' => 'Neos\\Flow\\Mvc\\FlashMessage\\FlashMessageMiddleware',
            ),
            'parseBody' => 
            array (
              'middleware' => 'Neos\\Flow\\Http\\Middleware\\RequestBodyParsingMiddleware',
            ),
            'securityEntryPoint' => 
            array (
              'middleware' => 'Neos\\Flow\\Http\\Middleware\\SecurityEntryPointMiddleware',
            ),
            'dispatch' => 
            array (
              'position' => 'end 100',
              'middleware' => 'Neos\\Flow\\Mvc\\DispatchMiddleware',
            ),
            'ajaxWidget' => 
            array (
              'position' => 'before routing',
              'middleware' => 'Neos\\FluidAdaptor\\Core\\Widget\\AjaxWidgetMiddleware',
            ),
            'redirect' => 
            array (
              'position' => 'after routing',
              'middleware' => 'Neos\\RedirectHandler\\RedirectMiddleware',
            ),
            'requestUriHostParameter' => 
            array (
              'position' => 'before routing',
              'middleware' => 'Neos\\Neos\\Routing\\RequestUriHostMiddleware',
            ),
          ),
          'trustedProxies' => 
          array (
            'proxies' => getenv('FLOW_HTTP_TRUSTED_PROXIES'),
            'headers' => 
            array (
              'clientIp' => 'X-Forwarded-For',
              'host' => 'X-Forwarded-Host',
              'port' => 'X-Forwarded-Port',
              'proto' => 'X-Forwarded-Proto',
            ),
          ),
          'serverRequestDefaults' => 
          array (
            'userAgent' => 'Flow/' . (defined('FLOW_VERSION_BRANCH') ? constant('FLOW_VERSION_BRANCH') : null) . '.x',
            'scriptPath' => (defined('FLOW_PATH_WEB') ? constant('FLOW_PATH_WEB') : null) . 'index.php',
            'protocolVersion' => '1.1',
          ),
        ),
        'i18n' => 
        array (
          'defaultLocale' => 'en',
          'fallbackRule' => 
          array (
            'strict' => false,
            'order' => 
            array (
            ),
          ),
          'globalTranslationPath' => (defined('FLOW_PATH_DATA') ? constant('FLOW_PATH_DATA') : null) . 'Translations/',
          'availableLocales' => 
          array (
          ),
          'scan' => 
          array (
            'includePaths' => 
            array (
              '/Public/' => true,
              '/Private/Translations/' => true,
            ),
            'excludePatterns' => 
            array (
              '/node_modules/' => true,
              '/bower_components/' => true,
              '/\\..*/' => true,
            ),
          ),
        ),
        'log' => 
        array (
          'psr3' => 
          array (
            'loggerFactory' => 'Neos\\Flow\\Log\\PsrLoggerFactory',
            'Neos\\Flow\\Log\\PsrLoggerFactory' => 
            array (
              'systemLogger' => 
              array (
                'default' => 
                array (
                  'class' => 'Neos\\Flow\\Log\\Backend\\FileBackend',
                  'options' => 
                  array (
                    'logFileURL' => (defined('FLOW_PATH_DATA') ? constant('FLOW_PATH_DATA') : null) . 'Logs/System_Development.log',
                    'createParentDirectories' => true,
                    'severityThreshold' => (defined('LOG_DEBUG') ? constant('LOG_DEBUG') : null),
                    'maximumLogFileSize' => 10485760,
                    'logFilesToKeep' => 1,
                    'logMessageOrigin' => false,
                  ),
                ),
              ),
              'securityLogger' => 
              array (
                'default' => 
                array (
                  'class' => 'Neos\\Flow\\Log\\Backend\\FileBackend',
                  'options' => 
                  array (
                    'logFileURL' => (defined('FLOW_PATH_DATA') ? constant('FLOW_PATH_DATA') : null) . 'Logs/Security_Development.log',
                    'createParentDirectories' => true,
                    'severityThreshold' => (defined('LOG_DEBUG') ? constant('LOG_DEBUG') : null),
                    'maximumLogFileSize' => 10485760,
                    'logFilesToKeep' => 1,
                    'logIpAddress' => true,
                  ),
                ),
              ),
              'sqlLogger' => 
              array (
                'default' => 
                array (
                  'class' => 'Neos\\Flow\\Log\\Backend\\FileBackend',
                  'options' => 
                  array (
                    'logFileURL' => (defined('FLOW_PATH_DATA') ? constant('FLOW_PATH_DATA') : null) . 'Logs/Query_Development.log',
                    'createParentDirectories' => true,
                    'severityThreshold' => (defined('LOG_DEBUG') ? constant('LOG_DEBUG') : null),
                    'maximumLogFileSize' => 10485760,
                    'logFilesToKeep' => 1,
                  ),
                ),
              ),
              'i18nLogger' => 
              array (
                'default' => 
                array (
                  'class' => 'Neos\\Flow\\Log\\Backend\\FileBackend',
                  'options' => 
                  array (
                    'logFileURL' => (defined('FLOW_PATH_DATA') ? constant('FLOW_PATH_DATA') : null) . 'Logs/I18n_Development.log',
                    'createParentDirectories' => true,
                    'severityThreshold' => (defined('LOG_DEBUG') ? constant('LOG_DEBUG') : null),
                    'maximumLogFileSize' => 10485760,
                    'logFilesToKeep' => 1,
                  ),
                ),
              ),
            ),
          ),
          'throwables' => 
          array (
            'storageClass' => 'Neos\\Flow\\Log\\ThrowableStorage\\FileStorage',
            'renderRequestInformation' => true,
            'optionsByImplementation' => 
            array (
              'Neos\\Flow\\Log\\ThrowableStorage\\FileStorage' => 
              array (
                'storagePath' => (defined('FLOW_PATH_DATA') ? constant('FLOW_PATH_DATA') : null) . 'Logs/Exceptions',
              ),
            ),
          ),
        ),
        'mvc' => 
        array (
          'routes' => 
          array (
            'Neos.Media' => 
            array (
              'position' => 'before Neos.Neos',
            ),
            'Neos.Media.Browser' => true,
            'Neos.Neos' => 
            array (
              'variables' => 
              array (
                'defaultUriSuffix' => '.html',
              ),
            ),
            'Neos.Neos.Ui' => 
            array (
              'position' => 'before Neos.Neos',
            ),
            'Neos.Seo' => 
            array (
              'variables' => 
              array (
                'xmlSitemapPath' => 'sitemap.xml',
              ),
            ),
          ),
          'view' => 
          array (
            'defaultImplementation' => 'Neos\\FluidAdaptor\\View\\TemplateView',
          ),
          'flashMessages' => 
          array (
            'containers' => 
            array (
              'default' => 
              array (
                'position' => 'end',
                'storage' => 'Neos\\Flow\\Mvc\\FlashMessage\\Storage\\FlashMessageSessionStorage',
              ),
            ),
          ),
        ),
        'object' => 
        array (
          'registerFunctionalTestClasses' => false,
          'includeClasses' => 
          array (
            'typo3fluid.fluid' => 
            array (
              0 => '.*',
            ),
          ),
        ),
        'package' => 
        array (
          'inactiveByDefault' => 
          array (
            0 => 'neos.composerplugin',
            1 => 'Composer.Installers',
          ),
          'packagesPathByType' => 
          array (
            'typo3-flow-package' => 'Application',
            'neos-package' => 'Application',
            'typo3-flow-framework' => 'Framework',
            'neos-framework' => 'Framework',
            'neos-site' => 'Sites',
            'neos-plugin' => 'Plugins',
          ),
        ),
        'persistence' => 
        array (
          'backendOptions' => 
          array (
            'driver' => 'pdo_mysql',
            'host' => '127.0.0.1:8889',
            'dbname' => '__new__',
            'user' => 'root',
            'password' => 'root',
            'charset' => 'utf8mb4',
            'defaultTableOptions' => 
            array (
              'charset' => 'utf8mb4',
            ),
          ),
          'cacheAllQueryResults' => false,
          'doctrine' => 
          array (
            'enable' => true,
            'sqlLogger' => NULL,
            'filters' => 
            array (
              'Flow_Security_Entity_Filter' => 'Neos\\Flow\\Security\\Authorization\\Privilege\\Entity\\Doctrine\\SqlFilter',
            ),
            'dbal' => 
            array (
              'mappingTypes' => 
              array (
                'flow_json_array' => 
                array (
                  'dbType' => 'json_array',
                  'className' => 'Neos\\Flow\\Persistence\\Doctrine\\DataTypes\\JsonArrayType',
                ),
                'objectarray' => 
                array (
                  'dbType' => 'array',
                  'className' => 'Neos\\Flow\\Persistence\\Doctrine\\DataTypes\\ObjectArray',
                ),
              ),
            ),
            'eventSubscribers' => 
            array (
            ),
            'eventListeners' => 
            array (
              'Neos\\Flow\\Persistence\\Doctrine\\AllowedObjectsListener' => 
              array (
                'events' => 
                array (
                  0 => 'onFlush',
                ),
                'listener' => 'Neos\\Flow\\Persistence\\Doctrine\\AllowedObjectsListener',
              ),
              'Neos\\Flow\\Persistence\\Doctrine\\ObjectValidationAndDeDuplicationListener' => 
              array (
                'events' => 
                array (
                  0 => 'onFlush',
                ),
                'listener' => 'Neos\\Flow\\Persistence\\Doctrine\\ObjectValidationAndDeDuplicationListener',
              ),
              'Neos\\Media\\Domain\\EventListener\\ImageEventListener' => 
              array (
                'events' => 
                array (
                  0 => 'postRemove',
                ),
                'listener' => 'Neos\\Media\\Domain\\EventListener\\ImageEventListener',
              ),
              'Gedmo\\Timestampable\\TimestampableListener' => 
              array (
                'events' => 
                array (
                  0 => 'prePersist',
                  1 => 'onFlush',
                  2 => 'loadClassMetadata',
                ),
                'listener' => 'Gedmo\\Timestampable\\TimestampableListener',
              ),
              'Neos\\Neos\\EventLog\\Integrations\\EntityIntegrationService' => 
              array (
                'events' => 
                array (
                  0 => 'onFlush',
                ),
                'listener' => 'Neos\\Neos\\EventLog\\Integrations\\EntityIntegrationService',
              ),
              'Neos\\Neos\\EventLog\\Integrations\\ContentRepositoryIntegrationService' => 
              array (
                'events' => 
                array (
                  0 => 'preFlush',
                ),
                'listener' => 'Neos\\Neos\\EventLog\\Integrations\\ContentRepositoryIntegrationService',
              ),
            ),
            'secondLevelCache' => 
            array (
            ),
            'migrations' => 
            array (
              'ignoredTables' => 
              array (
              ),
            ),
            'dql' => 
            array (
              'customStringFunctions' => 
              array (
                'NEOSCR_TOSTRING' => 'Neos\\ContentRepository\\Persistence\\Ast\\ToStringFunction',
              ),
            ),
          ),
        ),
        'reflection' => 
        array (
          'ignoredTags' => 
          array (
            'const' => true,
            'scope' => true,
            'test' => true,
            'expectedException' => true,
            'expectedExceptionMessage' => true,
            'expectedExceptionCode' => true,
            'depends' => true,
            'dataProvider' => true,
            'group' => true,
            'requires' => true,
            'Given' => true,
            'When' => true,
            'Then' => true,
            'BeforeScenario' => true,
            'AfterScenario' => true,
            'BeforeSuite' => true,
            'AfterSuite' => true,
            'fixtures' => true,
            'Isolated' => true,
            'AfterFeature' => true,
            'BeforeFeature' => true,
            'BeforeStep' => true,
            'AfterStep' => true,
            'WithoutSecurityChecks' => true,
            'covers' => true,
            'doesNotPerformAssertions' => true,
            'template' => true,
            'psalm' => true,
            'psalm-immutable' => true,
          ),
          'logIncorrectDocCommentHints' => false,
        ),
        'resource' => 
        array (
          'extensionsBlockedFromUpload' => 
          array (
            'aspx' => true,
            'cgi' => true,
            'php3' => true,
            'php4' => true,
            'php5' => true,
            'phtml' => true,
            'php' => true,
            'pl' => true,
            'py' => true,
            'pyc' => true,
            'pyo' => true,
            'rb' => true,
          ),
          'storages' => 
          array (
            'defaultPersistentResourcesStorage' => 
            array (
              'storage' => 'Neos\\Flow\\ResourceManagement\\Storage\\WritableFileSystemStorage',
              'storageOptions' => 
              array (
                'path' => (defined('FLOW_PATH_DATA') ? constant('FLOW_PATH_DATA') : null) . 'Persistent/Resources/',
              ),
            ),
            'defaultStaticResourcesStorage' => 
            array (
              'storage' => 'Neos\\Flow\\ResourceManagement\\Storage\\PackageStorage',
            ),
          ),
          'collections' => 
          array (
            'static' => 
            array (
              'storage' => 'defaultStaticResourcesStorage',
              'target' => 'localWebDirectoryStaticResourcesTarget',
              'pathPatterns' => 
              array (
                0 => '*/Resources/Public/',
                1 => '*/Resources/Public/*',
              ),
            ),
            'persistent' => 
            array (
              'storage' => 'defaultPersistentResourcesStorage',
              'target' => 'localWebDirectoryPersistentResourcesTarget',
            ),
          ),
          'targets' => 
          array (
            'localWebDirectoryStaticResourcesTarget' => 
            array (
              'target' => 'Neos\\Flow\\ResourceManagement\\Target\\FileSystemSymlinkTarget',
              'targetOptions' => 
              array (
                'path' => (defined('FLOW_PATH_WEB') ? constant('FLOW_PATH_WEB') : null) . '_Resources/Static/Packages/',
                'baseUri' => '_Resources/Static/Packages/',
                'excludedExtensions' => 
                array (
                  'aspx' => true,
                  'cgi' => true,
                  'php3' => true,
                  'php4' => true,
                  'php5' => true,
                  'phtml' => true,
                  'php' => true,
                  'pl' => true,
                  'py' => true,
                  'pyc' => true,
                  'pyo' => true,
                  'rb' => true,
                ),
              ),
            ),
            'localWebDirectoryPersistentResourcesTarget' => 
            array (
              'target' => 'Neos\\Flow\\ResourceManagement\\Target\\FileSystemSymlinkTarget',
              'targetOptions' => 
              array (
                'path' => (defined('FLOW_PATH_WEB') ? constant('FLOW_PATH_WEB') : null) . '_Resources/Persistent/',
                'baseUri' => '_Resources/Persistent/',
                'excludedExtensions' => 
                array (
                  'aspx' => true,
                  'cgi' => true,
                  'php3' => true,
                  'php4' => true,
                  'php5' => true,
                  'phtml' => true,
                  'php' => true,
                  'pl' => true,
                  'py' => true,
                  'pyc' => true,
                  'pyo' => true,
                  'rb' => true,
                ),
                'subdivideHashPathSegment' => true,
                'relativeSymlinks' => true,
              ),
            ),
          ),
        ),
        'security' => 
        array (
          'firewall' => 
          array (
            'rejectAll' => false,
            'filters' => 
            array (
              'Neos.Flow:CsrfProtection' => 
              array (
                'pattern' => 'CsrfProtection',
                'interceptor' => 'CsrfTokenMissing',
              ),
            ),
          ),
          'authentication' => 
          array (
            'providers' => 
            array (
              'Neos.Setup:Login' => 
              array (
                'provider' => 'FileBasedSimpleKeyProvider',
                'providerOptions' => 
                array (
                  'keyName' => 'SetupKey',
                  'authenticateRoles' => 
                  array (
                    0 => 'Neos.Setup:SetupUser',
                  ),
                ),
                'requestPatterns' => 
                array (
                  'Neos.Setup:controllerObjectName' => 
                  array (
                    'pattern' => 'ControllerObjectName',
                    'patternOptions' => 
                    array (
                      'controllerObjectNamePattern' => 'Neos\\Setup\\Controller\\.*|Neos\\Setup\\ViewHelpers\\Widget\\Controller\\.*',
                    ),
                  ),
                ),
                'entryPoint' => 'WebRedirect',
                'entryPointOptions' => 
                array (
                  'uri' => 'setup/login',
                ),
              ),
              'Neos.Neos:Backend' => 
              array (
                'requestPatterns' => 
                array (
                  'Neos.Media.Browser:Controllers' => 
                  array (
                    'pattern' => 'ControllerObjectName',
                    'patternOptions' => 
                    array (
                      'controllerObjectNamePattern' => 'Neos\\Media\\Browser\\Controller\\.*',
                    ),
                  ),
                  'Neos.Neos:BackendControllers' => 
                  array (
                    'pattern' => 'ControllerObjectName',
                    'patternOptions' => 
                    array (
                      'controllerObjectNamePattern' => 'Neos\\Neos\\Controller\\.*',
                    ),
                  ),
                  'Neos.Neos:ServiceControllers' => 
                  array (
                    'pattern' => 'ControllerObjectName',
                    'patternOptions' => 
                    array (
                      'controllerObjectNamePattern' => 'Neos\\Neos\\Service\\.*',
                    ),
                  ),
                  'Neos.Neos.Ui:BackendControllers' => 
                  array (
                    'pattern' => 'ControllerObjectName',
                    'patternOptions' => 
                    array (
                      'controllerObjectNamePattern' => 'Neos\\Neos\\Ui\\Controller\\.*',
                    ),
                  ),
                ),
                'label' => 'Neos Backend',
                'provider' => 'PersistedUsernamePasswordProvider',
                'entryPoint' => 'WebRedirect',
                'entryPointOptions' => 
                array (
                  'routeValues' => 
                  array (
                    '@package' => 'Neos.Neos',
                    '@controller' => 'Login',
                    '@action' => 'index',
                    '@format' => 'html',
                  ),
                ),
              ),
            ),
            'authenticationStrategy' => 'oneToken',
          ),
          'authorization' => 
          array (
            'allowAccessIfAllVotersAbstain' => false,
          ),
          'csrf' => 
          array (
            'csrfStrategy' => 'onePerSession',
          ),
          'cryptography' => 
          array (
            'hashingStrategies' => 
            array (
              'default' => 'bcrypt',
              'pbkdf2' => 'Neos\\Flow\\Security\\Cryptography\\Pbkdf2HashingStrategy',
              'bcrypt' => 'Neos\\Flow\\Security\\Cryptography\\BCryptHashingStrategy',
            ),
            'Pbkdf2HashingStrategy' => 
            array (
              'dynamicSaltLength' => 8,
              'iterationCount' => 10000,
              'derivedKeyLength' => 64,
              'algorithm' => 'sha256',
            ),
            'BCryptHashingStrategy' => 
            array (
              'cost' => 14,
            ),
            'RSAWalletServicePHP' => 
            array (
              'keystorePath' => (defined('FLOW_PATH_DATA') ? constant('FLOW_PATH_DATA') : null) . 'Persistent/RsaWalletData',
              'paddingAlgorithm' => (defined('OPENSSL_PKCS1_OAEP_PADDING') ? constant('OPENSSL_PKCS1_OAEP_PADDING') : null),
              'openSSLConfiguration' => 
              array (
              ),
            ),
          ),
        ),
        'session' => 
        array (
          'inactivityTimeout' => 3600,
          'name' => 'Neos_Session',
          'garbageCollection' => 
          array (
            'probability' => 1,
            'maximumPerRun' => 1000,
          ),
          'cookie' => 
          array (
            'lifetime' => 0,
            'path' => '/',
            'secure' => false,
            'httponly' => true,
            'domain' => NULL,
            'samesite' => 'lax',
          ),
        ),
      ),
      'DocTools' => 
      array (
        'collections' => 
        array (
          'Flow' => 
          array (
            'commandReferences' => 
            array (
              'Flow:FlowCommands' => true,
            ),
            'references' => 
            array (
              'Flow:FlowValidators' => true,
              'Flow:FlowSignals' => true,
              'Flow:FlowTypeConverters' => true,
              'Flow:FlowAnnotations' => true,
              0 => 'TYPO3Fluid:ViewHelpers',
              1 => 'Flow:FluidAdaptorViewHelpers',
            ),
          ),
          'Media' => 
          array (
            'commandReferences' => 
            array (
              'Media:Commands' => true,
            ),
            'references' => 
            array (
              'Media:ViewHelpers' => true,
              'Media:Validators' => true,
            ),
          ),
          'FusionForm' => 
          array (
            'references' => 
            array (
              'FusionForm:Helpers' => true,
              'FusionForm:RuntimeHelpers' => true,
            ),
          ),
          'Neos' => 
          array (
            'commandReferences' => 
            array (
              'Neos:NeosCommands' => true,
            ),
            'references' => 
            array (
              'TYPO3Fluid:ViewHelpers' => true,
              'Neos:FluidAdaptorViewHelpers' => true,
              'Neos:MediaViewHelpers' => true,
              'Neos:FormViewHelpers' => true,
              'Neos:NeosViewHelpers' => true,
              'Neos:ContentRepositoryViewHelpers' => true,
              'Neos:FusionViewHelpers' => true,
              'Neos:FlowValidators' => true,
              'Neos:PartyValidators' => true,
              'Neos:MediaValidators' => true,
              'Neos:FlowSignals' => true,
              'Neos:NeosSignals' => true,
              'Neos:MediaSignals' => true,
              'Neos:ContentRepositorySignals' => true,
              'Neos:FlowQueryOperations' => true,
              'Neos:EelHelpers' => true,
            ),
          ),
        ),
        'commandReferences' => 
        array (
          'Flow:FlowCommands' => 
          array (
            'title' => 'Flow Command Reference',
            'packageKeys' => 
            array (
              'Neos.Flow' => true,
              'Neos.Party' => true,
              'Neos.Kickstart' => true,
              'Neos.Welcome' => true,
              0 => 'Neos.FluidAdaptor',
            ),
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Framework/Neos.Flow/Documentation/TheDefinitiveGuide/PartV/CommandReference.rst',
          ),
          'Media:Commands' => 
          array (
            'title' => 'Media Command Reference',
            'packageKeys' => 
            array (
              'Neos.Media' => true,
            ),
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Media/Documentation/References/Commands.rst',
          ),
          'Neos:NeosCommands' => 
          array (
            'title' => 'Neos Command Reference',
            'packageKeys' => 
            array (
              'Neos.Flow' => true,
              'Neos.Party' => true,
              'Neos.FluidAdaptor' => true,
              'Neos.Kickstarter' => true,
              'Neos.Welcome' => true,
              'Neos.Media' => true,
              'Neos.ContentRepository' => true,
              'Neos.SiteKickstarter' => true,
              'Neos.Neos' => true,
            ),
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/CommandReference.rst',
          ),
        ),
        'references' => 
        array (
          'Flow:FlowValidators' => 
          array (
            'title' => 'Flow Validator Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Framework/Neos.Flow/Documentation/TheDefinitiveGuide/PartV/ValidatorReference.rst',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\Flow\\Validation\\Validator\\AbstractValidator',
              'classNamePattern' => '/^Neos\\\\Flow\\\\Validation\\\\Validator\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FlowValidatorClassParser',
            ),
          ),
          'Flow:FlowSignals' => 
          array (
            'title' => 'Flow Signals Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Framework/Neos.Flow/Documentation/TheDefinitiveGuide/PartV/SignalsReference.rst',
            'affectedClasses' => 
            array (
              'classesContainingMethodsAnnotatedWith' => 'Neos\\Flow\\Annotations\\Signal',
              'classNamePattern' => '/^Neos\\\\Flow\\\\.*$/i',
              'includeAbstractClasses' => true,
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\SignalsParser',
            ),
          ),
          'Flow:FlowTypeConverters' => 
          array (
            'title' => 'Flow TypeConverter Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Framework/Neos.Flow/Documentation/TheDefinitiveGuide/PartV/TypeConverterReference.rst',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\Flow\\Property\\TypeConverter\\AbstractTypeConverter',
              'classNamePattern' => '/^Neos\\\\Flow\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FlowTypeConverterClassParser',
            ),
          ),
          'Flow:FlowAnnotations' => 
          array (
            'title' => 'Flow Annotation Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Framework/Neos.Flow/Documentation/TheDefinitiveGuide/PartV/AnnotationReference.rst',
            'affectedClasses' => 
            array (
              'classNamePattern' => '/^Neos\\\\Flow\\\\Annotations\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FlowAnnotationClassParser',
            ),
          ),
          'TYPO3Fluid:ViewHelpers' => 
          array (
            'title' => 'TYPO3 Fluid ViewHelper Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/ViewHelpers/TYPO3Fluid.rst',
            'affectedClasses' => 
            array (
              'parentClassName' => 'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\AbstractViewHelper',
              'classNamePattern' => '/^TYPO3Fluid\\\\Fluid\\\\ViewHelpers\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FluidViewHelperClassParser',
              'options' => 
              array (
                'namespaces' => 
                array (
                  'f' => 'TYPO3Fluid\\Fluid\\ViewHelpers',
                ),
              ),
            ),
            'templatePathAndFilename' => 'resource://Neos.DocTools/Private/Templates/ViewHelperReferenceTemplate.txt',
          ),
          'Flow:FluidAdaptorViewHelpers' => 
          array (
            'title' => 'FluidAdaptor ViewHelper Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Framework/Neos.Flow/Documentation/TheDefinitiveGuide/PartV/FluidAdaptorViewHelperReference.rst',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\FluidAdaptor\\Core\\ViewHelper\\AbstractViewHelper',
              'classNamePattern' => '/^Neos\\\\FluidAdaptor\\\\ViewHelpers\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FluidViewHelperClassParser',
              'options' => 
              array (
                'namespaces' => 
                array (
                  'f' => 'Neos\\FluidAdaptor\\ViewHelpers',
                ),
              ),
            ),
          ),
          'Media:Validators' => 
          array (
            'title' => 'Media Validator Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Media/Documentation/References/Validators.rst',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\Flow\\Validation\\Validator\\AbstractValidator',
              'classNamePattern' => '/^Neos\\\\Media\\\\Validator\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FlowValidatorClassParser',
            ),
          ),
          'Media:ViewHelpers' => 
          array (
            'title' => 'Media ViewHelper Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Media/Documentation/References/ViewHelpers.rst',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\FluidAdaptor\\Core\\ViewHelper\\AbstractViewHelper',
              'classNamePattern' => '/^Neos\\\\Media\\\\ViewHelpers\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FluidViewHelperClassParser',
              'options' => 
              array (
                'namespaces' => 
                array (
                  'neos.media' => 'Neos\\Media\\ViewHelpers',
                ),
              ),
            ),
          ),
          'FusionForm:Helpers' => 
          array (
            'title' => 'Fusion Form Helper Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Application/Neos.Fusion.Form/Documentation/HelperReference.rst',
            'affectedClasses' => 
            array (
              'interface' => 'Neos\\Eel\\ProtectedContextAwareInterface',
              'classNamePattern' => '/^Neos\\\\Fusion\\\\Form\\\\Domain\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\EelHelperClassParser',
            ),
          ),
          'FusionForm:RuntimeHelpers' => 
          array (
            'title' => 'Fusion Form Helper Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Application/Neos.Fusion.Form/Documentation/RuntimeHelperReference.rst',
            'affectedClasses' => 
            array (
              'interface' => 'Neos\\Eel\\ProtectedContextAwareInterface',
              'classNamePattern' => '/^Neos\\\\Fusion\\\\Form\\\\Runtime\\\\Helper\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\EelHelperClassParser',
            ),
          ),
          'Neos:FluidAdaptorViewHelpers' => 
          array (
            'title' => 'FluidAdaptor ViewHelper Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/ViewHelpers/FluidAdaptor.rst',
            'templatePathAndFilename' => 'resource://Neos.DocTools/Private/Templates/ViewHelperReferenceTemplate.txt',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\FluidAdaptor\\Core\\ViewHelper\\AbstractViewHelper',
              'classNamePattern' => '/^Neos\\\\FluidAdaptor\\\\ViewHelpers\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FluidViewHelperClassParser',
              'options' => 
              array (
                'namespaces' => 
                array (
                  'f' => 'Neos\\FluidAdaptor\\ViewHelpers',
                ),
              ),
            ),
          ),
          'Neos:MediaViewHelpers' => 
          array (
            'title' => 'Media ViewHelper Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/ViewHelpers/Media.rst',
            'templatePathAndFilename' => 'resource://Neos.DocTools/Private/Templates/ViewHelperReferenceTemplate.txt',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\FluidAdaptor\\Core\\ViewHelper\\AbstractViewHelper',
              'classNamePattern' => '/^Neos\\\\Media\\\\ViewHelpers\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FluidViewHelperClassParser',
              'options' => 
              array (
                'namespaces' => 
                array (
                  'neos.media' => 'Neos\\Media\\ViewHelpers',
                ),
              ),
            ),
          ),
          'Neos:FormViewHelpers' => 
          array (
            'title' => 'Form ViewHelper Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/ViewHelpers/Form.rst',
            'templatePathAndFilename' => 'resource://Neos.DocTools/Private/Templates/ViewHelperReferenceTemplate.txt',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\FluidAdaptor\\Core\\ViewHelper\\AbstractViewHelper',
              'classNamePattern' => '/^Neos\\\\Form\\\\ViewHelpers\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FluidViewHelperClassParser',
              'options' => 
              array (
                'namespaces' => 
                array (
                  'neos.form' => 'Neos\\Form\\ViewHelpers',
                ),
              ),
            ),
          ),
          'Neos:NeosViewHelpers' => 
          array (
            'title' => 'Neos ViewHelper Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/ViewHelpers/Neos.rst',
            'templatePathAndFilename' => 'resource://Neos.DocTools/Private/Templates/ViewHelperReferenceTemplate.txt',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\FluidAdaptor\\Core\\ViewHelper\\AbstractViewHelper',
              'classNamePattern' => '/^Neos\\\\Neos\\\\ViewHelpers\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FluidViewHelperClassParser',
              'options' => 
              array (
                'namespaces' => 
                array (
                  'f' => 'Neos\\FluidAdaptor\\ViewHelpers',
                  'neos' => 'Neos\\Neos\\ViewHelpers',
                ),
              ),
            ),
          ),
          'Neos:ContentRepositoryViewHelpers' => 
          array (
            'title' => 'Content Repository ViewHelper Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/ViewHelpers/ContentRepository.rst',
            'templatePathAndFilename' => 'resource://Neos.DocTools/Private/Templates/ViewHelperReferenceTemplate.txt',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\FluidAdaptor\\Core\\ViewHelper\\AbstractViewHelper',
              'classNamePattern' => '/^Neos\\\\ContentRepository\\\\ViewHelpers\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FluidViewHelperClassParser',
              'options' => 
              array (
                'namespaces' => 
                array (
                  'f' => 'Neos\\FluidAdaptor\\ViewHelpers',
                  'neos' => 'Neos\\Neos\\ViewHelpers',
                ),
              ),
            ),
          ),
          'Neos:FusionViewHelpers' => 
          array (
            'title' => 'Fusion ViewHelper Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/ViewHelpers/Fusion.rst',
            'templatePathAndFilename' => 'resource://Neos.DocTools/Private/Templates/ViewHelperReferenceTemplate.txt',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\FluidAdaptor\\Core\\ViewHelper\\AbstractViewHelper',
              'classNamePattern' => '/^Neos\\\\Fusion\\\\ViewHelpers\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FluidViewHelperClassParser',
              'options' => 
              array (
                'namespaces' => 
                array (
                  'f' => 'Neos\\FluidAdaptor\\ViewHelpers',
                  'fusion' => 'Neos\\Fusion\\ViewHelpers',
                ),
              ),
            ),
          ),
          'Neos:FlowValidators' => 
          array (
            'title' => 'Flow Validator Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/Validators/Flow.rst',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\Flow\\Validation\\Validator\\AbstractValidator',
              'classNamePattern' => '/^Neos\\\\Flow\\\\Validation\\\\Validator\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FlowValidatorClassParser',
            ),
          ),
          'Neos:PartyValidators' => 
          array (
            'title' => 'Party Validator Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/Validators/Party.rst',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\Flow\\Validation\\Validator\\AbstractValidator',
              'classNamePattern' => '/^Neos\\\\Party\\\\Validation\\\\Validator\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FlowValidatorClassParser',
            ),
          ),
          'Neos:MediaValidators' => 
          array (
            'title' => 'Media Validator Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/Validators/Media.rst',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\Flow\\Validation\\Validator\\AbstractValidator',
              'classNamePattern' => '/^Neos\\\\Media\\\\Validator\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FlowValidatorClassParser',
            ),
          ),
          'Neos:FlowSignals' => 
          array (
            'title' => 'Flow Signals Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/Signals/Flow.rst',
            'affectedClasses' => 
            array (
              'classesContainingMethodsAnnotatedWith' => 'Neos\\Flow\\Annotations\\Signal',
              'classNamePattern' => '/^Neos\\\\Flow\\\\.*$/i',
              'includeAbstractClasses' => true,
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\SignalsParser',
            ),
          ),
          'Neos:NeosSignals' => 
          array (
            'title' => 'Neos Signals Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/Signals/Neos.rst',
            'affectedClasses' => 
            array (
              'classesContainingMethodsAnnotatedWith' => 'Neos\\Flow\\Annotations\\Signal',
              'classNamePattern' => '/^Neos\\\\Neos\\\\.*$/i',
              'includeAbstractClasses' => true,
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\SignalsParser',
            ),
          ),
          'Neos:MediaSignals' => 
          array (
            'title' => 'Media Signals Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/Signals/Media.rst',
            'affectedClasses' => 
            array (
              'classesContainingMethodsAnnotatedWith' => 'Neos\\Flow\\Annotations\\Signal',
              'classNamePattern' => '/^Neos\\\\Media\\\\.*$/i',
              'includeAbstractClasses' => true,
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\SignalsParser',
            ),
          ),
          'Neos:ContentRepositorySignals' => 
          array (
            'title' => 'Content Repository Signals Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/Signals/ContentRepository.rst',
            'affectedClasses' => 
            array (
              'classesContainingMethodsAnnotatedWith' => 'Neos\\Flow\\Annotations\\Signal',
              'classNamePattern' => '/^Neos\\\\ContentRepository\\\\.*$/i',
              'includeAbstractClasses' => true,
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\SignalsParser',
            ),
          ),
          'Neos:FlowQueryOperations' => 
          array (
            'title' => 'FlowQuery Operation Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/FlowQueryOperationReference.rst',
            'affectedClasses' => 
            array (
              'interface' => 'Neos\\Eel\\FlowQuery\\OperationInterface',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FlowQueryOperationClassParser',
            ),
          ),
          'Neos:EelHelpers' => 
          array (
            'title' => 'Eel Helpers Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Neos/Neos.Neos/Documentation/References/EelHelpersReference.rst',
            'affectedClasses' => 
            array (
              'interface' => 'Neos\\Eel\\ProtectedContextAwareInterface',
              'classNamePattern' => '/^.*Helper$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\EelHelperClassParser',
            ),
          ),
        ),
      ),
      'Http' => 
      array (
        'Factories' => 
        array (
        ),
      ),
      'Diff' => 
      array (
      ),
      'Eel' => 
      array (
      ),
      'Form' => 
      array (
        'yamlPersistenceManager' => 
        array (
          'savePath' => (defined('FLOW_PATH_DATA') ? constant('FLOW_PATH_DATA') : null) . 'Forms/',
        ),
        'supertypeResolver' => 
        array (
          'hiddenProperties' => 
          array (
          ),
        ),
        'presets' => 
        array (
          'default' => 
          array (
            'title' => 'Default',
            'stylesheets' => 
            array (
            ),
            'javaScripts' => 
            array (
            ),
            'formStateInitializer' => 'Neos\\Form\\FormState\\DefaultFormStateInitializer',
            'formElementTypes' => 
            array (
              'Neos.Form:Base' => 
              array (
                'renderingOptions' => 
                array (
                  'templatePathPattern' => 'resource://{@package}/Private/Form/{@type}.html',
                  'partialPathPattern' => 'resource://{@package}/Private/Form/Partials/{@type}.html',
                  'layoutPathPattern' => 'resource://{@package}/Private/Form/Layouts/{@type}.html',
                  'skipUnknownElements' => false,
                  'translationPackage' => 'Neos.Form',
                  'validationErrorTranslationPackage' => 'Neos.Flow',
                ),
              ),
              'Neos.Form:Form' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:Base' => true,
                ),
                'rendererClassName' => 'Neos\\Form\\Core\\Renderer\\FluidFormRenderer',
                'renderingOptions' => 
                array (
                  'renderableNameInTemplate' => 'form',
                  'previousButtonClassAttribute' => 'btn btn-cancel',
                  'nextButtonClassAttribute' => 'btn btn-primary',
                  'submitButtonClassAttribute' => 'btn btn-primary',
                ),
              ),
              'Neos.Form:FormEditMode' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:Form' => true,
                ),
              ),
              'Neos.Form:RemovableMixin' => 
              array (
              ),
              'Neos.Form:ReadOnlyFormElement' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:Base' => true,
                  'Neos.Form:RemovableMixin' => true,
                ),
                'implementationClassName' => 'Neos\\Form\\FormElements\\GenericFormElement',
                'renderingOptions' => 
                array (
                  'renderableNameInTemplate' => 'element',
                ),
              ),
              'Neos.Form:FormElement' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:Base' => true,
                  'Neos.Form:RemovableMixin' => true,
                ),
                'implementationClassName' => 'Neos\\Form\\FormElements\\GenericFormElement',
                'properties' => 
                array (
                  'containerClassAttribute' => 'input',
                  'elementClassAttribute' => '',
                  'elementErrorClassAttribute' => 'error',
                ),
                'renderingOptions' => 
                array (
                  'renderableNameInTemplate' => 'element',
                ),
              ),
              'Neos.Form:Page' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:Base' => true,
                  'Neos.Form:RemovableMixin' => true,
                ),
                'implementationClassName' => 'Neos\\Form\\Core\\Model\\Page',
                'renderingOptions' => 
                array (
                  'renderableNameInTemplate' => 'page',
                ),
              ),
              'Neos.Form:PreviewPage' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:Page' => true,
                ),
              ),
              'Neos.Form:Section' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:FormElement' => true,
                ),
                'implementationClassName' => 'Neos\\Form\\FormElements\\Section',
                'renderingOptions' => 
                array (
                  'renderableNameInTemplate' => 'section',
                ),
              ),
              'Neos.Form:TextMixin' => 
              array (
              ),
              'Neos.Form:SingleLineText' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:FormElement' => true,
                  'Neos.Form:TextMixin' => true,
                ),
              ),
              'Neos.Form:Password' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:FormElement' => true,
                  'Neos.Form:TextMixin' => true,
                ),
              ),
              'Neos.Form:PasswordWithConfirmation' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:Password' => true,
                ),
                'implementationClassName' => 'Neos\\Form\\FormElements\\PasswordWithConfirmation',
                'properties' => 
                array (
                  'elementClassAttribute' => 'input-medium',
                  'confirmationLabel' => 'Confirmation',
                  'confirmationClassAttribute' => 'input-medium',
                ),
              ),
              'Neos.Form:MultiLineText' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:FormElement' => true,
                  'Neos.Form:TextMixin' => true,
                ),
                'properties' => 
                array (
                  'elementClassAttribute' => 'xxlarge',
                ),
              ),
              'Neos.Form:SelectionMixin' => 
              array (
              ),
              'Neos.Form:SingleSelectionMixin' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:SelectionMixin' => true,
                ),
              ),
              'Neos.Form:MultiSelectionMixin' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:SelectionMixin' => true,
                ),
              ),
              'Neos.Form:Checkbox' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:FormElement' => true,
                ),
                'properties' => 
                array (
                  'elementClassAttribute' => 'add-on',
                  'value' => 1,
                ),
              ),
              'Neos.Form:MultipleSelectCheckboxes' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:FormElement' => true,
                  'Neos.Form:MultiSelectionMixin' => true,
                ),
              ),
              'Neos.Form:MultipleSelectDropdown' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:FormElement' => true,
                  'Neos.Form:MultiSelectionMixin' => true,
                ),
                'properties' => 
                array (
                  'elementClassAttribute' => 'xlarge',
                ),
              ),
              'Neos.Form:SingleSelectRadiobuttons' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:FormElement' => true,
                  'Neos.Form:SingleSelectionMixin' => true,
                ),
                'properties' => 
                array (
                  'elementClassAttribute' => 'xlarge',
                ),
              ),
              'Neos.Form:SingleSelectDropdown' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:FormElement' => true,
                  'Neos.Form:SingleSelectionMixin' => true,
                ),
              ),
              'Neos.Form:DatePicker' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:FormElement' => true,
                ),
                'implementationClassName' => 'Neos\\Form\\FormElements\\DatePicker',
                'properties' => 
                array (
                  'elementClassAttribute' => 'small',
                  'timeSelectorClassAttribute' => 'mini',
                  'dateFormat' => 'Y-m-d',
                  'enableDatePicker' => true,
                  'displayTimeSelector' => false,
                ),
              ),
              'Neos.Form:FileUpload' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:FormElement' => true,
                ),
                'implementationClassName' => 'Neos\\Form\\FormElements\\FileUpload',
                'properties' => 
                array (
                  'resourceCollection' => 'persistent',
                  'createLinkToFilePreview' => true,
                  'allowedExtensions' => 
                  array (
                    0 => 'pdf',
                    1 => 'doc',
                  ),
                ),
              ),
              'Neos.Form:ImageUpload' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:FormElement' => true,
                ),
                'implementationClassName' => 'Neos\\Form\\FormElements\\ImageUpload',
                'properties' => 
                array (
                  'allowedTypes' => 
                  array (
                    0 => 'jpeg',
                    1 => 'png',
                    2 => 'bmp',
                  ),
                ),
              ),
              'Neos.Form:StaticText' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:ReadOnlyFormElement' => true,
                ),
                'properties' => 
                array (
                  'text' => '',
                ),
              ),
              'Neos.Form:HiddenField' => 
              array (
                'superTypes' => 
                array (
                  'Neos.Form:FormElement' => true,
                ),
              ),
            ),
            'finisherPresets' => 
            array (
              'Neos.Form:Closure' => 
              array (
                'implementationClassName' => 'Neos\\Form\\Finishers\\ClosureFinisher',
                'options' => 
                array (
                ),
              ),
              'Neos.Form:Confirmation' => 
              array (
                'implementationClassName' => 'Neos\\Form\\Finishers\\ConfirmationFinisher',
                'options' => 
                array (
                ),
              ),
              'Neos.Form:Email' => 
              array (
                'implementationClassName' => 'Neos\\Form\\Finishers\\EmailFinisher',
                'options' => 
                array (
                ),
              ),
              'Neos.Form:FlashMessage' => 
              array (
                'implementationClassName' => 'Neos\\Form\\Finishers\\FlashMessageFinisher',
                'options' => 
                array (
                ),
              ),
              'Neos.Form:Redirect' => 
              array (
                'implementationClassName' => 'Neos\\Form\\Finishers\\RedirectFinisher',
                'options' => 
                array (
                ),
              ),
            ),
            'validatorPresets' => 
            array (
              'Neos.Flow:NotEmpty' => 
              array (
                'implementationClassName' => 'Neos\\Flow\\Validation\\Validator\\NotEmptyValidator',
              ),
              'Neos.Flow:DateTimeRange' => 
              array (
                'implementationClassName' => 'Neos\\Flow\\Validation\\Validator\\DateTimeRangeValidator',
              ),
              'Neos.Flow:Alphanumeric' => 
              array (
                'implementationClassName' => 'Neos\\Flow\\Validation\\Validator\\AlphanumericValidator',
              ),
              'Neos.Flow:Text' => 
              array (
                'implementationClassName' => 'Neos\\Flow\\Validation\\Validator\\TextValidator',
              ),
              'Neos.Flow:StringLength' => 
              array (
                'implementationClassName' => 'Neos\\Flow\\Validation\\Validator\\StringLengthValidator',
              ),
              'Neos.Flow:EmailAddress' => 
              array (
                'implementationClassName' => 'Neos\\Flow\\Validation\\Validator\\EmailAddressValidator',
              ),
              'Neos.Flow:Integer' => 
              array (
                'implementationClassName' => 'Neos\\Flow\\Validation\\Validator\\IntegerValidator',
              ),
              'Neos.Flow:Float' => 
              array (
                'implementationClassName' => 'Neos\\Flow\\Validation\\Validator\\FloatValidator',
              ),
              'Neos.Flow:NumberRange' => 
              array (
                'implementationClassName' => 'Neos\\Flow\\Validation\\Validator\\NumberRangeValidator',
              ),
              'Neos.Flow:RegularExpression' => 
              array (
                'implementationClassName' => 'Neos\\Flow\\Validation\\Validator\\RegularExpressionValidator',
              ),
              'Neos.Flow:Count' => 
              array (
                'implementationClassName' => 'Neos\\Flow\\Validation\\Validator\\CountValidator',
              ),
            ),
          ),
          'neos.setup' => 
          array (
            'title' => 'Setup Elements',
            'parentPreset' => 'default',
            'formElementTypes' => 
            array (
              'Neos.Form:Base' => 
              array (
                'renderingOptions' => 
                array (
                  'layoutPathPattern' => 'resource://Neos.Setup/Private/Form/Layouts/{@type}.html',
                  'validationErrorTranslationPackage' => 'Neos.Flow',
                ),
              ),
              'Neos.Form:Form' => 
              array (
                'renderingOptions' => 
                array (
                  'templatePathPattern' => 'resource://Neos.Setup/Private/Form/{@type}.html',
                ),
              ),
              'Neos.Setup:LinkElement' => 
              array (
                'superTypes' => 
                array (
                  0 => 'Neos.Form:ReadOnlyFormElement',
                ),
                'properties' => 
                array (
                  'text' => '',
                  'class' => 'btn',
                  'href' => '',
                ),
              ),
              'Neos.Setup:DatabaseSelector' => 
              array (
                'superTypes' => 
                array (
                  0 => 'Neos.Form:FormElement',
                ),
                'properties' => 
                array (
                  'elementClassAttribute' => 'form-control',
                ),
              ),
              'Neos.Form:SingleLineText' => 
              array (
                'properties' => 
                array (
                  'elementClassAttribute' => 'form-control',
                ),
              ),
              'Neos.Form:Password' => 
              array (
                'properties' => 
                array (
                  'elementClassAttribute' => 'form-control',
                ),
              ),
              'Neos.Form:PasswordWithConfirmation' => 
              array (
                'renderingOptions' => 
                array (
                  'templatePathPattern' => 'resource://Neos.Setup/Private/Form/{@type}.html',
                ),
                'properties' => 
                array (
                  'elementClassAttribute' => 'form-control',
                  'confirmationClassAttribute' => 'form-control',
                ),
              ),
              'Neos.Form:Checkbox' => 
              array (
                'renderingOptions' => 
                array (
                  'templatePathPattern' => 'resource://Neos.Setup/Private/Form/{@type}.html',
                ),
                'properties' => 
                array (
                  'elementClassAttribute' => 'checkbox',
                ),
              ),
              'Neos.Form:MultipleSelectDropdown' => 
              array (
                'properties' => 
                array (
                  'elementClassAttribute' => 'form-control',
                ),
              ),
              'Neos.Form:SingleSelectDropdown' => 
              array (
                'renderingOptions' => 
                array (
                  'templatePathPattern' => 'resource://Neos.Setup/Private/Form/{@type}.html',
                ),
              ),
              'Neos.Form:StaticText' => 
              array (
                'renderingOptions' => 
                array (
                  'templatePathPattern' => 'resource://Neos.Setup/Private/Form/{@type}.html',
                ),
              ),
            ),
          ),
        ),
      ),
      'Twitter' => 
      array (
        'Bootstrap' => 
        array (
          'viewHelpers' => 
          array (
            'partialRootPath' => 'resource://Neos.Twitter.Bootstrap/Private/Partials/',
            'templates' => 
            array (
              'Neos\\Twitter\\Bootstrap\\ViewHelpers\\Navigation\\MenuViewHelper' => 'resource://Neos.Twitter.Bootstrap/Private/Templates/Navigation/Menu.html',
            ),
          ),
        ),
      ),
      'Setup' => 
      array (
        'initialPasswordFile' => (defined('FLOW_PATH_DATA') ? constant('FLOW_PATH_DATA') : null) . 'SetupPassword.txt',
        'stepOrder' => 
        array (
          0 => 'neosRequirements',
          1 => 'database',
          2 => 'administrator',
          3 => 'siteimport',
          4 => 'final',
        ),
        'steps' => 
        array (
          'database' => 
          array (
            'className' => 'Neos\\Setup\\Step\\DatabaseStep',
            'requiredConditions' => 
            array (
              0 => 
              array (
                'className' => 'Neos\\Setup\\Condition\\PdoDriverCondition',
              ),
            ),
          ),
          'final' => 
          array (
            'className' => 'Neos\\Neos\\Setup\\Step\\FinalStep',
          ),
          'neosRequirements' => 
          array (
            'className' => 'Neos\\Neos\\Setup\\Step\\NeosSpecificRequirementsStep',
          ),
          'administrator' => 
          array (
            'className' => 'Neos\\Neos\\Setup\\Step\\AdministratorStep',
            'requiredConditions' => 
            array (
              0 => 
              array (
                'className' => 'Neos\\Setup\\Condition\\DatabaseConnectionCondition',
              ),
            ),
          ),
          'siteimport' => 
          array (
            'className' => 'Neos\\Neos\\Setup\\Step\\SiteImportStep',
            'requiredConditions' => 
            array (
              0 => 
              array (
                'className' => 'Neos\\Setup\\Condition\\DatabaseConnectionCondition',
              ),
            ),
          ),
        ),
        'view' => 
        array (
          'title' => 'Neos Setup',
        ),
        'http' => 
        array (
          'middlewares' => 
          array (
            'configureRouting' => 
            array (
              'position' => 'before routing',
              'middleware' => 'Neos\\Setup\\Core\\ConfigureRoutingMiddleware',
            ),
          ),
        ),
      ),
      'Imagine' => 
      array (
        'driver' => 'Gd',
        'enabledDrivers' => 
        array (
          'Gd' => true,
          'Imagick' => true,
          'Gmagick' => true,
        ),
        'profile' => 
        array (
          'RGB' => 'color.org/sRGB_IEC61966-2-1_black_scaled.icc',
          'CMYK' => 'Adobe/CMYK/USWebUncoated.icc',
          'Grayscale' => 'colormanagement.org/ISOcoated_v2_grey1c_bas.ICC',
        ),
        'driverSpecific' => 
        array (
          'Imagick' => 
          array (
            'limits' => 
            array (
            ),
          ),
        ),
      ),
      'FluidAdaptor' => 
      array (
        'namespaces' => 
        array (
          'f' => 
          array (
            0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
            1 => 'Neos\\FluidAdaptor\\ViewHelpers',
          ),
        ),
      ),
      'Media' => 
      array (
        'asyncThumbnails' => true,
        'thumbnailPresets' => 
        array (
          'Neos.Media.Browser:Thumbnail' => 
          array (
            'maximumWidth' => 250,
            'maximumHeight' => 250,
          ),
          'Neos.Media.Browser:Preview' => 
          array (
            'maximumWidth' => 1000,
            'maximumHeight' => 1000,
          ),
          'Neos.Seo:OpenGraph.Square' => 
          array (
            'maximumWidth' => 1080,
            'maximumHeight' => 1080,
          ),
          'Neos.Seo:OpenGraph.Landscape' => 
          array (
            'maximumWidth' => 1200,
            'maximumHeight' => 628,
          ),
          'Neos.Seo:TwitterCard.SummaryCardLargeImage' => 
          array (
            'maximumWidth' => 1200,
            'maximumHeight' => 600,
          ),
          'Neos.Seo:TwitterCard.SummaryCard' => 
          array (
            'maximumWidth' => 600,
            'maximumHeight' => 600,
          ),
        ),
        'autoCreateThumbnailPresets' => true,
        'iconSet' => 
        array (
          'path' => 'resource://Neos.Media/Public/IconSets/vivid',
          'extension' => 'svg',
        ),
        'assetSources' => 
        array (
          'neos' => 
          array (
            'assetSource' => 'Neos\\Media\\Domain\\Model\\AssetSource\\Neos\\NeosAssetSource',
            'assetSourceOptions' => 
            array (
              'icon' => 'resource://Neos.Media/Public/Icons/NeosWhite.svg',
              'description' => 'Assets in the local asset storage',
              'asyncThumbnails' => NULL,
            ),
          ),
        ),
        'asset' => 
        array (
          'modelMappingStrategy' => 
          array (
            'default' => 'Neos\\Media\\Domain\\Model\\Document',
            'patterns' => 
            array (
              '[image/.*]' => 
              array (
                'className' => 'Neos\\Media\\Domain\\Model\\Image',
              ),
              '[audio/.*]' => 
              array (
                'className' => 'Neos\\Media\\Domain\\Model\\Audio',
              ),
              '[video/.*]' => 
              array (
                'className' => 'Neos\\Media\\Domain\\Model\\Video',
              ),
            ),
          ),
        ),
        'image' => 
        array (
          'defaultOptions' => 
          array (
            'quality' => 90,
            'convertCMYKToRGB' => true,
            'convertFormats' => 
            array (
            ),
            'interlace' => (defined('\\Imagine\\Image\\ImageInterface::INTERLACE_NONE') ? constant('\\Imagine\\Image\\ImageInterface::INTERLACE_NONE') : null),
            'resizeFilter' => (defined('\\Imagine\\Image\\ImageInterface::FILTER_UNDEFINED') ? constant('\\Imagine\\Image\\ImageInterface::FILTER_UNDEFINED') : null),
          ),
        ),
        'variantPresets' => 
        array (
        ),
        'autoCreateImageVariantPresets' => false,
        'thumbnailGenerators' => 
        array (
          'Neos\\Media\\Domain\\Model\\ThumbnailGenerator\\DocumentThumbnailGenerator' => 
          array (
            'resolution' => 120,
            'supportedExtensions' => 
            array (
              0 => 'pdf',
              1 => 'eps',
              2 => 'ai',
            ),
            'paginableDocuments' => 
            array (
              0 => 'pdf',
            ),
            'overrideImagineDriverCheck' => false,
          ),
          'Neos\\Media\\Domain\\Model\\ThumbnailGenerator\\FontDocumentThumbnailGenerator' => 
          array (
            'supportedExtensions' => 
            array (
              0 => 'ttf',
              1 => 'otf',
            ),
          ),
        ),
        'Browser' => 
        array (
          'bodyClasses' => 'neos neos-module media-browser',
          'scripts' => 
          array (
            0 => 'resource://Neos.Media.Browser/Public/Libraries/jquery/jquery-3.6.0.min.js',
            1 => 'resource://Neos.Twitter.Bootstrap/Public/2/js/bootstrap.min.js',
            2 => 'resource://Neos.Neos/Public/JavaScript/Main.min.js',
            3 => 'resource://Neos.Media.Browser/Public/Libraries/bootstrap/bootstrap-components.js',
            4 => 'resource://Neos.Media.Browser/Public/JavaScript/media-browser.js',
          ),
          'styles' => 
          array (
            0 => 'resource://Neos.Neos/Public/Styles/Neos.css',
            1 => 'resource://Neos.Media.Browser/Public/Styles/MediaBrowser.css',
            2 => 'resource://Neos.Media.Browser/Public/Styles/Main.css',
          ),
          'features' => 
          array (
            'variantsTab' => 
            array (
              'enable' => false,
            ),
            'createAssetRedirectsOption' => 
            array (
              'enable' => true,
            ),
          ),
        ),
      ),
      'ContentRepository' => 
      array (
        'contentDimensions' => 
        array (
          'language' => 
          array (
            'label' => 'Neos.Demo:Main:contentDimensions.language',
            'icon' => 'icon-language',
            'default' => 'en_US',
            'defaultPreset' => 'en_US',
            'presets' => 
            array (
              'en_US' => 
              array (
                'label' => 'English (US)',
                'values' => 
                array (
                  0 => 'en_US',
                ),
                'uriSegment' => 'en',
              ),
              'en_UK' => 
              array (
                'label' => 'English (UK)',
                'values' => 
                array (
                  0 => 'en_UK',
                  1 => 'en_US',
                ),
                'uriSegment' => 'uk',
              ),
              'de' => 
              array (
                'label' => 'German',
                'values' => 
                array (
                  0 => 'de',
                ),
                'uriSegment' => 'de',
              ),
              'fr' => 
              array (
                'label' => 'French',
                'values' => 
                array (
                  0 => 'fr',
                ),
                'uriSegment' => 'fr',
              ),
              'nl' => 
              array (
                'label' => 'Dutch',
                'values' => 
                array (
                  0 => 'nl',
                  1 => 'de',
                ),
                'uriSegment' => 'nl',
              ),
              'da' => 
              array (
                'label' => 'Danish',
                'values' => 
                array (
                  0 => 'da',
                ),
                'uriSegment' => 'da',
              ),
              'lv' => 
              array (
                'label' => 'Latvian',
                'values' => 
                array (
                  0 => 'lv',
                ),
                'uriSegment' => 'lv',
              ),
            ),
          ),
        ),
        'labelGenerator' => 
        array (
          'eel' => 
          array (
            'defaultContext' => 
            array (
              'String' => 'Neos\\Eel\\Helper\\StringHelper',
              'Array' => 'Neos\\Eel\\Helper\\ArrayHelper',
              'Date' => 'Neos\\Eel\\Helper\\DateHelper',
              'Configuration' => 'Neos\\Eel\\Helper\\ConfigurationHelper',
              'Math' => 'Neos\\Eel\\Helper\\MathHelper',
              'Json' => 'Neos\\Eel\\Helper\\JsonHelper',
              'I18n' => 'Neos\\Flow\\I18n\\EelHelper\\TranslationHelper',
              'q' => 'Neos\\Eel\\FlowQuery\\FlowQuery::q',
              'Neos.Node' => 'Neos\\Neos\\Fusion\\Helper\\NodeHelper',
            ),
          ),
        ),
        'fallbackNodeType' => 'Neos.Neos:FallbackNode',
      ),
      'Party' => 
      array (
        'availableElectronicAddressTypes' => 
        array (
          'Aim' => 'Aim',
          'Email' => 'Email',
          'Icq' => 'Icq',
          'Jabber' => 'Jabber',
          'Msn' => 'Msn',
          'Sip' => 'Sip',
          'Skype' => 'Skype',
          'Url' => 'Url',
          'Yahoo' => 'Yahoo',
        ),
        'availableUsageTypes' => 
        array (
          'Home' => 'Home',
          'Work' => 'Work',
        ),
      ),
      'Fusion' => 
      array (
        'rendering' => 
        array (
          'exceptionHandler' => 'Neos\\Fusion\\Core\\ExceptionHandlers\\ThrowingHandler',
          'innerExceptionHandler' => 'Neos\\Fusion\\Core\\ExceptionHandlers\\BubblingHandler',
        ),
        'debugMode' => false,
        'enableContentCache' => true,
        'enableObjectTreeCache' => false,
        'enableParsePartialsCache' => true,
        'defaultContext' => 
        array (
          'String' => 'Neos\\Eel\\Helper\\StringHelper',
          'Array' => 'Neos\\Eel\\Helper\\ArrayHelper',
          'Date' => 'Neos\\Eel\\Helper\\DateHelper',
          'Configuration' => 'Neos\\Eel\\Helper\\ConfigurationHelper',
          'Math' => 'Neos\\Eel\\Helper\\MathHelper',
          'Json' => 'Neos\\Eel\\Helper\\JsonHelper',
          'Security' => 'Neos\\Eel\\Helper\\SecurityHelper',
          'Translation' => 'Neos\\Flow\\I18n\\EelHelper\\TranslationHelper',
          'StaticResource' => 'Neos\\Flow\\ResourceManagement\\EelHelper\\StaticResourceHelper',
          'Type' => 'Neos\\Eel\\Helper\\TypeHelper',
          'I18n' => 'Neos\\Flow\\I18n\\EelHelper\\TranslationHelper',
          'File' => 'Neos\\Eel\\Helper\\FileHelper',
          'q' => 'Neos\\Eel\\FlowQuery\\FlowQuery::q',
          'BaseUri' => 'Neos\\Fusion\\Eel\\BaseUriHelper',
          'Form.Schema' => 'Neos\\Fusion\\Form\\Runtime\\Helper\\SchemaHelper',
          'Neos.Node' => 'Neos\\Neos\\Fusion\\Helper\\NodeHelper',
          'Neos.Link' => 'Neos\\Neos\\Fusion\\Helper\\LinkHelper',
          'Neos.Array' => 'Neos\\Neos\\Fusion\\Helper\\ArrayHelper',
          'Neos.Rendering' => 'Neos\\Neos\\Fusion\\Helper\\RenderingHelper',
          'Neos.Caching' => 'Neos\\Neos\\Fusion\\Helper\\CachingHelper',
          'Neos.Ui.Workspace' => 'Neos\\Neos\\Ui\\Fusion\\Helper\\WorkspaceHelper',
          'Neos.Ui.StaticResources' => 'Neos\\Neos\\Ui\\Fusion\\Helper\\StaticResourcesHelper',
          'Neos.Ui.PositionalArraySorter' => 'Neos\\Neos\\Ui\\Fusion\\Helper\\PositionalArraySorterHelper',
          'Neos.Seo.Image' => 'Neos\\Seo\\Fusion\\Helper\\ImageHelper',
        ),
        'Afx' => 
        array (
        ),
        'dsl' => 
        array (
          'afx' => 'Neos\\Fusion\\Afx\\Dsl\\AfxDslImplementation',
        ),
        'Form' => 
        array (
        ),
      ),
      'Neos' => 
      array (
        'fusion' => 
        array (
          'autoInclude' => 
          array (
            'Neos.Fusion.Form' => true,
            'Neos.Fusion' => true,
            'Neos.Neos' => true,
            'Neos.Neos.Ui' => true,
            'Neos.NodeTypes.AssetList' => true,
            'Neos.NodeTypes.Navigation' => true,
            'Neos.Seo' => true,
            'Neos.NodeTypes.ContentReferences' => true,
            'Neos.NodeTypes.Html' => true,
          ),
          'enableObjectTreeCache' => false,
          'contentCacheDebugMode' => false,
        ),
        'Ui' => 
        array (
          'Compiled' => 
          array (
          ),
          'splashScreen' => 
          array (
            'partial' => 'SplashScreen',
          ),
          'resources' => 
          array (
            'javascript' => 
            array (
              'Neos.Neos.UI:Vendor' => 
              array (
                'resource' => '${"resource://" + Neos.Ui.StaticResources.compiledResourcePackage() + "/Public/JavaScript/Vendor.js"}',
                'position' => 'start 1000',
              ),
              'Neos.Neos.UI:Host' => 
              array (
                'resource' => '${"resource://" + Neos.Ui.StaticResources.compiledResourcePackage() + "/Public/JavaScript/Host.js"}',
                'position' => 'start 900',
              ),
            ),
            'stylesheets' => 
            array (
              'Neos.Neos.UI:Host' => 
              array (
                'resource' => '${"resource://" + Neos.Ui.StaticResources.compiledResourcePackage() + "/Public/Styles/Host.css"}',
                'position' => 'start 1000',
              ),
              'Neos.Neos.UI:HostOnlyStyles' => 
              array (
                'resource' => '${"resource://" + Neos.Ui.StaticResources.compiledResourcePackage() + "/Public/Styles/HostOnlyStyles.css"}',
                'position' => 'start 900',
              ),
            ),
          ),
          'contentCanvas' => 
          array (
            'backgroundColor' => '#ffffff',
          ),
          'frontendConfiguration' => 
          array (
            'editPreviewModes' => '${Neos.Ui.PositionalArraySorter.sort(Configuration.setting(\'Neos.Neos.userInterface.editPreviewModes\'))}',
            'hotkeys' => 
            array (
              'UI.RightSideBar.toggle' => 't i',
              'UI.FullScreen.toggle' => 't f',
              'UI.LeftSideBar.toggle' => 't l',
              'UI.LeftSideBar.toggleContentTree' => 't c',
              'UI.LeftSideBar.toggleSearchBar' => 't s',
              'UI.AddNodeModal.close' => 'c m',
              'UI.Drawer.toggle' => 't d',
              'UI.InsertionModeModal.cancel' => 'c i',
              'UI.InsertionModeModal.apply' => 'a i',
              'UI.ContentCanvas.reload' => 'r c',
              'UI.Inspector.discard' => 'd i',
              'UI.Inspector.escape' => 'e i',
              'UI.Inspector.resume' => 'r i',
              'UI.NodeCreationDialog.back' => 'b n',
              'UI.NodeCreationDialog.cancel' => 'c n',
              'UI.NodeCreationDialog.apply' => 'a n',
              'UI.NodeVariantCreationDialog.cancel' => 'c v',
              'UI.NodeVariantCreationDialog.createEmpty' => 'c e v',
              'UI.NodeVariantCreationDialog.createAndCopy' => 'c c v',
              'CR.Nodes.unfocus' => 'u n',
            ),
          ),
          'frontendDevelopmentMode' => false,
          'nodeTypeRoles' => 
          array (
            'ignored' => 'unstructured',
            'document' => 'Neos.Neos:Document',
            'content' => 'Neos.Neos:Content',
            'contentCollection' => 'Neos.Neos:ContentCollection',
          ),
          'configurationDefaultEelContext' => 
          array (
            'Neos.Ui.Api' => 'Neos\\Neos\\Ui\\Fusion\\Helper\\ApiHelper',
            'Neos.Ui.Workspace' => 'Neos\\Neos\\Ui\\Fusion\\Helper\\WorkspaceHelper',
            'Neos.Ui.NodeInfo' => 'Neos\\Neos\\Ui\\Fusion\\Helper\\NodeInfoHelper',
            'Neos.Ui.ContentDimensions' => 'Neos\\Neos\\Ui\\Fusion\\Helper\\ContentDimensionsHelper',
            'Neos.Ui.StaticResources' => 'Neos\\Neos\\Ui\\Fusion\\Helper\\StaticResourcesHelper',
            'Neos.Ui.PositionalArraySorter' => 'Neos\\Neos\\Ui\\Fusion\\Helper\\PositionalArraySorterHelper',
          ),
          'documentNodeInformation' => 
          array (
            'metaData' => 
            array (
              'documentNode' => '${q(documentNode).property("_contextPath")}',
              'siteNode' => '${q(site).property(\'_contextPath\')}',
              'previewUrl' => '${Neos.Ui.NodeInfo.createRedirectToNode(controllerContext, documentNode)}',
              'contentDimensions' => 
              array (
                'active' => '${documentNode.context.dimensions}',
                'allowedPresets' => '${Neos.Ui.Api.emptyArrayToObject(Neos.Ui.ContentDimensions.allowedPresetsByName(documentNode.context.dimensions))}',
              ),
              'documentNodeSerialization' => '${Neos.Ui.NodeInfo.renderNodeWithPropertiesAndChildrenInformation(documentNode, controllerContext)}',
            ),
          ),
          'initialState' => 
          array (
            'changes' => 
            array (
              'pending' => 
              array (
              ),
              'processing' => 
              array (
              ),
              'failed' => 
              array (
              ),
            ),
            'cr' => 
            array (
              'nodes' => 
              array (
                'byContextPath' => '${Neos.Ui.NodeInfo.defaultNodesForBackend(site, documentNode, controllerContext)}',
                'siteNode' => '${q(site).property(\'_contextPath\')}',
                'documentNode' => '${q(documentNode).property(\'_contextPath\')}',
                'clipboard' => '${clipboardNodes || []}',
                'clipboardMode' => '${clipboardMode || null}',
              ),
              'contentDimensions' => 
              array (
                'byName' => '${Neos.Ui.ContentDimensions.contentDimensionsByName()}',
                'active' => '${documentNode.context.dimensions}',
                'allowedPresets' => '${Neos.Ui.Api.emptyArrayToObject(Neos.Ui.ContentDimensions.allowedPresetsByName(documentNode.context.dimensions))}',
              ),
              'workspaces' => 
              array (
                'personalWorkspace' => '${Neos.Ui.Workspace.getPersonalWorkspace()}',
              ),
            ),
            'ui' => 
            array (
              'contentCanvas' => 
              array (
                'src' => '${Neos.Ui.NodeInfo.uri(documentNode, controllerContext)}',
                'backgroundColor' => '${Configuration.setting(\'Neos.Neos.Ui.contentCanvas.backgroundColor\')}',
              ),
              'debugMode' => false,
              'editPreviewMode' => '${q(user).property("preferences.preferences")["contentEditing.editPreviewMode"] || Configuration.setting(\'Neos.Neos.userInterface.defaultEditPreviewMode\')}',
              'fullScreen' => 
              array (
                'isFullScreen' => false,
              ),
              'leftSideBar' => 
              array (
                'isHidden' => false,
                'contentTree' => 
                array (
                  'isHidden' => true,
                ),
                'searchBar' => 
                array (
                  'isVisible' => false,
                ),
              ),
              'rightSideBar' => 
              array (
                'isHidden' => false,
              ),
              'addNodeModal' => 
              array (
                'referenceNode' => '',
                'mode' => 'insert',
              ),
              'drawer' => 
              array (
                'isHidden' => true,
              ),
              'pageTree' => 
              array (
                'isLoading' => false,
                'hasError' => false,
                'focused' => '${[q(documentNode).property(\'_contextPath\')]}',
                'active' => '${q(documentNode).property(\'_contextPath\')}',
              ),
              'remote' => 
              array (
                'isSaving' => false,
                'isPublishing' => false,
                'isDiscarding' => false,
              ),
            ),
            'user' => 
            array (
              'name' => 
              array (
                'title' => '${q(user).property(\'name.title\')}',
                'firstName' => '${q(user).property(\'name.firstName\')}',
                'middleName' => '${q(user).property(\'name.middleName\')}',
                'lastName' => '${q(user).property(\'name.lastName\')}',
                'otherName' => '${q(user).property(\'name.otherName\')}',
                'fullName' => '${q(user).property(\'name.fullName\')}',
              ),
              'preferences' => 
              array (
                'interfaceLanguage' => '${q(user).property(\'preferences.interfaceLanguage\') || Configuration.setting(\'Neos.Neos.userInterface.defaultLanguage\')}',
              ),
              'settings' => 
              array (
                'isAutoPublishingEnabled' => false,
                'targetWorkspace' => 'live',
              ),
            ),
          ),
          'changes' => 
          array (
            'types' => 
            array (
              'Neos.Neos.Ui:Property' => 'Neos\\Neos\\Ui\\Domain\\Model\\Changes\\Property',
              'Neos.Neos.Ui:CreateInto' => 'Neos\\Neos\\Ui\\Domain\\Model\\Changes\\Create',
              'Neos.Neos.Ui:CreateBefore' => 'Neos\\Neos\\Ui\\Domain\\Model\\Changes\\CreateBefore',
              'Neos.Neos.Ui:CreateAfter' => 'Neos\\Neos\\Ui\\Domain\\Model\\Changes\\CreateAfter',
              'Neos.Neos.Ui:RemoveNode' => 'Neos\\Neos\\Ui\\Domain\\Model\\Changes\\Remove',
              'Neos.Neos.Ui:CopyBefore' => 'Neos\\Neos\\Ui\\Domain\\Model\\Changes\\CopyBefore',
              'Neos.Neos.Ui:CopyAfter' => 'Neos\\Neos\\Ui\\Domain\\Model\\Changes\\CopyAfter',
              'Neos.Neos.Ui:CopyInto' => 'Neos\\Neos\\Ui\\Domain\\Model\\Changes\\CopyInto',
              'Neos.Neos.Ui:MoveBefore' => 'Neos\\Neos\\Ui\\Domain\\Model\\Changes\\MoveBefore',
              'Neos.Neos.Ui:MoveAfter' => 'Neos\\Neos\\Ui\\Domain\\Model\\Changes\\MoveAfter',
              'Neos.Neos.Ui:MoveInto' => 'Neos\\Neos\\Ui\\Domain\\Model\\Changes\\MoveInto',
            ),
          ),
        ),
        'modules' => 
        array (
          'management' => 
          array (
            'submodules' => 
            array (
              'media' => 
              array (
                'controller' => '\\Neos\\Media\\Browser\\Controller\\AssetController',
                'label' => 'Neos.Media.Browser:Main:module.label',
                'description' => 'Neos.Media.Browser:Main:module.description',
                'icon' => 'fas fa-camera',
                'mainStylesheet' => 'Lite',
                'privilegeTarget' => 'Neos.Media.Browser:ManageAssets',
                'additionalResources' => 
                array (
                  'javaScripts' => 
                  array (
                    0 => 'resource://Neos.Media.Browser/Public/Libraries/jquery/jquery-3.6.0.min.js',
                    1 => 'resource://Neos.Twitter.Bootstrap/Public/2/js/bootstrap.min.js',
                    2 => 'resource://Neos.Media.Browser/Public/Libraries/bootstrap/bootstrap-components.js',
                  ),
                  'styleSheets' => 
                  array (
                    0 => 'resource://Neos.Media.Browser/Public/Styles/MediaBrowser.css',
                    1 => 'resource://Neos.Media.Browser/Public/Styles/Main.css',
                  ),
                ),
              ),
              'workspaces' => 
              array (
                'label' => 'Neos.Neos:Modules:workspaces.label',
                'controller' => 'Neos\\Neos\\Controller\\Module\\Management\\WorkspacesController',
                'description' => 'Neos.Neos:Modules:workspaces.description',
                'icon' => 'fas fa-th-large',
                'mainStylesheet' => 'Lite',
              ),
              'history' => 
              array (
                'label' => 'Neos.Neos:Modules:history.label',
                'controller' => 'Neos\\Neos\\Controller\\Module\\Management\\HistoryController',
                'description' => 'Neos.Neos:Modules:history.description',
                'icon' => 'fas fa-calendar-alt',
                'mainStylesheet' => 'Lite',
              ),
              'redirects' => 
              array (
                'label' => 'Neos.RedirectHandler.Ui:Modules:module.label',
                'controller' => '\\Neos\\RedirectHandler\\Ui\\Controller\\ModuleController',
                'description' => 'Neos.RedirectHandler.Ui:Modules:module.description',
                'icon' => 'fas fa-share',
                'resource' => 'Neos.RedirectHandler.Ui:Backend.Module',
                'privilegeTarget' => 'Neos.RedirectHandler.Ui:Module',
                'additionalResources' => 
                array (
                  'styleSheets' => 
                  array (
                    0 => 'resource://Neos.RedirectHandler.Ui/Public/Assets/main.bundle.css',
                  ),
                  'javaScripts' => 
                  array (
                    0 => 'resource://Neos.RedirectHandler.Ui/Public/Assets/main.bundle.js',
                  ),
                ),
              ),
            ),
            'label' => 'Neos.Neos:Modules:management.label',
            'controller' => 'Neos\\Neos\\Controller\\Module\\ManagementController',
            'description' => 'Neos.Neos:Modules:management.description',
            'icon' => 'fas fa-briefcase',
            'mainStylesheet' => 'Lite',
          ),
          'administration' => 
          array (
            'label' => 'Neos.Neos:Modules:administration.label',
            'controller' => 'Neos\\Neos\\Controller\\Module\\AdministrationController',
            'description' => 'Neos.Neos:Modules:administration.description',
            'icon' => 'fas fa-cogs',
            'mainStylesheet' => 'Lite',
            'submodules' => 
            array (
              'users' => 
              array (
                'label' => 'Neos.Neos:Modules:users.label',
                'controller' => 'Neos\\Neos\\Controller\\Module\\Administration\\UsersController',
                'description' => 'Neos.Neos:Modules:users.description',
                'icon' => 'fas fa-users',
                'mainStylesheet' => 'Lite',
                'actions' => 
                array (
                  'new' => 
                  array (
                    'label' => 'Neos.Neos:Modules:users.actions.new.label',
                    'title' => 'Neos.Neos:Modules:users.actions.new.title',
                  ),
                ),
              ),
              'packages' => 
              array (
                'label' => 'Neos.Neos:Modules:packages.label',
                'controller' => 'Neos\\Neos\\Controller\\Module\\Administration\\PackagesController',
                'description' => 'Neos.Neos:Modules:packages.description',
                'icon' => 'fas fa-archive',
                'mainStylesheet' => 'Lite',
              ),
              'sites' => 
              array (
                'label' => 'Neos.Neos:Modules:sites.label',
                'controller' => 'Neos\\Neos\\Controller\\Module\\Administration\\SitesController',
                'description' => 'Neos.Neos:Modules:sites.description',
                'icon' => 'fas fa-globe',
                'mainStylesheet' => 'Lite',
                'actions' => 
                array (
                  'newSite' => 
                  array (
                    'label' => 'Neos.Neos:Modules:sites.actions.newSite.label',
                    'title' => 'Neos.Neos:Modules:sites.actions.newSite.title',
                  ),
                ),
              ),
              'configuration' => 
              array (
                'label' => 'Neos.Neos:Modules:configuration.label',
                'controller' => 'Neos\\Neos\\Controller\\Module\\Administration\\ConfigurationController',
                'description' => 'Neos.Neos:Modules:configuration.description',
                'icon' => 'fas fa-list-alt',
                'mainStylesheet' => 'Lite',
              ),
              'dimensions' => 
              array (
                'label' => 'Neos.Neos:Modules:dimensions.label',
                'controller' => 'Neos\\Neos\\Controller\\Module\\Administration\\DimensionController',
                'description' => 'Neos.Neos:Modules:dimensions.description',
                'icon' => 'fas fa-code-branch',
                'mainStylesheet' => 'Lite',
              ),
            ),
          ),
          'user' => 
          array (
            'label' => 'Neos.Neos:Modules:user.label',
            'controller' => '\\Neos\\Neos\\Controller\\Module\\UserController',
            'hideInMenu' => true,
            'mainStylesheet' => 'Lite',
            'submodules' => 
            array (
              'usersettings' => 
              array (
                'label' => 'Neos.Neos:Modules:userSettings.label',
                'controller' => '\\Neos\\Neos\\Controller\\Module\\User\\UserSettingsController',
                'description' => 'Neos.Neos:Modules:userSettings.description',
                'icon' => 'fas fa-user',
                'mainStylesheet' => 'Lite',
              ),
            ),
          ),
          'content' => 
          array (
            'position' => 'start',
            'label' => 'Neos.Neos:Main:content',
            'controller' => 'Neos\\Neos\\Ui\\Controller\\BackendController',
            'description' => 'Neos.Neos:Modules:management.description',
            'icon' => 'fas fa-file',
            'mainStylesheet' => 'Lite',
          ),
        ),
        'userInterface' => 
        array (
          'translation' => 
          array (
            'autoInclude' => 
            array (
              'Neos.Media.Browser' => 
              array (
                0 => 'Main',
              ),
              'Neos.Neos' => 
              array (
                0 => 'Main',
                1 => 'Inspector',
                2 => 'Modules',
                3 => 'NodeTypes/*',
              ),
              'Neos.NodeTypes.BaseMixins' => 
              array (
                0 => 'NodeTypes/*',
              ),
              'Neos.Neos.Ui' => 
              array (
                0 => 'Main',
              ),
              'Neos.NodeTypes.AssetList' => 
              array (
                0 => 'NodeTypes/*',
              ),
              'Neos.NodeTypes.Navigation' => 
              array (
                0 => 'NodeTypes/*',
              ),
              'Neos.RedirectHandler.Ui' => 
              array (
                0 => 'Modules',
              ),
              'Neos.Seo' => 
              array (
                0 => 'NodeTypes/*',
              ),
              'Neos.NodeTypes.ContentReferences' => 
              array (
                0 => 'NodeTypes/*',
              ),
              'Neos.NodeTypes.Html' => 
              array (
                0 => 'NodeTypes/*',
              ),
              'Neos.Demo' => 
              array (
                0 => 'Main',
                1 => 'NodeTypes/*',
              ),
            ),
          ),
          'scrambleTranslatedLabels' => false,
          'requireJsPathMapping' => 
          array (
            'Neos.Neos/Validation' => 'resource://Neos.Neos/Public/JavaScript/Shared/Validation/',
            'Neos.Neos/Inspector/Editors' => 'resource://Neos.Neos/Public/JavaScript/Content/Inspector/Editors/',
            'Neos.Neos/Inspector/Handlers' => 'resource://Neos.Neos/Public/JavaScript/Content/Inspector/Handlers/',
            'Neos.Neos/Inspector/Views' => 'resource://Neos.Neos/Public/JavaScript/Content/Inspector/Views/',
          ),
          'defaultLanguage' => 'en',
          'availableLanguages' => 
          array (
            'da' => 'Dansk – Danish',
            'de' => 'Deutsch – German',
            'en' => 'English – English',
            'es' => 'Español – Spanish',
            'fi' => 'Suomi – Finnish',
            'fr' => 'Français – French',
            'km' => 'ភាសាខ្មែរ – Khmer',
            'lv' => 'Latviešu – Latvian',
            'nl' => 'Nederlands – Dutch',
            'no' => 'Norsk bokmål – Norwegian Bokmål',
            'pl' => 'Polski – Polish',
            'pt-BR' => 'Português (Brasil) – Portuguese (Brazil)',
            'ru' => 'Pусский – Russian',
            'zh-CN' => '简体中文 – Chinese, Simplified',
          ),
          'navigateComponent' => 
          array (
            'nodeTree' => 
            array (
              'loadingDepth' => 4,
              'presets' => 
              array (
                'default' => 
                array (
                  'baseNodeType' => 'Neos.Neos:Document',
                ),
              ),
            ),
            'structureTree' => 
            array (
              'loadingDepth' => 4,
            ),
          ),
          'inspector' => 
          array (
            'dataTypes' => 
            array (
              'string' => 
              array (
                'editor' => 'Neos.Neos/Inspector/Editors/TextFieldEditor',
                'defaultValue' => '',
              ),
              'integer' => 
              array (
                'editor' => 'Neos.Neos/Inspector/Editors/TextFieldEditor',
                'defaultValue' => 0,
              ),
              'boolean' => 
              array (
                'editor' => 'Neos.Neos/Inspector/Editors/BooleanEditor',
                'defaultValue' => false,
              ),
              'array' => 
              array (
                'typeConverter' => 'Neos\\Flow\\Property\\TypeConverter\\ArrayConverter',
                'editor' => 'Neos.Neos/Inspector/Editors/SelectBoxEditor',
                'editorOptions' => 
                array (
                  'multiple' => true,
                  'placeholder' => 'Choose',
                ),
                'defaultValue' => 
                array (
                ),
              ),
              'Neos\\Media\\Domain\\Model\\ImageInterface' => 
              array (
                'typeConverter' => 'Neos\\Neos\\Ui\\TypeConverter\\UiDependentImageSerializer',
                'editor' => 'Neos.Neos/Inspector/Editors/ImageEditor',
                'editorOptions' => 
                array (
                  'maximumFileSize' => NULL,
                  'features' => 
                  array (
                    'crop' => true,
                    'upload' => true,
                    'mediaBrowser' => true,
                    'resize' => false,
                  ),
                  'crop' => 
                  array (
                    'aspectRatio' => 
                    array (
                      'options' => 
                      array (
                        'square' => 
                        array (
                          'width' => 1,
                          'height' => 1,
                          'label' => 'Square',
                        ),
                        'fourFive' => 
                        array (
                          'width' => 4,
                          'height' => 5,
                        ),
                        'fiveSeven' => 
                        array (
                          'width' => 5,
                          'height' => 7,
                        ),
                        'twoThree' => 
                        array (
                          'width' => 2,
                          'height' => 3,
                        ),
                        'fourThree' => 
                        array (
                          'width' => 4,
                          'height' => 3,
                        ),
                        'sixteenNine' => 
                        array (
                          'width' => 16,
                          'height' => 9,
                        ),
                      ),
                      'enableOriginal' => true,
                      'allowCustom' => true,
                      'locked' => 
                      array (
                        'width' => 0,
                        'height' => 0,
                      ),
                    ),
                  ),
                ),
              ),
              'Neos\\Media\\Domain\\Model\\Asset' => 
              array (
                'typeConverter' => 'Neos\\Neos\\TypeConverter\\EntityToIdentityConverter',
                'editor' => 'Neos.Neos/Inspector/Editors/AssetEditor',
                'editorOptions' => 
                array (
                  'features' => 
                  array (
                    'upload' => true,
                    'mediaBrowser' => true,
                  ),
                ),
              ),
              'array<Neos\\Media\\Domain\\Model\\Asset>' => 
              array (
                'typeConverter' => 'Neos\\Flow\\Property\\TypeConverter\\TypedArrayConverter',
                'editor' => 'Neos.Neos/Inspector/Editors/AssetEditor',
                'editorOptions' => 
                array (
                  'multiple' => true,
                  'features' => 
                  array (
                    'upload' => true,
                    'mediaBrowser' => true,
                  ),
                ),
              ),
              'DateTime' => 
              array (
                'typeConverter' => 'Neos\\Neos\\Service\\Mapping\\DateStringConverter',
                'editor' => 'Neos.Neos/Inspector/Editors/DateTimeEditor',
                'editorOptions' => 
                array (
                  'format' => 'd-m-Y',
                ),
              ),
              'reference' => 
              array (
                'typeConverter' => 'Neos\\Neos\\Service\\Mapping\\NodeReferenceConverter',
                'editor' => 'Neos.Neos/Inspector/Editors/ReferenceEditor',
              ),
              'references' => 
              array (
                'typeConverter' => 'Neos\\Neos\\Service\\Mapping\\NodeReferenceConverter',
                'editor' => 'Neos.Neos/Inspector/Editors/ReferencesEditor',
              ),
            ),
            'editors' => 
            array (
              'Neos.Neos/Inspector/Editors/CodeEditor' => 
              array (
                'editorOptions' => 
                array (
                  'buttonLabel' => 'Neos.Neos:Main:content.inspector.editors.codeEditor.editCode',
                ),
              ),
              'Neos.Neos/Inspector/Editors/DateTimeEditor' => 
              array (
                'editorOptions' => 
                array (
                  'placeholder' => 'Neos.Neos:Main:content.inspector.editors.dateTimeEditor.noDateSet',
                ),
              ),
              'Neos.Neos/Inspector/Editors/AssetEditor' => 
              array (
                'editorOptions' => 
                array (
                  'fileUploadLabel' => 'Neos.Neos:Main:choose',
                ),
              ),
              'Neos.Neos/Inspector/Editors/ImageEditor' => 
              array (
                'editorOptions' => 
                array (
                  'fileUploadLabel' => 'Neos.Neos:Main:choose',
                ),
              ),
              'Neos.Neos/Inspector/Editors/LinkEditor' => 
              array (
                'editorOptions' => 
                array (
                  'placeholder' => 'Neos.Neos:Main:content.inspector.editors.linkEditor.search',
                ),
              ),
              'Neos.Neos/Inspector/Editors/ReferencesEditor' => 
              array (
                'editorOptions' => 
                array (
                  'placeholder' => 'Neos.Neos:Main:typeToSearch',
                  'nodeTypes' => 
                  array (
                    0 => 'Neos.Neos:Document',
                  ),
                  'threshold' => 2,
                ),
              ),
              'Neos.Neos/Inspector/Editors/ReferenceEditor' => 
              array (
                'editorOptions' => 
                array (
                  'placeholder' => 'Neos.Neos:Main:typeToSearch',
                  'nodeTypes' => 
                  array (
                    0 => 'Neos.Neos:Document',
                  ),
                  'threshold' => 2,
                ),
              ),
              'Neos.Neos/Inspector/Editors/SelectBoxEditor' => 
              array (
                'editorOptions' => 
                array (
                  'placeholder' => 'Neos.Neos:Main:choose',
                ),
              ),
            ),
          ),
          'defaultEditPreviewMode' => 'inPlace',
          'editPreviewModes' => 
          array (
            'live' => 
            array (
              'isEditingMode' => false,
              'isPreviewMode' => false,
              'fusionRenderingPath' => '',
              'title' => 'Live',
            ),
            'inPlace' => 
            array (
              'isEditingMode' => true,
              'isPreviewMode' => false,
              'fusionRenderingPath' => '',
              'title' => 'Neos.Neos:Main:editPreviewModes.inPlace',
              'position' => 100,
            ),
            'rawContent' => 
            array (
              'isEditingMode' => true,
              'isPreviewMode' => false,
              'fusionRenderingPath' => 'rawContent',
              'title' => 'Neos.Neos:Main:editPreviewModes.rawContent',
              'position' => 200,
            ),
            'desktop' => 
            array (
              'isEditingMode' => false,
              'isPreviewMode' => true,
              'fusionRenderingPath' => '',
              'title' => 'Neos.Neos:Main:editPreviewModes.desktop',
              'position' => 100,
            ),
            'print' => 
            array (
              'isEditingMode' => false,
              'isPreviewMode' => true,
              'fusionRenderingPath' => 'print',
              'title' => 'Neos.Demo:Main:editPreviewModes.print',
              'position' => 200,
            ),
          ),
          'backendLoginForm' => 
          array (
            'backgroundImage' => 'resource://Neos.Neos/Public/Images/Login/Wallpaper.webp',
            'stylesheets' => 
            array (
              'Neos.Neos:DefaultStyles' => 'resource://Neos.Neos/Public/Styles/Login.css',
            ),
          ),
        ),
        'defaultSiteNodeName' => NULL,
        'headerComment' => '
<!--
This website is powered by Neos, the Open Source Content Application Platform licensed under the GNU/GPL.
Neos is based on Flow, a powerful PHP application framework licensed under the MIT license.

More information and contribution opportunities at https://www.neos.io
-->
',
        'routing' => 
        array (
          'supportEmptySegmentForDimensions' => true,
        ),
        'nodeTypes' => 
        array (
          'groups' => 
          array (
            'general' => 
            array (
              'position' => 'start',
              'label' => 'Neos.Neos:Main:nodeTypes.groups.general',
              'collapsed' => false,
            ),
            'structure' => 
            array (
              'position' => 100,
              'label' => 'Neos.Neos:Main:nodeTypes.groups.structure',
              'collapsed' => false,
            ),
            'plugins' => 
            array (
              'position' => 200,
              'label' => 'Neos.Neos:Main:nodeTypes.groups.plugins',
              'collapsed' => true,
            ),
          ),
        ),
        'moduleConfiguration' => 
        array (
          'widgetTemplatePathAndFileName' => 'resource://Neos.Neos/Private/Templates/Module/Widget.html',
          'mainStylesheet' => 'Main',
          'preferredStartModules' => 
          array (
            0 => 'content',
            1 => 'user/usersettings',
          ),
        ),
        'eventLog' => 
        array (
          'enabled' => false,
          'monitorEntities' => 
          array (
            'Neos\\Flow\\Security\\Account' => 
            array (
              'events' => 
              array (
                'created' => 'Account.Created',
                'deleted' => 'Account.Deleted',
              ),
              'data' => 
              array (
                'accountIdentifier' => '${entity.accountIdentifier}',
                'authenticationProviderName' => '${entity.authenticationProviderName}',
                'name' => '${entity.party.name.fullName}',
              ),
            ),
          ),
        ),
        'transliterationRules' => 
        array (
          'da' => 
          array (
            'Å' => 'Aa',
            'Ø' => 'Oe',
            'å' => 'aa',
            'ø' => 'oe',
          ),
          'de' => 
          array (
            'Ä' => 'Ae',
            'Ö' => 'Oe',
            'Ü' => 'Ue',
            'ä' => 'ae',
            'ö' => 'oe',
            'ü' => 'ue',
          ),
        ),
        'Setup' => 
        array (
        ),
      ),
      'RedirectHandler' => 
      array (
        'features' => 
        array (
          'hitCounter' => false,
        ),
        'statusCode' => 
        array (
          'redirect' => 301,
          'gone' => 410,
        ),
        'validation' => 
        array (
          'sourceUriPath' => '/^[a-z0-9_\\-\\/\\.%]+$/i',
        ),
        'DatabaseStorage' => 
        array (
        ),
        'NeosAdapter' => 
        array (
          'enableRemovedNodeRedirect' => true,
          'pathPrefixConfiguration' => 
          array (
          ),
          'restrictByNodeType' => 
          array (
          ),
          'restrictByOldUriPrefix' => 
          array (
          ),
          'enableAutomaticRedirects' => true,
        ),
        'Ui' => 
        array (
          'defaultStatusCode' => 307,
          'initialStatusCodeFilter' => -1,
          'initialTypeFilter' => 'manual',
          'validation' => 
          array (
            'sourceUriPath' => '^[a-zA-Z0-9_\\-\\/\\.%]+$',
          ),
          'csv' => 
          array (
            'delimiterOptions' => 
            array (
              0 => ';',
              1 => ',',
              2 => '|',
            ),
          ),
          'statusCodes' => 
          array (
            301 => 'i18n',
            302 => 'i18n',
            303 => 'i18n',
            307 => 'i18n',
            403 => 'i18n',
            404 => 'i18n',
            410 => 'i18n',
            451 => 'i18n',
          ),
        ),
      ),
      'Behat' => 
      array (
      ),
      'Kickstarter' => 
      array (
      ),
      'SiteKickstarter' => 
      array (
      ),
      'NodeTypes' => 
      array (
        'BaseMixins' => 
        array (
        ),
        'AssetList' => 
        array (
        ),
        'Navigation' => 
        array (
        ),
        'ContentReferences' => 
        array (
        ),
        'Html' => 
        array (
        ),
      ),
      'CliSetup' => 
      array (
        'supportedImageHandlers' => 
        array (
          'Gd' => 'GD Library - generally slow, not recommended in production',
          'Gmagick' => 'Gmagick php module',
          'Imagick' => 'ImageMagick php module',
          'Vips' => 'Vips php module - fast and memory efficient, needs rokka/imagine-vips',
        ),
        'requiredImageFormats' => 
        array (
          'jpg' => 'resource://Neos.Neos/Private/Installer/TestImages/Test.jpg',
          'gif' => 'resource://Neos.Neos/Private/Installer/TestImages/Test.gif',
          'png' => 'resource://Neos.Neos/Private/Installer/TestImages/Test.png',
        ),
        'supportedDatabaseDrivers' => 
        array (
          'pdo_mysql' => 'MySQL/MariaDB via PDO',
          'mysqli' => 'MySQL/MariaDB via mysqli',
          'pdo_pgsql' => 'PostgreSQL via PDO',
        ),
      ),
      'Seo' => 
      array (
        'robotsTxt' => 
        array (
          'dimensionsPresets' => NULL,
          'excludedDimensionsPresets' => 
          array (
          ),
        ),
        'twitterCard' => 
        array (
          'siteHandle' => NULL,
        ),
        'facebook' => 
        array (
          'profileId' => '',
          'admins' => 
          array (
          ),
          'pages' => 
          array (
          ),
        ),
        'socialProfile' => 
        array (
          'type' => 'Organization',
          'logo' => '',
          'profiles' => 
          array (
            'twitter' => '',
            'facebook' => '',
            'instagram' => '',
            'linkedIn' => '',
            'youTube' => '',
          ),
        ),
      ),
      'Demo' => 
      array (
      ),
    ),
  ),
  'Routes' => 
  array (
    0 => 
    array (
      'name' => 'Neos.Media.Browser :: Image Browser',
      'uriPattern' => 'neos/media/browser/images(/{@action}).{@format}',
      'defaults' => 
      array (
        '@package' => 'Neos.Media.Browser',
        '@controller' => 'Image',
        '@format' => 'html',
        '@action' => 'index',
      ),
      'appendExceedingArguments' => true,
    ),
    1 => 
    array (
      'name' => 'Neos.Media.Browser :: Asset Browser',
      'uriPattern' => 'neos/media/browser/assets(/{@action}).{@format}',
      'defaults' => 
      array (
        '@package' => 'Neos.Media.Browser',
        '@controller' => 'Asset',
        '@format' => 'html',
        '@action' => 'index',
      ),
      'appendExceedingArguments' => true,
    ),
    2 => 
    array (
      'name' => 'Neos.Media.Browser :: Asset Proxy Service',
      'uriPattern' => 'neos/media/browser/asset-proxies(/{@action}).{@format}',
      'defaults' => 
      array (
        '@package' => 'Neos.Media.Browser',
        '@controller' => 'AssetProxy',
        '@format' => 'json',
        '@action' => 'index',
      ),
      'appendExceedingArguments' => true,
    ),
    3 => 
    array (
      'name' => 'Neos.Media.Browser :: ImageVariant Service',
      'uriPattern' => 'neos/media/browser/image-variant(/{@action}).{@format}',
      'defaults' => 
      array (
        '@package' => 'Neos.Media.Browser',
        '@controller' => 'ImageVariant',
        '@format' => 'json',
        '@action' => 'index',
      ),
      'appendExceedingArguments' => true,
    ),
    4 => 
    array (
      'name' => 'Neos.Media :: Thumbnail',
      'uriPattern' => 'media/thumbnail/{thumbnail}',
      'defaults' => 
      array (
        '@package' => 'Neos.Media',
        '@controller' => 'Thumbnail',
        '@action' => 'thumbnail',
      ),
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    5 => 
    array (
      'name' => 'Neos.Neos.Ui :: Backend :: Hostframe',
      'uriPattern' => 'neos/content',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos.Ui',
        '@action' => 'index',
        '@format' => 'html',
        '@controller' => 'Backend',
      ),
      'appendExceedingArguments' => true,
    ),
    6 => 
    array (
      'name' => 'Neos.Neos.Ui :: Backend :: Redirect to frontend URL',
      'uriPattern' => 'neos/redirect',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos.Ui',
        '@action' => 'redirectTo',
        '@format' => 'html',
        '@controller' => 'Backend',
      ),
      'appendExceedingArguments' => true,
    ),
    7 => 
    array (
      'name' => 'Neos.Neos.Ui :: Backend :: Change',
      'uriPattern' => 'neos/ui-services/change',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos.Ui',
        '@action' => 'change',
        '@format' => 'html',
        '@controller' => 'BackendService',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    8 => 
    array (
      'name' => 'Neos.Neos.Ui :: Backend :: Publish',
      'uriPattern' => 'neos/ui-services/publish',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos.Ui',
        '@action' => 'publish',
        '@format' => 'html',
        '@controller' => 'BackendService',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    9 => 
    array (
      'name' => 'Neos.Neos.Ui :: Backend :: Discard',
      'uriPattern' => 'neos/ui-services/discard',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos.Ui',
        '@action' => 'discard',
        '@format' => 'html',
        '@controller' => 'BackendService',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    10 => 
    array (
      'name' => 'Neos.Neos.Ui :: Backend :: Change Base Workspace',
      'uriPattern' => 'neos/ui-services/change-base-workspace',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos.Ui',
        '@action' => 'changeBaseWorkspace',
        '@format' => 'html',
        '@controller' => 'BackendService',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    11 => 
    array (
      'name' => 'Neos.Neos.Ui :: Backend :: Copy nodes to clipboard',
      'uriPattern' => 'neos/ui-services/copy-nodes',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos.Ui',
        '@action' => 'copyNodes',
        '@format' => 'html',
        '@controller' => 'BackendService',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    12 => 
    array (
      'name' => 'Neos.Neos.Ui :: Backend :: Cut nodes to clipboard',
      'uriPattern' => 'neos/ui-services/cut-nodes',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos.Ui',
        '@action' => 'cutNodes',
        '@format' => 'html',
        '@controller' => 'BackendService',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    13 => 
    array (
      'name' => 'Neos.Neos.Ui :: Backend :: Clear clipboard',
      'uriPattern' => 'neos/ui-services/clear-clipboard',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos.Ui',
        '@action' => 'clearClipboard',
        '@format' => 'html',
        '@controller' => 'BackendService',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    14 => 
    array (
      'name' => 'Neos.Neos.Ui :: Backend :: Load Tree',
      'uriPattern' => 'neos/ui-services/load-tree',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos.Ui',
        '@action' => 'loadTree',
        '@format' => 'html',
        '@controller' => 'BackendService',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    15 => 
    array (
      'name' => 'Neos.Neos.Ui :: Backend :: FlowQuery',
      'uriPattern' => 'neos/ui-services/flow-query',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos.Ui',
        '@action' => 'flowQuery',
        '@format' => 'html',
        '@controller' => 'BackendService',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    16 => 
    array (
      'name' => 'Neos.Neos.Ui :: Backend :: Get Workspace Info',
      'uriPattern' => 'neos/ui-services/get-workspace-info',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos.Ui',
        '@action' => 'getWorkspaceInfo',
        '@format' => 'html',
        '@controller' => 'BackendService',
      ),
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    17 => 
    array (
      'name' => 'Neos.Neos.Ui :: Backend :: Get Additional Node Metadata',
      'uriPattern' => 'neos/ui-services/get-additional-node-metadata',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos.Ui',
        '@action' => 'getAdditionalNodeMetadata',
        '@format' => 'html',
        '@controller' => 'BackendService',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    18 => 
    array (
      'name' => 'Neos.Neos :: Authentication :: Login form',
      'uriPattern' => 'neos/login(.{@format})',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@controller' => 'Login',
        '@action' => 'index',
        '@format' => 'html',
      ),
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
      'appendExceedingArguments' => true,
    ),
    19 => 
    array (
      'name' => 'Neos.Neos :: Authentication :: Token login',
      'uriPattern' => 'neos/login/token/{token}',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@controller' => 'Login',
        '@action' => 'tokenLogin',
        '@format' => 'html',
      ),
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    20 => 
    array (
      'name' => 'Neos.Neos :: Authentication :: Authenticate',
      'uriPattern' => 'neos/login(.{@format})',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@controller' => 'Login',
        '@action' => 'authenticate',
        '@format' => 'html',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    21 => 
    array (
      'name' => 'Neos.Neos :: Authentication :: Logout',
      'uriPattern' => 'neos/logout(.{@format})',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@controller' => 'Login',
        '@action' => 'logout',
        '@format' => 'html',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    22 => 
    array (
      'name' => 'Neos.Neos :: Backend :: Overview',
      'uriPattern' => 'neos',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'index',
        '@format' => 'html',
        '@controller' => 'Backend\\Backend',
      ),
    ),
    23 => 
    array (
      'name' => 'Neos.Neos :: Backend :: Content Module - Asset upload',
      'uriPattern' => 'neos/content/upload-asset',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'uploadAsset',
        '@format' => 'html',
        '@controller' => 'Backend\\Content',
      ),
      'appendExceedingArguments' => true,
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    24 => 
    array (
      'name' => 'Neos.Neos :: Backend :: Content Module - Image metadata',
      'uriPattern' => 'neos/content/image-with-metadata',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'imageWithMetadata',
        '@format' => 'html',
        '@controller' => 'Backend\\Content',
      ),
      'appendExceedingArguments' => true,
    ),
    25 => 
    array (
      'name' => 'Neos.Neos :: Backend :: Content Module - Asset metadata',
      'uriPattern' => 'neos/content/asset-with-metadata',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'assetsWithMetadata',
        '@format' => 'html',
        '@controller' => 'Backend\\Content',
      ),
    ),
    26 => 
    array (
      'name' => 'Neos.Neos :: Backend :: Content Module - Create ImageVariant',
      'uriPattern' => 'neos/content/create-image-variant',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'createImageVariant',
        '@format' => 'html',
        '@controller' => 'Backend\\Content',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    27 => 
    array (
      'name' => 'Neos.Neos :: Backend :: Content Module - Plugin Views',
      'uriPattern' => 'neos/content/plugin-views',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'pluginViews',
        '@format' => 'html',
        '@controller' => 'Backend\\Content',
      ),
    ),
    28 => 
    array (
      'name' => 'Neos.Neos :: Backend :: Content Module - Master Plugins',
      'uriPattern' => 'neos/content/master-plugins',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'masterPlugins',
        '@format' => 'html',
        '@controller' => 'Backend\\Content',
      ),
    ),
    29 => 
    array (
      'name' => 'Neos.Neos :: Backend :: Schema - NodeType',
      'uriPattern' => 'neos/schema/node-type',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'nodeTypeSchema',
        '@format' => 'html',
        '@controller' => 'Backend\\Schema',
      ),
      'appendExceedingArguments' => true,
    ),
    30 => 
    array (
      'name' => 'Neos.Neos :: Backend :: Settings',
      'uriPattern' => 'neos/settings/{@action}',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'index',
        '@format' => 'html',
        '@controller' => 'Backend\\Settings',
      ),
      'appendExceedingArguments' => true,
    ),
    31 => 
    array (
      'name' => 'Neos.Neos :: Backend :: Modules',
      'uriPattern' => 'neos/{module}',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'index',
        '@format' => 'html',
        '@controller' => 'Backend\\Module',
      ),
      'routeParts' => 
      array (
        'module' => 
        array (
          'handler' => 'Neos\\Neos\\Routing\\BackendModuleRoutePartHandler',
        ),
      ),
      'toLowerCase' => false,
      'appendExceedingArguments' => true,
    ),
    32 => 
    array (
      'name' => 'Neos.Neos :: Backend :: Backend switch site',
      'uriPattern' => 'neos/switch/to/{site}',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'switchSite',
        '@format' => 'html',
        '@controller' => 'Backend\\Backend',
      ),
      'routeParts' => 
      array (
        'site' => 
        array (
          'objectType' => 'Neos\\Neos\\Domain\\Model\\Site',
          'uriPattern' => '{name}',
        ),
      ),
    ),
    33 => 
    array (
      'name' => 'Neos.Neos :: Backend :: Backend UI XLIFF labels',
      'uriPattern' => 'neos/xliff.json',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'xliffAsJson',
        '@format' => 'html',
        '@controller' => 'Backend\\Backend',
      ),
      'appendExceedingArguments' => true,
    ),
    34 => 
    array (
      'name' => 'Neos.Neos :: Backend :: Impersonate User',
      'uriPattern' => 'neos/impersonate/user-change',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'impersonateUserWithResponse',
        '@format' => 'json',
        '@controller' => 'Backend\\Impersonate',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    35 => 
    array (
      'name' => 'Neos.Neos :: Backend :: Impersonate User restore admin',
      'uriPattern' => 'neos/impersonate/restore',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'restoreWithResponse',
        '@format' => 'json',
        '@controller' => 'Backend\\Impersonate',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    36 => 
    array (
      'name' => 'Neos.Neos :: Backend :: Impersonate User status',
      'uriPattern' => 'neos/impersonate/status',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'status',
        '@format' => 'json',
        '@controller' => 'Backend\\Impersonate',
      ),
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    37 => 
    array (
      'name' => 'Neos.Neos :: Service :: Nodes - index',
      'uriPattern' => 'neos/service/nodes',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'index',
        '@controller' => 'Service\\Nodes',
      ),
      'appendExceedingArguments' => true,
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    38 => 
    array (
      'name' => 'Neos.Neos :: Service :: Nodes - single node',
      'uriPattern' => 'neos/service/nodes/{identifier}',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'show',
        '@controller' => 'Service\\Nodes',
      ),
      'appendExceedingArguments' => true,
      'httpMethods' => 
      array (
        0 => 'HEAD',
        1 => 'GET',
      ),
    ),
    39 => 
    array (
      'name' => 'Neos.Neos :: Service :: Nodes - create/adopt node',
      'uriPattern' => 'neos/service/nodes',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'create',
        '@controller' => 'Service\\Nodes',
      ),
      'appendExceedingArguments' => true,
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    40 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - UserPreferencesController->index',
      'uriPattern' => 'neos/service/user-preferences',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'index',
        '@subpackage' => 'Service',
        '@controller' => 'UserPreference',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    41 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - UserPreferencesController->update',
      'uriPattern' => 'neos/service/user-preferences',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'update',
        '@subpackage' => 'Service',
        '@controller' => 'UserPreference',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'PUT',
      ),
    ),
    42 => 
    array (
      'name' => 'Neos.Neos :: Service :: Asset Proxies - index',
      'uriPattern' => 'neos/service/asset-proxies',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'index',
        '@controller' => 'Service\\AssetProxies',
        '@format' => 'html',
      ),
      'appendExceedingArguments' => true,
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    43 => 
    array (
      'name' => 'Neos.Neos :: Service :: Assets Proxies - import asset proxy',
      'uriPattern' => 'neos/service/asset-proxies/{assetSourceIdentifier}/{assetProxyIdentifier}',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'import',
        '@controller' => 'Service\\AssetProxies',
        '@format' => 'html',
      ),
      'appendExceedingArguments' => true,
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    44 => 
    array (
      'name' => 'Neos.Neos :: Service :: Assets Proxies - single asset proxy',
      'uriPattern' => 'neos/service/asset-proxies/{assetSourceIdentifier}/{assetProxyIdentifier}',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'show',
        '@controller' => 'Service\\AssetProxies',
        '@format' => 'html',
      ),
      'appendExceedingArguments' => true,
      'httpMethods' => 
      array (
        0 => 'HEAD',
        1 => 'GET',
      ),
    ),
    45 => 
    array (
      'name' => 'Neos.Neos :: Service :: Assets - index',
      'uriPattern' => 'neos/service/assets',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'index',
        '@controller' => 'Service\\Assets',
      ),
      'appendExceedingArguments' => true,
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    46 => 
    array (
      'name' => 'Neos.Neos :: Service :: Assets - single asset',
      'uriPattern' => 'neos/service/assets/{identifier}',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'show',
        '@controller' => 'Service\\Assets',
      ),
      'appendExceedingArguments' => true,
      'httpMethods' => 
      array (
        0 => 'HEAD',
        1 => 'GET',
      ),
    ),
    47 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - WorkspacesController->indexAction()',
      'uriPattern' => 'neos/service/workspaces',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'index',
        '@controller' => 'Service\\Workspaces',
      ),
      'appendExceedingArguments' => true,
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    48 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - WorkspacesController->showAction()',
      'uriPattern' => 'neos/service/workspaces/{workspace}',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'show',
        '@controller' => 'Service\\Workspaces',
      ),
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    49 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - WorkspacesController->createAction()',
      'uriPattern' => 'neos/service/workspaces/{baseWorkspace}/{workspaceName}',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'create',
        '@controller' => 'Service\\Workspaces',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    50 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - WorkspacesController->updateAction()',
      'uriPattern' => 'neos/service/workspaces/{workspace.__identity}',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'update',
        '@controller' => 'Service\\Workspaces',
        '@format' => 'json',
      ),
      'appendExceedingArguments' => true,
      'httpMethods' => 
      array (
        0 => 'PUT',
      ),
    ),
    51 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - WorkspaceController->getWorkspaceWideUnpublishedNodes',
      'uriPattern' => 'neos/service/workspaces-rpc/get-workspace-wide-unpublished-nodes',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'getWorkspaceWideUnpublishedNodes',
        '@subpackage' => 'Service',
        '@controller' => 'Workspace',
        '@format' => 'json',
      ),
      'appendExceedingArguments' => true,
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    52 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - WorkspaceController->publishNode',
      'uriPattern' => 'neos/service/workspaces-rpc/publish-node',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'publishNode',
        '@subpackage' => 'Service',
        '@controller' => 'Workspace',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'PUT',
      ),
    ),
    53 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - WorkspaceController->publishNodes',
      'uriPattern' => 'neos/service/workspaces-rpc/publish-nodes',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'publishNodes',
        '@subpackage' => 'Service',
        '@controller' => 'Workspace',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'PUT',
      ),
    ),
    54 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - WorkspaceController->discardNode',
      'uriPattern' => 'neos/service/workspaces-rpc/discard-node',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'discardNode',
        '@subpackage' => 'Service',
        '@controller' => 'Workspace',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'PUT',
      ),
    ),
    55 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - WorkspaceController->discardNodes',
      'uriPattern' => 'neos/service/workspaces-rpc/discard-nodes',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'discardNodes',
        '@subpackage' => 'Service',
        '@controller' => 'Workspace',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'PUT',
      ),
    ),
    56 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - WorkspaceController->publishAll',
      'uriPattern' => 'neos/service/workspaces-rpc/publish-all',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'publishAll',
        '@subpackage' => 'Service',
        '@controller' => 'Workspace',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'PUT',
      ),
    ),
    57 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - WorkspaceController->discardAll',
      'uriPattern' => 'neos/service/workspaces-rpc/discard-all',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'discardAll',
        '@subpackage' => 'Service',
        '@controller' => 'Workspace',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'PUT',
      ),
    ),
    58 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - NodeController->getChildNodesForTree',
      'uriPattern' => 'neos/service/node/get-child-nodes-for-tree',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'getChildNodesForTree',
        '@subpackage' => 'Service',
        '@controller' => 'Node',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    59 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - NodeController->filterChildNodesForTree',
      'uriPattern' => 'neos/service/node/filter-child-nodes-for-tree',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'filterChildNodesForTree',
        '@subpackage' => 'Service',
        '@controller' => 'Node',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    60 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - NodeController->searchPage',
      'uriPattern' => 'neos/service/node/search-page',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'searchPage',
        '@subpackage' => 'Service',
        '@controller' => 'Node',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    61 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - NodeController->create',
      'uriPattern' => 'neos/service/node/create',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'create',
        '@subpackage' => 'Service',
        '@controller' => 'Node',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    62 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - NodeController->createAndRender',
      'uriPattern' => 'neos/service/node/create-and-render',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'createAndRender',
        '@subpackage' => 'Service',
        '@controller' => 'Node',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    63 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - NodeController->createNodeForTheTree',
      'uriPattern' => 'neos/service/node/create-node-for-the-tree',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'createNodeForTheTree',
        '@subpackage' => 'Service',
        '@controller' => 'Node',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    64 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - NodeController->discardNode',
      'uriPattern' => 'neos/service/node/discard-node',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'discardNode',
        '@subpackage' => 'Service',
        '@controller' => 'Node',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'PUT',
      ),
    ),
    65 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - NodeController->move',
      'uriPattern' => 'neos/service/node/move',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'move',
        '@subpackage' => 'Service',
        '@controller' => 'Node',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'PUT',
      ),
    ),
    66 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - NodeController->moveAndRender',
      'uriPattern' => 'neos/service/node/move-and-render',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'moveAndRender',
        '@subpackage' => 'Service',
        '@controller' => 'Node',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'PUT',
      ),
    ),
    67 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - NodeController->copy',
      'uriPattern' => 'neos/service/node/copy',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'copy',
        '@subpackage' => 'Service',
        '@controller' => 'Node',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'PUT',
      ),
    ),
    68 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - NodeController->copyAndRender',
      'uriPattern' => 'neos/service/node/copy-and-render',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'copyAndRender',
        '@subpackage' => 'Service',
        '@controller' => 'Node',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'PUT',
      ),
    ),
    69 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - NodeController->update',
      'uriPattern' => 'neos/service/node/update',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'update',
        '@subpackage' => 'Service',
        '@controller' => 'Node',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'PUT',
      ),
    ),
    70 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - NodeController->updateAndRender',
      'uriPattern' => 'neos/service/node/update-and-render',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'updateAndRender',
        '@subpackage' => 'Service',
        '@controller' => 'Node',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'PUT',
      ),
    ),
    71 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - NodeController->delete',
      'uriPattern' => 'neos/service/node/delete',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'delete',
        '@subpackage' => 'Service',
        '@controller' => 'Node',
        '@format' => 'json',
      ),
      'httpMethods' => 
      array (
        0 => 'POST',
      ),
    ),
    72 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - DataSourceController->index',
      'uriPattern' => 'neos/service/data-source(/{dataSourceIdentifier)',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'index',
        '@subpackage' => 'Service',
        '@controller' => 'DataSource',
        '@format' => 'json',
        'dataSourceIdentifier' => '',
      ),
      'appendExceedingArguments' => true,
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    73 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - ContentDimensionController->index()',
      'uriPattern' => 'neos/service/content-dimensions',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'index',
        '@controller' => 'Service\\ContentDimensions',
      ),
      'appendExceedingArguments' => true,
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    74 => 
    array (
      'name' => 'Neos.Neos :: Service :: Services - ContentDimensionController->show()',
      'uriPattern' => 'neos/service/content-dimensions/{dimensionName}(.{@format})',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@action' => 'show',
        '@controller' => 'Service\\ContentDimensions',
        '@format' => 'html',
      ),
      'appendExceedingArguments' => true,
      'httpMethods' => 
      array (
        0 => 'GET',
      ),
    ),
    75 => 
    array (
      'name' => 'Neos.Neos :: Frontend :: Preview',
      'uriPattern' => 'neos/preview',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@controller' => 'Frontend\\Node',
        '@action' => 'preview',
        '@format' => 'html',
      ),
      'appendExceedingArguments' => true,
    ),
    76 => 
    array (
      'name' => 'Neos.Neos :: Frontend :: Default Frontend',
      'uriPattern' => '{node}',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@controller' => 'Frontend\\Node',
        '@action' => 'show',
        '@format' => 'html',
      ),
      'routeParts' => 
      array (
        'node' => 
        array (
          'handler' => 'Neos\\Neos\\Routing\\FrontendNodeRoutePartHandlerInterface',
          'options' => 
          array (
            'uriPathSuffix' => '.html',
          ),
        ),
      ),
      'appendExceedingArguments' => true,
    ),
    77 => 
    array (
      'name' => 'Neos.Seo :: XML Sitemap',
      'uriPattern' => '{node}/sitemap.xml',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@controller' => 'Frontend\\Node',
        '@action' => 'show',
        '@format' => 'xml.sitemap',
      ),
      'routeParts' => 
      array (
        'node' => 
        array (
          'handler' => 'Neos\\Neos\\Routing\\FrontendNodeRoutePartHandlerInterface',
          'options' => 
          array (
            'onlyMatchSiteNodes' => true,
          ),
        ),
      ),
      'appendExceedingArguments' => true,
    ),
    78 => 
    array (
      'name' => 'Neos.Seo :: XML Sitemap',
      'uriPattern' => '{node}sitemap.xml',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@controller' => 'Frontend\\Node',
        '@action' => 'show',
        '@format' => 'xml.sitemap',
      ),
      'routeParts' => 
      array (
        'node' => 
        array (
          'handler' => 'Neos\\Neos\\Routing\\FrontendNodeRoutePartHandlerInterface',
          'options' => 
          array (
            'onlyMatchSiteNodes' => true,
          ),
        ),
      ),
      'appendExceedingArguments' => true,
    ),
    79 => 
    array (
      'name' => 'Neos.Seo :: robots.txt',
      'uriPattern' => '{node}robots.txt',
      'defaults' => 
      array (
        '@package' => 'Neos.Neos',
        '@controller' => 'Frontend\\Node',
        '@action' => 'show',
        '@format' => 'txt.robots',
      ),
      'routeParts' => 
      array (
        'node' => 
        array (
          'handler' => 'Neos\\Neos\\Routing\\FrontendNodeRoutePartHandlerInterface',
          'options' => 
          array (
            'onlyMatchSiteNodes' => true,
          ),
        ),
      ),
      'appendExceedingArguments' => true,
    ),
  ),
  'Policy' => 
  array (
    'roles' => 
    array (
      'Neos.Flow:Everybody' => 
      array (
        'abstract' => true,
        'label' => 'Magic "everybody" role',
        'description' => 'This magic role is always active, even if no account is authenticated',
        'privileges' => 
        array (
          0 => 
          array (
            'privilegeTarget' => 'Neos.Setup:LoginController',
            'permission' => 'GRANT',
          ),
          1 => 
          array (
            'privilegeTarget' => 'Neos.Media:Thumbnail',
            'permission' => 'GRANT',
          ),
          2 => 
          array (
            'privilegeTarget' => 'Neos.Neos:PublicWorkspaceAccess',
            'permission' => 'GRANT',
          ),
          3 => 
          array (
            'privilegeTarget' => 'Neos.Media.Browser:Widgets',
            'permission' => 'GRANT',
          ),
          4 => 
          array (
            'privilegeTarget' => 'Neos.Neos:PublicFrontendAccess',
            'permission' => 'GRANT',
          ),
          5 => 
          array (
            'privilegeTarget' => 'Neos.Neos:BackendLogin',
            'permission' => 'GRANT',
          ),
          6 => 
          array (
            'privilegeTarget' => 'Neos.Neos:WidgetControllers',
            'permission' => 'GRANT',
          ),
          7 => 
          array (
            'privilegeTarget' => 'Neos.Neos:RestoreOriginUser',
            'permission' => 'GRANT',
          ),
          8 => 
          array (
            'privilegeTarget' => 'Neos.Neos.Ui:BackendLogin',
            'permission' => 'GRANT',
          ),
          9 => 
          array (
            'privilegeTarget' => 'Neos_Demo_RegistrationAccess',
            'permission' => 'GRANT',
          ),
        ),
      ),
      'Neos.Flow:Anonymous' => 
      array (
        'abstract' => true,
        'label' => 'Magic "anonymous" role',
        'description' => 'This magic role is active if no account is authenticated',
      ),
      'Neos.Flow:AuthenticatedUser' => 
      array (
        'abstract' => true,
        'label' => 'Magic "authenticated user" role',
        'description' => 'This magic role is active if an account is authenticated',
      ),
      'Neos.Setup:SetupUser' => 
      array (
        'privileges' => 
        array (
          0 => 
          array (
            'privilegeTarget' => 'Neos.Setup:SetupController',
            'permission' => 'GRANT',
          ),
          1 => 
          array (
            'privilegeTarget' => 'Neos.Setup:WidgetControllers',
            'permission' => 'GRANT',
          ),
        ),
      ),
      'Neos.ContentRepository:InternalWorkspaceAccess' => 
      array (
        'abstract' => true,
        'privileges' => 
        array (
          0 => 
          array (
            'privilegeTarget' => 'Neos.Neos:OtherWorkspacesAccess',
            'permission' => 'GRANT',
          ),
        ),
      ),
      'Neos.ContentRepository:Administrator' => 
      array (
        'abstract' => true,
        'parentRoles' => 
        array (
          0 => 'Neos.ContentRepository:InternalWorkspaceAccess',
        ),
      ),
      'Neos.Neos:AbstractEditor' => 
      array (
        'privileges' => 
        array (
          0 => 
          array (
            'privilegeTarget' => 'Neos.Media.Browser:ManageAssets',
            'permission' => 'GRANT',
          ),
          1 => 
          array (
            'privilegeTarget' => 'Neos.Media.Browser:AssetUsage',
            'permission' => 'GRANT',
          ),
          2 => 
          array (
            'privilegeTarget' => 'Neos.Media.Browser:ManageTags',
            'permission' => 'GRANT',
          ),
          3 => 
          array (
            'privilegeTarget' => 'Neos.Media.Browser:AssetProxyService',
            'permission' => 'GRANT',
          ),
          4 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.GeneralAccess',
            'permission' => 'GRANT',
          ),
          5 => 
          array (
            'privilegeTarget' => 'Neos.Neos:ContentPreview',
            'permission' => 'GRANT',
          ),
          6 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.PersonalWorkspaceReadAccess.NodeConverter',
            'permission' => 'GRANT',
          ),
          7 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.EditContent',
            'permission' => 'GRANT',
          ),
          8 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.PublishOwnWorkspaceContent',
            'permission' => 'GRANT',
          ),
          9 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.DiscardOwnWorkspaceContent',
            'permission' => 'GRANT',
          ),
          10 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Service.Workspaces.Index',
            'permission' => 'GRANT',
          ),
          11 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Service.Workspaces.ManageOwnWorkspaces',
            'permission' => 'GRANT',
          ),
          12 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.Management.Workspaces.ManageOwnWorkspaces',
            'permission' => 'GRANT',
          ),
          13 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.CreateWorkspaces',
            'permission' => 'GRANT',
          ),
          14 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.ContentDimensions',
            'permission' => 'GRANT',
          ),
          15 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Content.Services',
            'permission' => 'GRANT',
          ),
          16 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.DataSource',
            'permission' => 'GRANT',
          ),
          17 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.User',
            'permission' => 'GRANT',
          ),
          18 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.User.UserSettings',
            'permission' => 'GRANT',
          ),
          19 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.User.UserSettings.UpdateOwnSettings',
            'permission' => 'GRANT',
          ),
          20 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.EditUserPreferences',
            'permission' => 'GRANT',
          ),
          21 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.Management',
            'permission' => 'GRANT',
          ),
          22 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.Management.Workspaces',
            'permission' => 'GRANT',
          ),
          23 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.Management.History',
            'permission' => 'GRANT',
          ),
          24 => 
          array (
            'privilegeTarget' => 'Neos.Neos.Ui:Backend.Module.Content',
            'permission' => 'GRANT',
          ),
          25 => 
          array (
            'privilegeTarget' => 'Neos.Neos.Ui:Backend.GeneralAccess',
            'permission' => 'GRANT',
          ),
          26 => 
          array (
            'privilegeTarget' => 'Neos.Neos.Ui:Backend.ServiceAccess',
            'permission' => 'GRANT',
          ),
        ),
        'abstract' => true,
        'parentRoles' => 
        array (
          0 => 'Neos.ContentRepository:Administrator',
        ),
      ),
      'Neos.Neos:LivePublisher' => 
      array (
        'privileges' => 
        array (
          0 => 
          array (
            'privilegeTarget' => 'Neos.Media.Browser:ReplaceAssetResource',
            'permission' => 'GRANT',
          ),
          1 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.PublishToLiveWorkspace',
            'permission' => 'GRANT',
          ),
          2 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.PublishAllToLiveWorkspace',
            'permission' => 'GRANT',
          ),
        ),
        'label' => 'Live publisher',
        'description' => 'The role allows to publish to the live workspace',
      ),
      'Neos.Neos:Administrator' => 
      array (
        'privileges' => 
        array (
          0 => 
          array (
            'privilegeTarget' => 'Neos.Media.Browser:ManageAssetCollections',
            'permission' => 'GRANT',
          ),
          1 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.Administration',
            'permission' => 'GRANT',
          ),
          2 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.Administration.Users',
            'permission' => 'GRANT',
          ),
          3 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.Administration.Packages',
            'permission' => 'GRANT',
          ),
          4 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.Management.Workspaces.ManageInternalWorkspaces',
            'permission' => 'GRANT',
          ),
          5 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.Management.Workspaces.ManageAllPrivateWorkspaces',
            'permission' => 'GRANT',
          ),
          6 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.Administration.Sites',
            'permission' => 'GRANT',
          ),
          7 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.Administration.Configuration',
            'permission' => 'GRANT',
          ),
          8 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.Administration.Dimensions',
            'permission' => 'GRANT',
          ),
          9 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Impersonate',
            'permission' => 'GRANT',
          ),
          10 => 
          array (
            'privilegeTarget' => 'Neos.RedirectHandler.Ui:Backend.Module.Management.Redirects',
            'permission' => 'GRANT',
          ),
          11 => 
          array (
            'privilegeTarget' => 'Neos.RedirectHandler.Ui:Module',
            'permission' => 'GRANT',
          ),
        ),
        'label' => 'Neos Administrator',
        'description' => 'Grants access to all modules and functionalities of the Neos backend.',
        'parentRoles' => 
        array (
          0 => 'Neos.Neos:Editor',
        ),
      ),
      'Neos.Neos:RestrictedEditor' => 
      array (
        'label' => 'Restricted Editor',
        'description' => 'Grants access to the content, media, workspace and history module. The user is allowed to publish to internal workspaces.',
        'parentRoles' => 
        array (
          0 => 'Neos.Neos:AbstractEditor',
        ),
      ),
      'Neos.Neos:Editor' => 
      array (
        'label' => 'Editor',
        'description' => 'Grants access to the content, media, workspace and history module. The user is allowed to publish to the live workspace.',
        'parentRoles' => 
        array (
          0 => 'Neos.Neos:AbstractEditor',
          1 => 'Neos.Neos:LivePublisher',
        ),
      ),
      'Neos.Neos:UserManager' => 
      array (
        'label' => 'Neos User Manager',
        'description' => 'The user is allowed to create, edit and delete users having the same or a subset of their own roles.',
        'privileges' => 
        array (
          0 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.GeneralAccess',
            'permission' => 'GRANT',
          ),
          1 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.Administration',
            'permission' => 'GRANT',
          ),
          2 => 
          array (
            'privilegeTarget' => 'Neos.Neos:Backend.Module.Administration.Users',
            'permission' => 'GRANT',
          ),
        ),
      ),
      'Neos.RedirectHandler.Ui:RedirectAdministrator' => 
      array (
        'privileges' => 
        array (
          0 => 
          array (
            'privilegeTarget' => 'Neos.RedirectHandler.Ui:Backend.Module.Management.Redirects',
            'permission' => 'GRANT',
          ),
          1 => 
          array (
            'privilegeTarget' => 'Neos.RedirectHandler.Ui:Module',
            'permission' => 'GRANT',
          ),
        ),
      ),
    ),
    'privilegeTargets' => 
    array (
      'Neos\\Flow\\Security\\Authorization\\Privilege\\Method\\MethodPrivilege' => 
      array (
        'Neos.Setup:LoginController' => 
        array (
          'matcher' => 'method(Neos\\Setup\\Controller\\LoginController->(login|authenticate|generateNewPassword)Action())',
        ),
        'Neos.Setup:SetupController' => 
        array (
          'matcher' => 'method(Neos\\Setup\\Controller\\SetupController->indexAction()) || method(Neos\\Setup\\Controller\\LoginController->logoutAction())',
        ),
        'Neos.Setup:WidgetControllers' => 
        array (
          'matcher' => 'method(public Neos\\Setup\\ViewHelpers\\Widget\\Controller\\.+Controller->.+Action())',
        ),
        'Neos.Media:Thumbnail' => 
        array (
          'matcher' => 'method(Neos\\Media\\Controller\\ThumbnailController->thumbnailAction())',
        ),
        'Neos.Neos:PublicWorkspaceAccess' => 
        array (
          'label' => 'Allowed to access the public workspace',
          'matcher' => 'method(Neos\\ContentRepository\\Domain\\Service\\Context->validateWorkspace()) && evaluate(this.workspace.publicWorkspace === true)',
        ),
        'Neos.Neos:OtherWorkspacesAccess' => 
        array (
          'label' => 'Allowed to access to other users workspaces',
          'matcher' => 'method(Neos\\ContentRepository\\Domain\\Service\\Context->validateWorkspace()) && evaluate(this.workspace.publicWorkspace === false) && evaluate(this.workspace.personalWorkspace === false)',
        ),
        'Neos.Media.Browser:Widgets' => 
        array (
          'label' => 'Allowed to paginate through assets',
          'matcher' => 'method(Neos\\Media\\Browser\\ViewHelpers\\Controller\\(Paginate)Controller->(index)Action())',
        ),
        'Neos.Media.Browser:ManageAssets' => 
        array (
          'label' => 'Allowed to manage assets',
          'matcher' => 'method(Neos\\Media\\Browser\\Controller\\(Asset|Image)Controller->(index|new|show|edit|update|initializeCreate|create|replaceAssetResource|updateAssetResource|initializeUpload|upload|tagAsset|delete|createTag|editTag|updateTag|deleteTag|addAssetToCollection|relatedNodes|variants)Action()) || method(Neos\\Media\\Browser\\Controller\\ImageVariantController->(update)Action())',
        ),
        'Neos.Media.Browser:AssetUsage' => 
        array (
          'label' => 'Allowed to calculate asset usages',
          'matcher' => 'method(Neos\\Media\\Browser\\Controller\\UsageController->relatedNodesAction())',
        ),
        'Neos.Media.Browser:ManageTags' => 
        array (
          'label' => 'Allowed to mange tags',
          'matcher' => 'method(Neos\\Media\\Browser\\Controller\\TagController->(create|edit|update|delete)Action())',
        ),
        'Neos.Media.Browser:AssetProxyService' => 
        array (
          'label' => 'Allowed to use asset proxies',
          'matcher' => 'method(Neos\\Media\\Browser\\Controller\\AssetProxyController->(index|import)Action())',
        ),
        'Neos.Media.Browser:ManageAssetCollections' => 
        array (
          'label' => 'Allowed to manage asset collections',
          'matcher' => 'method(Neos\\Media\\Browser\\Controller\\(Asset|Image)Controller->(createAssetCollection|editAssetCollection|updateAssetCollection|deleteAssetCollection)Action()) || method(Neos\\Media\\Browser\\Controller\\AssetCollectionController->(create|edit|update|delete)Action())',
        ),
        'Neos.Media.Browser:ReplaceAssetResource' => 
        array (
          'label' => 'Allowed to replace asset resources',
          'matcher' => 'method(Neos\\Media\\Browser\\Controller\\(Asset|Image)Controller->(replaceAssetResource|updateAssetResource)Action())',
        ),
        'Neos.Neos:AllControllerActions' => 
        array (
          'label' => 'General access to all actions',
          'matcher' => 'within(Neos\\Flow\\Mvc\\Controller\\AbstractController) && method(public .*->(?!initialize).*Action())',
        ),
        'Neos.Neos:WidgetControllers' => 
        array (
          'label' => 'General access to Fluid widget controllers',
          'matcher' => 'method(Neos\\FluidAdaptor\\ViewHelpers\\Widget\\Controller\\AutocompleteController->(index|autocomplete)Action()) || method(Neos\\FluidAdaptor\\ViewHelpers\\Widget\\Controller\\PaginateController->indexAction()) || method(Neos\\ContentRepository\\ViewHelpers\\Widget\\Controller\\PaginateController->indexAction()) || method(Neos\\Neos\\ViewHelpers\\Widget\\Controller\\LinkRepositoryController->(index|search|lookup)Action())',
        ),
        'Neos.Neos:PublicFrontendAccess' => 
        array (
          'label' => 'General access to frontend rendering',
          'matcher' => 'method(Neos\\Neos\\Controller\\Frontend\\NodeController->showAction())',
        ),
        'Neos.Neos:ContentPreview' => 
        array (
          'label' => 'Access to the backend content preview',
          'matcher' => 'method(Neos\\Neos\\Controller\\Frontend\\NodeController->previewAction())',
        ),
        'Neos.Neos:BackendLogin' => 
        array (
          'label' => 'General access to the backend login',
          'matcher' => 'method(Neos\\Neos\\Controller\\LoginController->(index|tokenLogin|authenticate)Action()) || method(Neos\\Flow\\Security\\Authentication\\Controller\\AbstractAuthenticationController->authenticateAction())',
        ),
        'Neos.Neos:Backend.GeneralAccess' => 
        array (
          'label' => 'General access to the Neos backend',
          'matcher' => 'method(Neos\\Neos\\Controller\\Backend\\BackendController->(index|switchSite|xliffAsJson)Action()) || method(Neos\\Neos\\Controller\\Backend\\ModuleController->indexAction()) || method(Neos\\Neos\\Controller\\LoginController->logoutAction()) || method(Neos\\Flow\\Security\\Authentication\\Controller\\AbstractAuthenticationController->logoutAction()) || method(Neos\\Neos\\Controller\\Module\\AbstractModuleController->indexAction()) || method(Neos\\Neos\\Service\\Controller\\AbstractServiceController->errorAction())',
        ),
        'Neos.Neos:Backend.Content.Services' => 
        array (
          'label' => 'Access to content service APIs',
          'matcher' => 'method(Neos\\Neos\\Controller\\Backend\\SchemaController->(nodeTypeSchema)Action()) || method(Neos\\Neos\\Controller\\Backend\\SettingsController->editPreviewAction())',
        ),
        'Neos.Neos:Backend.PersonalWorkspaceReadAccess.NodeConverter' => 
        array (
          'label' => 'Access to own personal workspace',
          'matcher' => 'method(Neos\\Neos\\TypeConverter\\NodeConverter->prepareContextProperties(workspaceName === current.userInformation.personalWorkspaceName))',
        ),
        'Neos.Neos:Backend.OtherUsersPersonalWorkspaceAccess' => 
        array (
          'label' => 'Access to other users personal workspace',
          'matcher' => 'method(Neos\\ContentRepository\\Domain\\Service\\Context->validateWorkspace()) && evaluate(this.workspace.owner !== current.userInformation.backendUser, this.workspace.personalWorkspace === true)',
        ),
        'Neos.Neos:Backend.EditContent' => 
        array (
          'label' => 'General access to content editing',
          'matcher' => 'method(Neos\\Neos\\Service\\Controller\\NodeController->(show|getPrimaryChildNode|getChildNodesForTree|filterChildNodesForTree|getChildNodes|getChildNodesFromParent|create|createAndRender|createNodeForTheTree|move|moveBefore|moveAfter|moveInto|moveAndRender|copy|copyBefore|copyAfter|copyInto|copyAndRender|update|updateAndRender|delete|searchPage|error)Action()) || method(Neos\\Neos\\Controller\\Backend\\ContentController->(uploadAsset|assetsWithMetadata|imageWithMetadata|pluginViews|createImageVariant|masterPlugins|error)Action()) || method(Neos\\Neos\\Controller\\Service\\AssetProxiesController->(index|show|import|error)Action()) || method(Neos\\Neos\\Controller\\Service\\AssetsController->(index|show|error)Action()) || method(Neos\\Neos\\Controller\\Service\\NodesController->(index|show|create|error)Action())',
        ),
        'Neos.Neos:Backend.PublishToLiveWorkspace' => 
        array (
          'label' => 'Allowed to publish to the live workspace',
          'matcher' => 'method(Neos\\ContentRepository\\Domain\\Model\\Workspace->(publish|publishNode|publishNodes)(targetWorkspace.name === "live"))',
        ),
        'Neos.Neos:Backend.PublishAllToLiveWorkspace' => 
        array (
          'label' => 'Allowed to publish to the live workspace',
          'matcher' => 'method(Neos\\Neos\\Controller\\Module\\Management\\WorkspacesController->publishWorkspaceAction(workspace.baseWorkspace.name === "live"))',
        ),
        'Neos.Neos:Backend.PublishOwnWorkspaceContent' => 
        array (
          'label' => 'Allowed to publish own personal workspace',
          'matcher' => 'method(Neos\\Neos\\Service\\Controller\\WorkspaceController->(publishNode|publishNodes|error)Action()) || method(Neos\\Neos\\Service\\Controller\\WorkspaceController->publishAllAction(workspaceName = current.userInformation.personalWorkspaceName)) || method(Neos\\Neos\\Service\\Controller\\WorkspaceController->getWorkspaceWideUnpublishedNodesAction(workspace.name = current.userInformation.personalWorkspaceName))',
        ),
        'Neos.Neos:Backend.DiscardOwnWorkspaceContent' => 
        array (
          'label' => 'Allowed to discard changes in own workspace',
          'matcher' => 'method(Neos\\Neos\\Service\\Controller\\WorkspaceController->(discardNode|discardNodes|error)Action()) || method(Neos\\Neos\\Service\\Controller\\WorkspaceController->discardAllAction(workspace.name === current.userInformation.personalWorkspaceName))',
        ),
        'Neos.Neos:Backend.CreateWorkspaces' => 
        array (
          'label' => 'Allowed to create a workspace',
          'matcher' => 'method(Neos\\Neos\\Controller\\Service\\WorkspacesController->(new|create)Action()) || method(Neos\\Neos\\Controller\\Module\\Management\\WorkspacesController->(create|new)Action())',
        ),
        'Neos.Neos:Backend.Module.Management.Workspaces.ManageOwnWorkspaces' => 
        array (
          'label' => 'Allowed to manage own workspaces',
          'matcher' => 'method(Neos\\Neos\\Controller\\Module\\Management\\WorkspacesController->(publishWorkspace|discardWorkspace|edit|update|delete)Action(workspace.owner === current.userInformation.backendUser))',
        ),
        'Neos.Neos:Backend.Module.Management.Workspaces.ManageInternalWorkspaces' => 
        array (
          'label' => 'Manage internal workspaces',
          'matcher' => 'method(Neos\\Neos\\Controller\\Module\\Management\\WorkspacesController->(publishWorkspace|discardWorkspace|edit|update|delete)Action(workspace.owner === null))',
        ),
        'Neos.Neos:Backend.Module.Management.Workspaces.ManageAllPrivateWorkspaces' => 
        array (
          'label' => 'Manage all private wokspaces',
          'matcher' => 'method(Neos\\Neos\\Controller\\Module\\Management\\WorkspacesController->(publishWorkspace|discardWorkspace|edit|update|delete)Action()) && evaluate(this.workspace.owner !== current.userInformation.backendUser, this.workspace.personalWorkspace === false)',
        ),
        'Neos.Neos:Backend.Service.Workspaces.Index' => 
        array (
          'label' => 'Access workspace services',
          'matcher' => 'method(Neos\\Neos\\Controller\\Service\\WorkspacesController->(index|error|show)Action())',
        ),
        'Neos.Neos:Backend.Service.Workspaces.ManageOwnWorkspaces' => 
        array (
          'label' => 'Access services to manage own worksapce',
          'matcher' => 'method(Neos\\Neos\\Controller\\Service\\WorkspacesController->(update|delete)Action(workspace.owner === current.userInformation.backendUser))',
        ),
        'Neos.Neos:Backend.Module.User.UserSettings.UpdateOwnSettings' => 
        array (
          'label' => 'Allowed to update own user setings',
          'matcher' => 'method(Neos\\Neos\\Controller\\Module\\User\\UserSettingsController->updateAction(user === current.userInformation.backendUser))',
        ),
        'Neos.Neos:Backend.EditUserPreferences' => 
        array (
          'label' => 'Allowed to edit user preferences',
          'matcher' => 'method(Neos\\Neos\\Service\\Controller\\UserPreferenceController->(index|update|error)Action())',
        ),
        'Neos.Neos:Backend.ContentDimensions' => 
        array (
          'label' => 'Allowed to list content dimensions',
          'matcher' => 'method(Neos\\Neos\\Controller\\Service\\ContentDimensionsController->(index|show|error)Action())',
        ),
        'Neos.Neos:Backend.DataSource' => 
        array (
          'label' => 'General access to data sources',
          'matcher' => 'method(Neos\\Neos\\Service\\Controller\\DataSourceController->(index|error)Action())',
        ),
        'Neos.Neos:Impersonate' => 
        array (
          'label' => 'Impersonate user',
          'matcher' => 'method(Neos\\Neos\\Controller\\Backend\\ImpersonateController->(?!initialize).*Action())',
        ),
        'Neos.Neos:RestoreOriginUser' => 
        array (
          'label' => 'Restore from impersonated user to origin',
          'matcher' => 'method(Neos\\Neos\\Controller\\Backend\\ImpersonateController->(restore|restoreWithResponse|status)Action())',
        ),
        'Neos.Neos.Ui:BackendLogin' => 
        array (
          'matcher' => 'method(Neos\\Neos\\Ui\\Controller\\LoginController->(index|authenticate)Action()) || method(Neos\\Flow\\Security\\Authentication\\Controller\\AbstractAuthenticationController->authenticateAction())',
        ),
        'Neos.Neos.Ui:Backend.GeneralAccess' => 
        array (
          'matcher' => 'method(Neos\\Neos\\Ui\\Controller\\BackendController->.*())',
        ),
        'Neos.Neos.Ui:Backend.ServiceAccess' => 
        array (
          'matcher' => 'method(Neos\\Neos\\Ui\\Controller\\BackendServiceController->.*())',
        ),
        'Neos.RedirectHandler.Ui:Module' => 
        array (
          'matcher' => 'method(Neos\\RedirectHandler\\Ui\\Controller\\ModuleController->(.*)Action())',
        ),
        'Neos_Demo_RegistrationAccess' => 
        array (
          'matcher' => 'method(Neos\\Demo\\Controller\\RegistrationController->(index|newAccount|createAccount|createTemporaryAccount)Action())',
        ),
      ),
      'Neos\\Neos\\Security\\Authorization\\Privilege\\ModulePrivilege' => 
      array (
        'Neos.Neos:Backend.Module.User' => 
        array (
          'label' => 'General access to the user module section',
          'matcher' => 'user',
        ),
        'Neos.Neos:Backend.Module.User.UserSettings' => 
        array (
          'label' => 'General access to the user settings module',
          'matcher' => 'user/usersettings',
        ),
        'Neos.Neos:Backend.Module.Management' => 
        array (
          'label' => 'General access to the management module section',
          'matcher' => 'management',
        ),
        'Neos.Neos:Backend.Module.Management.Workspaces' => 
        array (
          'label' => 'General access to the workspace module',
          'matcher' => 'management/workspaces',
        ),
        'Neos.Neos:Backend.Module.Management.History' => 
        array (
          'label' => 'General access to the history module',
          'matcher' => 'management/history',
        ),
        'Neos.Neos:Backend.Module.Administration' => 
        array (
          'label' => 'General access to the administration module',
          'matcher' => 'administration',
        ),
        'Neos.Neos:Backend.Module.Administration.Users' => 
        array (
          'label' => 'General access to the user administration module',
          'matcher' => 'administration/users',
        ),
        'Neos.Neos:Backend.Module.Administration.Packages' => 
        array (
          'label' => 'General access to the packages module',
          'matcher' => 'administration/packages',
        ),
        'Neos.Neos:Backend.Module.Administration.Sites' => 
        array (
          'label' => 'General access to the sites module',
          'matcher' => 'administration/sites',
        ),
        'Neos.Neos:Backend.Module.Administration.Configuration' => 
        array (
          'label' => 'General access to the configuration module',
          'matcher' => 'administration/configuration',
        ),
        'Neos.Neos:Backend.Module.Administration.Dimensions' => 
        array (
          'label' => 'General access to the dimensions module',
          'matcher' => 'administration/dimensions',
        ),
        'Neos.Neos.Ui:Backend.Module.Content' => 
        array (
          'matcher' => 'content',
        ),
        'Neos.RedirectHandler.Ui:Backend.Module.Management.Redirects' => 
        array (
          'matcher' => 'management/redirects',
        ),
      ),
    ),
  ),
  'Views' => 
  array (
    0 => 
    array (
      'requestFilter' => 'isFormat("html") && isController("Usage") && isPackage("Neos.Media.Browser")',
      'options' => 
      array (
        'templatePathAndFilenamePattern' => '@templateRoot/@subpackage/Usage/@action.@format',
        'partialRootPaths' => 
        array (
          'Neos.Neos' => 'resource://Neos.Neos/Private/Partials',
          'Neos.Media.Browser' => 'resource://Neos.Media.Browser/Private/Partials',
        ),
      ),
    ),
    1 => 
    array (
      'requestFilter' => 'isFormat("html") && isPackage("Neos.Media.Browser")',
      'options' => 
      array (
        'templatePathAndFilenamePattern' => '@templateRoot/@subpackage/Asset/@action.@format',
        'partialRootPaths' => 
        array (
          'Neos.Neos' => 'resource://Neos.Neos/Private/Partials',
          'Neos.Media.Browser' => 'resource://Neos.Media.Browser/Private/Partials',
        ),
      ),
    ),
    2 => 
    array (
      'requestFilter' => 'parentRequest.isPackage("Neos.Neos") && isFormat("html") && isPackage("Neos.Media.Browser")',
      'options' => 
      array (
        'layoutRootPaths' => 
        array (
          'Neos.Media.Browser' => 'resource://Neos.Media.Browser/Private/Layouts/Module',
        ),
        'partialRootPaths' => 
        array (
          'Neos.Neos' => 'resource://Neos.Neos/Private/Partials',
          'Neos.Media.Browser' => 'resource://Neos.Media.Browser/Private/Partials',
        ),
      ),
    ),
    3 => 
    array (
      'requestFilter' => 'isPackage("Neos.Neos") && isController("Login") && isAction("index") && isFormat("html")',
      'viewObjectName' => 'Neos\\Fusion\\View\\FusionView',
      'options' => 
      array (
        'fusionPathPatterns' => 
        array (
          0 => 'resource://Neos.Neos/Private/Fusion/Backend',
        ),
      ),
    ),
    4 => 
    array (
      'requestFilter' => 'isPackage("Neos.Neos.Ui") && isController("Backend")',
      'viewObjectName' => 'Neos\\Fusion\\View\\FusionView',
      'options' => 
      array (
        'fusionPathPatterns' => 
        array (
          0 => 'resource://Neos.Neos.Ui/Private/Fusion/Backend',
        ),
      ),
    ),
    5 => 
    array (
      'requestFilter' => 'isPackage("Neos.RedirectHandler.Ui") && isController("Module") && isFormat("html")',
      'viewObjectName' => 'Neos\\Fusion\\View\\FusionView',
      'options' => 
      array (
        'fusionPathPatterns' => 
        array (
          0 => 'resource://Neos.Fusion/Private/Fusion',
          1 => 'resource://Neos.RedirectHandler.Ui/Private/FusionModule',
        ),
      ),
    ),
  ),
  'NodeTypes' => 
  array (
    'unstructured' => 
    array (
      'abstract' => false,
      'constraints' => 
      array (
        'nodeTypes' => 
        array (
          '*' => true,
        ),
      ),
    ),
    'Neos.Neos:Content' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Node' => true,
        'Neos.Neos:Hidable' => true,
        'Neos.Neos:Timable' => true,
      ),
      'abstract' => true,
      'constraints' => 
      array (
        'nodeTypes' => 
        array (
          '*' => false,
        ),
      ),
      'postprocessors' => 
      array (
        'CreationDialogPostprocessor' => 
        array (
          'position' => 'after NodeTypePresetPostprocessor',
          'postprocessor' => 'Neos\\Neos\\NodeTypePostprocessor\\CreationDialogPostprocessor',
        ),
      ),
      'options' => 
      array (
        'nodeCreationHandlers' => 
        array (
          'creationDialogProperties' => 
          array (
            'nodeCreationHandler' => 'Neos\\Neos\\Ui\\NodeCreationHandler\\CreationDialogPropertiesCreationHandler',
          ),
          'documentTitle' => 
          array (
            'nodeCreationHandler' => 'Neos\\Neos\\Ui\\NodeCreationHandler\\ContentTitleNodeCreationHandler',
          ),
        ),
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-square-o',
        'group' => 'general',
        'search' => 
        array (
          'searchCategory' => 'Content',
        ),
        'inspector' => 
        array (
          'groups' => 
          array (
            'type' => 
            array (
              'label' => 'i18n',
              'position' => 100,
              'tab' => 'meta',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        '_nodeType' => 
        array (
          'ui' => 
          array (
            'inspector' => 
            array (
              'editorOptions' => 
              array (
                'baseNodeType' => 'Neos.Neos:Content',
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.Neos:ContentCollection' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Node' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-folder-open-alt',
        'inlineEditable' => true,
      ),
      'constraints' => 
      array (
        'nodeTypes' => 
        array (
          'Neos.Neos:Document' => false,
          '*' => true,
        ),
      ),
    ),
    'Neos.Neos:Document' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Node' => true,
        'Neos.Neos:Hidable' => true,
        'Neos.Neos:Timable' => true,
        'Neos.Seo:TitleTagMixin' => true,
        'Neos.Seo:SeoMetaTagsMixin' => true,
        'Neos.Seo:TwitterCardMixin' => true,
        'Neos.Seo:CanonicalLinkMixin' => true,
        'Neos.Seo:OpenGraphMixin' => true,
        'Neos.Seo:XmlSitemapMixin' => true,
      ),
      'abstract' => true,
      'aggregate' => true,
      'constraints' => 
      array (
        'nodeTypes' => 
        array (
          '*' => false,
          'Neos.Neos:Document' => true,
        ),
      ),
      'postprocessors' => 
      array (
        'CreationDialogPostprocessor' => 
        array (
          'position' => 'after NodeTypePresetPostprocessor',
          'postprocessor' => 'Neos\\Neos\\NodeTypePostprocessor\\CreationDialogPostprocessor',
        ),
      ),
      'options' => 
      array (
        'nodeCreationHandlers' => 
        array (
          'documentTitle' => 
          array (
            'nodeCreationHandler' => 'Neos\\Neos\\Ui\\NodeCreationHandler\\DocumentTitleNodeCreationHandler',
          ),
          'creationDialogProperties' => 
          array (
            'nodeCreationHandler' => 'Neos\\Neos\\Ui\\NodeCreationHandler\\CreationDialogPropertiesCreationHandler',
          ),
        ),
      ),
      'ui' => 
      array (
        'label' => 'Document',
        'group' => 'general',
        'search' => 
        array (
          'searchCategory' => 'Documents',
        ),
        'inspector' => 
        array (
          'groups' => 
          array (
            'document' => 
            array (
              'label' => 'i18n',
              'position' => 10,
              'icon' => 'icon-file',
            ),
          ),
          'tabs' => 
          array (
            'seo' => 
            array (
              'label' => 'Neos.Seo:NodeTypes.Document:tabs.seo',
              'position' => 30,
              'icon' => 'icon-bullseye',
            ),
          ),
        ),
        'creationDialog' => 
        array (
          'elements' => 
          array (
            'title' => 
            array (
              'type' => 'string',
              'ui' => 
              array (
                'label' => 'i18n',
                'editor' => 'Neos.Neos/Inspector/Editors/TextFieldEditor',
              ),
              'validation' => 
              array (
                'Neos.Neos/Validation/NotEmptyValidator' => 
                array (
                ),
              ),
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        '_nodeType' => 
        array (
          'ui' => 
          array (
            'inspector' => 
            array (
              'editorOptions' => 
              array (
                'baseNodeType' => 'Neos.Neos:Document',
              ),
            ),
          ),
        ),
        'title' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadPageIfChanged' => true,
            'showInCreationDialog' => true,
            'inspector' => 
            array (
              'group' => 'document',
            ),
          ),
          'validation' => 
          array (
            'Neos.Neos/Validation/NotEmptyValidator' => 
            array (
            ),
            'Neos.Neos/Validation/StringLengthValidator' => 
            array (
              'minimum' => 1,
              'maximum' => 255,
            ),
          ),
        ),
        'uriPathSegment' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadPageIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'document',
              'editor' => 'Neos.Neos/Inspector/Editors/UriPathSegmentEditor',
              'editorOptions' => 
              array (
                'title' => 'ClientEval:node.properties.title',
              ),
            ),
          ),
          'validation' => 
          array (
            'Neos.Neos/Validation/NotEmptyValidator' => 
            array (
            ),
            'Neos.Neos/Validation/StringLengthValidator' => 
            array (
              'minimum' => 1,
              'maximum' => 255,
            ),
            'Neos.Neos/Validation/RegularExpressionValidator' => 
            array (
              'regularExpression' => '/^[a-z0-9\\-]+$/i',
            ),
          ),
        ),
        '_hidden' => 
        array (
          'ui' => 
          array (
            'reloadPageIfChanged' => true,
          ),
        ),
        '_hiddenInIndex' => 
        array (
          'type' => 'boolean',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadPageIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'visibility',
              'position' => 40,
            ),
          ),
        ),
      ),
    ),
    'Neos.Neos:FallbackNode' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Node' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-remove-sign',
      ),
      'properties' => 
      array (
        '_nodeType' => 
        array (
          'ui' => 
          array (
            'inspector' => 
            array (
              'editorOptions' => 
              array (
                'baseNodeType' => 'Neos.Neos:Content',
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.Neos:Hidable' => 
    array (
      'abstract' => true,
      'ui' => 
      array (
        'inspector' => 
        array (
          'groups' => 
          array (
            'visibility' => 
            array (
              'label' => 'Neos.Neos:Inspector:groups.visibility',
              'icon' => 'icon-eye',
              'position' => 100,
              'tab' => 'meta',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        '_hidden' => 
        array (
          'type' => 'boolean',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'visibility',
              'position' => 30,
            ),
          ),
        ),
      ),
    ),
    'Neos.Neos:Node' => 
    array (
      'label' => '${Neos.Node.labelForNode(node).properties(\'title\', \'text\')}',
      'abstract' => true,
      'options' => 
      array (
        'fusion' => 
        array (
          'prototypeGenerator' => NULL,
        ),
      ),
      'postprocessors' => 
      array (
        'NodeTypePresetPostprocessor' => 
        array (
          'position' => 'before IconNameMappingPostprocessor',
          'postprocessor' => 'Neos\\Neos\\NodeTypePostprocessor\\NodeTypePresetPostprocessor',
        ),
        'IconNameMappingPostprocessor' => 
        array (
          'position' => 'before DefaultPropertyEditorPostprocessor',
          'postprocessor' => 'Neos\\Neos\\NodeTypePostprocessor\\IconNameMappingPostprocessor',
        ),
        'DefaultPropertyEditorPostprocessor' => 
        array (
          'position' => 'end',
          'postprocessor' => 'Neos\\Neos\\NodeTypePostprocessor\\DefaultPropertyEditorPostprocessor',
        ),
      ),
      'ui' => 
      array (
        'inspector' => 
        array (
          'tabs' => 
          array (
            'default' => 
            array (
              'label' => 'i18n',
              'position' => 10,
              'icon' => 'icon-pencil',
            ),
            'meta' => 
            array (
              'label' => 'i18n',
              'position' => 20,
              'icon' => 'icon-cog',
            ),
          ),
          'groups' => 
          array (
            'type' => 
            array (
              'label' => 'i18n',
              'tab' => 'meta',
              'icon' => 'icon-exchange',
              'position' => 990,
            ),
            'nodeInfo' => 
            array (
              'label' => 'i18n',
              'icon' => 'icon-info',
              'tab' => 'meta',
              'position' => 1000,
              'collapsed' => true,
            ),
          ),
          'views' => 
          array (
            'nodeInfo' => 
            array (
              'label' => 'i18n',
              'group' => 'nodeInfo',
              'view' => 'Neos.Neos/Inspector/Views/NodeInfoView',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        '_removed' => 
        array (
          'type' => 'boolean',
        ),
        '_creationDateTime' => 
        array (
          'type' => 'DateTime',
        ),
        '_lastModificationDateTime' => 
        array (
          'type' => 'DateTime',
        ),
        '_lastPublicationDateTime' => 
        array (
          'type' => 'DateTime',
        ),
        '_path' => 
        array (
          'type' => 'string',
        ),
        '_name' => 
        array (
          'type' => 'string',
        ),
        '_nodeType' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'type',
              'position' => 100,
              'editor' => 'Neos.Neos/Inspector/Editors/NodeTypeEditor',
              'editorOptions' => 
              array (
                'placeholder' => 'Loading ...',
                'baseNodeType' => '',
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.Neos:Plugin' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
      ),
      'abstract' => true,
      'ui' => 
      array (
        'label' => 'i18n',
        'group' => 'plugins',
        'icon' => 'icon-puzzle-piece',
        'inspector' => 
        array (
          'groups' => 
          array (
            'pluginSettings' => 
            array (
              'label' => 'i18n',
              'icon' => 'icon-sliders',
            ),
          ),
        ),
      ),
      'postprocessors' => 
      array (
        'PluginPostprocessor' => 
        array (
          'postprocessor' => 'Neos\\Neos\\NodeTypePostprocessor\\PluginNodeTypePostprocessor',
        ),
      ),
    ),
    'Neos.Neos:PluginView' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'group' => 'plugins',
        'icon' => 'icon-puzzle-piece',
        'position' => 100,
        'inspector' => 
        array (
          'groups' => 
          array (
            'pluginViews' => 
            array (
              'label' => 'i18n',
              'position' => 100,
              'icon' => 'icon-puzzle-piece',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'plugin' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'pluginViews',
              'position' => 10,
              'editor' => 'Neos.Neos/Inspector/Editors/MasterPluginEditor',
            ),
          ),
        ),
        'view' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'pluginViews',
              'position' => 20,
              'editor' => 'Neos.Neos/Inspector/Editors/PluginViewEditor',
            ),
          ),
        ),
      ),
    ),
    'Neos.Neos:Shortcut' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Document' => true,
        'Neos.Seo:TitleTagMixin' => false,
        'Neos.Seo:SeoMetaTagsMixin' => false,
        'Neos.Seo:NoindexMixin' => true,
        'Neos.Seo:TwitterCardMixin' => false,
        'Neos.Seo:CanonicalLinkMixin' => false,
        'Neos.Seo:OpenGraphMixin' => false,
        'Neos.Seo:XmlSitemapMixin' => false,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-share',
        'position' => 200,
        'inspector' => 
        array (
          'groups' => 
          array (
            'document' => 
            array (
              'label' => 'i18n',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'targetMode' => 
        array (
          'type' => 'string',
          'defaultValue' => 'parentNode',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadPageIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'document',
              'editor' => 'Neos.Neos/Inspector/Editors/SelectBoxEditor',
              'editorOptions' => 
              array (
                'values' => 
                array (
                  'firstChildNode' => 
                  array (
                    'label' => 'i18n',
                  ),
                  'parentNode' => 
                  array (
                    'label' => 'i18n',
                  ),
                  'selectedTarget' => 
                  array (
                    'label' => 'i18n',
                  ),
                ),
              ),
              'editorListeners' => 
              array (
                'removeTargetIfNotUsed' => 
                array (
                  'property' => 'target',
                  'handler' => 'Neos.Neos/Inspector/Handlers/ShortcutHandler',
                ),
              ),
            ),
          ),
        ),
        'target' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadPageIfChanged' => true,
            'inspector' => 
            array (
              'hidden' => 'ClientEval:node.properties.targetMode === "selectedTarget" ? false : true',
              'group' => 'document',
              'editor' => 'Neos.Neos/Inspector/Editors/LinkEditor',
              'editorListeners' => 
              array (
                'setTargetModeIfNotEmpty' => 
                array (
                  'property' => 'targetMode',
                  'handler' => 'Neos.Neos/Inspector/Handlers/ShortcutHandler',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.Neos:Timable' => 
    array (
      'abstract' => true,
      'ui' => 
      array (
        'inspector' => 
        array (
          'groups' => 
          array (
            'visibility' => 
            array (
              'label' => 'Neos.Neos:Inspector:groups.visibility',
              'icon' => 'icon-eye',
              'position' => 100,
              'tab' => 'meta',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        '_hiddenBeforeDateTime' => 
        array (
          'type' => 'DateTime',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'visibility',
              'position' => 10,
              'editorOptions' => 
              array (
                'format' => 'd-m-Y H:i',
              ),
            ),
          ),
          'validation' => 
          array (
            'Neos.Neos/Validation/DateTimeValidator' => 
            array (
            ),
          ),
        ),
        '_hiddenAfterDateTime' => 
        array (
          'type' => 'DateTime',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'visibility',
              'position' => 20,
              'editorOptions' => 
              array (
                'format' => 'd-m-Y H:i',
              ),
            ),
          ),
          'validation' => 
          array (
            'Neos.Neos/Validation/DateTimeValidator' => 
            array (
            ),
          ),
        ),
      ),
    ),
    'Neos.NodeTypes.BaseMixins:ContentImageMixin' => 
    array (
      'abstract' => true,
      'superTypes' => 
      array (
        'Neos.NodeTypes.BaseMixins:ImageMixin' => true,
        'Neos.NodeTypes.BaseMixins:LinkMixin' => true,
        'Neos.NodeTypes.BaseMixins:ImageCaptionMixin' => true,
        'Neos.NodeTypes.BaseMixins:ImageAlignmentMixin' => true,
      ),
      'properties' => 
      array (
        'link' => 
        array (
          'ui' => 
          array (
            'inspector' => 
            array (
              'group' => 'image',
            ),
          ),
        ),
      ),
    ),
    'Neos.NodeTypes.BaseMixins:ImageMixin' => 
    array (
      'abstract' => true,
      'ui' => 
      array (
        'inspector' => 
        array (
          'groups' => 
          array (
            'image' => 
            array (
              'label' => 'i18n',
              'position' => 5,
              'icon' => 'icon-image',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'image' => 
        array (
          'type' => 'Neos\\Media\\Domain\\Model\\ImageInterface',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'image',
              'position' => 50,
            ),
          ),
        ),
        'alternativeText' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'image',
              'position' => 100,
            ),
          ),
        ),
        'title' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'image',
              'position' => 150,
            ),
          ),
        ),
      ),
    ),
    'Neos.NodeTypes.BaseMixins:ImageAlignmentMixin' => 
    array (
      'abstract' => true,
      'properties' => 
      array (
        'alignment' => 
        array (
          'type' => 'string',
          'defaultValue' => '',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'image',
              'position' => 400,
              'editor' => 'Neos.Neos/Inspector/Editors/SelectBoxEditor',
              'editorOptions' => 
              array (
                'placeholder' => 'i18n',
                'values' => 
                array (
                  '' => 
                  array (
                    'label' => '',
                  ),
                  'center' => 
                  array (
                    'label' => 'i18n',
                  ),
                  'left' => 
                  array (
                    'label' => 'i18n',
                  ),
                  'right' => 
                  array (
                    'label' => 'i18n',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.NodeTypes.BaseMixins:ImageCaptionMixin' => 
    array (
      'abstract' => true,
      'properties' => 
      array (
        'hasCaption' => 
        array (
          'type' => 'boolean',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'image',
              'position' => 200,
            ),
          ),
        ),
        'caption' => 
        array (
          'type' => 'string',
          'defaultValue' => '',
          'ui' => 
          array (
            'inlineEditable' => true,
            'inline' => 
            array (
              'editorOptions' => 
              array (
                'autoparagraph' => true,
                'placeholder' => 'i18n',
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.NodeTypes.BaseMixins:LinkMixin' => 
    array (
      'abstract' => true,
      'properties' => 
      array (
        'link' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'position' => 300,
              'editor' => 'Neos.Neos/Inspector/Editors/LinkEditor',
            ),
          ),
        ),
      ),
    ),
    'Neos.NodeTypes.BaseMixins:TextMixin' => 
    array (
      'abstract' => true,
      'properties' => 
      array (
        'text' => 
        array (
          'type' => 'string',
          'defaultValue' => '',
          'ui' => 
          array (
            'inlineEditable' => true,
            'inline' => 
            array (
              'editorOptions' => 
              array (
                'formatting' => 
                array (
                  'strong' => true,
                  'em' => true,
                  'sub' => false,
                  'sup' => false,
                  'p' => true,
                  'h1' => true,
                  'h2' => true,
                  'h3' => true,
                  'pre' => true,
                  'removeFormat' => true,
                  'table' => true,
                  'a' => true,
                  'ol' => true,
                  'ul' => true,
                  'underline' => false,
                  'strikethrough' => false,
                ),
                'autoparagraph' => true,
                'placeholder' => 'i18n',
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.NodeTypes.BaseMixins:TitleMixin' => 
    array (
      'abstract' => true,
      'properties' => 
      array (
        'title' => 
        array (
          'type' => 'string',
          'defaultValue' => '<h1>Enter headline here</h1>',
          'ui' => 
          array (
            'inlineEditable' => true,
            'inline' => 
            array (
              'editorOptions' => 
              array (
                'formatting' => 
                array (
                  'p' => false,
                  'h1' => true,
                  'h2' => true,
                  'h3' => true,
                  'removeFormat' => true,
                  'a' => true,
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.NodeTypes.AssetList:AssetList' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-files-o',
        'position' => 700,
        'inspector' => 
        array (
          'groups' => 
          array (
            'resources' => 
            array (
              'label' => 'i18n',
              'position' => 5,
              'icon' => 'icon-files-o',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'assets' => 
        array (
          'type' => 'array<Neos\\Media\\Domain\\Model\\Asset>',
          'ui' => 
          array (
            'inspector' => 
            array (
              'group' => 'resources',
            ),
            'label' => 'i18n',
            'reloadIfChanged' => true,
          ),
        ),
      ),
    ),
    'Neos.NodeTypes.Navigation:Navigation' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'group' => 'structure',
        'icon' => 'icon-sitemap',
        'position' => 100,
        'inspector' => 
        array (
          'groups' => 
          array (
            'options' => 
            array (
              'label' => 'i18n',
              'position' => 30,
              'icon' => 'icon-sliders',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'startLevel' => 
        array (
          'type' => 'string',
          'defaultValue' => '0',
          'ui' => 
          array (
            'reloadIfChanged' => true,
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'options',
              'editor' => 'Neos.Neos/Inspector/Editors/SelectBoxEditor',
              'editorOptions' => 
              array (
                'values' => 
                array (
                  -4 => 
                  array (
                    'label' => 'i18n',
                  ),
                  -3 => 
                  array (
                    'label' => 'i18n',
                  ),
                  -2 => 
                  array (
                    'label' => 'i18n',
                  ),
                  -1 => 
                  array (
                    'label' => 'i18n',
                  ),
                  0 => 
                  array (
                    'label' => 'i18n',
                  ),
                  1 => 
                  array (
                    'label' => 'i18n',
                  ),
                  2 => 
                  array (
                    'label' => 'i18n',
                  ),
                  3 => 
                  array (
                    'label' => 'i18n',
                  ),
                  4 => 
                  array (
                    'label' => 'i18n',
                  ),
                  5 => 
                  array (
                    'label' => 'i18n',
                  ),
                  6 => 
                  array (
                    'label' => 'i18n',
                  ),
                ),
              ),
            ),
          ),
        ),
        'selection' => 
        array (
          'type' => 'references',
          'ui' => 
          array (
            'reloadIfChanged' => true,
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'options',
            ),
          ),
        ),
        'startingPoint' => 
        array (
          'type' => 'reference',
          'ui' => 
          array (
            'reloadIfChanged' => true,
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'options',
            ),
          ),
        ),
        'maximumLevels' => 
        array (
          'type' => 'string',
          'defaultValue' => '1',
          'ui' => 
          array (
            'reloadIfChanged' => true,
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'options',
              'editor' => 'Neos.Neos/Inspector/Editors/SelectBoxEditor',
              'editorOptions' => 
              array (
                'values' => 
                array (
                  1 => 
                  array (
                    'label' => '1',
                  ),
                  2 => 
                  array (
                    'label' => '2',
                  ),
                  3 => 
                  array (
                    'label' => '3',
                  ),
                  4 => 
                  array (
                    'label' => '4',
                  ),
                  5 => 
                  array (
                    'label' => '5',
                  ),
                  6 => 
                  array (
                    'label' => '6',
                  ),
                  7 => 
                  array (
                    'label' => '7',
                  ),
                  8 => 
                  array (
                    'label' => '8',
                  ),
                  9 => 
                  array (
                    'label' => '9',
                  ),
                  10 => 
                  array (
                    'label' => '10',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.Seo:CanonicalLinkMixin' => 
    array (
      'abstract' => true,
      'ui' => 
      array (
        'inspector' => 
        array (
          'groups' => 
          array (
            'canonicallink' => 
            array (
              'label' => 'i18n',
              'icon' => 'icon-link',
              'position' => 200,
              'tab' => 'seo',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'canonicalLink' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'canonicallink',
              'position' => 30,
              'editor' => 'Neos.Neos/Inspector/Editors/LinkEditor',
              'editorOptions' => 
              array (
                'placeholder' => 'i18n',
                'assets' => false,
                'nodeTypes' => 
                array (
                  0 => 'Neos.Neos:Document',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.Seo:GoogleSiteVerificationMixin' => 
    array (
      'abstract' => true,
      'properties' => 
      array (
        'metaGoogleSiteVerification' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'help' => 
            array (
              'message' => 'i18n',
            ),
            'inspector' => 
            array (
              'group' => 'seometa',
              'position' => 100,
            ),
          ),
          'validation' => 
          array (
            'Neos.Neos/Validation/RegularExpressionValidator' => 
            array (
              'regularExpression' => '/^[a-z0-9]$/i',
            ),
          ),
        ),
      ),
    ),
    'Neos.Seo:NoindexMixin' => 
    array (
      'abstract' => true,
      'properties' => 
      array (
        'metaRobotsNoindex' => 
        array (
          'type' => 'boolean',
          'defaultValue' => true,
          'ui' => 
          array (
            'inspector' => 
            array (
              'editorOptions' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.Seo:OpenGraphMixin' => 
    array (
      'abstract' => true,
      'ui' => 
      array (
        'inspector' => 
        array (
          'groups' => 
          array (
            'openGraph' => 
            array (
              'label' => 'i18n',
              'icon' => 'icon-share-alt',
              'position' => 300,
              'tab' => 'seo',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'openGraphType' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'openGraph',
              'editor' => 'Neos.Neos/Inspector/Editors/SelectBoxEditor',
              'editorOptions' => 
              array (
                'allowEmpty' => true,
                'placeholder' => 'i18n',
                'values' => 
                array (
                  'website' => 
                  array (
                    'label' => 'i18n',
                    'icon' => 'icon-file',
                  ),
                  'article' => 
                  array (
                    'label' => 'i18n',
                    'icon' => 'icon-newspaper',
                  ),
                ),
              ),
            ),
          ),
        ),
        'openGraphTitle' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'openGraph',
              'editor' => 'Neos.Neos/Inspector/Editors/TextAreaEditor',
              'editorOptions' => 
              array (
                'placeholder' => 'ClientEval: node.properties.titleOverride || node.properties.title',
              ),
            ),
          ),
          'validation' => 
          array (
            'Neos.Neos/Validation/StringLengthValidator' => 
            array (
              'maximum' => 60,
            ),
          ),
        ),
        'openGraphDescription' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'openGraph',
              'editor' => 'Neos.Neos/Inspector/Editors/TextAreaEditor',
              'editorOptions' => 
              array (
                'placeholder' => 'ClientEval: node.properties.metaDescription || "Neos.Seo:NodeTypes.OpenGraphMixin:properties.openGraphDescription.textAreaEditor.placeholder"',
              ),
            ),
          ),
          'validation' => 
          array (
            'Neos.Neos/Validation/StringLengthValidator' => 
            array (
              'maximum' => 200,
            ),
          ),
        ),
        'openGraphImage' => 
        array (
          'type' => 'Neos\\Media\\Domain\\Model\\ImageInterface',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'openGraph',
              'editorOptions' => 
              array (
                'features' => 
                array (
                  'crop' => true,
                ),
                'crop' => 
                array (
                  'aspectRatio' => 
                  array (
                    'options' => 
                    array (
                      'square' => 
                      array (
                        'width' => 1080,
                        'height' => 1080,
                      ),
                      'twoOne' => 
                      array (
                        'width' => 1200,
                        'height' => 628,
                        'label' => 'Landscape',
                      ),
                      'fourFive' => NULL,
                      'fiveSeven' => NULL,
                      'twoThree' => NULL,
                      'fourThree' => NULL,
                      'sixteenNine' => NULL,
                    ),
                    'enableOriginal' => false,
                    'allowCustom' => false,
                    'defaultOption' => 'twoOne',
                    'forceCrop' => true,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.Seo:SeoMetaTagsMixin' => 
    array (
      'abstract' => true,
      'ui' => 
      array (
        'inspector' => 
        array (
          'groups' => 
          array (
            'seometa' => 
            array (
              'label' => 'i18n',
              'icon' => 'icon-tags',
              'position' => 100,
              'tab' => 'seo',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'metaDescription' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'seometa',
              'position' => 10,
              'editor' => 'Neos.Neos/Inspector/Editors/TextAreaEditor',
              'editorOptions' => 
              array (
                'placeholder' => 'i18n',
              ),
            ),
          ),
          'validation' => 
          array (
            'Neos.Neos/Validation/StringLengthValidator' => 
            array (
              'maximum' => 160,
            ),
          ),
        ),
        'metaKeywords' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'seometa',
              'position' => 20,
              'editor' => 'Neos.Neos/Inspector/Editors/TextAreaEditor',
              'editorOptions' => 
              array (
                'placeholder' => 'i18n',
              ),
            ),
          ),
          'validation' => 
          array (
            'Neos.Neos/Validation/StringLengthValidator' => 
            array (
              'maximum' => 255,
            ),
          ),
        ),
        'metaRobotsNoindex' => 
        array (
          'type' => 'boolean',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'seometa',
              'position' => 30,
            ),
          ),
        ),
        'metaRobotsNofollow' => 
        array (
          'type' => 'boolean',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'seometa',
              'position' => 40,
            ),
          ),
        ),
      ),
    ),
    'Neos.Seo:TitleTagMixin' => 
    array (
      'abstract' => true,
      'properties' => 
      array (
        'titleOverride' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'document',
              'position' => 10000,
              'editor' => 'Neos.Neos/Inspector/Editors/TextAreaEditor',
              'editorOptions' => 
              array (
                'placeholder' => 'i18n',
              ),
            ),
          ),
          'validation' => 
          array (
            'Neos.Neos/Validation/StringLengthValidator' => 
            array (
              'maximum' => 60,
            ),
          ),
        ),
      ),
    ),
    'Neos.Seo:TwitterCardMixin' => 
    array (
      'abstract' => true,
      'ui' => 
      array (
        'inspector' => 
        array (
          'groups' => 
          array (
            'twittercard' => 
            array (
              'label' => 'i18n',
              'icon' => 'icon-twitter',
              'position' => 400,
              'tab' => 'seo',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'twitterCardType' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'twittercard',
              'editor' => 'Neos.Neos/Inspector/Editors/SelectBoxEditor',
              'editorOptions' => 
              array (
                'allowEmpty' => true,
                'placeholder' => 'i18n',
                'values' => 
                array (
                  'summary' => 
                  array (
                    'label' => 'i18n',
                    'icon' => 'icon-square',
                  ),
                  'summary_large_image' => 
                  array (
                    'label' => 'i18n',
                    'icon' => 'icon-image',
                  ),
                ),
              ),
            ),
          ),
        ),
        'twitterCardCreator' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'twittercard',
              'editorOptions' => 
              array (
                'placeholder' => 'i18n',
              ),
            ),
          ),
          'validation' => 
          array (
            'Neos.Neos/Validation/RegularExpressionValidator' => 
            array (
              'regularExpression' => '/^@[a-z0-9_]{1,15}$/i',
            ),
          ),
        ),
        'twitterCardTitle' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'twittercard',
              'editor' => 'Neos.Neos/Inspector/Editors/TextAreaEditor',
              'editorOptions' => 
              array (
                'placeholder' => 'ClientEval: node.properties.openGraphTitle || node.properties.titleOverride || node.properties.title',
              ),
            ),
          ),
          'validation' => 
          array (
            'Neos.Neos/Validation/StringLengthValidator' => 
            array (
              'maximum' => 70,
            ),
          ),
        ),
        'twitterCardDescription' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'twittercard',
              'editor' => 'Neos.Neos/Inspector/Editors/TextAreaEditor',
              'editorOptions' => 
              array (
                'placeholder' => 'ClientEval: node.properties.openGraphDescription || node.properties.metaDescription || "Neos.Seo:NodeTypes.TwitterCardMixin:properties.twitterCardDescription.textAreaEditor.placeholder"',
              ),
            ),
          ),
          'validation' => 
          array (
            'Neos.Neos/Validation/StringLengthValidator' => 
            array (
              'maximum' => 200,
            ),
          ),
        ),
        'twitterCardImage' => 
        array (
          'type' => 'Neos\\Media\\Domain\\Model\\ImageInterface',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'twittercard',
              'editorOptions' => 
              array (
                'features' => 
                array (
                  'crop' => true,
                ),
                'crop' => 
                array (
                  'aspectRatio' => 
                  array (
                    'options' => 
                    array (
                      'twoOne' => 
                      array (
                        'width' => 1200,
                        'height' => 600,
                        'label' => 'Summary Card Large Image',
                      ),
                      'square' => 
                      array (
                        'width' => 600,
                        'height' => 600,
                        'label' => 'Summary Card',
                      ),
                      'fourFive' => NULL,
                      'fiveSeven' => NULL,
                      'twoThree' => NULL,
                      'fourThree' => NULL,
                      'sixteenNine' => NULL,
                    ),
                    'enableOriginal' => false,
                    'allowCustom' => false,
                    'defaultOption' => 'ClientEval: node.properties.twitterCardType == "summary_large_image" ? "twoOne" : "square"',
                    'forceCrop' => true,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.Seo:XmlSitemapMixin' => 
    array (
      'abstract' => true,
      'ui' => 
      array (
        'inspector' => 
        array (
          'groups' => 
          array (
            'xmlsitemap' => 
            array (
              'label' => 'i18n',
              'icon' => 'icon-sitemap',
              'position' => 500,
              'tab' => 'seo',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'xmlSitemapChangeFrequency' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'xmlsitemap',
              'position' => 10,
              'editor' => 'Neos.Neos/Inspector/Editors/SelectBoxEditor',
              'editorOptions' => 
              array (
                'allowEmpty' => true,
                'placeholder' => 'none (unspecified)',
                'values' => 
                array (
                  'always' => 
                  array (
                    'label' => 'i18n',
                    'icon' => 'icon-clock',
                  ),
                  'hourly' => 
                  array (
                    'label' => 'i18n',
                    'icon' => 'icon-hourglass',
                  ),
                  'daily' => 
                  array (
                    'label' => 'i18n',
                    'icon' => 'icon-calendar-day',
                  ),
                  'weekly' => 
                  array (
                    'label' => 'i18n',
                    'icon' => 'icon-calendar-week',
                  ),
                  'monthly' => 
                  array (
                    'label' => 'i18n',
                    'icon' => 'icon-calendar',
                  ),
                  'yearly' => 
                  array (
                    'label' => 'i18n',
                    'icon' => 'icon-glass-cheers',
                  ),
                  'never' => 
                  array (
                    'label' => 'i18n',
                    'icon' => 'icon-time-circle',
                  ),
                ),
              ),
            ),
          ),
        ),
        'xmlSitemapPriority' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'xmlsitemap',
              'position' => 20,
              'editorOptions' => 
              array (
                'placeholder' => 'i18n',
              ),
            ),
          ),
          'validation' => 
          array (
            'Neos.Neos/Validation/NumberRangeValidator' => 
            array (
              'minimum' => 0,
              'maximum' => 1,
            ),
          ),
        ),
      ),
    ),
    'Neos.NodeTypes.ContentReferences:ContentReferences' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-copy',
        'position' => 800,
        'inspector' => 
        array (
          'groups' => 
          array (
            'references' => 
            array (
              'label' => 'i18n',
              'position' => 10,
              'icon' => 'icon-copy',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'references' => 
        array (
          'type' => 'references',
          'ui' => 
          array (
            'inspector' => 
            array (
              'group' => 'references',
              'editorOptions' => 
              array (
                'nodeTypes' => 
                array (
                  0 => 'Neos.Neos:Content',
                ),
              ),
            ),
            'label' => 'i18n',
            'reloadIfChanged' => true,
          ),
        ),
      ),
    ),
    'Neos.NodeTypes.Html:Html' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-code',
        'position' => 500,
        'inspector' => 
        array (
          'groups' => 
          array (
            'html' => 
            array (
              'label' => 'i18n',
              'icon' => 'icon-code',
              'position' => 10,
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'source' => 
        array (
          'type' => 'string',
          'defaultValue' => '<p>Enter HTML here</p>',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'html',
              'editor' => 'Neos.Neos/Inspector/Editors/CodeEditor',
              'editorOptions' => 
              array (
                'buttonLabel' => 'i18n',
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.Demo:Collection.Content.Footer' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:ContentCollection' => true,
      ),
      'constraints' => 
      array (
        'nodeTypes' => 
        array (
          '*' => false,
          'Neos.Demo:Content.Headline' => true,
          'Neos.Demo:Content.Text' => true,
          'Neos.Demo:Content.Image' => true,
        ),
      ),
    ),
    'Neos.Demo:Collection.Content.Teaser' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:ContentCollection' => true,
      ),
      'constraints' => 
      array (
        'nodeTypes' => 
        array (
          '*' => false,
          'Neos.Demo:Content.Headline' => true,
          'Neos.Demo:Content.Text' => true,
          'Neos.Demo:Content.Image' => true,
        ),
      ),
    ),
    'Neos.Demo:Collection.Content.Column' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:ContentCollection' => true,
      ),
      'constraints' => 
      array (
        'nodeTypes' => 
        array (
          '*' => false,
          'Neos.Demo:Constraint.Content.Column' => true,
        ),
      ),
    ),
    'Neos.Demo:Collection.Content.Main' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:ContentCollection' => true,
      ),
      'constraints' => 
      array (
        'nodeTypes' => 
        array (
          'Neos.NodeTypes:Headline' => false,
          'Neos.NodeTypes:Text' => false,
          'Neos.NodeTypes:Image' => false,
          'Neos.NodeTypes:TextWithImage' => false,
          'Neos.NodeTypes.ColumnLayouts:TwoColumn' => false,
          'Neos.NodeTypes.ColumnLayouts:ThreeColumn' => false,
          'Neos.NodeTypes.ColumnLayouts:FourColumn' => false,
        ),
      ),
    ),
    'Neos.Demo:Collection.Content.Carousel' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:ContentCollection' => true,
      ),
      'constraints' => 
      array (
        'nodeTypes' => 
        array (
          '*' => false,
          'Neos.Demo:Constraint.Content.Carousel' => true,
        ),
      ),
    ),
    'Neos.Demo:Content.ArrowLink' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
        'Neos.NodeTypes.BaseMixins:LinkMixin' => true,
        'Neos.Demo:Constraint.Content.Carousel' => true,
        'Neos.Demo:Constraint.Content.Column' => true,
      ),
      'ui' => 
      array (
        'label' => 'Link with Arrow',
        'icon' => 'icon-link',
        'position' => 200,
        'inlineEditable' => true,
        'inspector' => 
        array (
          'groups' => 
          array (
            'link' => 
            array (
              'label' => 'Link',
              'icon' => 'icon-link',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'label' => 
        array (
          'ui' => 
          array (
            'aloha' => 
            array (
              'placeholder' => 'Link text',
            ),
          ),
          'options' => 
          array (
            'silhouette' => 'text.plain',
          ),
        ),
        'link' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'Link',
            'inspector' => 
            array (
              'group' => 'link',
            ),
          ),
        ),
        'linkTarget' => 
        array (
          'type' => 'boolean',
          'ui' => 
          array (
            'label' => 'Open in new window',
            'inspector' => 
            array (
              'group' => 'link',
            ),
          ),
        ),
      ),
    ),
    'Neos.Demo:Content.Headline' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
        'Neos.NodeTypes.BaseMixins:TitleMixin' => true,
        'Neos.Demo:Constraint.Content.Carousel' => true,
        'Neos.Demo:Constraint.Content.Column' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-header',
        'position' => 100,
      ),
      'properties' => 
      array (
        'title' => 
        array (
          'ui' => 
          array (
            'inline' => 
            array (
              'editorOptions' => 
              array (
                'formatting' => 
                array (
                  'h4' => true,
                  'h5' => true,
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.Demo:Content.ContactForm' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
        'Neos.Demo:Constraint.Content.Column' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-envelope',
        'inspector' => 
        array (
          'groups' => 
          array (
            'email' => 
            array (
              'label' => 'i18n',
              'icon' => 'envelope',
              'tab' => 'default',
            ),
            'redirect' => 
            array (
              'label' => 'i18n',
              'icon' => 'share',
              'tab' => 'default',
            ),
            'message' => 
            array (
              'label' => 'i18n',
              'icon' => 'comment',
              'tab' => 'default',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'subject' => 
        array (
          'type' => 'string',
          'defaultValue' => '',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'email',
            ),
          ),
        ),
        'recipientName' => 
        array (
          'type' => 'string',
          'defaultValue' => '',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'email',
            ),
          ),
        ),
        'recipientAddress' => 
        array (
          'type' => 'string',
          'defaultValue' => '',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'email',
            ),
          ),
        ),
        'senderName' => 
        array (
          'type' => 'string',
          'defaultValue' => '',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'email',
            ),
          ),
        ),
        'senderAddress' => 
        array (
          'type' => 'string',
          'defaultValue' => '',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'email',
            ),
          ),
        ),
        'redirect' => 
        array (
          'type' => 'reference',
          'defaultValue' => NULL,
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'redirect',
              'editorOptions' => 
              array (
                'nodeTyps' => 
                array (
                  0 => 'Neos.Neos:Document',
                ),
              ),
            ),
          ),
        ),
        'message' => 
        array (
          'type' => 'string',
          'defaultValue' => '',
          'ui' => 
          array (
            'label' => 'i18n',
            'inspector' => 
            array (
              'group' => 'message',
              'editor' => 'Neos.Neos/Inspector/Editors/TextAreaEditor',
              'editorOptions' => 
              array (
                'rows' => 7,
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.Demo:Content.ImageRoundedLeft' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
        'Neos.NodeTypes.BaseMixins:ImageMixin' => true,
        'Neos.NodeTypes.BaseMixins:ImageCaptionMixin' => true,
        'Neos.Demo:Constraint.Content.Carousel' => true,
        'Neos.Demo:Constraint.Content.Column' => true,
      ),
      'ui' => 
      array (
        'label' => 'Image rounded top left',
        'icon' => 'icon-picture',
        'position' => 300,
      ),
    ),
    'Neos.Demo:Content.Registration' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-user',
        'help' => 
        array (
          'message' => 'A very simple registration to allow quick access to the backend of the demo site.

**Note:** For security reasons you should disable this on live sites.
',
        ),
      ),
    ),
    'Neos.Demo:Content.TextWithImageGruppe' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
        'Neos.NodeTypes.BaseMixins:TextMixin' => true,
        'Neos.NodeTypes.BaseMixins:ImageMixin' => true,
        'Neos.NodeTypes.BaseMixins:ImageCaptionMixin' => true,
        'Neos.Demo:Constraint.Content.Carousel' => true,
        'Neos.Demo:Constraint.Content.Column' => true,
        'Neos.NodeTypes.BaseMixins:TitleMixin' => true,
        'Neos.NodeTypes.BaseMixins:LinkMixin' => true,
        'Neos.Demo:Content.Headline' => true,
      ),
      'ui' => 
      array (
        'label' => 'Image-Text Gruppe',
        'icon' => 'icon-picture',
        'position' => 410,
        'inlineEditable' => true,
        'inspector' => 
        array (
          'groups' => 
          array (
            'link' => 
            array (
              'label' => 'Link',
              'icon' => 'icon-link',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'label' => 
        array (
          'ui' => 
          array (
            'aloha' => 
            array (
              'placeholder' => 'Link text',
            ),
          ),
          'options' => 
          array (
            'silhouette' => 'text.plain',
          ),
        ),
        'link' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'Link',
            'inspector' => 
            array (
              'group' => 'link',
            ),
          ),
        ),
        'linkTarget' => 
        array (
          'type' => 'boolean',
          'ui' => 
          array (
            'label' => 'Open in new window',
            'inspector' => 
            array (
              'group' => 'link',
            ),
          ),
        ),
      ),
    ),
    'Neos.Demo:Content.YouTube' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
        'Neos.Demo:Constraint.Content.Carousel' => true,
        'Neos.Demo:Constraint.Content.Column' => true,
      ),
      'ui' => 
      array (
        'label' => 'YouTube',
        'icon' => 'icon-youtube',
        'inspector' => 
        array (
          'groups' => 
          array (
            'video' => 
            array (
              'label' => 'i18n',
              'icon' => 'icon-film',
              'position' => 50,
            ),
          ),
        ),
        'help' => 
        array (
          'message' => 'Embeds a YouTube video as content defined by a video ID.',
        ),
      ),
      'properties' => 
      array (
        'video' => 
        array (
          'type' => 'string',
          'defaultValue' => '',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'video',
            ),
            'help' => 
            array (
              'message' => 'The video identifier is visible in the URL to a youtube video

Eg. in the URL

`https://youtu.be/G6D1YI-41ao`

the video id is `G6D1YI-41ao`.
',
            ),
          ),
        ),
        'width' => 
        array (
          'type' => 'integer',
          'defaultValue' => 400,
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'video',
            ),
          ),
        ),
        'height' => 
        array (
          'type' => 'integer',
          'defaultValue' => 300,
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'video',
            ),
          ),
        ),
      ),
    ),
    'Neos.Demo:Content.TextWithImage' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
        'Neos.NodeTypes.BaseMixins:TextMixin' => true,
        'Neos.NodeTypes.BaseMixins:ImageMixin' => true,
        'Neos.NodeTypes.BaseMixins:ImageCaptionMixin' => true,
        'Neos.Demo:Constraint.Content.Carousel' => true,
        'Neos.Demo:Constraint.Content.Column' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-picture',
        'position' => 400,
      ),
    ),
    'Neos.Demo:Content.ImageRoundedLeftRight' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
        'Neos.NodeTypes.BaseMixins:ImageMixin' => true,
        'Neos.NodeTypes.BaseMixins:ImageCaptionMixin' => true,
        'Neos.Demo:Constraint.Content.Carousel' => true,
        'Neos.Demo:Constraint.Content.Column' => true,
      ),
      'ui' => 
      array (
        'label' => 'Image rounded top left + bottom right',
        'icon' => 'icon-picture',
        'position' => 300,
      ),
    ),
    'Neos.Demo:Content.HeroBanner' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
        'Neos.NodeTypes.BaseMixins:TitleMixin' => true,
        'Neos.Demo:Constraint.Content.Carousel' => true,
        'Neos.Demo:Constraint.Content.Column' => true,
        'Neos.Demo:Content.Headline' => true,
        'Neos.Demo:Content.ArrowLink' => true,
      ),
      'ui' => 
      array (
        'label' => 'Herobanner',
        'icon' => 'icon-header',
        'position' => 100,
      ),
    ),
    'Neos.Demo:Content.Carousel' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
      ),
      'childNodes' => 
      array (
        'carouselitems' => 
        array (
          'type' => 'Neos.Demo:Collection.Content.Carousel',
        ),
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'group' => 'plugins',
        'icon' => 'icon-picture',
        'inlineEditable' => true,
        'help' => 
        array (
          'message' => 'Bootstrap carousel which can display the following types of content:
* Headline
* Text
* TextWithImage
* Image
* HTML
* YouTube
* References
',
        ),
      ),
    ),
    'Neos.Demo:Content.Columns.Three' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-columns',
        'group' => 'structure',
        'position' => 400,
      ),
      'childNodes' => 
      array (
        'column0' => 
        array (
          'type' => 'Neos.Demo:Collection.Content.Column',
        ),
        'column1' => 
        array (
          'type' => 'Neos.Demo:Collection.Content.Column',
        ),
        'column2' => 
        array (
          'type' => 'Neos.Demo:Collection.Content.Column',
        ),
      ),
    ),
    'Neos.Demo:Content.Columns.TwoCenter' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
      ),
      'ui' => 
      array (
        'label' => 'Two column content centered',
        'icon' => 'icon-columns',
        'group' => 'structure',
        'position' => 400,
      ),
      'childNodes' => 
      array (
        'column0' => 
        array (
          'type' => 'Neos.Demo:Collection.Content.Column',
        ),
        'column1' => 
        array (
          'type' => 'Neos.Demo:Collection.Content.Column',
        ),
      ),
    ),
    'Neos.Demo:Content.Columns.Two' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-columns',
        'group' => 'structure',
        'position' => 400,
      ),
      'childNodes' => 
      array (
        'column0' => 
        array (
          'type' => 'Neos.Demo:Collection.Content.Column',
        ),
        'column1' => 
        array (
          'type' => 'Neos.Demo:Collection.Content.Column',
        ),
      ),
    ),
    'Neos.Demo:Content.Columns.Aktivitaeten' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
        'Neos.Demo:Content.Headline' => true,
        'Neos.Demo:Content.Columns.Four' => true,
      ),
      'ui' => 
      array (
        'label' => 'Aktivitaeten',
        'icon' => 'icon-columns',
        'group' => 'structure',
        'position' => 400,
      ),
    ),
    'Neos.Demo:Content.Columns.Four' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-columns',
        'group' => 'structure',
        'position' => 400,
      ),
      'childNodes' => 
      array (
        'column0' => 
        array (
          'type' => 'Neos.Demo:Collection.Content.Column',
        ),
        'column1' => 
        array (
          'type' => 'Neos.Demo:Collection.Content.Column',
        ),
        'column2' => 
        array (
          'type' => 'Neos.Demo:Collection.Content.Column',
        ),
        'column3' => 
        array (
          'type' => 'Neos.Demo:Collection.Content.Column',
        ),
      ),
    ),
    'Neos.Demo:Content.Text' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
        'Neos.NodeTypes.BaseMixins:TextMixin' => true,
        'Neos.Demo:Constraint.Content.Carousel' => true,
        'Neos.Demo:Constraint.Content.Column' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-file-text',
        'position' => 200,
      ),
    ),
    'Neos.Demo:Content.TextGruppe' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
        'Neos.NodeTypes.BaseMixins:TextMixin' => true,
        'Neos.Demo:Constraint.Content.Carousel' => true,
        'Neos.Demo:Constraint.Content.Column' => true,
        'Neos.Demo:Content.Headline' => true,
      ),
      'ui' => 
      array (
        'label' => 'Text Gruppe',
        'icon' => 'icon-file-text',
        'position' => 200,
        'inlineEditable' => true,
        'inspector' => 
        array (
          'groups' => 
          array (
            'link' => 
            array (
              'label' => 'Link',
              'icon' => 'icon-link',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'label' => 
        array (
          'ui' => 
          array (
            'aloha' => 
            array (
              'placeholder' => 'Link text',
            ),
          ),
          'options' => 
          array (
            'silhouette' => 'text.plain',
          ),
        ),
        'link' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'Link',
            'inspector' => 
            array (
              'group' => 'link',
            ),
          ),
        ),
        'linkTarget' => 
        array (
          'type' => 'boolean',
          'ui' => 
          array (
            'label' => 'Open in new window',
            'inspector' => 
            array (
              'group' => 'link',
            ),
          ),
        ),
      ),
    ),
    'Neos.Demo:Content.Image' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
        'Neos.NodeTypes.BaseMixins:ImageMixin' => true,
        'Neos.NodeTypes.BaseMixins:ImageCaptionMixin' => true,
        'Neos.Demo:Constraint.Content.Carousel' => true,
        'Neos.Demo:Constraint.Content.Column' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-picture',
        'position' => 300,
      ),
    ),
    'Neos.Demo:Content.ChapterMenu' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'help' => 
        array (
          'message' => 'The ChapterMenu renders an overview of all chapters below the current document.
It displays:
* title
* chapter description
* chapter image
',
        ),
      ),
    ),
    'Neos.Demo:Content.HeadlineCenter' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Content' => true,
        'Neos.NodeTypes.BaseMixins:TitleMixin' => true,
        'Neos.Demo:Constraint.Content.Carousel' => true,
        'Neos.Demo:Constraint.Content.Column' => true,
      ),
      'ui' => 
      array (
        'label' => 'Headline Center',
        'icon' => 'icon-header',
        'position' => 100,
      ),
      'properties' => 
      array (
        'title' => 
        array (
          'ui' => 
          array (
            'inline' => 
            array (
              'editorOptions' => 
              array (
                'formatting' => 
                array (
                  'h4' => true,
                  'h5' => true,
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.Demo:Document.Chapter' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Document' => true,
      ),
      'constraints' => 
      array (
        'nodeTypes' => 
        array (
          'Neos.Demo:Document.Homepage' => false,
          'Neos.Demo:Document.NotFoundPage' => false,
        ),
      ),
      'childNodes' => 
      array (
        'main' => 
        array (
          'type' => 'Neos.Demo:Collection.Content.Main',
        ),
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'icon-book',
        'help' => 
        array (
          'message' => 'The Chapter node will work with all other chapter nodes on the same level to form a browsable book.',
        ),
        'inspector' => 
        array (
          'groups' => 
          array (
            'document' => 
            array (
              'label' => 'i18n',
            ),
          ),
        ),
      ),
      'properties' => 
      array (
        'layout' => 
        array (
          'type' => 'string',
          'defaultValue' => 'chapter',
        ),
        'chapterDescription' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'document',
              'editor' => 'Neos.Neos/Inspector/Editors/TextAreaEditor',
            ),
            'help' => 
            array (
              'message' => 'The description will only be used in the chapter menu.',
            ),
          ),
        ),
        'chapterImage' => 
        array (
          'type' => 'Neos\\Media\\Domain\\Model\\ImageInterface',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'document',
            ),
            'help' => 
            array (
              'message' => 'This image will also appear in the chapter menu.',
            ),
          ),
        ),
        'title' => 
        array (
          'validation' => NULL,
          'ui' => 
          array (
            'inlineEditable' => true,
            'inspector' => 
            array (
              'group' => NULL,
            ),
            'inline' => 
            array (
              'editorOptions' => 
              array (
                'formatting' => 
                array (
                  'sub' => true,
                  'sup' => true,
                  'p' => false,
                  'h1' => false,
                  'h2' => false,
                  'h3' => false,
                  'pre' => false,
                  'removeFormat' => false,
                  'a' => true,
                  'strong' => true,
                  'em' => true,
                  'underline' => true,
                ),
                'placeholder' => 'Enter title here',
              ),
            ),
          ),
        ),
      ),
    ),
    'Neos.Demo:Document.LandingPage' => 
    array (
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'file-import',
        'help' => 
        array (
          'message' => 'A landing Page',
        ),
      ),
      'superTypes' => 
      array (
        'Neos.Demo:Document.Page' => true,
      ),
      'childNodes' => 
      array (
        'teaser' => 
        array (
          'position' => 'end',
          'type' => 'Neos.Demo:Collection.Content.Teaser',
        ),
      ),
    ),
    'Neos.Demo:Document.NotFoundPage' => 
    array (
      'superTypes' => 
      array (
        'Neos.Demo:Document.Page' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'times',
      ),
      'constraints' => 
      array (
        'nodeTypes' => 
        array (
          'Neos.Neos:Document' => false,
        ),
      ),
      'properties' => 
      array (
        'title' => 
        array (
          'defaultValue' => 'Not Found',
        ),
        'uriPathSegment' => 
        array (
          'defaultValue' => 'notfound',
        ),
        '_hidden' => 
        array (
          'defaultValue' => true,
        ),
        '_hiddenInIndex' => 
        array (
          'defaultValue' => true,
        ),
        'metaRobotsNoindex' => 
        array (
          'defaultValue' => true,
        ),
      ),
    ),
    'Neos.Demo:Document.Page' => 
    array (
      'superTypes' => 
      array (
        'Neos.Neos:Document' => true,
      ),
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'file',
        'help' => 
        array (
          'message' => 'A Page',
        ),
        'inspector' => 
        array (
          'groups' => 
          array (
            'image' => 
            array (
              'label' => 'i18n',
              'position' => 200,
              'icon' => 'icon-image',
            ),
          ),
        ),
      ),
      'constraints' => 
      array (
        'nodeTypes' => 
        array (
          'Neos.NodeTypes:Page' => false,
          'Neos.Demo:Document.Homepage' => false,
          'Neos.Demo:Document.NotFoundPage' => false,
        ),
      ),
      'childNodes' => 
      array (
        'main' => 
        array (
          'type' => 'Neos.Demo:Collection.Content.Main',
        ),
        'teaser' => 
        array (
          'type' => 'Neos.Demo:Collection.Content.Teaser',
        ),
      ),
      'properties' => 
      array (
        'image' => 
        array (
          'type' => 'Neos\\Media\\Domain\\Model\\ImageInterface',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'image',
              'position' => 50,
              'editorOptions' => 
              array (
                'crop' => 
                array (
                  'aspectRatio' => 
                  array (
                    'locked' => 
                    array (
                      'width' => 2,
                      'height' => 1,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'imageTitleText' => 
        array (
          'type' => 'string',
          'ui' => 
          array (
            'label' => 'i18n',
            'reloadIfChanged' => true,
            'inspector' => 
            array (
              'group' => 'image',
              'position' => 100,
            ),
          ),
        ),
      ),
    ),
    'Neos.Demo:Document.Homepage' => 
    array (
      'ui' => 
      array (
        'label' => 'i18n',
        'icon' => 'globe',
        'help' => 
        array (
          'message' => 'The homepage type is to be used only once and adds the shared footer.',
        ),
      ),
      'superTypes' => 
      array (
        'Neos.Demo:Document.Page' => true,
      ),
      'childNodes' => 
      array (
        'notfound' => 
        array (
          'type' => 'Neos.Demo:Document.NotFoundPage',
        ),
        'footer' => 
        array (
          'position' => 'end',
          'type' => 'Neos.Demo:Collection.Content.Footer',
        ),
      ),
    ),
    'Neos.Demo:Constraint.Content.Column' => 
    array (
      'abstract' => true,
    ),
    'Neos.Demo:Constraint.Content.Carousel' => 
    array (
      'abstract' => true,
    ),
  ),
);