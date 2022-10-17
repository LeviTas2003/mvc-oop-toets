<?= $data['title']; ?>

<form action="<?= URLROOT; ?>/countries/update" method="post">
    <table>

        <tbody>
            <tr>
                <td>
                    <input type="text" name="name" id="name" value="<?= $data["row"]->Name; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="capitalCity" id="capitalCity" value="<?= $data["row"]->CapitalCity; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <select name="continent">
                        <option value="Europa" <?php if ($data['row']->Continent == 'Europa') {
                                                    echo 'Selected';
                                                } ?>>Europa</option>
                        <option value="Azi&euml" <?php if ($data['row']->Continent == 'Azi&euml') {
                                                        echo 'Selected';
                                                    } ?>>Azi&euml</option>
                        <option value="Noord-Amerika" <?php if ($data['row']->Continent == 'Noord-Amerika') {
                                                            echo 'Selected';
                                                        } ?>>Noord-Amerika</option>
                        <option value="Zuid-Amerika" <?php if ($data['row']->Continent == 'Zuid-Amerika') {
                                                            echo 'Selected';
                                                        } ?>>Zuid-Amerika</option>
                        <option value="Oceani&euml" <?php if ($data['row']->Continent == 'Oceani&euml') {
                                                        echo 'Selected';
                                                    } ?>>Oceani&euml</option>
                        <option value="Antartica" <?php if ($data['row']->Continent == 'Antartica') {
                                                        echo 'Selected';
                                                    } ?>>Antartica</option>
                        <option value="Afrika" <?php if ($data['row']->Continent == 'Afrika') {
                                                    echo 'Selected';
                                                } ?>>Afrika</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="number" name="population" id="population" value="<?= $data["row"]->Population; ?>">
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?= $data["row"]->Id; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Verzenden"></td>
            </tr>
        </tbody>
    </table>
</form>