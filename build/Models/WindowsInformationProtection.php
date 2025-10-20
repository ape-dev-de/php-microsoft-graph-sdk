<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtection
 */
class WindowsInformationProtection
{
    /**
     * Specifies whether to allow Azure RMS encryption for WIP
     */
    private ?bool $azureRightsManagementServicesAllowed;

    /**
     * Specifies a recovery certificate that can be used for data recovery of encrypted files. This is the same as the data recovery agent(DRA) certificate for encrypting file system(EFS)
     */
    private ?string $dataRecoveryCertificate;

    /**
     */
    private ?string $enforcementLevel;

    /**
     * Primary enterprise domain
     */
    private ?string $enterpriseDomain;

    /**
     * This is the comma-separated list of internal proxy servers. For example, ''157.54.14.28, 157.54.11.118, 10.202.14.167, 157.53.14.163, 157.69.210.59''. These proxies have been configured by the admin to connect to specific resources on the Internet. They are considered to be enterprise network locations. The proxies are only leveraged in configuring the EnterpriseProxiedDomains policy to force traffic to the matched domains through these proxies
     */
    private array $enterpriseInternalProxyServers = [];

    /**
     * Sets the enterprise IP ranges that define the computers in the enterprise network. Data that comes from those computers will be considered part of the enterprise and protected. These locations will be considered a safe destination for enterprise data to be shared to
     */
    private array $enterpriseIPRanges = [];

    /**
     * Boolean value that tells the client to accept the configured list and not to use heuristics to attempt to find other subnets. Default is false
     */
    private ?bool $enterpriseIPRangesAreAuthoritative;

    /**
     * This is the list of domains that comprise the boundaries of the enterprise. Data from one of these domains that is sent to a device will be considered enterprise data and protected These locations will be considered a safe destination for enterprise data to be shared to
     */
    private array $enterpriseNetworkDomainNames = [];

    /**
     * List of enterprise domains to be protected
     */
    private array $enterpriseProtectedDomainNames = [];

    /**
     * Contains a list of Enterprise resource domains hosted in the cloud that need to be protected. Connections to these resources are considered enterprise data. If a proxy is paired with a cloud resource, traffic to the cloud resource will be routed through the enterprise network via the denoted proxy server (on Port 80). A proxy server used for this purpose must also be configured using the EnterpriseInternalProxyServers policy
     */
    private array $enterpriseProxiedDomains = [];

    /**
     * This is a list of proxy servers. Any server not on this list is considered non-enterprise
     */
    private array $enterpriseProxyServers = [];

    /**
     * Boolean value that tells the client to accept the configured list of proxies and not try to detect other work proxies. Default is false
     */
    private ?bool $enterpriseProxyServersAreAuthoritative;

    /**
     * Exempt applications can also access enterprise data, but the data handled by those applications are not protected. This is because some critical enterprise applications may have compatibility problems with encrypted data.
     */
    private array $exemptApps = [];

    /**
     * Determines whether overlays are added to icons for WIP protected files in Explorer and enterprise only app tiles in the Start menu. Starting in Windows 10, version 1703 this setting also configures the visibility of the WIP icon in the title bar of a WIP-protected app
     */
    private ?bool $iconsVisible;

    /**
     * This switch is for the Windows Search Indexer, to allow or disallow indexing of items
     */
    private ?bool $indexingEncryptedStoresOrItemsBlocked;

    /**
     * Indicates if the policy is deployed to any inclusion groups or not.
     */
    private ?bool $isAssigned;

    /**
     * List of domain names that can used for work or personal resource
     */
    private array $neutralDomainResources = [];

    /**
     * Protected applications can access enterprise data and the data handled by those applications are protected with encryption
     */
    private array $protectedApps = [];

    /**
     * Specifies whether the protection under lock feature (also known as encrypt under pin) should be configured
     */
    private ?bool $protectionUnderLockConfigRequired;

    /**
     * This policy controls whether to revoke the WIP keys when a device unenrolls from the management service. If set to 1 (Don''t revoke keys), the keys will not be revoked and the user will continue to have access to protected files after unenrollment. If the keys are not revoked, there will be no revoked file cleanup subsequently.
     */
    private ?bool $revokeOnUnenrollDisabled;

