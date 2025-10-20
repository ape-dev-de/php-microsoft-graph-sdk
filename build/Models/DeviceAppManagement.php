<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceAppManagement
 */
class DeviceAppManagement
{
    /**
     * Whether the account is enabled for syncing applications from the Microsoft Store for Business.
     */
    private ?bool $isEnabledForMicrosoftStoreForBusiness;

    /**
     * The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -<country/regioncode2>, where  is a lowercase two-letter code derived from ISO 639-1 and <country/regioncode2> is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
     */
    private ?string $microsoftStoreForBusinessLanguage;

    /**
     * The last time an application sync from the Microsoft Store for Business was completed.
     */
    private ?\DateTimeInterface $microsoftStoreForBusinessLastCompletedApplicationSyncTime;

    /**
     * The last time the apps from the Microsoft Store for Business were synced successfully for the account.
     */
    private ?\DateTimeInterface $microsoftStoreForBusinessLastSuccessfulSyncDateTime;

    /**
     * Android managed app policies.
     */
    private array $androidManagedAppProtections = [];

    /**
     * Default managed app policies.
     */
    private array $defaultManagedAppProtections = [];

    /**
     * iOS managed app policies.
     */
    private array $iosManagedAppProtections = [];

    /**
     * Managed app policies.
     */
    private array $managedAppPolicies = [];

    /**
     * The managed app registrations.
     */
    private array $managedAppRegistrations = [];

    /**
     * The managed app statuses.
     */
    private array $managedAppStatuses = [];

    /**
     * The Managed eBook.
     */
    private array $managedEBooks = [];

    /**
     * Windows information protection for apps running on devices which are MDM enrolled.
     */
    private array $mdmWindowsInformationProtectionPolicies = [];

    /**
     * The mobile app categories.
     */
    private array $mobileAppCategories = [];

    /**
     * The Managed Device Mobile Application Configurations.
     */
    private array $mobileAppConfigurations = [];

    /**
     * The mobile app relationship represents the dependency or supersedence relationship between two Intune mobile LOB applications.
     */
    private array $mobileAppRelationships = [];

    /**
     * The mobile apps.
     */
    private array $mobileApps = [];

    /**
     * Targeted managed app configurations.
     */
    private array $targetedManagedAppConfigurations = [];

    /**
     * List of Vpp tokens for this organization.
     */
    private array $vppTokens = [];

    /**
     * Singleton entity that acts as a container for all device app management functionality.
     */
    private ?string $windowsInformationProtectionPolicies;

    public function getIsEnabledForMicrosoftStoreForBusiness(): ?bool
    {
        return $this->isEnabledForMicrosoftStoreForBusiness;
    }

    public function setIsEnabledForMicrosoftStoreForBusiness(?bool $isEnabledForMicrosoftStoreForBusiness): self
    {
        $this->isEnabledForMicrosoftStoreForBusiness = $isEnabledForMicrosoftStoreForBusiness;
        return $this;
    }

    public function getMicrosoftStoreForBusinessLanguage(): ?string
    {
        return $this->microsoftStoreForBusinessLanguage;
    }

    public function setMicrosoftStoreForBusinessLanguage(?string $microsoftStoreForBusinessLanguage): self
    {
        $this->microsoftStoreForBusinessLanguage = $microsoftStoreForBusinessLanguage;
        return $this;
    }

    public function getMicrosoftStoreForBusinessLastCompletedApplicationSyncTime(): ?\DateTimeInterface
    {
        return $this->microsoftStoreForBusinessLastCompletedApplicationSyncTime;
    }

    public function setMicrosoftStoreForBusinessLastCompletedApplicationSyncTime(?\DateTimeInterface $microsoftStoreForBusinessLastCompletedApplicationSyncTime): self
    {
        $this->microsoftStoreForBusinessLastCompletedApplicationSyncTime = $microsoftStoreForBusinessLastCompletedApplicationSyncTime;
        return $this;
    }

    public function getMicrosoftStoreForBusinessLastSuccessfulSyncDateTime(): ?\DateTimeInterface
    {
        return $this->microsoftStoreForBusinessLastSuccessfulSyncDateTime;
    }

    public function setMicrosoftStoreForBusinessLastSuccessfulSyncDateTime(?\DateTimeInterface $microsoftStoreForBusinessLastSuccessfulSyncDateTime): self
    {
        $this->microsoftStoreForBusinessLastSuccessfulSyncDateTime = $microsoftStoreForBusinessLastSuccessfulSyncDateTime;
        return $this;
    }

