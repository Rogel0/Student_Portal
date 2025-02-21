<h2 class="text-2xl font-bold mt-8 mb-4">Payment History</h2>

<div class="relative inline-block text-left mb-4">
    <form method="GET" action="">
        <label for="year" class="block text-lg font-semibold mb-2">Select Year:</label>
        <select id="year" name="year" class="border border-gray-300 rounded-lg p-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" onchange="this.form.submit()">
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

<div class="bg-white shadow-md rounded overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <!-- <th class="py-2 px-2 sm:px-4 border-b text-left">Payment No</th> -->
                <th class="py-2 px-2 sm:px-4 border-b text-left">Payment For</th>
                <th class="py-2 px-2 sm:px-4 border-b text-left">Amount</th>
                <th class="py-2 px-2 sm:px-4 border-b text-left">Date of Payment</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($payments)) {
                foreach ($payments as $payment) {
                    echo "<tr>";
                    // echo "<td class='py-2 px-2 sm:px-4 border-b whitespace-nowrap'>" . htmlspecialchars($payment['SINo']) . "</td>";
                    echo "<td class='py-2 px-2 sm:px-4 border-b whitespace-nowrap'>" . htmlspecialchars($payment['PaymentFor']) . "</td>";
                    echo "<td class='py-2 px-2 sm:px-4 border-b whitespace-nowrap'>" . number_format(htmlspecialchars($payment['Amount']), 2) . "</td>";
                    echo "<td class='py-2 px-2 sm:px-4 border-b whitespace-nowrap'>" . htmlspecialchars($payment['DatePayment']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3' class='py-2 px-2 sm:px-4 border-b text-center'>No payment history found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>