<?php
/**
 * Properties English Lexicon Entries for pdoTools
 *
 * @package pdotools
 * @subpackage lexicon
 */
$_lang['pdotools_prop_context'] = 'Which Context should be searched in.';
$_lang['pdotools_prop_field_context'] = 'Context of resource for select it`s parents. Needed for work of parameters "&top" and "&topLevel".';
$_lang['pdotools_prop_depth'] = 'Integer value indicating depth to search for resources from each parent. First level of resources beneath parent is depth.';
$_lang['pdotools_prop_fastMode'] = 'Fast chunks processing. If true, MODX parser will not be used and unprocessed tags will be cut.';
$_lang['pdotools_prop_first'] = 'Define the idx which represents the first resource.';
$_lang['pdotools_prop_hideContainers'] = 'If set, will not show any Resources marked as a container (isfolder).';
$_lang['pdotools_prop_idx'] = 'You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered.';
$_lang['pdotools_prop_includeContent'] = 'Indicates if the content of each resource should be returned in the results.';

$_lang['pdotools_prop_includeTVs'] = 'An optional comma-delimited list of TemplateVar names to include.';
$_lang['pdotools_prop_prepareTVs'] = 'Comma separated list of TV names, that need to be prepared. By default it set to "1", so all TVs in "&includeTVs=``" will be prepared.';
$_lang['pdotools_prop_processTVs'] = 'Comma separated list of TV names, that need to be processed. If you set it to "1" - all TVs in "&includeTVs=``" will be processed. By default it is empty.';
$_lang['pdotools_prop_tvFilters'] = 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimiter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.';
$_lang['pdotools_prop_tvFiltersAndDelimiter'] = 'The delimiter to use to separate logical AND expressions in "&tvFilters". Default is ",".';
$_lang['pdotools_prop_tvFiltersOrDelimiter'] = 'The delimiter to use to separate logical OR expressions in "&tvFilters". Default is "||".';

$_lang['pdotools_prop_last'] = 'Define the idx which represents the last resource. Default is # of resources being summarized + first - 1.';
$_lang['pdotools_prop_neighbors_limit'] = 'The number of neighboring documents on the right and left. The default is 1.';
$_lang['pdotools_prop_limit'] = 'Limits the number of resources returned.  Use `0` for unlimited results.';
$_lang['pdotools_prop_offset'] = 'An offset of resources returned by the criteria to skip.';
$_lang['pdotools_prop_outputSeparator'] = 'An optional string to separate each tpl instance.';
$_lang['pdotools_prop_parents'] = 'Comma-delimited list of ids serving as parents. Use "0" to ignore parents when specifying resources to include. Prefix an id of parent with a dash to exclude it and its children from the result.';
$_lang['pdotools_prop_resources'] = 'Comma-delimited list of ids to include in the results. Prefix an id with a dash to exclude the resource from the result.';
$_lang['pdotools_prop_templates'] = 'Comma-delimited list of templates to filter the results. Prefix an id of template with a dash to exclude the resource with it from the result.';
$_lang['pdotools_prop_from'] = 'Resource id from which breadcrumb is created. Usually it is root of site, e.g. "0".';
$_lang['pdotools_prop_to'] = 'Resource id whose breadcrumb is created. By default it is id of the current resource.';
$_lang['pdotools_prop_users'] = 'Comma separated list of users for output. You can use the usernames and ids. If the value starts with a dash, this user is excluded from the query.';
$_lang['pdotools_prop_groups'] = 'Comma separated list of users groups. You can use the names and ids. If the value starts with a dash, so the user should not be in this group.';
$_lang['pdotools_prop_roles'] = 'Comma separated list of users roles. You can use the names and ids. If the value starts with a dash, then this role of user should not exist.';
$_lang['pdotools_prop_exclude'] = 'Comma separated list of resources ids, that need to exclude from query.';
$_lang['pdotools_prop_returnIds'] = 'If true, snippet will return comma separated list of ids instead of results.';
$_lang['pdotools_prop_showDeleted'] = 'If true, will also show Resources regardless if they are deleted.';
$_lang['pdotools_prop_showHidden'] = 'If true, will show Resources regardless if they are hidden from the menus.';
$_lang['pdotools_prop_showLog'] = 'If true, snippet will add detailed log of query for managers.';
$_lang['pdotools_prop_showUnpublished'] = 'If true, will also show resources if they are unpublished.';
$_lang['pdotools_prop_showAtHome'] = 'Show bread crumbs on the main page.';
$_lang['pdotools_prop_showHome'] = 'Display a link to the main at the beginning of navigation.';
$_lang['pdotools_prop_showCurrent'] = 'Display the current document in the navigation.';
$_lang['pdotools_prop_hideSingle'] = 'Do not display the result, if it`s the only one.';
$_lang['pdotools_prop_hideUnsearchable'] = 'Do not display resources that are not searchable.';

