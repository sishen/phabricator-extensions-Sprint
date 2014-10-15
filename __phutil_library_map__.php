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
    'BurndownActionMenuEventListener' => 'src/events/BurndownActionMenuEventListener.php',
    'BurndownApplication' => 'src/application/BurndownApplication.php',
    'BurndownController' => 'src/controller/BurndownController.php',
    'BurndownDataDate' => 'src/util/BurndownDataDate.php',
    'BurndownDataView' => 'src/view/BurndownDataView.php',
    'BurndownDataViewController' => 'src/controller/BurndownDataViewController.php',
    'BurndownException' => 'src/exception/BurndownException.php',
    'BurndownListController' => 'src/controller/BurndownListController.php',
    'BurndownTestDataGenerator' => 'src/__tests__/BurndownTestDataGenerator.php',
    'SprintBuildStats' => 'src/storage/SprintBuildStats.php',
    'SprintConstants' => 'src/constants/SprintConstants.php',
    'SprintEndDateField' => 'src/customfield/SprintEndDateField.php',
    'SprintProjectCustomField' => 'src/customfield/SprintProjectCustomField.php',
    'SprintQuery' => 'src/query/SprintQuery.php',
    'SprintReportBurndownView' => 'src/view/SprintReportBurndownView.php',
    'SprintReportController' => 'src/controller/SprintReportController.php',
    'SprintReportOpenTasksView' => 'src/view/SprintReportOpenTasksView.php',
    'SprintStartDateField' => 'src/customfield/SprintStartDateField.php',
    'SprintTaskStoryPointsField' => 'src/customfield/SprintTaskStoryPointsField.php',
    'SprintTransaction' => 'src/storage/SprintTransaction.php',
    'SprintView' => 'src/view/SprintView.php',
  ),
  'function' => array(),
  'xmap' => array(
    'BurndownActionMenuEventListener' => 'PhabricatorEventListener',
    'BurndownApplication' => 'PhabricatorApplication',
    'BurndownController' => 'PhabricatorController',
    'BurndownDataView' => 'SprintView',
    'BurndownDataViewController' => 'BurndownController',
    'BurndownException' => 'Exception',
    'BurndownListController' => 'BurndownController',
    'BurndownTestDataGenerator' => 'PhabricatorTestDataGenerator',
    'SprintConstants' => 'ManiphestConstants',
    'SprintStartDateField' => 'SprintProjectCustomField',
    'SprintEndDateField' => 'SprintProjectCustomField',
    'SprintProjectCustomField' => array(
      'PhabricatorProjectCustomField',
      'PhabricatorStandardCustomFieldInterface',
    ),
    'SprintReportBurndownView' => 'SprintView',
    'SprintReportController' => 'BurndownController',
    'SprintReportOpenTasksView' => 'SprintView',
    'SprintTaskStoryPointsField' => array(
      'ManiphestCustomField',
      'PhabricatorStandardCustomFieldInterface',
    ),
    'SprintTransaction' => 'PhabricatorApplicationTransaction',
    'SprintView' => 'AphrontView',
  ),
));
