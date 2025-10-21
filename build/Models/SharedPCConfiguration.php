<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedPCConfiguration
 */
class SharedPCConfiguration
{
    /**
     * Specifies how accounts are managed on a shared PC. Only applies when disableAccountManager is false.
     */
    private ?string $accountManagerPolicy;

    /**
     */
    private ?string $allowedAccounts;

    /**
     * Specifies whether local storage is allowed on a shared PC.
     */
    private ?bool $allowLocalStorage;

    /**
     * Disables the account manager for shared PC mode.
     */
    private ?bool $disableAccountManager;

    /**
     * Specifies whether the default shared PC education environment policies should be disabled. For Windows 10 RS2 and later, this policy will be applied without setting Enabled to true.
     */
    private ?bool $disableEduPolicies;

    /**
     * Specifies whether the default shared PC power policies should be disabled.
     */
    private ?bool $disablePowerPolicies;

    /**
     * Disables the requirement to sign in whenever the device wakes up from sleep mode.
     */
    private ?bool $disableSignInOnResume;

    /**
     * Enables shared PC mode and applies the shared pc policies.
     */
    private ?bool $enabled;

    /**
     * Specifies the time in seconds that a device must sit idle before the PC goes to sleep. Setting this value to 0 prevents the sleep timeout from occurring.
     */
    private ?float $idleTimeBeforeSleepInSeconds;

    /**
     * Specifies the display text for the account shown on the sign-in screen which launches the app specified by SetKioskAppUserModelId. Only applies when KioskAppUserModelId is set.
     */
    private ?string $kioskAppDisplayName;

    /**
     * Specifies the application user model ID of the app to use with assigned access.
     */
    private ?string $kioskAppUserModelId;

    /**
     * This topic provides descriptions of the declared methods, properties and relationships exposed by the sharedPCConfiguration resource.
     */
    private ?string $maintenanceStartTime;


    public function getAccountManagerPolicy(): ?string
    {
        return $this->accountManagerPolicy;
    }

    public function setAccountManagerPolicy(?string $accountManagerPolicy): self
    {
        $this->accountManagerPolicy = $accountManagerPolicy;
        return $this;
    }

    public function getAllowedAccounts(): ?string
    {
        return $this->allowedAccounts;
    }

    public function setAllowedAccounts(?string $allowedAccounts): self
    {
        $this->allowedAccounts = $allowedAccounts;
        return $this;
    }

    public function getAllowLocalStorage(): ?bool
    {
        return $this->allowLocalStorage;
    }

    public function setAllowLocalStorage(?bool $allowLocalStorage): self
    {
        $this->allowLocalStorage = $allowLocalStorage;
        return $this;
    }

    public function getDisableAccountManager(): ?bool
    {
        return $this->disableAccountManager;
    }

    public function setDisableAccountManager(?bool $disableAccountManager): self
    {
        $this->disableAccountManager = $disableAccountManager;
        return $this;
    }

    public function getDisableEduPolicies(): ?bool
    {
        return $this->disableEduPolicies;
    }

    public function setDisableEduPolicies(?bool $disableEduPolicies): self
    {
        $this->disableEduPolicies = $disableEduPolicies;
        return $this;
    }

    public function getDisablePowerPolicies(): ?bool
    {
        return $this->disablePowerPolicies;
    }

    public function setDisablePowerPolicies(?bool $disablePowerPolicies): self
    {
        $this->disablePowerPolicies = $disablePowerPolicies;
        return $this;
    }

    public function getDisableSignInOnResume(): ?bool
    {
        return $this->disableSignInOnResume;
    }

    public function setDisableSignInOnResume(?bool $disableSignInOnResume): self
    {
        $this->disableSignInOnResume = $disableSignInOnResume;
        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function getIdleTimeBeforeSleepInSeconds(): ?float
    {
        return $this->idleTimeBeforeSleepInSeconds;
    }

    public function setIdleTimeBeforeSleepInSeconds(?float $idleTimeBeforeSleepInSeconds): self
    {
        $this->idleTimeBeforeSleepInSeconds = $idleTimeBeforeSleepInSeconds;
        return $this;
    }

    public function getKioskAppDisplayName(): ?string
    {
        return $this->kioskAppDisplayName;
    }

    public function setKioskAppDisplayName(?string $kioskAppDisplayName): self
    {
        $this->kioskAppDisplayName = $kioskAppDisplayName;
        return $this;
    }

    public function getKioskAppUserModelId(): ?string
    {
        return $this->kioskAppUserModelId;
    }

    public function setKioskAppUserModelId(?string $kioskAppUserModelId): self
    {
        $this->kioskAppUserModelId = $kioskAppUserModelId;
        return $this;
    }

    public function getMaintenanceStartTime(): ?string
    {
        return $this->maintenanceStartTime;
    }

    public function setMaintenanceStartTime(?string $maintenanceStartTime): self
    {
        $this->maintenanceStartTime = $maintenanceStartTime;
        return $this;
    }

}
