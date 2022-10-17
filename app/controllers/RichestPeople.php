<?php
class RichestPeople extends Controller
{
    private $richestPeopleModel;

    public function __construct()
    {
        $this->richestPeopleModel = $this->model('RichestPeople');
    }

    public function index($land = '(Land)', $age = '(Leeftijd)')
    {
        // Laat de models de gegevens uit de database halen via method getCountries()
        $records = $this->richestPeopleModel->getRichestPeople();

        $rows = '';
        foreach ($records as $value) {
            $rows .= "<tr>
                        <td>$value->MyName</td>
                        <td>$value->Networth</td>
                        <td>$value->Age</td>
                        <td>$value->Company</td>
                        <td><a href='" . URLROOT . "/RichestPeople/delete/$value->Id'>Delete</td>
                      </tr>";
        }

        // Stuur de gegevens uit de model naar de vieuw via het $data array
        $data = [
            'title' => "Landen van de wereld",
            'rows' => $rows,
        ];

        $this->view('RichestPeople/index', $data);
    }



    public function delete($id)
    {
        $this->richestPeopleModel->deleteRichestPeople($id);
        header("Location: " . URLROOT . "/RichestPeople/index");
    }
}
