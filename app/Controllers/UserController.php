<?php

class UserController extends Controller {

    public function __construct(
        public string $modelName,
    ) {
        $this->modelName = $modelName;
    }

    public function index() {
        $user = $this->model($this->modelName);
        $users = User::all();
        // $user->name = 'kostas';
        // var_dump($users);
        $this->view('user/index', ['users' =>  $users]);
    }

    public function create() {
        if(isset($_POST['submitRequest'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = crypt($_POST['password'], '$12$hrd$reer');
            $lastname = $_POST['type'];

            // $user = db::table('users')->get();

            User::create([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'pasword' => $pasword,
            ]);

            return $this->view('user/index');
        }

        $this->view('user/create');




    }

    public function add() {
        $this->view('user/add');
    }
}