<?php
class RichestPeople extends Controller
{
    private $richestPeopleModel;

    public function __construct()
    {
        $this->richestPeopleModel = $this->model('RichPerson');
    }

    public function index($person = '(Person)', $age = '(Age)')
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
                        <td><a href='" . URLROOT . "/RichestPeople/delete/$value->Id'>X</td>
                      </tr>";
        }

        // Stuur de gegevens uit de model naar de vieuw via het $data array
        $data = [
            'title' => "De vijf rijkste mensen ter",
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
