<?php if (isset($_SESSION['info_success'])): ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline"><?php echo $_SESSION['info_success']; unset($_SESSION['info_success']); ?></span>
                    </div>
                <?php endif; ?>
                <?php if (isset($_SESSION['info_error'])): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline"><?php echo $_SESSION['info_error']; unset($_SESSION['info_error']); ?></span>
                    </div>
                <?php endif; ?>
