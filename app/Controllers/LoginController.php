<?php

use Illuminate\Database\Capsule\Manager as Capsule;

class LoginController extends Controller {
    
    public function index() {
        if(isset($_POST['submitLogin'])) {
            
            $user = User::where('email', $_POST['email'])
                    ->where('password', $_POST['password']) // should crypt
                    ->first();

            if($user) {      
                $role = Capsule::select('select roles.role from roles LEFT JOIN user_role ON roles.id=user_role.role_id WHERE user_role.user_id = ?', [$user->id]);
                $user->role = $role[0]->role;

                $_SESSION['user'] = $user->getAttributes();
            }

            header('Location: http://localhost/holidays/public/holiday');
        }

        $this->view('login/index');
    }

    public function logout() {
        session_destroy();

        $this->view('login/index');
    }
}