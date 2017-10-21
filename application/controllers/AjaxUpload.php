<?php
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
/**
 * Description of ajaxupload
 *
 * @author http://roytuts.com
 */
class AjaxUpload extends CI_Controller {

    function upload_file() {
 
        //upload file
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '100024'; //1 MB

        $fileName = $this->random_string(3);
        $config['file_name'] = $fileName;
		
		$arr=[];
 
        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                $arr["error"]=[1];
            } else {
                if (file_exists('uploads/' . $fileName)) {
                    $arr["error"]=[2];
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('file')) {
                        $arr["error"]=[3];
                    } else {
						$arr['realFileName']=$fileName;
						$arr['fileToShow']=$_FILES['file']['name'];
                        $arr["succes"]=[1];
                    }
                }
            }
        } else {
             $arr["succes"]=[4];
        }
		
		echo json_encode($arr);
		
    }

    function random_string($length) {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));
    
        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
    
        return $key;
    }
    
 
}