<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Schema;

use function PHPSTORM_META\map;

class Home extends BaseController {

	// [ Views ] ==================================================================================================== //

		public function index() {

			if (session() -> get('id') == NULL || session() -> get('id') < 0) {

				return view('login');

			} else if (session() -> get('id') > 0) {

				return redirect() -> to('/Home/dashboard');
				
			}
			
		}

		public function dashboard() {

			if (session() -> get('id') == NULL || session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			} else if (session() -> get('id') > 0) {

				$Schema = new Schema();

					$setting['settings'] = $Schema -> getWhere2('user', array('id_user' => session() -> get('id')));
					$web_setting['settings'] = $Schema -> getWhere2('settings', array('id_settings' => '1'));
					$fetch['data_paket'] = $Schema -> visual_table('paket');

				echo view('layout/_header', $web_setting);
				echo view('layout/_menu', $setting);
				echo view('pages/dashboard', $fetch);
				echo view('layout/_footer');

			}
			
		}

		public function user() {

			if (session() -> get('id') == NULL || session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			} else if (session() -> get('id') > 0) {

				$Schema = new Schema();

					$setting['settings'] = $Schema -> getWhere2('user', array('id_user' => session() -> get('id')));
					$web_setting['settings'] = $Schema -> getWhere2('settings', array('id_settings' => '1'));
					$fetch['data_user'] = $Schema -> visual_table('user');

				echo view('layout/_header', $web_setting);
				echo view('layout/_menu', $setting);
				echo view('pages/user', $fetch);
				echo view('layout/_footer');
			}

		}

		public function view_insert_user() {

			if (session() -> get('id') == NULL || session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			} else if (session() -> get('id') > 0) {

				$Schema = new Schema();

					$setting['settings'] = $Schema -> getWhere2('user', array('id_user' => session() -> get('id')));
					$web_setting['settings'] = $Schema -> getWhere2('settings', array('id_settings' => '1'));

				echo view('layout/_header', $web_setting);
				echo view('layout/_menu', $setting);
				echo view('forms/insert_user');
				echo view('layout/_footer');
			}

		}

		public function view_update_user($id) {

			if (session() -> get('id') == NULL || session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			} else if (session() -> get('id') > 0) {

				$Schema = new Schema();

					$setting['settings'] = $Schema -> getWhere2('user', array('id_user' => session() -> get('id')));
					$web_setting['settings'] = $Schema -> getWhere2('settings', array('id_settings' => '1'));
					$fetch['data_user'] = $Schema -> getWhere2('user', ['id_user' => $id]);

				echo view('layout/_header', $web_setting);
				echo view('layout/_menu', $setting);
				echo view('forms/update_user', $fetch);
				echo view('layout/_footer');
			}

		}

