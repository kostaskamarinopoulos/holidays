<?php
require_once '../app/Interfaces/Date/HolidayDateGenerator.php';

class HolidayController extends Controller {

    public function __construct(
        private string $modelName,
    ) {
        $this->modelName = $modelName;
    }

    public function index() {
        $holiday = $this->model($this->modelName);
        $holidays = Holiday::all();
// $d = new DateTime();
// var_dump($d);
        $this->view('holiday/index', ['holidays' =>  $holidays]);
    }

    public function create() {
        //Need to validate dates and compare them, even her or with JS

        if(isset($_GET['submitRequest'])) {
            $request_start = $_GET['request_start'];
            $request_end = $_GET['request_end'];

            // $user = db::table('users')->get();

            $dateGenerator = new HolidayDateGenerator("Y-m-d");

            Holiday::create([
                'user_id' => 1,
                'request_start' => $dateGenerator->generate($request_start),
                'request_end' => $dateGenerator->generate($request_end),
            ]);

            return $this->view('holiday/index');
        }

        $this->view('holiday/create');
    }

    public function edit() {
        echo 'ddd33';
    }

    public function delete() {
        echo 'ddd33';
    }
}