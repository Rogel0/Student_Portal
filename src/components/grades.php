<div class="bg-white shadow-lg rounded-lg p-6 md:p-8 lg:p-10">
    <h2 class="text-2xl md:text-3xl font-bold mb-4 md:mb-6 text-center text-gray-800">Student Grades</h2>
    <form method="GET" class="mb-4 md:mb-6">
        <label for="sy" class="block text-base md:text-lg font-medium text-gray-700">Select School Year:</label>
        <select id="sy" name="sy" class="mt-1 block w-full pl-3 pr-10 py-2 text-sm md:text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <?php while ($syRow = $syResult->fetch_assoc()): ?>
                <option value="<?php echo htmlspecialchars($syRow['SY']); ?>" <?php echo $syRow['SY'] == $selectedSY ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($syRow['SY']); ?>
                </option>
            <?php endwhile; ?>
        </select>
        <button type="submit" class="mt-4 w-auto inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Filter
        </button>
    </form>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-2 py-3 text-left text-xs md:text-sm font-medium text-gray-500 uppercase tracking-wider">Subject Code</th>
                    <th scope="col" class="px-2 py-3 text-left text-xs md:text-sm font-medium text-gray-500 uppercase tracking-wider">Description</th>
                    <th scope="col" class="px-2 py-3 text-left text-xs md:text-sm font-medium text-gray-500 uppercase tracking-wider">Units</th>
                    <th scope="col" class="px-2 py-3 text-left text-xs md:text-sm font-medium text-gray-500 uppercase tracking-wider">1Q</th>
                    <th scope="col" class="px-2 py-3 text-left text-xs md:text-sm font-medium text-gray-500 uppercase tracking-wider">2Q</th>
                    <th scope="col" class="px-2 py-3 text-left text-xs md:text-sm font-medium text-gray-500 uppercase tracking-wider">3Q</th>
                    <th scope="col" class="px-2 py-3 text-left text-xs md:text-sm font-medium text-gray-500 uppercase tracking-wider">4Q</th>
                    <th scope="col" class="px-2 py-3 text-left text-xs md:text-sm font-medium text-gray-500 uppercase tracking-wider">Final Grade</th>
                    <th scope="col" class="px-2 py-3 text-left text-xs md:text-sm font-medium text-gray-500 uppercase tracking-wider">Remarks</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php while ($gradeRow = $gradesResult->fetch_assoc()): ?>
                    <tr>
                        <td class="px-2 py-4 whitespace-nowrap text-xs md:text-sm text-gray-900"><?php echo htmlspecialchars($gradeRow['SubjectCode']); ?></td>
                        <td class="px-2 py-4 whitespace-nowrap text-xs md:text-sm text-gray-900"><?php echo htmlspecialchars($gradeRow['SubjDesc']); ?></td>
                        <td class="px-2 py-4 whitespace-nowrap text-xs md:text-sm text-gray-900"><?php echo htmlspecialchars($gradeRow['Units']); ?></td>
                        <td class="px-2 py-4 whitespace-nowrap text-xs md:text-sm text-gray-900"><?php echo htmlspecialchars($gradeRow['1Q']); ?></td>
                        <td class="px-2 py-4 whitespace-nowrap text-xs md:text-sm text-gray-900"><?php echo htmlspecialchars($gradeRow['2Q']); ?></td>
                        <td class="px-2 py-4 whitespace-nowrap text-xs md:text-sm text-gray-900"><?php echo htmlspecialchars($gradeRow['3Q']); ?></td>
                        <td class="px-2 py-4 whitespace-nowrap text-xs md:text-sm text-gray-900"><?php echo htmlspecialchars($gradeRow['4Q']); ?></td>
                        <td class="px-2 py-4 whitespace-nowrap text-xs md:text-sm text-gray-900"><?php echo htmlspecialchars($gradeRow['FinalGrade']); ?></td>
                        <td class="px-2 py-4 whitespace-nowrap text-xs md:text-sm text-gray-900"><?php echo htmlspecialchars($gradeRow['Remarks']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>