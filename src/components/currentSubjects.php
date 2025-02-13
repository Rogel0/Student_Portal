<h2 class="text-2xl font-bold mb-4">Current Subject</h2>

<div class="mb-4">
    <form method="GET" action="">
        <label for="year" class="block text-lg font-semibold mb-2">Select Year:</label>
        <select id="year" name="year" class="border-2 border-gray-300 rounded-lg p-2 w-full md:w-1/3" onchange="this.form.submit()">
            <option value="">Select Year</option>
            <?php
            if ($syResult->num_rows > 0) {
                while ($row = $syResult->fetch_assoc()) {
                    $selected = ($row['SY'] == $selectedYear) ? 'selected' : '';
                    echo "<option value='" . htmlspecialchars($row['SY']) . "' $selected>" . htmlspecialchars($row['SY']) . "</option>";
                }
            }
            ?>
        </select>
    </form>
</div>

<table class="min-w-full bg-white border border-gray-200">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b">Subject Code</th>
            <th class="py-2 px-4 border-b">Subject Description</th>
            <th class="py-2 px-4 border-b">Teacher</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row["SubjectCode"]) . "</td>";
                echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row["SubjDesc"]) . "</td>";
                echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($row["EmployeeNo"]) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2' class='py-6 px-4 border-b text-center'>No data found</td></tr>";
        }
        ?>
    </tbody>
</table>