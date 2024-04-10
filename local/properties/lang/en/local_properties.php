<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$string['pluginname'] = 'Properties';
$string['userprop'] = 'User';
$string['cohortprop'] = 'Cohort';
$string['coursesprop'] = 'Courses';
$string['learningpathprop'] = 'Learning paths';
$string['edit'] = 'Edit';
$string['delete'] = 'Delete';
$string['addfield'] = 'Add Field';
$string['editcohort'] = 'Edit Cohort';
$string['deletecohort'] = 'Delete';
$string['addfieldc'] = 'Add Cohort';
$string['addfieldcbtn'] = 'Add Cohort Field';
$string['addcategoryc'] = 'Add Category';
$string['addprofilefield'] = 'Add property';
$string['addnewcategory'] = 'Add New Category';
$string['addnewfield'] = 'Add New Field';
$string['categoryname'] = 'Add Category Name';
$string['addcoursefield'] = 'Add Course field';
$string['addlpfield'] = 'Add Learning path field';
$string['coursefields'] = 'Add Course field';
$string['lpfields'] = 'Add Learning Path field';
$string['lpdeletefield'] = 'Deleting field \'{$a}\'';
$string['lpconfirmfielddeletion'] = 'There is/are {$a} user record/s for this field which will be deleted.<br />Do you still wish to delete this field?';
$string['lpfirmfielddeletion'] = 'There is/are {$a} user record/s for this field which will be deleted.<br />Do you still wish to delete this field?';
$string['addcategory'] = 'Add Category';
$string['addfields'] = 'New Fields';
$string['properties'] = 'Properties';
$string['user_properties'] = 'User Properties';
$string['cohort_properties'] = 'Cohort Properties';
$string['course_properties'] = 'Course Properties';
$string['learning_properties'] = 'Learning Path Properties';
$string['select'] = '-Select-';
$string['deletecategory']= '<div class="header_delete">DELETE CATEGORY</div></br><div class="desc_delete">Deleting the category will delete the filed in the category. Do you still wish to delete this category?</div>';
$string['pagetitle'] = 'Properties';
$string['pagedescription']= 'Manage custom fields of objects: users, courses, cohorts, and learning paths.';

