<form action="<?= URLROOT; ?>/countries/create" method="post">
    <table>

        <tbody>
            <tr>
                <td>
                    <label for="name">Country: </label>
                    <input type="text" name="name" id="name" placeholder="Country">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="capitalCity">Capital City: </label>
                    <input type="text" name="capitalCity" id="capitalCity" placeholder="Capital City">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="name">Continent: </label>
                    <select name="continent">
                        <option value="Europa">Europa</option>
                        <option value="Azi&euml">Azi&euml</option>
                        <option value="Noord-Amerika">Noord-Amerika</option>
                        <option value="Zuid-Amerika">Zuid-Amerika</option>
                        <option value="Oceani&euml">Oceani&euml</option>
                        <option value="Antartica">Antartica</option>
                        <option value="Afrika">Afrika</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="population">Population</label>
                    <input type="number" name="population" id="population" placeholder="Population">
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Verzenden"></td>
            </tr>
        </tbody>
    </table>
</form>