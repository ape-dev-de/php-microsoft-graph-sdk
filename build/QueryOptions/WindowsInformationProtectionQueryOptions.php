<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtection resources
 *
 * Available select fields:
 * - azureRightsManagementServicesAllowed
 * - dataRecoveryCertificate
 * - enforcementLevel
 * - enterpriseDomain
 * - enterpriseInternalProxyServers
 * - enterpriseIPRanges
 * - enterpriseIPRangesAreAuthoritative
 * - enterpriseNetworkDomainNames
 * - enterpriseProtectedDomainNames
 * - enterpriseProxiedDomains
 * - enterpriseProxyServers
 * - enterpriseProxyServersAreAuthoritative
 * - exemptApps
 * - iconsVisible
 * - indexingEncryptedStoresOrItemsBlocked
 * - isAssigned
 * - neutralDomainResources
 * - protectedApps
 * - protectionUnderLockConfigRequired
 * - revokeOnUnenrollDisabled
 * - rightsManagementServicesTemplateId
 * - smbAutoEncryptedFileExtensions
 * - assignments
 * - exemptAppLockerFiles
 * - protectedAppLockerFiles
 */
class WindowsInformationProtectionQueryOptions extends QueryOptions
{
    public const FIELD_AZURE_RIGHTS_MANAGEMENT_SERVICES_ALLOWED = 'azureRightsManagementServicesAllowed';
    public const FIELD_DATA_RECOVERY_CERTIFICATE = 'dataRecoveryCertificate';
    public const FIELD_ENFORCEMENT_LEVEL = 'enforcementLevel';
    public const FIELD_ENTERPRISE_DOMAIN = 'enterpriseDomain';
    public const FIELD_ENTERPRISE_INTERNAL_PROXY_SERVERS = 'enterpriseInternalProxyServers';
    public const FIELD_ENTERPRISE_IPRANGES = 'enterpriseIPRanges';
    public const FIELD_ENTERPRISE_IPRANGES_ARE_AUTHORITATIVE = 'enterpriseIPRangesAreAuthoritative';
    public const FIELD_ENTERPRISE_NETWORK_DOMAIN_NAMES = 'enterpriseNetworkDomainNames';
    public const FIELD_ENTERPRISE_PROTECTED_DOMAIN_NAMES = 'enterpriseProtectedDomainNames';
    public const FIELD_ENTERPRISE_PROXIED_DOMAINS = 'enterpriseProxiedDomains';
    public const FIELD_ENTERPRISE_PROXY_SERVERS = 'enterpriseProxyServers';
    public const FIELD_ENTERPRISE_PROXY_SERVERS_ARE_AUTHORITATIVE = 'enterpriseProxyServersAreAuthoritative';
    public const FIELD_EXEMPT_APPS = 'exemptApps';
    public const FIELD_ICONS_VISIBLE = 'iconsVisible';
    public const FIELD_INDEXING_ENCRYPTED_STORES_OR_ITEMS_BLOCKED = 'indexingEncryptedStoresOrItemsBlocked';
    public const FIELD_IS_ASSIGNED = 'isAssigned';
    public const FIELD_NEUTRAL_DOMAIN_RESOURCES = 'neutralDomainResources';
    public const FIELD_PROTECTED_APPS = 'protectedApps';
    public const FIELD_PROTECTION_UNDER_LOCK_CONFIG_REQUIRED = 'protectionUnderLockConfigRequired';
    public const FIELD_REVOKE_ON_UNENROLL_DISABLED = 'revokeOnUnenrollDisabled';
    public const FIELD_RIGHTS_MANAGEMENT_SERVICES_TEMPLATE_ID = 'rightsManagementServicesTemplateId';
    public const FIELD_SMB_AUTO_ENCRYPTED_FILE_EXTENSIONS = 'smbAutoEncryptedFileExtensions';
    public const FIELD_ASSIGNMENTS = 'assignments';
    public const FIELD_EXEMPT_APP_LOCKER_FILES = 'exemptAppLockerFiles';
    public const FIELD_PROTECTED_APP_LOCKER_FILES = 'protectedAppLockerFiles';

    /**
     * Select specific WindowsInformationProtection properties
     * 
     * @param array<string> $select Use WindowsInformationProtectionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
