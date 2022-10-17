<?php
class Countries extends Controller
{
    private $countryModel;

    public function __construct()
    {
        $this->countryModel = $this->model('Country');
    }

    public function index($land = '(Land)', $age = '(Leeftijd)')
    {
        // Laat de models de gegevens uit de database halen via method getCountries()
        $records = $this->countryModel->getCountries();

        $rows = '';
        foreach ($records as $value) {
            $rows .= "<tr>
                        <td>$value->Name</td>
                        <td>$value->CapitalCity</td>
                        <td>$value->Continent</td>
                        <td>$value->Population</td>
                        <td><a href='" . URLROOT . "/countries/update/$value->Id'>Update</a></td>
                        <td><a href='" . URLROOT . "/countries/delete/$value->Id'>Delete</td>
                      </tr>";
        }

        // Stuur de gegevens uit de model naar de vieuw via het $data array
        $data = [
            'title' => "Landen van de wereld",
            'rows' => $rows,
        ];

        $this->view('countries/index', $data);
    }

    public function update($id = null)
    {
        //var_dump($id);exit;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->countryModel->updateCountries($_POST);
            header("Location: " . URLROOT . "/countries/index");
        } else {
            $row = $this->countryModel->getSingleCountry($id);
            $data = [
                'title' => '<h1>Update landenoverzicht</h1>',
                'row' => $row
            ];
            $this->view("countries/update", $data);
        }
    }

    public function create()
    {
        var_dump("Create");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->countryModel->createCountries($_POST);
            header("Location: " . URLROOT . "/countries/index");
        } else {

            $this->view("countries/create");
        }
    }

    public function delete($id)
    {
        $this->countryModel->deleteCountry($id);
        header("Location: " . URLROOT . "/countries/index");
    }
}
