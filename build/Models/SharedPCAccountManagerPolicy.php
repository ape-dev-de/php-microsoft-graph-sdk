<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedPCAccountManagerPolicy
 */
class SharedPCAccountManagerPolicy
{
    public function __construct(
        /**  */
        public ?SharedPCAccountDeletionPolicyType $accountDeletionPolicy = null,
        /** Sets the percentage of available disk space a PC should have before it stops deleting cached shared PC accounts. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100 */
        public ?float $cacheAccountsAboveDiskFreePercentage = null,
        /** Specifies when the accounts will start being deleted when they have not been logged on during the specified period, given as number of days. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold. */
        public ?float $inactiveThresholdDays = null,
        /** Sets the percentage of disk space remaining on a PC before cached accounts will be deleted to free disk space. Accounts that have been inactive the longest will be deleted first. Only applies when AccountDeletionPolicy is DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100 */
        public ?float $removeAccountsBelowDiskFreePercentage = null
    ) {}
}
