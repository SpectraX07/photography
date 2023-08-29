<div>
    <table>
        <thead>
            <tr>
                <th>#</th>

                <th>Title</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($adPost as $ad) { ?>
                <tr>
                    <td> <?= $i ?> </td>

                    <td><?= $ad['title'] ?></td>
                    <td><?= $ad['status'] ?></td>
                </tr>

            <?php $i++;
            } ?>


        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th>#</th>

                <th>Title</th>
                <th>Description</th>
                <th>Link</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($radios as $radio) { ?>
                <tr>
                    <td> <?= $i ?> </td>

                    <td><?= $radio['title'] ?></td>
                    <td><?= $radio['description'] ?></td>
                    <td><?= $radio['link'] ?></td>
                    <td><?= $radio['status'] ?></td>
                </tr>

            <?php $i++;
            } ?>


        </tbody>
    </table>
</div>