    public function getAndroidManagedAppProtections(): array
    {
        return $this->androidManagedAppProtections;
    }

    public function setAndroidManagedAppProtections(array $androidManagedAppProtections): self
    {
        $this->androidManagedAppProtections = $androidManagedAppProtections;
        return $this;
    }

    public function getDefaultManagedAppProtections(): array
    {
        return $this->defaultManagedAppProtections;
    }

    public function setDefaultManagedAppProtections(array $defaultManagedAppProtections): self
    {
        $this->defaultManagedAppProtections = $defaultManagedAppProtections;
        return $this;
    }

    public function getIosManagedAppProtections(): array
    {
        return $this->iosManagedAppProtections;
    }

    public function setIosManagedAppProtections(array $iosManagedAppProtections): self
    {
        $this->iosManagedAppProtections = $iosManagedAppProtections;
        return $this;
    }

    public function getManagedAppPolicies(): array
    {
        return $this->managedAppPolicies;
    }

    public function setManagedAppPolicies(array $managedAppPolicies): self
    {
        $this->managedAppPolicies = $managedAppPolicies;
        return $this;
    }

    public function getManagedAppRegistrations(): array
    {
        return $this->managedAppRegistrations;
    }

    public function setManagedAppRegistrations(array $managedAppRegistrations): self
    {
        $this->managedAppRegistrations = $managedAppRegistrations;
        return $this;
    }

    public function getManagedAppStatuses(): array
    {
        return $this->managedAppStatuses;
    }

    public function setManagedAppStatuses(array $managedAppStatuses): self
    {
        $this->managedAppStatuses = $managedAppStatuses;
        return $this;
    }

    public function getManagedEBooks(): array
    {
        return $this->managedEBooks;
    }

    public function setManagedEBooks(array $managedEBooks): self
    {
        $this->managedEBooks = $managedEBooks;
        return $this;
    }

    public function getMdmWindowsInformationProtectionPolicies(): array
    {
        return $this->mdmWindowsInformationProtectionPolicies;
    }

    public function setMdmWindowsInformationProtectionPolicies(array $mdmWindowsInformationProtectionPolicies): self
    {
        $this->mdmWindowsInformationProtectionPolicies = $mdmWindowsInformationProtectionPolicies;
        return $this;
    }

    public function getMobileAppCategories(): array
    {
        return $this->mobileAppCategories;
    }

    public function setMobileAppCategories(array $mobileAppCategories): self
    {
        $this->mobileAppCategories = $mobileAppCategories;
        return $this;
    }

    public function getMobileAppConfigurations(): array
    {
        return $this->mobileAppConfigurations;
    }

    public function setMobileAppConfigurations(array $mobileAppConfigurations): self
    {
        $this->mobileAppConfigurations = $mobileAppConfigurations;
        return $this;
    }

    public function getMobileAppRelationships(): array
    {
        return $this->mobileAppRelationships;
    }

    public function setMobileAppRelationships(array $mobileAppRelationships): self
    {
        $this->mobileAppRelationships = $mobileAppRelationships;
        return $this;
    }

    public function getMobileApps(): array
    {
        return $this->mobileApps;
    }

    public function setMobileApps(array $mobileApps): self
    {
        $this->mobileApps = $mobileApps;
        return $this;
    }

    public function getTargetedManagedAppConfigurations(): array
    {
        return $this->targetedManagedAppConfigurations;
    }

    public function setTargetedManagedAppConfigurations(array $targetedManagedAppConfigurations): self
    {
        $this->targetedManagedAppConfigurations = $targetedManagedAppConfigurations;
        return $this;
    }

    public function getVppTokens(): array
    {
        return $this->vppTokens;
    }

    public function setVppTokens(array $vppTokens): self
    {
        $this->vppTokens = $vppTokens;
        return $this;
    }

    public function getWindowsInformationProtectionPolicies(): ?string
    {
        return $this->windowsInformationProtectionPolicies;
    }

    public function setWindowsInformationProtectionPolicies(?string $windowsInformationProtectionPolicies): self
    {
        $this->windowsInformationProtectionPolicies = $windowsInformationProtectionPolicies;
        return $this;
    }

}