$string['cohortcategory'] = 'Category';
$string['cohortcategoryname'] = 'Category name (must be unique)';
$string['cohortcategorynamenotunique'] = 'This category name is already in use';
$string['cohortcommonsettings'] = 'Common settings';
$string['cohortconfirmcategorydeletion'] = 'There is/are {$a} field/s in this category which will be moved into the category above (or below if in the top category).<br />Do you still wish to delete this category?';
$string['cohortconfirmfielddeletion'] = 'There is/are {$a} user record/s for this field which will be deleted.<br />Do you still wish to delete this field?';
$string['cohortcreatecategory'] = 'Create a new cohort field category 1';
$string['cohortcreatefield'] = 'Create a new cohort field:';
$string['cohortcreatenewcategory'] = 'Creating a new category ';
$string['cohortcreatenewfield'] = 'Creating a new \'{$a}\' cohort field';
$string['cohortdefaultcategory'] = 'Other fields';
$string['cohortdefaultdata'] = 'Default value';
$string['cohortdefaultchecked'] = 'Checked by default';
$string['cohortaaa'] = 'Deleting a category';
$string['cohortdeletefield'] = 'Deleting field \'{$a}\'';
$string['cohortdescription'] = 'Description of the field';
$string['cohortdscript'] = 'This script has been profiled';
$string['cohortdscriptview'] = 'View profiling information for this script';
$string['cohorteditcategory'] = 'Editing category: {$a}';
$string['cohorteditfield'] = 'Editing cohort field: {$a}';
$string['cohortfield'] = 'cohort field';
$string['cohortfieldcolumns'] = 'Columns';
$string['cohortfieldispassword'] = 'Is this a password field?';
$string['cohortfieldlink'] = 'Link';
$string['cohortfieldlink_help'] = 'To transform the text into a link, enter a URL containing $$, where $$ will be replaced with the text. For example, to transform a Twitter ID to a link, enter http://twitter.com/$$.';
$string['cohortfieldlinktarget'] = 'Link target';
$string['cohortfieldmaxlength'] = 'Maximum length';
$string['cohortfieldrows'] = 'Rows';
$string['cohortfields'] = 'Cohort fields';
$string['cohortfieldsize'] = 'Display size';
$string['cohortforceunique'] = 'Should the data be unique?';
$string['cohortinvaliddata'] = 'Invalid value';
$string['cohortlocked'] = 'Is this field locked?';
$string['cohortmenudefaultnotinoptions'] = 'The default value is not one of the options';
$string['cohortmenunooptions'] = 'No menu options supplied';
$string['cohortmenuoptions'] = 'Menu options (one per line)';
$string['cohortmenutoofewoptions'] = 'You must provide at least 2 options';
$string['cohortname'] = 'Name';
$string['cohortnofieldsdefined'] = 'No fields have been defined';
$string['cohortrequired'] = 'Is this field required?';
$string['cohortroles'] = 'cohort visible roles';
$string['cohortsforenrolledusersonly'] = 'cohorts for enrolled users only';
$string['cohortshortname'] = 'Short name (must be unique)';
$string['cohortshortnamenotunique'] = 'This short name is already in use';
$string['cohortsignup'] = 'Display on signup page?';
$string['cohortspecificsettings'] = 'Specific settings';
$string['cohortvisible'] = 'Who is this field visible to?';
$string['cohortvisible_help'] = '* Not visible - For private data only viewable by administrators
* Visible to user - For private data only viewable by the user and by administrators
* Visible to everyone';
$string['cohortvisibleall'] = 'Visible to everyone';
$string['cohortvisiblenone'] = 'Not visible';
$string['cohortvisibleprivate'] = 'Visible to user';
$string['profiling'] = 'Profiling';
$string['profilingallowall'] = 'Continuous profiling';
$string['profilingallowall_help'] = 'If you enable this setting, then, at any moment, you can use the PROFILEALL parameter anywhere (PGC) to enable profiling for all the executed scripts along the Moodle session life. Analogously, you can use the PROFILEALLSTOP parameter to stop it.';
$string['profilingallowme'] = 'Selective profiling';
$string['profilingallowme_help'] = 'If you enable this setting, then, selectively, you can use the PROFILEME parameter anywhere (PGC) and profiling for that script will happen. Analogously, you can use the DONTPROFILEME parameter to prevent profiling to happen';
$string['profilingautofrec'] = 'Automatic profiling';
$string['profilingautofrec_help'] = 'By configuring this setting, some request (randomly, based on the frequency specified - 1 of N) will be picked and automatically profiled, storing results for further analysis. Note that this way of profiling observes the include/exclude settings. Set it to 0 to disable automatic profiling.';
$string['profilingenabled'] = 'Enable profiling';
$string['profilingenabled_help'] = 'If you enable this setting, then profiling will be available in this site and you will be able to define its behavior by configuring the next options.';
$string['profilingexcluded'] = 'Exclude profiling';
$string['profilingexcluded_help'] = 'List of (comma separated, absolute skipping wwwroot, callable) URLs that will be excluded from being profiled from the ones defined by \'cohort these\' setting.';
$string['profilingimportprefix'] = 'Profiling import prefix';
$string['profilingimportprefix_desc'] = 'For easier detection, all the imported profiling runs will be prefixed with the value specified here.';
$string['profilingincluded'] = 'cohort these';
$string['profilingincluded_help'] = 'List of (comma separated, absolute skipping wwwroot, callable) URLs that will be automatically profiled. Examples: /index.php, /cohort/view.php. Also accepts the * wildchar at any position. Examples: /mod/forum/*, /mod/*/view.php.';
$string['profilinglifetime'] = 'Keep profiling runs';
$string['profilinglifetime_help'] = 'Specify the time you want to keep information about old profiling runs. Older ones will be pruned periodically. Note that this excludes any profiling run marked as \'reference run\'.';

