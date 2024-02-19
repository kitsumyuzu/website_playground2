<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Schema;

class Home extends BaseController {

	// [ Views ] ==================================================================================================== //

		public function index() {

			if (session() -> get('id') == NULL || session() -> get('id') < 0) {

				return view('login');

			} else if (session() -> get('id') > 0) {

				$Schema = new Schema();

					$setting['profile'] = $Schema -> getWhere('user', array('id_user' => session() -> get('id')));

				echo view('layout/_header');
				echo view('layout/_menu', $setting);
				echo view('pages/dashboard');
				echo view('layout/_footer');
				
			}
			
		}

		public function dashboard() {

			if (session() -> get('id') == NULL || session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			} else if (session() -> get('id') > 0) {

				$Schema = new Schema();

					$setting['profile'] = $Schema -> getWhere('user', array('id_user' => session() -> get('id')));

					$fetch['media'] = $Schema -> visual_table('media');

				echo view('layout/_header');
				echo view('layout/_menu', $setting);
				echo view('pages/dashboard', $fetch);
				echo view('layout/_footer');

			}
			
		}

	// [ Login & Logout Function ] ==================================================================================================== //

		public function authentication_login() {

            $Schema = new Schema();

                // Collecting data by " name " attribute from HTML document

					$username = $this -> request -> getPost('username');
					$password = $this -> request -> getPost('password');

                /**
                 * Filter a input username with email, if the input was an email then login with session of email
                 * else if the input was username then login with session of username

                 * Convert inputted data into an array, and find the data from database of " user " table
                */

                    if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
                        
                        $_data = array('email' => $username, 'password' => md5($password));

                    } else {

                        $_data = array('username' => $username, 'password' => md5($password));

                    }
                    
                    $data_filter = $Schema -> getWhere2('user', $_data);

                // ==================================================================================================== //

                    if ($data_filter > 0) {

                        session() -> set('id', $data_filter['id_user']);
						session() -> set('username', $data_filter['username']);
                        session() -> set('email', $data_filter['email']);
						session() -> set('level', $data_filter['_level']);

						return redirect() -> to('/Home/dashboard');

                    } else {

						return redirect() -> to('/Home/');

                    };
            
        }

		public function authentication_logout() {

			session() -> destroy();

			return redirect() -> to('/Home/');

		}

	// [ CRUD ] ==================================================================================================== //
	
		public function create_image() {

			if (session() -> get('id') == NULL || session() -> get('id') < 0) {
				
				return redirect() -> to('/home/');

			} else if (session() -> get() > 0) {

				$Schema = new Schema();

				$images = $this -> request -> getFile('images');
				$images_description = $this -> request -> getFile('images_description');

					if ($images && $images -> isValid() &&! $images -> hasMoved()) {

						$media = $images -> getRandomName();
						$images -> move('assets/images/storage/', $media);

					}

				$mediaData = array(
					'media' => $media,
					'media_description' => $images_description
				);
				
					$Schema -> create_data('media', $mediaData);

				return redirect() -> to('/home/dashboard');

			}

		}

}