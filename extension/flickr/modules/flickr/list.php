<?php

// take current object of type eZModule
$Module = $Params['Module'];

//http://development-basics.ymc-elst.ymchq.sf.tv/ezpublish48/index.php/plain_site/flickr/list/table/5/%28param3%29/cool/%28param4%29/141

// read parameter Ordered View
// http://.../modul1/list/ $Params['ParamOne'] / $Params['ParamTwo']
// for example .../modul1/list/view/5
$valueParamOne = $Params['ParamOne'];
$valueParamTwo = $Params['ParamTwo'];


$ini = eZINI::instance('flickr.ini');

$flickr_api_key = $ini->variable('FlickrSettings','flickr_key');
$flickr_photos = array();
$flickr_photos_info = array();

//returns xml
$flickr_photoset_id = "72157630534229062"; //TODO must come from DB
$flickr_group_id = "1019652@N22"; //TODO must come from DB
//GROUPS Pool Photos
//http://www.flickr.com/services/rest/?method=flickr.groups.pools.getPhotos&api_key=55446c1c733563d88cf3006659a0babd&group_id=1019652@N22
//PHOTOSETS Photos
//http://www.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=55446c1c733563d88cf3006659a0babd&photoset_id=72157630534229062

$flickr_xml_url = 'http://www.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key='.$flickr_api_key.'&photoset_id='.$flickr_photoset_id;
//$flickr_xml_url ='http://www.flickr.com/services/rest/?method=flickr.groups.pools.getPhotos&api_key='.$flickr_api_key.'&group_id='.$flickr_group_id;
$flickr_xml = simplexml_load_file($flickr_xml_url);
$flickr_photoset_imgs = $flickr_xml->children();
$status_attr = $flickr_xml->attributes();
$infos_attr = $flickr_photoset_imgs->attributes();
$flickr_photos_info['status'] = (String) $status_attr['stat'][0];
$flickr_photos_info['ownername'] = (String) $infos_attr['ownername'][0];
$flickr_photos_info['anzahl_photos'] = $infos_attr['total'][0];
$flickr_photos_info['anzahl_pages'] = $infos_attr['pages'][0];
$flickr_photos_info['akt_page'] =  $infos_attr['page'][0];

/*
<sizes canblog="1" canprint="1" candownload="1">
  <size label="Square" width="75" height="75" source="http://farm2.staticflickr.com/1103/567229075_2cf8456f01_s.jpg" url="http://www.flickr.com/photos/stewart/567229075/sizes/sq/" media="photo" />
  <size label="Large Square" width="150" height="150" source="http://farm2.staticflickr.com/1103/567229075_2cf8456f01_q.jpg" url="http://www.flickr.com/photos/stewart/567229075/sizes/q/" media="photo" />
  <size label="Thumbnail" width="100" height="75" source="http://farm2.staticflickr.com/1103/567229075_2cf8456f01_t.jpg" url="http://www.flickr.com/photos/stewart/567229075/sizes/t/" media="photo" />
  <size label="Small" width="240" height="180" source="http://farm2.staticflickr.com/1103/567229075_2cf8456f01_m.jpg" url="http://www.flickr.com/photos/stewart/567229075/sizes/s/" media="photo" />
  <size label="Small 320" width="320" height="240" source="http://farm2.staticflickr.com/1103/567229075_2cf8456f01_n.jpg" url="http://www.flickr.com/photos/stewart/567229075/sizes/n/" media="photo" />
  <size label="Medium" width="500" height="375" source="http://farm2.staticflickr.com/1103/567229075_2cf8456f01.jpg" url="http://www.flickr.com/photos/stewart/567229075/sizes/m/" media="photo" />
  <size label="Medium 640" width="640" height="480" source="http://farm2.staticflickr.com/1103/567229075_2cf8456f01_z.jpg?zz=1" url="http://www.flickr.com/photos/stewart/567229075/sizes/z/" media="photo" />
  <size label="Medium 800" width="800" height="600" source="http://farm2.staticflickr.com/1103/567229075_2cf8456f01_c.jpg" url="http://www.flickr.com/photos/stewart/567229075/sizes/c/" media="photo" />
  <size label="Large" width="1024" height="768" source="http://farm2.staticflickr.com/1103/567229075_2cf8456f01_b.jpg" url="http://www.flickr.com/photos/stewart/567229075/sizes/l/" media="photo" />
  <size label="Original" width="2400" height="1800" source="http://farm2.staticflickr.com/1103/567229075_6dc09dc6da_o.jpg" url="http://www.flickr.com/photos/stewart/567229075/sizes/o/" media="photo" />
</sizes>
*/
foreach($flickr_photoset_imgs->children() as $photo)
  {

      $attr = $photo->attributes();
      $photo_id = (String)$attr['id'][0];
      $photo_secret = (String)$attr['secret'][0];
      $photo_title = (String)$attr['title'][0];
      $photo_server = (String)$attr['server'][0];
      $photo_farm = (String)$attr['farm'][0];

      $return_photo = array();
      $return_photo['title'] = (String)$attr['title'][0];
      $return_photo['id'] = (String)$attr['id'][0];
      $return_photo['secret'] = (String)$attr['secret'][0];
      $return_photo['server'] = (String)$attr['server'][0];
      $return_photo['farm'] = (String)$attr['farm'][0];

      if($attr['ownername'][0] != null)
        $return_photo['ownername'] = (String)$attr['ownername'][0];
      else
        $return_photo['ownername'] = $flickr_photos_info['ownername'];
      $return_photo['url_big'] =  "http://farm".$photo_farm.".staticflickr.com/".$photo_server."/".$photo_id."_".$photo_secret."_z.jpg";
      $return_photo['url_square'] =  "http://farm".$photo_farm.".staticflickr.com/".$photo_server."/".$photo_id."_".$photo_secret."_s.jpg";

      $flickr_photos[] = $return_photo;

  }
$tpl = eZTemplate::factory();
$tpl->setVariable( 'photos_array', $flickr_photos );
$tpl->setVariable( 'photos_info', $flickr_photos_info);
// read parameter UnOrdered View
// http://.../modul1/list/(param4)/$Params['4Param']/(param3)/$Params['3Param']
// for example.../modul1/list/.../.../(param4)/141/(param3)/131
$valueParam3 = $Params['3Param'];
$valueParam4 = $Params['4Param'];

// show values of the View parameter
echo 'Example: flickr/list/'.
        $valueParamOne .'/ '.
        $valueParamTwo .'/(param4)/'.
        $valueParam4 .'/(param3)/'.
        $valueParam3;

// Example array with strings
$dataArray = array( 'Axel','Volker','Dirk','Jan','Felix' );

// create view array parameter to put in the template
$viewParameters = array( 'param_one' => $valueParamOne,
                           'param_two' => $valueParamTwo,
                           'unordered_param3' => $valueParam3,
                           'unordered_param4' => $valueParam4 );


// transport the View parameter Array to the template
$tpl->setVariable( 'view_parameters', $viewParameters );

// create example Array in the template => {$data_array}
$tpl->setVariable( 'data_array', $dataArray );


// use find/replace (parsing) in the template and save the result for $module_result.content
$Result['content'] = $tpl->fetch( 'design:flickr/list.tpl' );
?>