    /**
     * TemplateID GUID to use for RMS encryption. The RMS template allows the IT admin to configure the details about who has access to RMS-protected file and how long they have access
     */
    private ?string $rightsManagementServicesTemplateId;

    /**
     * Specifies a list of file extensions, so that files with these extensions are encrypted when copying from an SMB share within the corporate boundary
     */
    private array $smbAutoEncryptedFileExtensions = [];

    /**
     * Navigation property to list of security groups targeted for policy.
     */
    private array $assignments = [];

    /**
     * Another way to input exempt apps through xml files
     */
    private array $exemptAppLockerFiles = [];

    /**
     * Policy for Windows information protection to configure detailed management settings
     */
    private ?string $protectedAppLockerFiles;

    public function getAzureRightsManagementServicesAllowed(): ?bool
    {
        return $this->azureRightsManagementServicesAllowed;
    }

    public function setAzureRightsManagementServicesAllowed(?bool $azureRightsManagementServicesAllowed): self
    {
        $this->azureRightsManagementServicesAllowed = $azureRightsManagementServicesAllowed;
        return $this;
    }

    public function getDataRecoveryCertificate(): ?string
    {
        return $this->dataRecoveryCertificate;
    }

    public function setDataRecoveryCertificate(?string $dataRecoveryCertificate): self
    {
        $this->dataRecoveryCertificate = $dataRecoveryCertificate;
        return $this;
    }

    public function getEnforcementLevel(): ?string
    {
        return $this->enforcementLevel;
    }

    public function setEnforcementLevel(?string $enforcementLevel): self
    {
        $this->enforcementLevel = $enforcementLevel;
        return $this;
    }

    public function getEnterpriseDomain(): ?string
    {
        return $this->enterpriseDomain;
    }

    public function setEnterpriseDomain(?string $enterpriseDomain): self
    {
        $this->enterpriseDomain = $enterpriseDomain;
        return $this;
    }

    public function getEnterpriseInternalProxyServers(): array
    {
        return $this->enterpriseInternalProxyServers;
    }

    public function setEnterpriseInternalProxyServers(array $enterpriseInternalProxyServers): self
    {
        $this->enterpriseInternalProxyServers = $enterpriseInternalProxyServers;
        return $this;
    }

    public function getEnterpriseIPRanges(): array
    {
        return $this->enterpriseIPRanges;
    }

    public function setEnterpriseIPRanges(array $enterpriseIPRanges): self
    {
        $this->enterpriseIPRanges = $enterpriseIPRanges;
        return $this;
    }

    public function getEnterpriseIPRangesAreAuthoritative(): ?bool
    {
        return $this->enterpriseIPRangesAreAuthoritative;
    }

    public function setEnterpriseIPRangesAreAuthoritative(?bool $enterpriseIPRangesAreAuthoritative): self
    {
        $this->enterpriseIPRangesAreAuthoritative = $enterpriseIPRangesAreAuthoritative;
        return $this;
    }

    public function getEnterpriseNetworkDomainNames(): array
    {
        return $this->enterpriseNetworkDomainNames;
    }

    public function setEnterpriseNetworkDomainNames(array $enterpriseNetworkDomainNames): self
    {
        $this->enterpriseNetworkDomainNames = $enterpriseNetworkDomainNames;
        return $this;
    }

    public function getEnterpriseProtectedDomainNames(): array
    {
        return $this->enterpriseProtectedDomainNames;
    }

    public function setEnterpriseProtectedDomainNames(array $enterpriseProtectedDomainNames): self
    {
        $this->enterpriseProtectedDomainNames = $enterpriseProtectedDomainNames;
        return $this;
    }

    public function getEnterpriseProxiedDomains(): array
    {
        return $this->enterpriseProxiedDomains;
    }

    public function setEnterpriseProxiedDomains(array $enterpriseProxiedDomains): self
    {
        $this->enterpriseProxiedDomains = $enterpriseProxiedDomains;
        return $this;
    }

    public function getEnterpriseProxyServers(): array
    {
        return $this->enterpriseProxyServers;
    }

    public function setEnterpriseProxyServers(array $enterpriseProxyServers): self
    {
        $this->enterpriseProxyServers = $enterpriseProxyServers;
        return $this;
    }

