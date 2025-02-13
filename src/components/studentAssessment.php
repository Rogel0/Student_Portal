<h2 class="text-2xl font-bold mt-8 mb-4">Assessment</h2>
<div class="bg-white shadow-md rounded-lg p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <p class="text-lg font-semibold mb-2">School Year: <span class="font-normal text-gray-700"><?php echo $SY; ?></span></p>
            <p class="text-lg font-semibold mb-2">Total Assessment: <span class="font-normal text-gray-700"><?php echo number_format($TotalAssessment, 2); ?></span></p>
            <p class="text-lg font-semibold mb-2">Discount: <span class="font-normal text-gray-700"><?php echo number_format($Discount, 2); ?></span></p>
        </div>
        <div>
            <p class="text-lg font-semibold mb-2">Tuition Fee: <span class="font-normal text-gray-700"><?php echo number_format($TuitionFee, 2); ?></span></p>
            <p class="text-lg font-semibold mb-2">Miscellaneous Fee: <span class="font-normal text-gray-700"><?php echo number_format($MiscFee, 2); ?></span></p>
            <p class="text-lg font-semibold mb-2">Laboratory Fee: <span class="font-normal text-gray-700"><?php echo number_format($LabFee, 2); ?></span></p>
            <p class="text-lg font-semibold mb-2">Developmental Fee: <span class="font-normal text-gray-700"><?php echo number_format($DevelopmentalFee, 2); ?></span></p>
            <p class="text-lg font-semibold mb-2">Other Fees: <span class="font-normal text-gray-700"><?php echo number_format($OtherFees, 2); ?></span></p>
            <p class="text-lg font-semibold mb-2">Status: 
                <span class="font-normal <?php echo $STATUS == 'Enrolled' ? 'text-green-500' : 'text-red-500'; ?>">
                    <?php echo $STATUS; ?>
                </span>
            </p>
        </div>
    </div>
</div>