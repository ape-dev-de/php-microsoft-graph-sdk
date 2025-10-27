<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedPCAccountManagerPolicy
 */
class SharedPCAccountManagerPolicy
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?SharedPCAccountDeletionPolicyType $accountDeletionPolicy = null;

    /** Sets the percentage of available disk space a PC should have before it stops deleting cached shared PC accounts. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100 */
    public ?float $cacheAccountsAboveDiskFreePercentage = null;

    /** Specifies when the accounts will start being deleted when they have not been logged on during the specified period, given as number of days. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold. */
    public ?float $inactiveThresholdDays = null;

    /** Sets the percentage of disk space remaining on a PC before cached accounts will be deleted to free disk space. Accounts that have been inactive the longest will be deleted first. Only applies when AccountDeletionPolicy is DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100 */
    public ?float $removeAccountsBelowDiskFreePercentage = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['accountDeletionPolicy'])) {
            $this->accountDeletionPolicy = is_array($data['accountDeletionPolicy']) ? new SharedPCAccountDeletionPolicyType($data['accountDeletionPolicy']) : $data['accountDeletionPolicy'];
        }
        if (isset($data['cacheAccountsAboveDiskFreePercentage'])) {
            $this->cacheAccountsAboveDiskFreePercentage = is_numeric($data['cacheAccountsAboveDiskFreePercentage']) ? (float)$data['cacheAccountsAboveDiskFreePercentage'] : $data['cacheAccountsAboveDiskFreePercentage'];
        }
        if (isset($data['inactiveThresholdDays'])) {
            $this->inactiveThresholdDays = is_numeric($data['inactiveThresholdDays']) ? (float)$data['inactiveThresholdDays'] : $data['inactiveThresholdDays'];
        }
        if (isset($data['removeAccountsBelowDiskFreePercentage'])) {
            $this->removeAccountsBelowDiskFreePercentage = is_numeric($data['removeAccountsBelowDiskFreePercentage']) ? (float)$data['removeAccountsBelowDiskFreePercentage'] : $data['removeAccountsBelowDiskFreePercentage'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
