<?php

use Illuminate\Database\Capsule\Manager as Capsule;

class UserController extends Controller {

    public function __construct(
        public string $modelName,
    ) {
        $this->modelName = $modelName;
    }

    public function index() {
        $user = $this->model($this->modelName);
        $users = User::all();

        $this->view('user/index', ['users' =>  $users]);
    }

    public function create() {

        if(isset($_POST['submit'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = crypt($_POST['password'], '$12$hrd$reer');
            $lastname = $_POST['type'];

            User::create([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'pasword' => $password,
            ]);

            header('Location: http://localhost/holidays/public/user');
        }

        $this->view('user/create');
    }

    public function edit($id) {
        $user = User::find($id);
        $role = Capsule::select('select roles.role, roles.id from roles LEFT JOIN user_role ON roles.id=user_role.role_id WHERE user_role.user_id = ?', [$id]);
        // var_dump($role);
        $user->type = $role[0]->id;

        $this->view('user/edit', ['user' => $user]);
    }

    public function update() {
        if(isset($_POST['submit'])) {
            $user = User::find((int) $_POST['id']);
            
            $user->firstname = $_POST['firstname'];
            $user->lastname = $_POST['lastname'];
            $user->email = $_POST['email'];

            Capsule::update('UPDATE user_role SET role_id = ? WHERE user_id = ?', [(int) $_POST['type'], (int) $_POST['id']]);

            $user->save();
        }
        
        header('Location: http://localhost/holidays/public/user');
    }

    public function destroy($id) {
        var_dump($id);
        User::find($id)->delete();

        header('Location: http://localhost/holidays/public/user');
    }
}