    public function getEnterpriseProxyServersAreAuthoritative(): ?bool
    {
        return $this->enterpriseProxyServersAreAuthoritative;
    }

    public function setEnterpriseProxyServersAreAuthoritative(?bool $enterpriseProxyServersAreAuthoritative): self
    {
        $this->enterpriseProxyServersAreAuthoritative = $enterpriseProxyServersAreAuthoritative;
        return $this;
    }

    public function getExemptApps(): array
    {
        return $this->exemptApps;
    }

    public function setExemptApps(array $exemptApps): self
    {
        $this->exemptApps = $exemptApps;
        return $this;
    }

    public function getIconsVisible(): ?bool
    {
        return $this->iconsVisible;
    }

    public function setIconsVisible(?bool $iconsVisible): self
    {
        $this->iconsVisible = $iconsVisible;
        return $this;
    }

    public function getIndexingEncryptedStoresOrItemsBlocked(): ?bool
    {
        return $this->indexingEncryptedStoresOrItemsBlocked;
    }

    public function setIndexingEncryptedStoresOrItemsBlocked(?bool $indexingEncryptedStoresOrItemsBlocked): self
    {
        $this->indexingEncryptedStoresOrItemsBlocked = $indexingEncryptedStoresOrItemsBlocked;
        return $this;
    }

    public function getIsAssigned(): ?bool
    {
        return $this->isAssigned;
    }

    public function setIsAssigned(?bool $isAssigned): self
    {
        $this->isAssigned = $isAssigned;
        return $this;
    }

    public function getNeutralDomainResources(): array
    {
        return $this->neutralDomainResources;
    }

    public function setNeutralDomainResources(array $neutralDomainResources): self
    {
        $this->neutralDomainResources = $neutralDomainResources;
        return $this;
    }

    public function getProtectedApps(): array
    {
        return $this->protectedApps;
    }

    public function setProtectedApps(array $protectedApps): self
    {
        $this->protectedApps = $protectedApps;
        return $this;
    }

    public function getProtectionUnderLockConfigRequired(): ?bool
    {
        return $this->protectionUnderLockConfigRequired;
    }

    public function setProtectionUnderLockConfigRequired(?bool $protectionUnderLockConfigRequired): self
    {
        $this->protectionUnderLockConfigRequired = $protectionUnderLockConfigRequired;
        return $this;
    }

    public function getRevokeOnUnenrollDisabled(): ?bool
    {
        return $this->revokeOnUnenrollDisabled;
    }

    public function setRevokeOnUnenrollDisabled(?bool $revokeOnUnenrollDisabled): self
    {
        $this->revokeOnUnenrollDisabled = $revokeOnUnenrollDisabled;
        return $this;
    }

    public function getRightsManagementServicesTemplateId(): ?string
    {
        return $this->rightsManagementServicesTemplateId;
    }

    public function setRightsManagementServicesTemplateId(?string $rightsManagementServicesTemplateId): self
    {
        $this->rightsManagementServicesTemplateId = $rightsManagementServicesTemplateId;
        return $this;
    }

    public function getSmbAutoEncryptedFileExtensions(): array
    {
        return $this->smbAutoEncryptedFileExtensions;
    }

    public function setSmbAutoEncryptedFileExtensions(array $smbAutoEncryptedFileExtensions): self
    {
        $this->smbAutoEncryptedFileExtensions = $smbAutoEncryptedFileExtensions;
        return $this;
    }

    public function getAssignments(): array
    {
        return $this->assignments;
    }

    public function setAssignments(array $assignments): self
    {
        $this->assignments = $assignments;
        return $this;
    }

    public function getExemptAppLockerFiles(): array
    {
        return $this->exemptAppLockerFiles;
    }

    public function setExemptAppLockerFiles(array $exemptAppLockerFiles): self
    {
        $this->exemptAppLockerFiles = $exemptAppLockerFiles;
        return $this;
    }

    public function getProtectedAppLockerFiles(): ?string
    {
        return $this->protectedAppLockerFiles;
    }

    public function setProtectedAppLockerFiles(?string $protectedAppLockerFiles): self
    {
        $this->protectedAppLockerFiles = $protectedAppLockerFiles;
        return $this;
    }

}
