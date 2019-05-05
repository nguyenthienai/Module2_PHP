<?php
            $registrations = loadRegistrations('data.json');
        ?>
        <h2>Registration list</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            <?php foreach ($registrations as $registration): ?>
                <tr>
                    <td><?= $registration['name']; ?></td>
                    <td><?= $registration['email']; ?></td>
                    <td><?= $registration['phone']; ?></td>
                </tr>
            <?php endforeach; ?>