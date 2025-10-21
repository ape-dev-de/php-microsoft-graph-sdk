<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosDdmLobAppAssignmentSettings
 */
class IosDdmLobAppAssignmentSettings
{
    /**
     * Domain names to associate with the app
     * @var string[]
     */
    private array $associatedDomains = [];

    /**
     * When true, the system allows direct downloads for the AssociatedDomains. When false, the system will not allow direct downloads for the AssociatedDomains. Default is false.
     */
    private ?bool $associatedDomainsDirectDownloadAllowed;

    /**
     * When true, indicates that the app should not be backed up to iCloud. When false, indicates that the app may be backed up to iCloud. Default is false.
     */
    private ?bool $preventManagedAppBackup;

    /**
     * When true, the device locks its screen after every transaction that requires a customer’s card PIN. When false, the user can choose the behavior. Default value is false.
     */
    private ?bool $tapToPayScreenLockEnabled;

    /**
     * Contains properties used to assign an iOS iOS Declarative Device Management (DDM) Line Of Business (LOB) mobile app to a group.
     */
    private ?string $vpnConfigurationId;


    /**
     * @return string[]
     */
    public function getAssociatedDomains(): array
    {
        return $this->associatedDomains;
    }

    /**
     * @param string[] $associatedDomains
     */
    public function setAssociatedDomains(array $associatedDomains): self
    {
        $this->associatedDomains = $associatedDomains;
        return $this;
    }

    public function getAssociatedDomainsDirectDownloadAllowed(): ?bool
    {
        return $this->associatedDomainsDirectDownloadAllowed;
    }

    public function setAssociatedDomainsDirectDownloadAllowed(?bool $associatedDomainsDirectDownloadAllowed): self
    {
        $this->associatedDomainsDirectDownloadAllowed = $associatedDomainsDirectDownloadAllowed;
        return $this;
    }

    public function getPreventManagedAppBackup(): ?bool
    {
        return $this->preventManagedAppBackup;
    }

    public function setPreventManagedAppBackup(?bool $preventManagedAppBackup): self
    {
        $this->preventManagedAppBackup = $preventManagedAppBackup;
        return $this;
    }

    public function getTapToPayScreenLockEnabled(): ?bool
    {
        return $this->tapToPayScreenLockEnabled;
    }

    public function setTapToPayScreenLockEnabled(?bool $tapToPayScreenLockEnabled): self
    {
        $this->tapToPayScreenLockEnabled = $tapToPayScreenLockEnabled;
        return $this;
    }

    public function getVpnConfigurationId(): ?string
    {
        return $this->vpnConfigurationId;
    }

    public function setVpnConfigurationId(?string $vpnConfigurationId): self
    {
        $this->vpnConfigurationId = $vpnConfigurationId;
        return $this;
    }

}
