<h2 class="text-2xl font-bold mb-4">Current Subject</h2>
<table class="min-w-full bg-white border border-gray-200">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b">Subject Code</th>
            <th class="py-2 px-4 border-b">Subject Description</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row["SubjectCode"]) . "</td>";
                echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row["SubjDesc"]) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2' class='py-2 px-4 border-b'>No data found</td></tr>";
        }
        ?>
    </tbody>
</table>