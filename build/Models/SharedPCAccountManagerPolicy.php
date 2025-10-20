<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedPCAccountManagerPolicy
 */
class SharedPCAccountManagerPolicy
{
    /**
     */
    private ?string $accountDeletionPolicy;

    /**
     * Sets the percentage of available disk space a PC should have before it stops deleting cached shared PC accounts. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100
     */
    private ?float $cacheAccountsAboveDiskFreePercentage;

    /**
     * Specifies when the accounts will start being deleted when they have not been logged on during the specified period, given as number of days. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold.
     */
    private ?float $inactiveThresholdDays;

    /**
     * SharedPC Account Manager Policy. Only applies when the account manager is enabled.
     */
    private ?string $removeAccountsBelowDiskFreePercentage;

    public function getAccountDeletionPolicy(): ?string
    {
        return $this->accountDeletionPolicy;
    }

    public function setAccountDeletionPolicy(?string $accountDeletionPolicy): self
    {
        $this->accountDeletionPolicy = $accountDeletionPolicy;
        return $this;
    }

    public function getCacheAccountsAboveDiskFreePercentage(): ?float
    {
        return $this->cacheAccountsAboveDiskFreePercentage;
    }

    public function setCacheAccountsAboveDiskFreePercentage(?float $cacheAccountsAboveDiskFreePercentage): self
    {
        $this->cacheAccountsAboveDiskFreePercentage = $cacheAccountsAboveDiskFreePercentage;
        return $this;
    }

    public function getInactiveThresholdDays(): ?float
    {
        return $this->inactiveThresholdDays;
    }

    public function setInactiveThresholdDays(?float $inactiveThresholdDays): self
    {
        $this->inactiveThresholdDays = $inactiveThresholdDays;
        return $this;
    }

    public function getRemoveAccountsBelowDiskFreePercentage(): ?string
    {
        return $this->removeAccountsBelowDiskFreePercentage;
    }

    public function setRemoveAccountsBelowDiskFreePercentage(?string $removeAccountsBelowDiskFreePercentage): self
    {
        $this->removeAccountsBelowDiskFreePercentage = $removeAccountsBelowDiskFreePercentage;
        return $this;
    }

}
