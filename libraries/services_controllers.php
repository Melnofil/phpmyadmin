<?php

return [
    'services' =>
    [
        'PhpMyAdmin\Controllers\AjaxController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\AjaxController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'config' => '@config',
            ],
        ],
        'PhpMyAdmin\Controllers\BrowseForeignersController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\BrowseForeignersController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'browseForeigners' => '@browse_foreigners',
                'relations' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\ChangeLogController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\ChangeLogController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
            ],
        ],
        'PhpMyAdmin\Controllers\CheckRelationsController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\CheckRelationsController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\CentralColumnsController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\CentralColumnsController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'centralColumns' => '@central_columns',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\DataDictionaryController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\DataDictionaryController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'relation' => '@relation',
                'transformations' => '@transformations',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\DesignerController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\DesignerController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'databaseDesigner' => '@designer',
                'designerCommon' => '@designer_common',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\EventsController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\EventsController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\ExportController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\ExportController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'export' => '@export',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\ImportController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\ImportController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\MultiTableQueryController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\MultiTableQueryController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\OperationsController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\OperationsController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'operations' => '@operations',
                'checkUserPrivileges' => '@check_user_privileges',
                'relation' => '@relation',
                'relationCleanup' => '@relation_cleanup',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\PrivilegesController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\PrivilegesController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'privileges' => '@server_privileges',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\QueryByExampleController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\QueryByExampleController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\RoutinesController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\RoutinesController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'checkUserPrivileges' => '@check_user_privileges',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\SearchController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\SearchController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\SqlAutoCompleteController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\SqlAutoCompleteController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\SqlController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\SqlController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'sqlQueryForm' => '@sql_query_form',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\SqlFormatController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\SqlFormatController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\StructureController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\StructureController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'relation' => '@relation',
                'replication' => '@replication',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\TrackingController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\TrackingController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'tracking' => '@tracking',
            ],
        ],
        'PhpMyAdmin\Controllers\Database\TriggersController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Database\TriggersController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
            ],
        ],
        'PhpMyAdmin\Controllers\ErrorReportController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\ErrorReportController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'errorReport' => '@error_report',
                'errorHandler' => '@error_handler',
            ],
        ],
        'PhpMyAdmin\Controllers\ExportController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\ExportController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'export' => '@export',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\GisDataEditorController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\GisDataEditorController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
            ],
        ],
        'PhpMyAdmin\Controllers\HomeController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\HomeController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'config' => '@config',
                'themeManager' => '@theme_manager',
            ],
        ],
        'PhpMyAdmin\Controllers\ImportController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\ImportController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'import' => '@import',
                'sql' => '@sql',
            ],
        ],
        'PhpMyAdmin\Controllers\ImportStatusController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\ImportStatusController',
            'arguments' =>
            [
                'template' => '@template',
            ],
        ],
        'PhpMyAdmin\Controllers\LicenseController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\LicenseController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
            ],
        ],
        'PhpMyAdmin\Controllers\LintController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\LintController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
            ],
        ],
        'PhpMyAdmin\Controllers\LogoutController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\LogoutController',
        ],
        'PhpMyAdmin\Controllers\NavigationController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\NavigationController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'navigation' => '@navigation',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\NormalizationController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\NormalizationController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'normalization' => '@normalization',
            ],
        ],
        'PhpMyAdmin\Controllers\PhpInfoController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\PhpInfoController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
            ],
        ],
        'PhpMyAdmin\Controllers\Preferences\ExportController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Preferences\ExportController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'userPreferences' => '@user_preferences',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Preferences\FeaturesController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Preferences\FeaturesController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'userPreferences' => '@user_preferences',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Preferences\ImportController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Preferences\ImportController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'userPreferences' => '@user_preferences',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Preferences\MainPanelController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Preferences\MainPanelController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'userPreferences' => '@user_preferences',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Preferences\ManageController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Preferences\ManageController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'userPreferences' => '@user_preferences',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Preferences\NavigationController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Preferences\NavigationController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'userPreferences' => '@user_preferences',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Preferences\SqlController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Preferences\SqlController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'userPreferences' => '@user_preferences',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Preferences\TwoFactorController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Preferences\TwoFactorController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\SchemaExportController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\SchemaExportController',
            'arguments' =>
            [
                'export' => '@export',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\DatabasesController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\DatabasesController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\BinlogController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\BinlogController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\CollationsController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\CollationsController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\EnginesController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\EnginesController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\ExportController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\ExportController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'export' => '@display_export',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\ImportController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\ImportController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\PluginsController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\PluginsController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'plugins' => '@server_plugins',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\PrivilegesController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\PrivilegesController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\ReplicationController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\ReplicationController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'replicationGui' => '@replication_gui',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\SqlController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\SqlController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'sqlQueryForm' => '@sql_query_form',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\UserGroupsController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\UserGroupsController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\Status\AdvisorController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\Status\AdvisorController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'data' => '@status_data',
                'advisor' => '@advisor',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\Status\MonitorController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\Status\MonitorController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'data' => '@status_data',
                'monitor' => '@status_monitor',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\Status\ProcessesController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\Status\ProcessesController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'data' => '@status_data',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\Status\QueriesController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\Status\QueriesController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'data' => '@status_data',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\Status\StatusController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\Status\StatusController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'data' => '@status_data',
                'replicationGui' => '@replication_gui',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\Status\VariablesController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\Status\VariablesController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'data' => '@status_data',
            ],
        ],
        'PhpMyAdmin\Controllers\Server\VariablesController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Server\VariablesController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
            ],
        ],
        'PhpMyAdmin\Controllers\SqlController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\SqlController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'sql' => '@sql',
                'checkUserPrivileges' => '@check_user_privileges',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\AddFieldController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\AddFieldController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
                'transformations' => '@transformations',
                'config' => '@config',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\ChangeController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\ChangeController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
                'insertEdit' => '@insert_edit',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\ChartController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\ChartController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\CreateController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\CreateController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
                'transformations' => '@transformations',
                'config' => '@config',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\ExportController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\ExportController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
                'export' => '@display_export',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\FindReplaceController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\FindReplaceController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\GetFieldController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\GetFieldController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\GisVisualizationController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\GisVisualizationController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\ImportController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\ImportController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\IndexesController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\IndexesController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\OperationsController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\OperationsController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
                'operations' => '@operations',
                'checkUserPrivileges' => '@check_user_privileges',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\PrivilegesController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\PrivilegesController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
                'privileges' => '@server_privileges',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\RecentFavoriteController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\RecentFavoriteController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\RelationController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\RelationController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\ReplaceController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\ReplaceController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
                'insertEdit' => '@insert_edit',
                'transformations' => '@transformations',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\RowActionController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\RowActionController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\SearchController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\SearchController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
                'search' => '@table_search',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\SqlController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\SqlController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
                'sqlQueryForm' => '@sql_query_form',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\StructureController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\StructureController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
                'relation' => '@relation',
                'transformations' => '@transformations',
                'create_add_field' => '@create_add_field',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\TrackingController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\TrackingController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
                'tracking' => '@tracking',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\TriggersController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\TriggersController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
            ],
        ],
        'PhpMyAdmin\Controllers\Table\ZoomSearchController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\Table\ZoomSearchController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'db' => '%db%',
                'table' => '%table%',
                'search' => '@table_search',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\ThemesController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\ThemesController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
            ],
        ],
        'PhpMyAdmin\Controllers\TransformationOverviewController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\TransformationOverviewController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'transformations' => '@transformations',
            ],
        ],
        'PhpMyAdmin\Controllers\TransformationWrapperController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\TransformationWrapperController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'transformations' => '@transformations',
                'relation' => '@relation',
            ],
        ],
        'PhpMyAdmin\Controllers\UserPasswordController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\UserPasswordController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'userPassword' => '@user_password',
            ],
        ],
        'PhpMyAdmin\Controllers\VersionCheckController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\VersionCheckController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
            ],
        ],
        'PhpMyAdmin\Controllers\ViewCreateController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\ViewCreateController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
            ],
        ],
        'PhpMyAdmin\Controllers\ViewOperationsController' =>
        [
            'class' => 'PhpMyAdmin\Controllers\ViewOperationsController',
            'arguments' =>
            [
                'response' => '@response',
                'dbi' => '@dbi',
                'template' => '@template',
                'operations' => '@operations',
            ],
        ],
    ],
];
