<?php
/**
 * File containing flickrType class
 */

class flickrtype extends eZDataType
{
    const DATA_TYPE_STRING = "flickrtype";

    /*!
     Construction of the class, note that the second parameter in eZDataType
     is the actual name showed in the datatype dropdown list.
    */
    function __construct()
    {
        parent::__construct( self::DATA_TYPE_STRING, ezpI18n::tr( 'extension/flickr/datatypes', 'Flickr Images', 'Datatype name'),
            array( 'serialize_supported' => true ) );
    }

    /**
     * store the contentobjectattribute into database
     * @see kernel/classes/eZDataType#storeObjectAttribute($objectAttribute)
     */
    function storeObjectAttribute( $contentObjectAttribute )
    {
        return true;
    }

    /**
     * @see kernel/classes/eZDataType#objectAttributeContent($objectAttribute)
     */
    function objectAttributeContent( $objectAttribute )
    {
        $ini = eZINI::instance( 'flickr.ini' );
        $result = array(
            'target_select' => $objectAttribute->attribute( 'flickr_target_select' ),
            'target_id' => $objectAttribute->attribute( 'flickr_target_id' )
        );
        return $result;
    }

    /*!
     Fetches the http post var and stores it in the data instance.
    */
    function fetchObjectAttributeHTTPInput( $http, $base, $contentObjectAttribute )
    {
        $target_select = "";
        $target_id = "";
        if ( $http->hasPostVariable( $base . "_flickr_target_select_" . $contentObjectAttribute->attribute( "id" ) ))
        {
            $target_select = $http->postVariable( $base . "_flickr_target_select_" . $contentObjectAttribute->attribute( "id" ) );
        }
        if ( $http->hasPostVariable( $base . "_flickr_target_id_" . $contentObjectAttribute->attribute( "id" ) ))
        {
            $target_id = $http->postVariable( $base . "_flickr_target_id_" . $contentObjectAttribute->attribute( "id" ) );
        }

        $contentObjectAttribute->setAttribute( "flickr_target_select", $target_select );
        $contentObjectAttribute->setAttribute( "flickr_target_id", $target_id );
        return true;
    }

    function isIndexable()
    {
        return true;
    }


    function sortKeyType()
    {
        return 'string';
    }

    /**
     * When deleting the content object, deleting all the comments.
     * @see kernel/classes/eZDataType#deleteStoredObjectAttribute($objectAttribute, $version)
     */
    function deleteStoredObjectAttribute( $contentObjectAttribute, $version = null )
    {
        $version = $contentObjectAttribute->objectVersion();
        if ( !is_null( $version ) &&
            $version->attribute( 'status' ) == eZContentObjectVersion::STATUS_PUBLISHED )
        {
            $contentObjectID = $contentObjectAttribute->attribute( 'contentobject_id' );
            $languageID = $contentObjectAttribute->attribute( 'language_id' );
            eZPersistentObject::removeObject( ezcomComment::definition(),
                array( 'contentobject_id' => $contentObjectID,
                    'language_id' => $languageID ) );
        }
    }
}

eZDataType::register( flickrtype::DATA_TYPE_STRING, 'flickrtype' );
?>
