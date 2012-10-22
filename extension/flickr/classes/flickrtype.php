<?php
/**
 * File containing ezcomComment class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 *
 */

/**
 * ezcomComment persistent object class definition
 *
 */
class flickrtype extends eZPersistentObject
{
    /**
     * Construct, use {@link ezcomComment::create()} to create new objects.
     *
     * @param array $row
     */
    public function __construct( $row )
    {
        parent::__construct( $row );
    }

    /**
     * Fields definition.
     *
     * @static
     * @return array
     */
    public static function definition()
    { //TODO
        static $def = array( 'fields' => array( 'id' => array( 'name' => 'ID',
            'datatype' => 'integer',
            'default' => 0,
            'required' => true )
             ));
        return $def;
    }

    /**
     * get the contentobject of one comment
     * @return eZContentObject
     */
    public function contentObject()
    {
        if ( isset( $this->ContentObjectID ) and $this->ContentObjectID )
        {
            return eZContentObject::fetch( $this->ContentObjectID );
        }
        return null;
    }

    /**
     * Creates new ezcomComments object
     *
     * @param array $row
     * @return ezcomComment
     */
    public static function create( $row = array() )
    {
        $object = new self( $row );
        return $object;
    }
}

?>
