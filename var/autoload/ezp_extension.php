<?php
/**
 * Autoloader definition for eZ Publish Extension files.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.8
 * @package kernel
 *
 */

return array(
      'EnchantSpell'                           => 'extension/ezoe/modules/ezoe/classes/EnchantSpell.php',
      'GoogleSpell'                            => 'extension/ezoe/modules/ezoe/classes/GoogleSpell.php',
      'Moxiecode_JSON'                         => 'extension/ezoe/modules/ezoe/classes/utils/mcejson.php',
      'Moxiecode_JSONReader'                   => 'extension/ezoe/modules/ezoe/classes/utils/mcejson.php',
      'PSpell'                                 => 'extension/ezoe/modules/ezoe/classes/PSpell.php',
      'PSpellShell'                            => 'extension/ezoe/modules/ezoe/classes/PSpellShell.php',
      'ReCaptchaResponse'                      => 'extension/ezcomments/classes/recaptchalib.php',
      'SpellChecker'                           => 'extension/ezoe/modules/ezoe/classes/SpellChecker.php',
      'eZContentClassEditDeferredHandler'      => 'extension/ezscriptmonitor/classes/ezcontentclasseditdeferredhandler.php',
      'eZFindElevateConfiguration'             => 'extension/ezfind/classes/ezfindelevateconfiguration.php',
      'eZFindExtendedAttributeFilterFactory'   => 'extension/ezfind/classes/ezfindextendedattributefilterfactory.php',
      'eZFindExtendedAttributeFilterInterface' => 'extension/ezfind/classes/ezfindextendedattributefilterinterface.php',
      'eZFindGeoDistExtendedAttributeFilter'   => 'extension/ezfind/classes/extendedattributefilters/ezfindgeodistextendedattributefilter.php',
      'eZFindInfo'                             => 'extension/ezfind/ezinfo.php',
      'eZFindResultNode'                       => 'extension/ezfind/classes/ezfindresultnode.php',
      'eZFindResultObject'                     => 'extension/ezfind/classes/ezfindresultobject.php',
      'eZFindServerCallFunctions'              => 'extension/ezfind/classes/ezfindservercallfunctions.php',
      'eZIEEzcConversions'                     => 'extension/ezie/classes/interfaces/conversions.php',
      'eZIEEzcGDHandler'                       => 'extension/ezie/classes/handlers/gd.php',
      'eZIEEzcImageMagickHandler'              => 'extension/ezie/classes/handlers/magick.php',
      'eZIEImageAction'                        => 'extension/ezie/classes/image_action.php',
      'eZIEImageAnalyzer'                      => 'extension/ezie/classes/image_analyzer.php',
      'eZIEImageFilterBW'                      => 'extension/ezie/classes/image_filter_bw.php',
      'eZIEImageFilterBrightness'              => 'extension/ezie/classes/image_filter_brightness.php',
      'eZIEImageFilterContrast'                => 'extension/ezie/classes/image_filter_contrast.php',
      'eZIEImageFilterSepia'                   => 'extension/ezie/classes/image_filter_sepia.php',
      'eZIEImagePreAction'                     => 'extension/ezie/classes/image_pre_action.php',
      'eZIEImageToolCrop'                      => 'extension/ezie/classes/image_tool_crop.php',
      'eZIEImageToolFlipHorizontally'          => 'extension/ezie/classes/image_tool_flip_horizontally.php',
      'eZIEImageToolFlipVertically'            => 'extension/ezie/classes/image_tool_flip_vertically.php',
      'eZIEImageToolPixelate'                  => 'extension/ezie/classes/image_tool_pixelate.php',
      'eZIEImageToolResize'                    => 'extension/ezie/classes/image_tool_resize.php',
      'eZIEImageToolRotation'                  => 'extension/ezie/classes/image_tool_rotation.php',
      'eZIEImageToolWatermark'                 => 'extension/ezie/classes/image_tool_watermark.php',
      'eZIEezcImageConverter'                  => 'extension/ezie/classes/image_converter.php',
      'eZMultiuploadHandler'                   => 'extension/ezmultiupload/classes/ezmultiuploadhandler.php',
      'eZMultiuploadHandlerInterface'          => 'extension/ezmultiupload/classes/ezmultiuploadhandlerinterface.php',
      'eZOEInputParser'                        => 'extension/ezoe/ezxmltext/handlers/input/ezoeinputparser.php',
      'eZOETemplateUtils'                      => 'extension/ezoe/autoloads/ezoetemplateutils.php',
      'eZOEXMLInput'                           => 'extension/ezoe/ezxmltext/handlers/input/ezoexmlinput.php',
      'eZOOConverter'                          => 'extension/ezodf/classes/ezooconverter.php',
      'eZOOGenerator'                          => 'extension/ezodf/classes/ezoogenerator.php',
      'eZOOImport'                             => 'extension/ezodf/classes/ezooimport.php',
      'eZOpenofficeUploadHandler'              => 'extension/ezodf/uploadhandlers/ezopenofficeuploadhandler.php',
      'eZRESTODFHandler'                       => 'extension/ezodf/classes/ezrestodfhandler.php',
      'eZScheduledScript'                      => 'extension/ezscriptmonitor/classes/ezscheduledscript.php',
      'eZScriptMonitorInfo'                    => 'extension/ezscriptmonitor/ezinfo.php',
      'eZSolr'                                 => 'extension/ezfind/search/plugins/ezsolr/ezsolr.php',
      'eZSolrBase'                             => 'extension/ezfind/classes/ezsolrbase.php',
      'eZSolrDoc'                              => 'extension/ezfind/classes/ezsolrdoc.php',
      'eZTags'                                 => 'extension/eztags/datatypes/eztags/eztags.php',
      'eZTagsAttributeFilter'                  => 'extension/eztags/classes/eztagsattributefilter.php',
      'eZTagsAttributeLinkObject'              => 'extension/eztags/classes/eztagsattributelinkobject.php',
      'eZTagsCloud'                            => 'extension/eztags/autoloads/eztagscloud.php',
      'eZTagsFunctionCollection'               => 'extension/eztags/modules/tags/eztagsfunctioncollection.php',
      'eZTagsObject'                           => 'extension/eztags/classes/eztagsobject.php',
      'eZTagsTemplateFunctions'                => 'extension/eztags/autoloads/eztagstemplatefunctions.php',
      'eZTagsType'                             => 'extension/eztags/datatypes/eztags/eztagstype.php',
      'ezauthorSolrStorage'                    => 'extension/ezfind/classes/solrstorage/ezauthorsolrstorage.php',
      'ezbinaryfileSolrStorage'                => 'extension/ezfind/classes/solrstorage/ezbinaryfilesolrstorage.php',
      'ezcomAddCommentTool'                    => 'extension/ezcomments/classes/ezcomaddcommenttool.php',
      'ezcomComment'                           => 'extension/ezcomments/classes/ezcomcomment.php',
      'ezcomCommentCommonManager'              => 'extension/ezcomments/classes/ezcomcommentcommonmanager.php',
      'ezcomCommentManager'                    => 'extension/ezcomments/classes/ezcomcommentmanager.php',
      'ezcomCommentManagerTest'                => 'extension/ezcomments/tests/ezcomcommentmanager_test.php',
      'ezcomCommentTest'                       => 'extension/ezcomments/tests/ezcomcomment_test.php',
      'ezcomCommentsTestSuite'                 => 'extension/ezcomments/tests/suite.php',
      'ezcomCommentsType'                      => 'extension/ezcomments/datatypes/ezcomcomments/ezcomcommentstype.php',
      'ezcomCookieManager'                     => 'extension/ezcomments/classes/ezcomcookiemanager.php',
      'ezcomEditCommentTool'                   => 'extension/ezcomments/classes/ezcomeditcommenttool.php',
      'ezcomFormTool'                          => 'extension/ezcomments/classes/ezcomformtool.php',
      'ezcomFunctionCollection'                => 'extension/ezcomments/classes/ezcomfunctioncollection.php',
      'ezcomNotification'                      => 'extension/ezcomments/classes/ezcomnotification.php',
      'ezcomNotificationEmailManager'          => 'extension/ezcomments/classes/ezcomnotificationemailmanager.php',
      'ezcomNotificationManager'               => 'extension/ezcomments/classes/ezcomnotifcationmanager.php',
      'ezcomNotificationManagerTest'           => 'extension/ezcomments/tests/ezcomnotificationmanager_test.php',
      'ezcomNotificationTest'                  => 'extension/ezcomments/tests/ezcomnotification_test.php',
      'ezcomPermission'                        => 'extension/ezcomments/classes/ezcompermission.php',
      'ezcomPostHelper'                        => 'extension/ezcomments/classes/ezcomposthelper.php',
      'ezcomServerFunctions'                   => 'extension/ezcomments/classes/ezcomserverfunctions.php',
      'ezcomSubscriber'                        => 'extension/ezcomments/classes/ezcomsubscriber.php',
      'ezcomSubscriberTest'                    => 'extension/ezcomments/tests/ezcomsubscriber_test.php',
      'ezcomSubscription'                      => 'extension/ezcomments/classes/ezcomsubscription.php',
      'ezcomSubscriptionManager'               => 'extension/ezcomments/classes/ezcomsubscriptionmanager.php',
      'ezcomSubscriptionManagerTest'           => 'extension/ezcomments/tests/ezcomsubscriptionmanager_test.php',
      'ezcomSubscriptionTest'                  => 'extension/ezcomments/tests/ezcomsubscription_test.php',
      'ezcomUtility'                           => 'extension/ezcomments/classes/ezcomutility.php',
      'ezcomUtilityTest'                       => 'extension/ezcomments/tests/ezcomutility_test.php',
      'ezdatatypeSolrStorage'                  => 'extension/ezfind/classes/ezdatatypesolrstorage.php',
      'ezdateSolrStorage'                      => 'extension/ezfind/classes/solrstorage/ezdatesolrstorage.php',
      'ezdatetimeSolrStorage'                  => 'extension/ezfind/classes/solrstorage/ezdatetimesolrstorage.php',
      'ezenumSolrStorage'                      => 'extension/ezfind/classes/solrstorage/ezenumsolrstorage.php',
      'ezfBaseException'                       => 'extension/ezfind/classes/exceptions/ezfexception.php',
      'ezfIndexParentName'                     => 'extension/ezfind/classes/indexplugins/ezfindexparentname.php',
      'ezfIndexPlugin'                         => 'extension/ezfind/classes/indexplugins/ezfindexplugin.php',
      'ezfModuleFunctionCollection'            => 'extension/ezfind/classes/ezfmodulefunctioncollection.php',
      'ezfSearchResultInfo'                    => 'extension/ezfind/classes/ezfsearchresultinfo.php',
      'ezfSolrDocumentFieldBase'               => 'extension/ezfind/classes/ezfsolrdocumentfieldbase.php',
      'ezfSolrDocumentFieldDummyExample'       => 'extension/ezfind/classes/ezfsolrdocumentfielddummyexample.php',
      'ezfSolrDocumentFieldGmapLocation'       => 'extension/ezfind/classes/ezfsolrdocumentfieldgmaplocation.php',
      'ezfSolrDocumentFieldName'               => 'extension/ezfind/classes/ezfsolrdocumentfieldname.php',
      'ezfSolrDocumentFieldObjectRelation'     => 'extension/ezfind/classes/ezfsolrdocumentfieldobjectrelation.php',
      'ezfSolrDocumentFieldXML'                => 'extension/ezfind/classes/ezfsolrdocumentfieldxml.php',
      'ezfSolrException'                       => 'extension/ezfind/classes/exceptions/ezfsolrexception.php',
      'ezfSolrStorage'                         => 'extension/ezfind/classes/ezfsolrstorage.php',
      'ezfSolrUtils'                           => 'extension/ezfind/classes/ezfsolrutils.php',
      'ezfTemplateOperators'                   => 'extension/ezfind/classes/ezfTemplateOperators.php',
      'ezfUpdateSearchIndexSolr'               => 'extension/ezfind/bin/php/updatesearchindexsolr.php',
      'ezfeZPSolrQueryBuilder'                 => 'extension/ezfind/classes/ezfezpsolrquerybuilder.php',
      'ezjscAccessTemplateFunctions'           => 'extension/ezjscore/autoloads/ezjscaccesstemplatefunctions.php',
      'ezjscAjaxContent'                       => 'extension/ezjscore/classes/ezjscajaxcontent.php',
      'ezjscCssOptimizer'                      => 'extension/ezjscore/classes/ezjsccssoptimizer.php',
      'ezjscEncodingTemplateFunctions'         => 'extension/ezjscore/autoloads/ezjscencodingtemplatefunctions.php',
      'ezjscJavascriptOptimizer'               => 'extension/ezjscore/classes/ezjscjavascriptoptimizer.php',
      'ezjscPacker'                            => 'extension/ezjscore/classes/ezjscpacker.php',
      'ezjscPackerTemplateFunctions'           => 'extension/ezjscore/autoloads/ezjscpackertemplatefunctions.php',
      'ezjscServerFunctions'                   => 'extension/ezjscore/classes/ezjscserverfunctions.php',
      'ezjscServerFunctionsAjaxUploader'       => 'extension/ezjscore/classes/ezjscserverfunctionsajaxuploader.php',
      'ezjscServerFunctionsAutosave'           => 'extension/ezautosave/classes/ezjscserverfunctionsautosave.php',
      'ezjscServerFunctionsJs'                 => 'extension/ezjscore/classes/ezjscserverfunctionsjs.php',
      'ezjscServerFunctionsNode'               => 'extension/ezjscore/classes/ezjscserverfunctionsnode.php',
      'ezjscServerFunctionsPublishingQueue'    => 'extension/ezjscore/classes/ezjscserverfunctionspublishingqueue.php',
      'ezjscServerRouter'                      => 'extension/ezjscore/classes/ezjscserverrouter.php',
      'ezjscoreTagsSuggest'                    => 'extension/eztags/classes/ezjscoretagssuggest.php',
      'ezkeywordSolrStorage'                   => 'extension/ezfind/classes/solrstorage/ezkeywordsolrstorage.php',
      'ezmatrixSolrStorage'                    => 'extension/ezfind/classes/solrstorage/ezmatrixsolrstorage.php',
      'ezmultioptionSolrStorage'               => 'extension/ezfind/classes/solrstorage/ezmultioptionsolrstorage.php',
      'ezobjectrelationlistSolrStorage'        => 'extension/ezfind/classes/solrstorage/ezobjectrelationlistsolrstorage.php',
      'ezodfInfo'                              => 'extension/ezodf/ezinfo.php',
      'ezoeServerFunctions'                    => 'extension/ezoe/classes/ezoeserverfunctions.php',
      'ezoptionSolrStorage'                    => 'extension/ezfind/classes/solrstorage/ezoptionsolrstorage.php',
      'ezpAjaxUploaderHandlerInterface'        => 'extension/ezjscore/classes/ajaxuploader/ezpajaxuploaderhandlerinterface.php',
      'ezpFileArchive'                         => 'extension/ezfind/classes/archive/filestorage/ezpfilearchive.php',
      'ezpFileArchiveFactory'                  => 'extension/ezfind/classes/archive/filestorage/ezpfilearchivefactory.php',
      'ezpFileArchiveFileSystem'               => 'extension/ezfind/classes/archive/filestorage/ezpfilearchivefilesystem.php',
      'ezpRelationAjaxUploader'                => 'extension/ezjscore/classes/ajaxuploader/ezprelationajaxuploader.php',
      'ezpRelationListAjaxUploader'            => 'extension/ezjscore/classes/ajaxuploader/ezprelationlistajaxuploader.php',
      'ezpRestApiProvider'                     => 'extension/ezprestapiprovider/classes/rest_provider.php',
      'ezpRestApiViewController'               => 'extension/ezprestapiprovider/classes/view_controller.php',
      'ezpRestAtomController'                  => 'extension/ezprestapiprovider/classes/controllers/atom.php',
      'ezpRestAtomDecorator'                   => 'extension/ezprestapiprovider/classes/views/atom_decorator.php',
      'ezpRestAtomView'                        => 'extension/ezprestapiprovider/classes/views/atom.php',
      'ezpRestContentController'               => 'extension/ezprestapiprovider/classes/controllers/content.php',
      'ezpRestContentModel'                    => 'extension/ezprestapiprovider/classes/models/rest_content_model.php',
      'ezpriceSolrStorage'                     => 'extension/ezfind/classes/solrstorage/ezpricesolrstorage.php',
      'ezproductcategorySolrStorage'           => 'extension/ezfind/classes/solrstorage/ezproductcategorysolrstorage.php',
      'ezrangeoptionSolrStorage'               => 'extension/ezfind/classes/solrstorage/ezrangeoptionsolrstorage.php',
      'ezselectionSolrStorage'                 => 'extension/ezfind/classes/solrstorage/ezselectionsolrstorage.php',
      'eztagsInfo'                             => 'extension/eztags/ezinfo.php',
      'ezurlSolrStorage'                       => 'extension/ezfind/classes/solrstorage/ezurlsolrstorage.php',
      'ezuserSolrStorage'                      => 'extension/ezfind/classes/solrstorage/ezusersolrstorage.php',
      'ezxFormToken'                           => 'extension/ezformtoken/event/ezxformtoken.php',
      'ezxmltextSolrStorage'                   => 'extension/ezfind/classes/solrstorage/ezxmltextsolrstorage.php',
    );

?>
