<form method="get">


    <table>
        <thead>
        <tr>
            <th>
                CustomerID
            </th>
            <th>
                CustomerName
                <br/>
                <input name="CustomerName" value="<?= request()->get("CustomerName", "") ?>">
            </th>
            <th>ContactName</th>
            <th>Address</th>
            <th>
                City
                <br>

                <select name="City" onchange="this.form.submit()">
                    <option value="">
                        All
                    </option>
                    <?php foreach ($cities as $city): ?>
                        <option <?= (request()->get("City", "") === $city) ? "selected" : "" ?> >
                            <?= $city ?>
                        </option>
                    <?php endforeach; ?>
                </select>

            </th>
            <th>PostalCode</th>
            <th>Country</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user->CustomerID ?></td>
                <td><?= $user->CustomerName ?></td>
                <td><?= $user->ContactName ?></td>
                <td><?= $user->Address ?></td>
                <td><?= $user->City ?></td>
                <td><?= $user->PostalCode ?></td>
                <td><?= $user->Country ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


</form>