$_lang['pdotools_prop_sortby'] = 'Any Resource Field (including Template Variables if it was included) to sort by. Some common fields to sort on are publishedon, menuindex, pagetitle etc, but see the Resources documentation for all fields. Specify fields with the name only, not using the tag syntax. Note that when using fields like template, publishedby and the likes for sorting, it will be sorted on the raw values, so the template or user ID, and NOT their names. You can also sort randomly by specifying RAND().';
$_lang['pdotools_prop_sortdir'] = 'Order which to sort by.';
$_lang['pdotools_prop_toPlaceholder'] = 'If set, will assign the result to this placeholder instead of outputting it directly.';
$_lang['pdotools_prop_toSeparatePlaceholders'] = 'If set, will assign EACH result to a separate placeholder named by this param suffixed with a sequential number (starting from 0).';
$_lang['pdotools_prop_totalVar'] = 'Define the key of a placeholder set by getResources indicating the total number of Resources that would be selected not considering the limit value.';

$_lang['pdotools_prop_tpl'] = 'Name of a chunk serving as a resource template. If not provided, properties are dumped to output for each resource.';
$_lang['pdotools_prop_tplFirst'] = 'Name of a chunk serving as resource template for the first resource.';
$_lang['pdotools_prop_tplLast'] = 'Name of a chunk serving as resource template for the last resource.';
$_lang['pdotools_prop_tplOdd'] = 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).';
$_lang['pdotools_prop_tplWrapper'] = 'Name of a chunk serving as a wrapper template for the output. This does not work with toSeparatePlaceholders.';
$_lang['pdotools_prop_neighbors_tplWrapper'] = 'Name of a chunk serving as a wrapper template for the output. This does not work with toSeparatePlaceholders.';
$_lang['pdotools_prop_tvPrefix'] = 'The prefix for TemplateVar properties.';
$_lang['pdotools_prop_where'] = 'A JSON-style expression of criteria to build any additional where clauses from.';
$_lang['pdotools_prop_wrapIfEmpty'] = 'If true, will output the wrapper specified in &tplWrapper even if the output is empty.';
$_lang['pdotools_prop_tplOperator'] = 'An optional operator to use for the tplCondition when comparing against the conditionalTpls operands. Default is == (equals).';
$_lang['pdotools_prop_tplCondition'] = 'A condition to compare against the conditionalTpls property to map Resources to different tpls based on custom conditional logic.';
$_lang['pdotools_prop_conditionalTpls'] = 'A JSON map of conditional operands and tpls to compare against the tplCondition property using the specified tplOperator.';
$_lang['pdotools_prop_tplCurrent'] = 'Сhunk of the current document in navigation.';
$_lang['pdotools_prop_tplHome'] = 'Сhunk of the link to the main page.';
$_lang['pdotools_prop_tplMax'] = 'Сhunk, which is added to the beginning of the results, if there is more than "&limit.';
$_lang['pdotools_prop_tplPrev'] = 'Сhunk with link to previous document.';
$_lang['pdotools_prop_tplUp'] = 'Сhunk with link to the parent document.';
$_lang['pdotools_prop_tplNext'] = 'Сhunk with link to the following document.';

$_lang['pdotools_prop_select'] = 'Comma separated list of columns for select from database. You can specify JSON string with array, for example {"modResource":"id,pagetitle,content"}.';
$_lang['pdotools_prop_loadModels'] = 'Comma-separated list of 3rd party components that needed for query. For example: "&loadModels=`ms2gallery,msearch2`".';
$_lang['pdotools_prop_direction'] = 'Direction or breadcrumb: Left To Right (ltr) or Right To Left (rtl) for Arabic language for example.';
$_lang['pdotools_prop_id'] = 'Id of the resource.';
$_lang['pdotools_prop_field'] = 'Field of the resource.';
$_lang['pdotools_prop_top'] = 'Selects parent of specified "&id" on level "&top".';
$_lang['pdotools_prop_topLevel'] = 'Selects parent of specified "&id" on level "&topLevel" from root of context.';

$_lang['pdotools_prop_forceXML'] = 'Force the output page as xml.';
$_lang['pdotools_prop_sitemapSchema'] = 'Schema of sitemap.';
$_lang['pdotools_prop_scheme'] = 'Scheme of generation of url, goes to modX::makeUrl().';

$_lang['pdotools_prop_field_default'] = 'Specify an additional field of resource that returns if "&field" will be empty.';
$_lang['pdotools_prop_field_output'] = 'This string will return, and if "&default" and "&field" was empty.';