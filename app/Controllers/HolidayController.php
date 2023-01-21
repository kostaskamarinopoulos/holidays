<?php
session_start();

require_once '../app/Interfaces/Date/HolidayDateGenerator.php';
require_once '../app/Interfaces/CollectionDecorator.php';

class HolidayController extends Controller {

    public function __construct(
        private string $modelName,
    ) {
        $this->modelName = $modelName;
    }

    public function index() {
        $holiday = $this->model($this->modelName);
        $holidays = Holiday::all();

        $collectionTransformer = new CollectionDecorator(new HolidayDecorator());
        $data = $collectionTransformer->transform($holidays);

        $this->view('holiday/index', ['holidays' =>  $data]);
    }

    public function create() {
        //Need to validate dates and compare them, even by creating a Validate Class or with JS

        if(isset($_GET['submitRequest'])) {
            $request_start = $_GET['request_start'];
            $request_end = $_GET['request_end'];
            $reason = $_GET['reason'];

            $dateGenerator = new HolidayDateGenerator();

            $holiday = Holiday::create([
                'user_id' => $_SESSION['user']['id'],
                'request_start' => $dateGenerator->generate($request_start),
                'request_end' => $dateGenerator->generate($request_end),
                'reason' => $reason,
            ]);

            // $this->email->send($recipient, $request_start, $request_end, $reason);
            header('Location: http://localhost/holidays/public/email/index?emailType=request');
            // header('Location: http://localhost/holidays/public/holiday');
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