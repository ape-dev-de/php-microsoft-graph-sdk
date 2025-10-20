<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharedPCAccountManagerPolicy resources
 *
 * Available select fields:
 * - accountDeletionPolicy
 * - cacheAccountsAboveDiskFreePercentage
 * - inactiveThresholdDays
 * - removeAccountsBelowDiskFreePercentage
 */
class SharedPCAccountManagerPolicyQueryOptions extends QueryOptions
{
    public const FIELD_ACCOUNT_DELETION_POLICY = 'accountDeletionPolicy';
    public const FIELD_CACHE_ACCOUNTS_ABOVE_DISK_FREE_PERCENTAGE = 'cacheAccountsAboveDiskFreePercentage';
    public const FIELD_INACTIVE_THRESHOLD_DAYS = 'inactiveThresholdDays';
    public const FIELD_REMOVE_ACCOUNTS_BELOW_DISK_FREE_PERCENTAGE = 'removeAccountsBelowDiskFreePercentage';

    /**
     * Select specific SharedPCAccountManagerPolicy properties
     * 
     * @param array<string> $select Use SharedPCAccountManagerPolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
