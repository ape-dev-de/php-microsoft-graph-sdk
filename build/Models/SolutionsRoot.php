<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SolutionsRoot
 */
class SolutionsRoot
{
    public function __construct(
        /**  */
        public ?BackupRestoreRoot $backupRestore = null,
        /**  */
        public array $bookingBusinesses = [],
        /**  */
        public array $bookingCurrencies = [],
        /**  */
        public ?VirtualEventsRoot $virtualEvents = null
    ) {}
}