		public function view_settings() {
			if (session() -> get('id') == NULL || session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			} else if (session() -> get('id') > 0) {

				$Schema = new Schema();

					$setting['settings'] = $Schema -> getWhere2('user', array('id_user' => session() -> get('id')));
					$web_setting['settings'] = $Schema -> getWhere2('settings', array('id_settings' => '1'));
					$fetch['data_settings'] = $Schema -> getWhere2('settings', ['id_settings' => '1']);

				echo view('layout/_header', $web_setting);
				echo view('layout/_menu', $setting);
				echo view('pages/settings', $fetch);
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

		public function insert_user() {

			$Schema = new Schema();

			$username = $this -> request -> getPost('username');
			$email = $this -> request -> getPost('email');
			$password = $this -> request -> getPost('password');
			$profile = $this -> request -> getFile('profile');

			$nik = $this -> request -> getPost('nik');
			$nama_depan = $this -> request -> getPost('nama_depan');
			$nama_belakang = $this -> request -> getPost('nama_belakang');
			$tanggal_lahir = $this -> request -> getPost('tanggal_lahir');
			$tempat_lahir = $this -> request -> getPost('tempat_lahir');

			if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

				if ($profile && $profile -> isValid() && ! $profile -> hasMoved()) {

					if ($profile == 'default-profile.png' || NULL || ' ') {
	
						$images = $profile -> getRandomName();
						$profile -> move('assets/images/storage/', $images);

					} else {

						$images = $profile -> getRandomName();
						$profile -> move('assets/images/storage/', $images);

					}

				} else {

					$images = 'default-profile.png';

				}

				$Schema -> create_data('user', [
					'username' => $username,
					'email' => $email,
					'password' => md5($password),
					'_profile' => $images,
					'_level' => '2',
					'nik' => $nik,
					'nama_depan' => $nama_depan,
					'nama_belakang' => $nama_belakang,
					'tanggal_lahir' => $tanggal_lahir,
					'tempat_lahir' => $tempat_lahir
				]);

				return redirect() -> to('/Home/user');

			} else {

				return redirect() -> to('/Home/');

			}

		}

		public function update_user() {

			$Schema = new Schema();

			$id = $this -> request -> getPost('id');

			$username = $this -> request -> getPost('username');
			$email = $this -> request -> getPost('email');
			$profile = $this -> request -> getFile('profile');
			$oldprofile = $this -> request -> getPost('oldprofile');

			$nik = $this -> request -> getPost('nik');
			$nama_depan = $this -> request -> getPost('nama_depan');
			$nama_belakang = $this -> request -> getPost('nama_belakang');
			$tanggal_lahir = $this -> request -> getPost('tanggal_lahir');
			$tempat_lahir = $this -> request -> getPost('tempat_lahir');

			if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

				if ($profile && $profile -> isValid() && ! $profile -> hasMoved()) {

					if ($profile == 'default-profile.png' || NULL || ' ') {
	
						$images = $profile -> getRandomName();
						$profile -> move('assets/images/storage/', $images);

					} else {

						if (file_exists('assets/images/storage/'.$profile)) {

							unlink('assets/images/storage/'.$oldprofile);

						} else {

							$images = $profile -> getRandomName();
							$profile -> move('assets/images/storage/', $images);

						}

					}

				} else {

					if ($oldprofile == 'default-profile.png' || NULL || ' ') {

						$images = 'default-profile.png';

					} else {

						$images = $oldprofile;

					}

				}

				$Schema -> update_data('user', [
					'username' => $username,
					'email' => $email,
					'_profile' => $images,
					'_level' => '2',
					'nik' => $nik,
					'nama_depan' => $nama_depan,
					'nama_belakang' => $nama_belakang,
					'tanggal_lahir' => $tanggal_lahir,
					'tempat_lahir' => $tempat_lahir
				], ['id_user' => $id]);

				return redirect() -> to('/Home/user');

			} else {

				return redirect() -> to('/Home/');

			}

		}

		public function delete_user($id) {

			$Schema = new Schema();

			$Schema -> delete_data('user', ['id_user' => $id]);
			return redirect() -> to('/Home/user');

		}

		public function change_settings() {

			$Schema = new Schema();

			$icon = $this -> request -> getFile('icon');
			$oldicon = $this -> request -> getPost('oldicon');
			$title = $this -> request -> getPost('title');
			$description = $this -> request -> getPost('description');
			$tax = $this -> request -> getPost('tax');

			if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

				if ($icon && $icon -> isValid() && ! $icon -> hasMoved()) {

					if ($icon == 'logo-brand-collapse.png' || NULL || ' ') {
	
						$images = $icon -> getRandomName();
						$icon -> move('assets/images/items/', $images);

					} else {

						if (file_exists('assets/images/items/'.$icon)) {

							unlink('assets/images/items/'.$oldicon);

						} else {

							$images = $icon -> getRandomName();
							$icon -> move('assets/images/items/', $images);

						}

					}

				} else {

					if ($oldicon == 'logo-brand-collapse.png' || NULL || ' ') {

						$images = 'logo-brand-collapse.png';

					} else {

						$images = $oldicon;

					}

				}

				$Schema -> update_data('settings', [
					'web_profile' => $images,
					'web_title' => $title,
					'web_description' => $description,
					'app_tax' => $tax
				], ['id_settings' => '1']);

				return redirect() -> to('/Home/view_settings');

			} else {

				return redirect() -> to('/Home/');

			}

		}

}