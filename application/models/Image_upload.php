<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/22/2018
 * Time: 4:28 PM
 */

class Image_upload extends CI_Model
{

	public function multi_images_store($folder_name='images', $width = 400, $height=400){
		$images_path = array();
		$filesCount = count($_FILES['images']['name']);
		if($filesCount > 0){

			for($i = 0; $i < $filesCount; $i++){
				$_FILES['image']['name']     = $_FILES['images']['name'][$i];
				$_FILES['image']['type']     = $_FILES['images']['type'][$i];
				$_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
				$_FILES['image']['error']     = $_FILES['images']['error'][$i];
				$_FILES['image']['size']     = $_FILES['images']['size'][$i];
				$file_name = $this->image_store_in_folder($_FILES['image']['name'], $_FILES['image']['tmp_name'], $folder_name);

				$this->image_resize($file_name,$folder_name, $width, $height);

				$images_path[$i] = $file_name;
			}
			return $images_path;
		}else{
			return TRUE;
		}


	}

	public function single_image_store( $folder_name='images' , $width = 400, $height=400){

		if(isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE)
		{
			$file_name = $this->image_store_in_folder($_FILES['image']['name'], $_FILES['image']['tmp_name'], $folder_name);

			$this->image_resize($file_name,$folder_name, $width, $height);

			return $file_name;
		}else{
			return TRUE;
		}

	}

	// =============== Resize Uploded Image ==================
	public function image_resize($sourse, $folder_name,  $width , $height){

		/* First size */
		$configSize1['image_library']   = 'gd2';
		$configSize1['source_image'] 	 = $sourse;
		$configSize1['create_thumb']    = FALSE;
		$configSize1['maintain_ratio']  = FALSE;
		$configSize1['width']           = $width;
		$config['quality']   			 = '100';
		$configSize1['height']          = $height;
		$configSize1['new_image'] 		 = 'assets/upload_pic/'.$folder_name.'/';

		$this->image_lib->initialize($configSize1);
		$this->image_lib->resize();
		$this->image_lib->clear();
	}

	/*==========Image Upload In Folder===========*/
	public function image_store_in_folder($imageName = null, $temp_name, $folder_name){
		$type = explode('.', $imageName);
		$type = $type[count($type)-1];
		$file_name= uniqid(rand()).'.'.$type;

		if( in_array($type, array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF' )) ){

			if( is_uploaded_file( $temp_name ) ){

				move_uploaded_file( $temp_name, 'assets/upload_pic/'.$folder_name.'/'.$file_name );
				return 'assets/upload_pic/'.$folder_name.'/'.$file_name;

			}else{
				return false;
			}
		}else{
			return false;
		}
	}
}
