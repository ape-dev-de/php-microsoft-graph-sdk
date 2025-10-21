<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10EndpointProtectionConfiguration resources
 *
 * Available select fields:
 * - applicationGuardAllowPersistence
 * - applicationGuardAllowPrintToLocalPrinters
 * - applicationGuardAllowPrintToNetworkPrinters
 * - applicationGuardAllowPrintToPDF
 * - applicationGuardAllowPrintToXPS
 * - applicationGuardBlockClipboardSharing
 * - applicationGuardBlockFileTransfer
 * - applicationGuardBlockNonEnterpriseContent
 * - applicationGuardEnabled
 * - applicationGuardForceAuditing
 * - appLockerApplicationControl
 * - bitLockerDisableWarningForOtherDiskEncryption
 * - bitLockerEnableStorageCardEncryptionOnMobile
 * - bitLockerEncryptDevice
 * - bitLockerRemovableDrivePolicy
 * - defenderAdditionalGuardedFolders
 * - defenderAttackSurfaceReductionExcludedPaths
 * - defenderExploitProtectionXml
 * - defenderExploitProtectionXmlFileName
 * - defenderGuardedFoldersAllowedAppPaths
 * - defenderSecurityCenterBlockExploitProtectionOverride
 * - firewallBlockStatefulFTP
 * - firewallCertificateRevocationListCheckMethod
 * - firewallIdleTimeoutForSecurityAssociationInSeconds
 * - firewallIPSecExemptionsAllowDHCP
 * - firewallIPSecExemptionsAllowICMP
 * - firewallIPSecExemptionsAllowNeighborDiscovery
 * - firewallIPSecExemptionsAllowRouterDiscovery
 * - firewallMergeKeyingModuleSettings
 * - firewallPacketQueueingMethod
 * - firewallPreSharedKeyEncodingMethod
 * - firewallProfileDomain
 * - firewallProfilePrivate
 * - firewallProfilePublic
 * - smartScreenBlockOverrideForFiles
 * - smartScreenEnableInShell
 */
class Windows10EndpointProtectionConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Windows10EndpointProtectionConfiguration
     */
    public const FIELD_APPLICATION_GUARD_ALLOW_PERSISTENCE = 'applicationGuardAllowPersistence';
    public const FIELD_APPLICATION_GUARD_ALLOW_PRINT_TO_LOCAL_PRINTERS = 'applicationGuardAllowPrintToLocalPrinters';
    public const FIELD_APPLICATION_GUARD_ALLOW_PRINT_TO_NETWORK_PRINTERS = 'applicationGuardAllowPrintToNetworkPrinters';
    public const FIELD_APPLICATION_GUARD_ALLOW_PRINT_TO_PDF = 'applicationGuardAllowPrintToPDF';
    public const FIELD_APPLICATION_GUARD_ALLOW_PRINT_TO_XPS = 'applicationGuardAllowPrintToXPS';
    public const FIELD_APPLICATION_GUARD_BLOCK_CLIPBOARD_SHARING = 'applicationGuardBlockClipboardSharing';
    public const FIELD_APPLICATION_GUARD_BLOCK_FILE_TRANSFER = 'applicationGuardBlockFileTransfer';
    public const FIELD_APPLICATION_GUARD_BLOCK_NON_ENTERPRISE_CONTENT = 'applicationGuardBlockNonEnterpriseContent';
    public const FIELD_APPLICATION_GUARD_ENABLED = 'applicationGuardEnabled';
    public const FIELD_APPLICATION_GUARD_FORCE_AUDITING = 'applicationGuardForceAuditing';
    public const FIELD_APP_LOCKER_APPLICATION_CONTROL = 'appLockerApplicationControl';
    public const FIELD_BIT_LOCKER_DISABLE_WARNING_FOR_OTHER_DISK_ENCRYPTION = 'bitLockerDisableWarningForOtherDiskEncryption';
    public const FIELD_BIT_LOCKER_ENABLE_STORAGE_CARD_ENCRYPTION_ON_MOBILE = 'bitLockerEnableStorageCardEncryptionOnMobile';
    public const FIELD_BIT_LOCKER_ENCRYPT_DEVICE = 'bitLockerEncryptDevice';
    public const FIELD_BIT_LOCKER_REMOVABLE_DRIVE_POLICY = 'bitLockerRemovableDrivePolicy';
    public const FIELD_DEFENDER_ADDITIONAL_GUARDED_FOLDERS = 'defenderAdditionalGuardedFolders';
    public const FIELD_DEFENDER_ATTACK_SURFACE_REDUCTION_EXCLUDED_PATHS = 'defenderAttackSurfaceReductionExcludedPaths';
    public const FIELD_DEFENDER_EXPLOIT_PROTECTION_XML = 'defenderExploitProtectionXml';
    public const FIELD_DEFENDER_EXPLOIT_PROTECTION_XML_FILE_NAME = 'defenderExploitProtectionXmlFileName';
    public const FIELD_DEFENDER_GUARDED_FOLDERS_ALLOWED_APP_PATHS = 'defenderGuardedFoldersAllowedAppPaths';
    public const FIELD_DEFENDER_SECURITY_CENTER_BLOCK_EXPLOIT_PROTECTION_OVERRIDE = 'defenderSecurityCenterBlockExploitProtectionOverride';
    public const FIELD_FIREWALL_BLOCK_STATEFUL_FTP = 'firewallBlockStatefulFTP';
    public const FIELD_FIREWALL_CERTIFICATE_REVOCATION_LIST_CHECK_METHOD = 'firewallCertificateRevocationListCheckMethod';
    public const FIELD_FIREWALL_IDLE_TIMEOUT_FOR_SECURITY_ASSOCIATION_IN_SECONDS = 'firewallIdleTimeoutForSecurityAssociationInSeconds';
    public const FIELD_FIREWALL_IPSEC_EXEMPTIONS_ALLOW_DHCP = 'firewallIPSecExemptionsAllowDHCP';
    public const FIELD_FIREWALL_IPSEC_EXEMPTIONS_ALLOW_ICMP = 'firewallIPSecExemptionsAllowICMP';
    public const FIELD_FIREWALL_IPSEC_EXEMPTIONS_ALLOW_NEIGHBOR_DISCOVERY = 'firewallIPSecExemptionsAllowNeighborDiscovery';
    public const FIELD_FIREWALL_IPSEC_EXEMPTIONS_ALLOW_ROUTER_DISCOVERY = 'firewallIPSecExemptionsAllowRouterDiscovery';
    public const FIELD_FIREWALL_MERGE_KEYING_MODULE_SETTINGS = 'firewallMergeKeyingModuleSettings';
    public const FIELD_FIREWALL_PACKET_QUEUEING_METHOD = 'firewallPacketQueueingMethod';
    public const FIELD_FIREWALL_PRE_SHARED_KEY_ENCODING_METHOD = 'firewallPreSharedKeyEncodingMethod';
    public const FIELD_FIREWALL_PROFILE_DOMAIN = 'firewallProfileDomain';
    public const FIELD_FIREWALL_PROFILE_PRIVATE = 'firewallProfilePrivate';
    public const FIELD_FIREWALL_PROFILE_PUBLIC = 'firewallProfilePublic';
    public const FIELD_SMART_SCREEN_BLOCK_OVERRIDE_FOR_FILES = 'smartScreenBlockOverrideForFiles';
    public const FIELD_SMART_SCREEN_ENABLE_IN_SHELL = 'smartScreenEnableInShell';

    /**
     * Select specific Windows10EndpointProtectionConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