$string['cohortmetadata']='Cohort properties';



$string['coursecategory'] = 'Category';
$string['coursecategoryname'] = 'Category name (must be unique)';
$string['coursecategorynamenotunique'] = 'This category name is already in use';
$string['coursecommonsettings'] = 'Common settings';
$string['courseconfirmcategorydeletion'] = 'There is/are {$a} field/s in this category which will be moved into the category above (or below if in the top category).<br />Do you still wish to delete this category?';
$string['courseconfirmfielddeletion'] = 'There is/are {$a} user record/s for this field which will be deleted.<br />Do you still wish to delete this field?';
$string['coursecreatecategory'] = 'Create a new course field category';
$string['coursecreatefield'] = 'Create a new course field:';
$string['coursecreatenewcategory'] = 'Creating a new category';
$string['coursecreatenewfield'] = 'Creating a new \'{$a}\' course field';
$string['coursedefaultcategory'] = 'Other fields';
$string['coursedefaultdata'] = 'Default value';
$string['coursedefaultchecked'] = 'Checked by default';
$string['courseaaa'] = 'Deleting a category';
$string['coursedeletefield'] = 'Deleting field \'{$a}\'';
$string['coursedescription'] = 'Description of the field';
$string['coursedscript'] = 'This script has been profiled';
$string['coursedscriptview'] = 'View profiling information for this script';
$string['courseeditcategory'] = 'Editing category: {$a}';
$string['courseeditfield'] = 'Editing course field: {$a}';
$string['coursefield'] = 'course field';
$string['coursefieldcolumns'] = 'Columns';
$string['coursefieldispassword'] = 'Is this a password field?';
$string['coursefieldlink'] = 'Link';
$string['coursefieldlink_help'] = 'To transform the text into a link, enter a URL containing $$, where $$ will be replaced with the text. For example, to transform a Twitter ID to a link, enter http://twitter.com/$$.';
$string['coursefieldlinktarget'] = 'Link target';
$string['coursefieldmaxlength'] = 'Maximum length';
$string['coursefieldrows'] = 'Rows';
$string['coursefields'] = 'Course fields';
$string['coursefieldsize'] = 'Display size';
$string['courseforceunique'] = 'Should the data be unique?';
$string['courseinvaliddata'] = 'Invalid value';
$string['courselocked'] = 'Is this field locked?';
$string['coursemenudefaultnotinoptions'] = 'The default value is not one of the options';
$string['coursemenunooptions'] = 'No menu options supplied';
$string['coursemenuoptions'] = 'Menu options (one per line)';
$string['coursemenutoofewoptions'] = 'You must provide at least 2 options';
$string['coursename'] = 'Name';
$string['coursenofieldsdefined'] = 'No fields have been defined';
$string['courserequired'] = 'Is this field required?';
$string['courseroles'] = 'course visible roles';
$string['coursesforenrolledusersonly'] = 'courses for enrolled users only';
$string['courseshortname'] = 'Short name (must be unique)';
$string['courseshortnamenotunique'] = 'This short name is already in use';
$string['coursesignup'] = 'Display on signup page?';
$string['coursespecificsettings'] = 'Specific settings';
$string['coursevisible'] = 'Who is this field visible to?';
$string['coursevisible_help'] = '* Not visible - For private data only viewable by administrators
* Visible to user - For private data only viewable by the user and by administrators
* Visible to everyone';
$string['coursevisibleall'] = 'Visible to everyone';
$string['coursevisiblenone'] = 'Not visible';
$string['coursevisibleprivate'] = 'Visible to user';
$string['profiling'] = 'Profiling';
$string['profilingallowall'] = 'Continuous profiling';
$string['profilingallowall_help'] = 'If you enable this setting, then, at any moment, you can use the PROFILEALL parameter anywhere (PGC) to enable profiling for all the executed scripts along the Moodle session life. Analogously, you can use the PROFILEALLSTOP parameter to stop it.';
$string['profilingallowme'] = 'Selective profiling';
$string['profilingallowme_help'] = 'If you enable this setting, then, selectively, you can use the PROFILEME parameter anywhere (PGC) and profiling for that script will happen. Analogously, you can use the DONTPROFILEME parameter to prevent profiling to happen';
$string['profilingautofrec'] = 'Automatic profiling';
$string['profilingautofrec_help'] = 'By configuring this setting, some request (randomly, based on the frequency specified - 1 of N) will be picked and automatically profiled, storing results for further analysis. Note that this way of profiling observes the include/exclude settings. Set it to 0 to disable automatic profiling.';
$string['profilingenabled'] = 'Enable profiling';
$string['profilingenabled_help'] = 'If you enable this setting, then profiling will be available in this site and you will be able to define its behavior by configuring the next options.';
$string['profilingexcluded'] = 'Exclude profiling';
$string['profilingexcluded_help'] = 'List of (comma separated, absolute skipping wwwroot, callable) URLs that will be excluded from being profiled from the ones defined by \'course these\' setting.';
$string['profilingimportprefix'] = 'Profiling import prefix';
$string['profilingimportprefix_desc'] = 'For easier detection, all the imported profiling runs will be prefixed with the value specified here.';
$string['profilingincluded'] = 'course these';
$string['profilingincluded_help'] = 'List of (comma separated, absolute skipping wwwroot, callable) URLs that will be automatically profiled. Examples: /index.php, /course/view.php. Also accepts the * wildchar at any position. Examples: /mod/forum/*, /mod/*/view.php.';
$string['profilinglifetime'] = 'Keep profiling runs';
$string['profilinglifetime_help'] = 'Specify the time you want to keep information about old profiling runs. Older ones will be pruned periodically. Note that this excludes any profiling run marked as \'reference run\'.';

