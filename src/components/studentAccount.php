<h2 class="text-2xl font-bold mb-4">Balance</h2>
<div class="bg-white shadow-md rounded p-6">
    <p class="text-lg font-semibold">LRN: <?php echo $LRN ?></p>
    <p class="text-lg font-semibold">Name: <?php echo ($firstname ?? 'No data') . ' ' . ($lastname ?? 'No data'); ?></p>
    <p class="text-lg font-semibold">Balance: <?php echo $balance !== 'N/A' ? number_format($balance, 2) : 'N/A'; ?></p>
    <p class="text-lg font-semibold">Total Assessment: <?php echo $totalAssessmentValue !== 'N/A' ? number_format($totalAssessmentValue, 2) : 'N/A'; ?></p>
</div>