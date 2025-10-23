<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10EndpointProtectionConfiguration
 */
class Windows10EndpointProtectionConfiguration
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** DateTime the object was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Admin provided description of the Device Configuration. */
    public ?string $description = null;

    /** Admin provided name of the device configuration. */
    public ?string $displayName = null;

    /** DateTime the object was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Version of the device configuration. */
    public ?float $version = null;

    /** 
     * The list of assignments for the device configuration profile.
     * @var DeviceConfigurationAssignment[]
     */
    public array $assignments = [];

    /** 
     * Device Configuration Setting State Device Summary
     * @var SettingStateDeviceSummary[]
     */
    public array $deviceSettingStateSummaries = [];

    /** 
     * Device configuration installation status by device.
     * @var DeviceConfigurationDeviceStatus[]
     */
    public array $deviceStatuses = [];

    /** 
     * Device Configuration devices status overview
     * @var DeviceConfigurationDeviceOverview|\stdClass|null
     */
    public mixed $deviceStatusOverview = null;

    /** 
     * Device configuration installation status by user.
     * @var DeviceConfigurationUserStatus[]
     */
    public array $userStatuses = [];

    /** 
     * Device Configuration users status overview
     * @var DeviceConfigurationUserOverview|\stdClass|null
     */
    public mixed $userStatusOverview = null;

    /** Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.) */
    public ?bool $applicationGuardAllowPersistence = null;

    /** Allow printing to Local Printers from Container */
    public ?bool $applicationGuardAllowPrintToLocalPrinters = null;

    /** Allow printing to Network Printers from Container */
    public ?bool $applicationGuardAllowPrintToNetworkPrinters = null;

    /** Allow printing to PDF from Container */
    public ?bool $applicationGuardAllowPrintToPDF = null;

    /** Allow printing to XPS from Container */
    public ?bool $applicationGuardAllowPrintToXPS = null;

    /**  */
    public ?ApplicationGuardBlockClipboardSharingType $applicationGuardBlockClipboardSharing = null;

    /**  */
    public ?ApplicationGuardBlockFileTransferType $applicationGuardBlockFileTransfer = null;

    /** Block enterprise sites to load non-enterprise content, such as third party plug-ins */
    public ?bool $applicationGuardBlockNonEnterpriseContent = null;

    /** Enable Windows Defender Application Guard */
    public ?bool $applicationGuardEnabled = null;

    /** Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.) */
    public ?bool $applicationGuardForceAuditing = null;

    /**  */
    public ?AppLockerApplicationControlType $appLockerApplicationControl = null;

    /** Allows the Admin to disable the warning prompt for other disk encryption on the user machines. */
    public ?bool $bitLockerDisableWarningForOtherDiskEncryption = null;

    /** Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU. */
    public ?bool $bitLockerEnableStorageCardEncryptionOnMobile = null;

    /** Allows the admin to require encryption to be turned on using BitLocker. */
    public ?bool $bitLockerEncryptDevice = null;

    /** 
     * BitLocker Removable Drive Policy.
     * @var BitLockerRemovableDrivePolicy|\stdClass|null
     */
    public mixed $bitLockerRemovableDrivePolicy = null;

    /** 
     * List of folder paths to be added to the list of protected folders
     * @var string[]
     */
    public array $defenderAdditionalGuardedFolders = [];

    /** 
     * List of exe files and folders to be excluded from attack surface reduction rules
     * @var string[]
     */
    public array $defenderAttackSurfaceReductionExcludedPaths = [];

    /** Xml content containing information regarding exploit protection details. */
    public ?string $defenderExploitProtectionXml = null;

    /** Name of the file from which DefenderExploitProtectionXml was obtained. */
    public ?string $defenderExploitProtectionXmlFileName = null;

    /** 
     * List of paths to exe that are allowed to access protected folders
     * @var string[]
     */
    public array $defenderGuardedFoldersAllowedAppPaths = [];

    /** Indicates whether or not to block user from overriding Exploit Protection settings. */
    public ?bool $defenderSecurityCenterBlockExploitProtectionOverride = null;

    /** Blocks stateful FTP connections to the device */
    public ?bool $firewallBlockStatefulFTP = null;

    /**  */
    public ?FirewallCertificateRevocationListCheckMethodType $firewallCertificateRevocationListCheckMethod = null;

    /** Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600 */
    public ?float $firewallIdleTimeoutForSecurityAssociationInSeconds = null;

    /** Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic */
    public ?bool $firewallIPSecExemptionsAllowDHCP = null;

    /** Configures IPSec exemptions to allow ICMP */
    public ?bool $firewallIPSecExemptionsAllowICMP = null;

    /** Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes */
    public ?bool $firewallIPSecExemptionsAllowNeighborDiscovery = null;

    /** Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes */
    public ?bool $firewallIPSecExemptionsAllowRouterDiscovery = null;

    /** If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set */
    public ?bool $firewallMergeKeyingModuleSettings = null;

    /**  */
    public ?FirewallPacketQueueingMethodType $firewallPacketQueueingMethod = null;

    /**  */
    public ?FirewallPreSharedKeyEncodingMethodType $firewallPreSharedKeyEncodingMethod = null;

    /** 
     * Configures the firewall profile settings for domain networks
     * @var WindowsFirewallNetworkProfile|\stdClass|null
     */
    public mixed $firewallProfileDomain = null;

    /** 
     * Configures the firewall profile settings for private networks
     * @var WindowsFirewallNetworkProfile|\stdClass|null
     */
    public mixed $firewallProfilePrivate = null;

    /** 
     * Configures the firewall profile settings for public networks
     * @var WindowsFirewallNetworkProfile|\stdClass|null
     */
    public mixed $firewallProfilePublic = null;

    /** Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files. */
    public ?bool $smartScreenBlockOverrideForFiles = null;

    /** Allows IT Admins to configure SmartScreen for Windows. */
    public ?bool $smartScreenEnableInShell = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
        if (isset($data['deviceSettingStateSummaries'])) {
            $this->deviceSettingStateSummaries = $data['deviceSettingStateSummaries'];
        }
        if (isset($data['deviceStatuses'])) {
            $this->deviceStatuses = $data['deviceStatuses'];
        }
        if (isset($data['deviceStatusOverview'])) {
            $this->deviceStatusOverview = $data['deviceStatusOverview'];
        }
        if (isset($data['userStatuses'])) {
            $this->userStatuses = $data['userStatuses'];
        }
        if (isset($data['userStatusOverview'])) {
            $this->userStatusOverview = $data['userStatusOverview'];
        }
        if (isset($data['applicationGuardAllowPersistence'])) {
            $this->applicationGuardAllowPersistence = $data['applicationGuardAllowPersistence'];
        }
        if (isset($data['applicationGuardAllowPrintToLocalPrinters'])) {
            $this->applicationGuardAllowPrintToLocalPrinters = $data['applicationGuardAllowPrintToLocalPrinters'];
        }
        if (isset($data['applicationGuardAllowPrintToNetworkPrinters'])) {
            $this->applicationGuardAllowPrintToNetworkPrinters = $data['applicationGuardAllowPrintToNetworkPrinters'];
        }
        if (isset($data['applicationGuardAllowPrintToPDF'])) {
            $this->applicationGuardAllowPrintToPDF = $data['applicationGuardAllowPrintToPDF'];
        }
        if (isset($data['applicationGuardAllowPrintToXPS'])) {
            $this->applicationGuardAllowPrintToXPS = $data['applicationGuardAllowPrintToXPS'];
        }
        if (isset($data['applicationGuardBlockClipboardSharing'])) {
            $this->applicationGuardBlockClipboardSharing = $data['applicationGuardBlockClipboardSharing'];
        }
        if (isset($data['applicationGuardBlockFileTransfer'])) {
            $this->applicationGuardBlockFileTransfer = $data['applicationGuardBlockFileTransfer'];
        }
        if (isset($data['applicationGuardBlockNonEnterpriseContent'])) {
            $this->applicationGuardBlockNonEnterpriseContent = $data['applicationGuardBlockNonEnterpriseContent'];
        }
        if (isset($data['applicationGuardEnabled'])) {
            $this->applicationGuardEnabled = $data['applicationGuardEnabled'];
        }
        if (isset($data['applicationGuardForceAuditing'])) {
            $this->applicationGuardForceAuditing = $data['applicationGuardForceAuditing'];
        }
        if (isset($data['appLockerApplicationControl'])) {
            $this->appLockerApplicationControl = $data['appLockerApplicationControl'];
        }
        if (isset($data['bitLockerDisableWarningForOtherDiskEncryption'])) {
            $this->bitLockerDisableWarningForOtherDiskEncryption = $data['bitLockerDisableWarningForOtherDiskEncryption'];
        }
        if (isset($data['bitLockerEnableStorageCardEncryptionOnMobile'])) {
            $this->bitLockerEnableStorageCardEncryptionOnMobile = $data['bitLockerEnableStorageCardEncryptionOnMobile'];
        }
        if (isset($data['bitLockerEncryptDevice'])) {
            $this->bitLockerEncryptDevice = $data['bitLockerEncryptDevice'];
        }
        if (isset($data['bitLockerRemovableDrivePolicy'])) {
            $this->bitLockerRemovableDrivePolicy = $data['bitLockerRemovableDrivePolicy'];
        }
        if (isset($data['defenderAdditionalGuardedFolders'])) {
            $this->defenderAdditionalGuardedFolders = $data['defenderAdditionalGuardedFolders'];
        }
        if (isset($data['defenderAttackSurfaceReductionExcludedPaths'])) {
            $this->defenderAttackSurfaceReductionExcludedPaths = $data['defenderAttackSurfaceReductionExcludedPaths'];
        }
        if (isset($data['defenderExploitProtectionXml'])) {
            $this->defenderExploitProtectionXml = $data['defenderExploitProtectionXml'];
        }
        if (isset($data['defenderExploitProtectionXmlFileName'])) {
            $this->defenderExploitProtectionXmlFileName = $data['defenderExploitProtectionXmlFileName'];
        }
        if (isset($data['defenderGuardedFoldersAllowedAppPaths'])) {
            $this->defenderGuardedFoldersAllowedAppPaths = $data['defenderGuardedFoldersAllowedAppPaths'];
        }
        if (isset($data['defenderSecurityCenterBlockExploitProtectionOverride'])) {
            $this->defenderSecurityCenterBlockExploitProtectionOverride = $data['defenderSecurityCenterBlockExploitProtectionOverride'];
        }
        if (isset($data['firewallBlockStatefulFTP'])) {
            $this->firewallBlockStatefulFTP = $data['firewallBlockStatefulFTP'];
        }
        if (isset($data['firewallCertificateRevocationListCheckMethod'])) {
            $this->firewallCertificateRevocationListCheckMethod = $data['firewallCertificateRevocationListCheckMethod'];
        }
        if (isset($data['firewallIdleTimeoutForSecurityAssociationInSeconds'])) {
            $this->firewallIdleTimeoutForSecurityAssociationInSeconds = $data['firewallIdleTimeoutForSecurityAssociationInSeconds'];
        }
        if (isset($data['firewallIPSecExemptionsAllowDHCP'])) {
            $this->firewallIPSecExemptionsAllowDHCP = $data['firewallIPSecExemptionsAllowDHCP'];
        }
        if (isset($data['firewallIPSecExemptionsAllowICMP'])) {
            $this->firewallIPSecExemptionsAllowICMP = $data['firewallIPSecExemptionsAllowICMP'];
        }
        if (isset($data['firewallIPSecExemptionsAllowNeighborDiscovery'])) {
            $this->firewallIPSecExemptionsAllowNeighborDiscovery = $data['firewallIPSecExemptionsAllowNeighborDiscovery'];
        }
        if (isset($data['firewallIPSecExemptionsAllowRouterDiscovery'])) {
            $this->firewallIPSecExemptionsAllowRouterDiscovery = $data['firewallIPSecExemptionsAllowRouterDiscovery'];
        }
        if (isset($data['firewallMergeKeyingModuleSettings'])) {
            $this->firewallMergeKeyingModuleSettings = $data['firewallMergeKeyingModuleSettings'];
        }
        if (isset($data['firewallPacketQueueingMethod'])) {
            $this->firewallPacketQueueingMethod = $data['firewallPacketQueueingMethod'];
        }
        if (isset($data['firewallPreSharedKeyEncodingMethod'])) {
            $this->firewallPreSharedKeyEncodingMethod = $data['firewallPreSharedKeyEncodingMethod'];
        }
        if (isset($data['firewallProfileDomain'])) {
            $this->firewallProfileDomain = $data['firewallProfileDomain'];
        }
        if (isset($data['firewallProfilePrivate'])) {
            $this->firewallProfilePrivate = $data['firewallProfilePrivate'];
        }
        if (isset($data['firewallProfilePublic'])) {
            $this->firewallProfilePublic = $data['firewallProfilePublic'];
        }
        if (isset($data['smartScreenBlockOverrideForFiles'])) {
            $this->smartScreenBlockOverrideForFiles = $data['smartScreenBlockOverrideForFiles'];
        }
        if (isset($data['smartScreenEnableInShell'])) {
            $this->smartScreenEnableInShell = $data['smartScreenEnableInShell'];
        }
    }
}