$string['coursemetadata']='Course properties';

$string['lpcategory'] = 'Category';
$string['lpcategoryname'] = 'Category name (must be unique)';
$string['lpcategorynamenotunique'] = 'This category name is already in use';
$string['lpcommonsettings'] = 'Common settings';
$string['lpconfirmcategorydeletion'] = 'There is/are {$a} field/s in this category which will be moved into the category above (or below if in the top category).<br />Do you still wish to delete this category?';
$string['lpconfirmfielddeletion'] = 'There is/are {$a} user record/s for this field which will be deleted.<br />Do you still wish to delete this field?';
$string['lpcreatecategory'] = 'Create a new Learningpath field category 1';
$string['lpcreatefield'] = 'Create a new Learningpath field:';
$string['lpcreatenewcategory'] = 'Creating a new category ';
$string['lpcreatenewfield'] = 'Creating a new \'{$a}\' Learningpath field';
$string['lpdefaultcategory'] = 'Other fields';
$string['lpdefaultdata'] = 'Default value';
$string['lpdefaultchecked'] = 'Checked by default';
$string['lpaaa'] = 'Deleting a category';
$string['lpdeletefield'] = 'Deleting field \'{$a}\'';
$string['lpdescription'] = 'Description of the field';
$string['lpdscript'] = 'This script has been profiled';
$string['lpdscriptview'] = 'View profiling information for this script';
$string['lpeditcategory'] = 'Editing category: {$a}';
$string['lpeditfield'] = 'Editing Learningpath field: {$a}';
$string['lpfield'] = 'Learningpath field';
$string['lpfieldcolumns'] = 'Columns';
$string['lpfieldispassword'] = 'Is this a password field?';
$string['lpfieldlink'] = 'Link';
$string['lpfieldlink_help'] = 'To transform the text into a link, enter a URL containing $$, where $$ will be replaced with the text. For example, to transform a Twitter ID to a link, enter http://twitter.com/$$.';
$string['lpfieldlinktarget'] = 'Link target';
$string['lpfieldmaxlength'] = 'Maximum length';
$string['lpfieldrows'] = 'Rows';
$string['lpfields'] = 'Course fields';
$string['selectfield'] = 'Select a kind of field';
$string['required'] = '- Required';
$string['lpfieldsize'] = 'Display size';
$string['lpforceunique'] = 'Should the data be unique?';
$string['lpinvaliddata'] = 'Invalid value';
$string['lplocked'] = 'Is this field locked?';
$string['lpmenudefaultnotinoptions'] = 'The default value is not one of the options';
$string['lpmenunooptions'] = 'No menu options supplied';
$string['lpmenuoptions'] = 'Menu options (one per line)';
$string['lpmenutoofewoptions'] = 'You must provide at least 2 options';
$string['lpname'] = 'Name';
$string['lpnofieldsdefined'] = 'No custom properties has been added in this category';
$string['lprequired'] = 'Is this field required?';
$string['lproles'] = 'Learningpath visible roles';
$string['lpsforenrolledusersonly'] = 'Learningpath for enrolled users only';
$string['lpshortname'] = 'Short name (must be unique)';
$string['lpshortnamenotunique'] = 'This short name is already in use';
$string['lpsignup'] = 'Display on signup page?';
$string['lpspecificsettings'] = 'Specific settings';
$string['lpvisible'] = 'Who is this field visible to?';
$string['lpvisible_help'] = '* Not visible - For private data only viewable by administrators
* Visible to user - For private data only viewable by the user and by administrators
* Visible to everyone';
$string['lpvisibleall'] = 'Visible to everyone';
$string['lpvisiblenone'] = 'Not visible';
$string['lpvisibleprivate'] = 'Visible to user';
$string['profiling'] = 'Profiling';
$string['profilingallowall'] = 'Continuous profiling';
$string['profilingallowall_help'] = 'If you enable this setting, then, at any moment, you can use the PROFILEALL parameter anywhere (PGC) to enable profiling for all the executed scripts along the Moodle session life. Analogously, you can use the PROFILEALLSTOP parameter to stop it.';
$string['profilingallowme'] = 'Selective profiling';
$string['profilingallowme_help'] = 'If you enable this setting, then, selectively, you can use the PROFILEME parameter anywhere (PGC) and profiling for that script will happen. Analogously, you can use the DONTPROFILEME parameter to prevent profiling to happen';
$string['profilingautofrec'] = 'Automatic profiling';
$string['profilingautofrec_help'] = 'By configuring this setting, some request (randomly, based on the frequency specified - 1 of N) will be picked and automatically profiled, storing results for further analysis. Note that this way of profiling observes the include/exclude settings. Set it to 0 to disable automatic profiling.';
$string['profilingenabled'] = 'Enable profiling';
$string['profilingenabled_help'] = 'If you enable this setting, then profiling will be available in this site and you will be able to define its behavior by configuring the next options.';
$string['profilingexcluded'] = 'Exclude profiling';
$string['profilingexcluded_help'] = 'List of (comma separated, absolute skipping wwwroot, callable) URLs that will be excluded from being profiled from the ones defined by \'cohort these\' setting.';
$string['profilingimportprefix'] = 'Profiling import prefix';
$string['profilingimportprefix_desc'] = 'For easier detection, all the imported profiling runs will be prefixed with the value specified here.';
$string['profilingincluded'] = 'Learningpath these';
$string['profilingincluded_help'] = 'List of (comma separated, absolute skipping wwwroot, callable) URLs that will be automatically profiled. Examples: /index.php, /cohort/view.php. Also accepts the * wildchar at any position. Examples: /mod/forum/*, /mod/*/view.php.';
$string['profilinglifetime'] = 'Keep profiling runs';
$string['profilinglifetime_help'] = 'Specify the time you want to keep information about old profiling runs. Older ones will be pruned periodically. Note that this excludes any profiling run marked as \'reference run\'.';

$string['lpmetadata']='Learning Path properties';
$string['lpfields']='Learning Path Fields';
$sting['create_category_buttons'] = "Add a new Category";
$string['lpcreatefield']='Create Learning Path Fields';
$string['lpcreatecategory']='Create Learning Path Categories';
$string['nofields']= 'No custom properties has been added in this category';