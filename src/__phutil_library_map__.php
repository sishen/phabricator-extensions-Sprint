<?php

/**
 * This file is automatically generated. Use 'arc liberate' to rebuild it.
 *
 * @generated
 * @phutil-library-version 2
 */
phutil_register_library_map(array(
  '__library_version__' => 2,
  'class' => array(
    'AutoLoader' => 'tests/Autoloader.php',
    'BoardDataPieView' => 'view/burndown/BoardDataPieView.php',
    'BoardDataProvider' => 'storage/BoardDataProvider.php',
    'BoardDataTableView' => 'view/burndown/BoardDataTableView.php',
    'BurndownActionMenuEventListener' => 'events/BurndownActionMenuEventListener.php',
    'BurndownChartView' => 'view/burndown/BurndownChartView.php',
    'BurndownDataDate' => 'util/BurndownDataDate.php',
    'CeleritySprintResources' => 'celerity/CeleritySprintResources.php',
    'DateIterator' => 'tests/DateIterator.php',
    'EventTableView' => 'view/burndown/EventTableView.php',
    'OpenTasksView' => 'view/reports/OpenTasksView.php',
    'ProjectOpenTasksView' => 'view/reports/ProjectOpenTasksView.php',
    'SprintApplication' => 'application/SprintApplication.php',
    'SprintApplicationTest' => 'tests/SprintApplicationTest.php',
    'SprintBeginDateField' => 'customfield/SprintBeginDateField.php',
    'SprintBoardBatchEditController' => 'controller/board/SprintBoardBatchEditController.php',
    'SprintBoardCardToken' => 'util/SprintBoardCardToken.php',
    'SprintBoardColumnDetailController' => 'controller/board/SprintBoardColumnDetailController.php',
    'SprintBoardColumnEditController' => 'controller/board/SprintBoardColumnEditController.php',
    'SprintBoardColumnHideController' => 'controller/board/SprintBoardColumnHideController.php',
    'SprintBoardController' => 'controller/board/SprintBoardController.php',
    'SprintBoardImportController' => 'controller/board/SprintBoardImportController.php',
    'SprintBoardMoveController' => 'controller/board/SprintBoardMoveController.php',
    'SprintBoardReorderController' => 'controller/board/SprintBoardReorderController.php',
    'SprintBoardTaskCard' => 'view/SprintBoardTaskCard.php',
    'SprintBoardTaskEditController' => 'controller/board/SprintBoardTaskEditController.php',
    'SprintBoardViewController' => 'controller/board/SprintBoardViewController.php',
    'SprintColumnTransaction' => 'storage/SprintColumnTransaction.php',
    'SprintConduitAPIMethod' => 'conduit/SprintConduitAPIMethod.php',
    'SprintConfigOptions' => 'config/SprintConfigOptions.php',
    'SprintConstants' => 'constants/SprintConstants.php',
    'SprintController' => 'controller/SprintController.php',
    'SprintControllerTest' => 'tests/SprintControllerTest.php',
    'SprintCreateConduitAPIMethod' => 'conduit/SprintCreateConduitAPIMethod.php',
    'SprintCustomFieldTest' => 'tests/SprintCustomFieldTest.php',
    'SprintDAO' => 'storage/SprintDAO.php',
    'SprintDataView' => 'view/burndown/SprintDataView.php',
    'SprintDataViewController' => 'controller/SprintDataViewController.php',
    'SprintDefaultViewCapability' => 'capability/SprintDefaultViewCapability.php',
    'SprintEndDateField' => 'customfield/SprintEndDateField.php',
    'SprintException' => 'exception/SprintException.php',
    'SprintGetIsSprintConduitAPIMethod' => 'conduit/SprintGetIsSprintConduitAPIMethod.php',
    'SprintGetStartEndDatesConduitAPIMethod' => 'conduit/SprintGetStartEndDatesConduitAPIMethod.php',
    'SprintGetTaskProjectHistoryConduitAPIMethod' => 'conduit/SprintGetTaskProjectHistoryConduitAPIMethod.php',
    'SprintHandleIconView' => 'view/SprintHandleIconView.php',
    'SprintHistoryController' => 'controller/SprintHistoryController.php',
    'SprintHistoryDataProvider' => 'storage/SprintHistoryDataProvider.php',
    'SprintHistoryTableView' => 'view/reports/SprintHistoryTableView.php',
    'SprintIsSprintField' => 'customfield/SprintIsSprintField.php',
    'SprintListController' => 'controller/SprintListController.php',
    'SprintListDataProvider' => 'storage/SprintListDataProvider.php',
    'SprintListTableView' => 'view/SprintListTableView.php',
    'SprintManiphestEditEngine' => 'controller/board/SprintManiphestEditEngine.php',
    'SprintPoints' => 'util/SprintPoints.php',
    'SprintProjectController' => 'controller/SprintProjectController.php',
    'SprintProjectCustomField' => 'customfield/SprintProjectCustomField.php',
    'SprintProjectDetailsProfilePanel' => 'engine/SprintProjectDetailsProfilePanel.php',
    'SprintProjectProfileController' => 'controller/SprintProjectProfileController.php',
    'SprintProjectProfilePanelEngine' => 'engine/SprintProjectProfilePanelEngine.php',
    'SprintProjectViewController' => 'controller/SprintProjectViewController.php',
    'SprintProjectWorkboardProfilePanel' => 'profilepanel/SprintProjectWorkboardProfilePanel.php',
    'SprintQuery' => 'query/SprintQuery.php',
    'SprintQueryTest' => 'tests/SprintQueryTest.php',
    'SprintReportBurnUpView' => 'view/reports/SprintReportBurnUpView.php',
    'SprintReportController' => 'controller/SprintReportController.php',
    'SprintReportOpenTasksView' => 'view/reports/SprintReportOpenTasksView.php',
    'SprintSetIsSprintConduitAPIMethod' => 'conduit/SprintSetIsSprintConduitAPIMethod.php',
    'SprintSetStartEndDatesConduitAPIMethod' => 'conduit/SprintSetStartEndDatesConduitAPIMethod.php',
    'SprintStats' => 'storage/SprintStats.php',
    'SprintStatsTest' => 'tests/SprintStatsTest.php',
    'SprintTableView' => 'view/SprintTableView.php',
    'SprintTaskStoryPointsField' => 'customfield/SprintTaskStoryPointsField.php',
    'SprintTestCase' => 'tests/SprintTestCase.php',
    'SprintUIObjectBoxView' => 'view/SprintUIObjectBoxView.php',
    'SprintValidator' => 'util/SprintValidator.php',
    'SprintView' => 'view/SprintView.php',
    'TaskTableDataProvider' => 'storage/TaskTableDataProvider.php',
    'TasksTableView' => 'view/burndown/TasksTableView.php',
    'UserOpenTasksView' => 'view/reports/UserOpenTasksView.php',
  ),
  'function' => array(),
  'xmap' => array(
    'BoardDataPieView' => 'Phobject',
    'BoardDataTableView' => 'Phobject',
    'BurndownActionMenuEventListener' => 'PhabricatorEventListener',
    'BurndownChartView' => 'Phobject',
    'BurndownDataDate' => 'Phobject',
    'CeleritySprintResources' => 'CelerityResourcesOnDisk',
    'DateIterator' => 'Iterator',
    'EventTableView' => 'Phobject',
    'ProjectOpenTasksView' => 'OpenTasksView',
    'SprintApplication' => 'PhabricatorApplication',
    'SprintApplicationTest' => 'SprintTestCase',
    'SprintBeginDateField' => 'SprintProjectCustomField',
    'SprintBoardBatchEditController' => 'ManiphestController',
    'SprintBoardCardToken' => 'Phobject',
    'SprintBoardColumnDetailController' => 'SprintBoardController',
    'SprintBoardColumnEditController' => 'SprintBoardController',
    'SprintBoardColumnHideController' => 'SprintBoardController',
    'SprintBoardController' => 'SprintProjectController',
    'SprintBoardImportController' => 'SprintBoardController',
    'SprintBoardMoveController' => 'SprintBoardController',
    'SprintBoardReorderController' => 'SprintBoardController',
    'SprintBoardTaskCard' => 'Phobject',
    'SprintBoardTaskEditController' => 'ManiphestController',
    'SprintBoardViewController' => 'SprintBoardController',
    'SprintConduitAPIMethod' => 'ConduitAPIMethod',
    'SprintConfigOptions' => 'PhabricatorApplicationConfigOptions',
    'SprintController' => 'PhabricatorController',
    'SprintControllerTest' => 'SprintTestCase',
    'SprintCreateConduitAPIMethod' => 'SprintConduitAPIMethod',
    'SprintCustomFieldTest' => 'SprintTestCase',
    'SprintDAO' => 'PhabricatorLiskDAO',
    'SprintDataView' => 'SprintView',
    'SprintDataViewController' => 'SprintController',
    'SprintDefaultViewCapability' => 'PhabricatorPolicyCapability',
    'SprintEndDateField' => 'SprintProjectCustomField',
    'SprintException' => 'AphrontException',
    'SprintGetIsSprintConduitAPIMethod' => 'SprintConduitAPIMethod',
    'SprintGetStartEndDatesConduitAPIMethod' => 'SprintConduitAPIMethod',
    'SprintGetTaskProjectHistoryConduitAPIMethod' => 'SprintConduitAPIMethod',
    'SprintHandleIconView' => 'AphrontTagView',
    'SprintHistoryController' => 'SprintController',
    'SprintHistoryTableView' => 'SprintView',
    'SprintIsSprintField' => 'SprintProjectCustomField',
    'SprintListController' => 'SprintController',
    'SprintListTableView' => 'Phobject',
    'SprintManiphestEditEngine' => 'PhabricatorEditEngine',
    'SprintPoints' => 'Phobject',
    'SprintProjectController' => 'SprintController',
    'SprintProjectCustomField' => array(
      'PhabricatorProjectCustomField',
      'PhabricatorStandardCustomFieldInterface',
    ),
    'SprintProjectDetailsProfilePanel' => 'PhabricatorProfilePanel',
    'SprintProjectProfileController' => 'SprintProjectController',
    'SprintProjectProfilePanelEngine' => 'PhabricatorProfilePanelEngine',
    'SprintProjectViewController' => 'SprintController',
    'SprintProjectWorkboardProfilePanel' => 'PhabricatorProfilePanel',
    'SprintQuery' => 'SprintDAO',
    'SprintQueryTest' => 'SprintTestCase',
    'SprintReportBurnUpView' => 'SprintView',
    'SprintReportController' => 'SprintController',
    'SprintReportOpenTasksView' => 'SprintView',
    'SprintSetIsSprintConduitAPIMethod' => 'SprintConduitAPIMethod',
    'SprintSetStartEndDatesConduitAPIMethod' => 'SprintConduitAPIMethod',
    'SprintStatsTest' => 'SprintTestCase',
    'SprintTableView' => 'AphrontView',
    'SprintTaskStoryPointsField' => array(
      'ManiphestCustomField',
      'PhabricatorStandardCustomFieldInterface',
    ),
    'SprintTestCase' => 'PHPUnit_Framework_TestCase',
    'SprintUIObjectBoxView' => 'AphrontView',
    'SprintValidator' => 'Phobject',
    'SprintView' => 'AphrontView',
    'TasksTableView' => 'Phobject',
    'UserOpenTasksView' => 'OpenTasksView',
  ),
));
