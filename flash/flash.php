<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package 		PyroCMS
 * @subpackage 		Flash Object
 * @author		Osvaldo Brignoni
 * 
 * Embed Flash Player content anywhere. Uses SWFObject http://code.google.com/p/swfobject/
 */

class Widget_Flash extends Widgets {
	
    public $title = 'Flash';
    public $description = 'Embed Flash Player content anywhere.';
    public $author = 'Osvaldo Brignoni';
    public $website = 'http://obrignoni.com/';
    public $version = '1.3';
		
		private static $swfobject_count = 0;

		private static function swfobject_once() {
				self::$swfobject_count = self::$swfobject_count + 1;
				return (self::$swfobject_count == 1) ? TRUE : FALSE;
		}

    public $fields = array(
        array(
            'field'   => 'swf_file',
            'label'   => 'SWF File',
            'rules'   => 'required'
        ),
        array(
            'field'   => 'width',
            'label'   => 'Width',
            'rules'   => 'numeric'
        ),
        array(
            'field'   => 'height',
            'label'   => 'Height',
            'rules'   => 'numeric'
        )
    );

    public function form()
    {
        //Query for files that have a .swf extension
        $query = $this->db->where('extension', '.swf')->get('files');

        $files = $query->result();

        $swfs = array();

        //Format array for dropdown
        foreach($files as $file):

                $swfs[$file->filename] = $file->name;

        endforeach;

        return array('swfs' => $swfs);
    }

    public function run($options)
    {
				
				$options['swfobject_once'] = self::swfobject_once();
				
				$options['swf_file_path'] = BASE_URL . UPLOAD_PATH . 'files/' . $options['swf_file'];
				
        //Randomize SWFObject unique id to allow for multiple widgets on same page
        $options['random_id'] = random_string('alnum', 6);
				
        //Set defaults
        !empty($options['width']) OR $options['width'] = '300';
        !empty($options['height']) OR $options['height'] = '120';

        return $options;

    }

    public function save($options)
    {
        //Save widget instance settings
        return $options;
    }
}