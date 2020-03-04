<?php

return [
    'services' =>
    [
        'advisor' =>
        [
            'class' => 'PhpMyAdmin\Advisor',
            'arguments' =>
            [
                'dbi' => '@dbi',
                'expression_language' => '@expression_language',
            ],
        ],
        'browse_foreigners' =>
        [
            'class' => 'PhpMyAdmin\BrowseForeigners',
            'arguments' =>
            [
                '@template',
            ],
        ],
        'config' =>
        [
            'class' => 'PhpMyAdmin\Config',
            'arguments' =>
            [
                CONFIG_FILE,
            ],
        ],
        'central_columns' =>
        [
            'class' => '\PhpMyAdmin\CentralColumns',
            'arguments' =>
            [
                '@dbi',
            ],
        ],
        'check_user_privileges' =>
        [
            'class' => '\PhpMyAdmin\CheckUserPrivileges',
            'arguments' =>
            [
                '@dbi',
            ],
        ],
        'create_add_field' =>
        [
            'class' => 'PhpMyAdmin\CreateAddField',
            'arguments' =>
            [
                '@dbi',
            ],
        ],
        'designer' =>
        [
            'class' => 'PhpMyAdmin\Database\Designer',
            'arguments' =>
            [
                'dbi' => '@dbi',
                'relation' => '@relation',
                'template' => '@template',
            ],
        ],
        'designer_common' =>
        [
            'class' => 'PhpMyAdmin\Database\Designer\Common',
            'arguments' =>
            [
                'dbi' => '@dbi',
                'relation' => '@relation',
            ],
        ],
        'display_export' =>
        [
            'class' => 'PhpMyAdmin\Display\Export',
        ],
        'error_handler' =>
        [
            'class' => 'PhpMyAdmin\ErrorHandler',
        ],
        'error_report' =>
        [
            'class' => 'PhpMyAdmin\ErrorReport',
            'arguments' =>
            [
                '@http_request',
                '@relation',
                '@template',
            ],
        ],
        'export' =>
        [
            'class' => 'PhpMyAdmin\Export',
            'arguments' =>
            [
                '@dbi',
            ],
        ],
        'expression_language' =>
        [
            'class' => 'Symfony\Component\ExpressionLanguage\ExpressionLanguage',
        ],
        'http_request' =>
        [
            'class' => 'PhpMyAdmin\Utils\HttpRequest',
        ],
        'import' =>
        [
            'class' => 'PhpMyAdmin\Import',
        ],
        'insert_edit' =>
        [
            'class' => 'PhpMyAdmin\InsertEdit',
            'arguments' =>
            [
                '@dbi',
            ],
        ],
        'di_migration' =>
        [
            'factory' => 'PhpMyAdmin\Di\Migration::getInstance',
            'arguments' =>
            [
                '@service_container',
            ],
        ],
        'navigation' =>
        [
            'class' => 'PhpMyAdmin\Navigation\Navigation',
            'arguments' =>
            [
                '@template',
                '@relation',
                '@dbi',
            ],
        ],
        'normalization' =>
        [
            'class' => 'PhpMyAdmin\Normalization',
            'arguments' =>
            [
                'dbi' => '@dbi',
                'relation' => '@relation',
                'transformations' => '@transformations',
                'template' => '@template',
            ],
        ],
        'operations' =>
        [
            'class' => 'PhpMyAdmin\Operations',
            'arguments' =>
            [
                'dbi' => '@dbi',
                'relation' => '@relation',
            ],
        ],
        'relation' =>
        [
            'class' => 'PhpMyAdmin\Relation',
            'arguments' =>
            [
                '@dbi',
                '@template',
            ],
        ],
        'relation_cleanup' =>
        [
            'class' => 'PhpMyAdmin\RelationCleanup',
            'arguments' =>
            [
                '@dbi',
                '@relation',
            ],
        ],
        'replication' =>
        [
            'class' => 'PhpMyAdmin\Replication',
        ],
        'replication_gui' =>
        [
            'class' => 'PhpMyAdmin\ReplicationGui',
            'arguments' =>
            [
                'replication' => '@replication',
                'template' => '@template',
            ],
        ],
        'response' =>
        [
            'factory' => 'PhpMyAdmin\Response::getInstance',
        ],
        'server_plugins' =>
        [
            'class' => 'PhpMyAdmin\Server\Plugins',
            'arguments' =>
            [
                '@dbi',
            ],
        ],
        'server_privileges' =>
        [
            'class' => 'PhpMyAdmin\Server\Privileges',
            'arguments' =>
            [
                '@template',
                '@dbi',
                '@relation',
                '@relation_cleanup',
            ],
        ],
        'sql' =>
        [
            'class' => 'PhpMyAdmin\Sql',
        ],
        'sql_query_form' =>
        [
            'class' => 'PhpMyAdmin\SqlQueryForm',
            'arguments' =>
            [
                'template' => '@template',
            ],
        ],
        'status_data' =>
        [
            'class' => 'PhpMyAdmin\Server\Status\Data',
        ],
        'status_monitor' =>
        [
            'class' => 'PhpMyAdmin\Server\Status\Monitor',
            'arguments' =>
            [
                '@dbi',
            ],
        ],
        'table_search' =>
        [
            'class' => 'PhpMyAdmin\Table\Search',
            'arguments' =>
            [
                'dbi' => '@dbi',
            ],
        ],
        'template' =>
        [
            'class' => 'PhpMyAdmin\Template',
        ],
        'tracking' =>
        [
            'class' => 'PhpMyAdmin\Tracking',
            'arguments' =>
            [
                'sql_query_form' => '@sql_query_form',
                'template' => '@template',
                'relation' => '@relation',
            ],
        ],
        'transformations' =>
        [
            'class' => 'PhpMyAdmin\Transformations',
        ],
        'user_password' =>
        [
            'class' => 'PhpMyAdmin\UserPassword',
            'arguments' =>
            [
                '@server_privileges',
            ],
        ],
        'user_preferences' =>
        [
            'class' => 'PhpMyAdmin\UserPreferences',
        ],
        'PhpMyAdmin\Response' => '@response',
        'PhpMyAdmin\DatabaseInterface' => '@dbi',
    ],
];
