<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10EndpointProtectionConfiguration
 */
class Windows10EndpointProtectionConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
    public DeviceConfigurationDeviceOverview|\stdClass|null $deviceStatusOverview = null;

    /** 
     * Device configuration installation status by user.
     * @var DeviceConfigurationUserStatus[]
     */
    public array $userStatuses = [];

    /** 
     * Device Configuration users status overview
     * @var DeviceConfigurationUserOverview|\stdClass|null
     */
    public DeviceConfigurationUserOverview|\stdClass|null $userStatusOverview = null;

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
    public BitLockerRemovableDrivePolicy|\stdClass|null $bitLockerRemovableDrivePolicy = null;

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
    public WindowsFirewallNetworkProfile|\stdClass|null $firewallProfileDomain = null;

    /** 
     * Configures the firewall profile settings for private networks
     * @var WindowsFirewallNetworkProfile|\stdClass|null
     */
    public WindowsFirewallNetworkProfile|\stdClass|null $firewallProfilePrivate = null;

    /** 
     * Configures the firewall profile settings for public networks
     * @var WindowsFirewallNetworkProfile|\stdClass|null
     */
    public WindowsFirewallNetworkProfile|\stdClass|null $firewallProfilePublic = null;

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
        $this->rawData = $data;
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
            $this->version = is_numeric($data['version']) ? (float)$data['version'] : $data['version'];
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
            $this->deviceStatusOverview = is_array($data['deviceStatusOverview']) ? new DeviceConfigurationDeviceOverview($data['deviceStatusOverview']) : $data['deviceStatusOverview'];
        }
        if (isset($data['userStatuses'])) {
            $this->userStatuses = $data['userStatuses'];
        }
        if (isset($data['userStatusOverview'])) {
            $this->userStatusOverview = is_array($data['userStatusOverview']) ? new DeviceConfigurationUserOverview($data['userStatusOverview']) : $data['userStatusOverview'];
        }
        if (isset($data['applicationGuardAllowPersistence'])) {
            $this->applicationGuardAllowPersistence = is_bool($data['applicationGuardAllowPersistence']) ? $data['applicationGuardAllowPersistence'] : (bool)$data['applicationGuardAllowPersistence'];
        }
        if (isset($data['applicationGuardAllowPrintToLocalPrinters'])) {
            $this->applicationGuardAllowPrintToLocalPrinters = is_bool($data['applicationGuardAllowPrintToLocalPrinters']) ? $data['applicationGuardAllowPrintToLocalPrinters'] : (bool)$data['applicationGuardAllowPrintToLocalPrinters'];
        }
        if (isset($data['applicationGuardAllowPrintToNetworkPrinters'])) {
            $this->applicationGuardAllowPrintToNetworkPrinters = is_bool($data['applicationGuardAllowPrintToNetworkPrinters']) ? $data['applicationGuardAllowPrintToNetworkPrinters'] : (bool)$data['applicationGuardAllowPrintToNetworkPrinters'];
        }
        if (isset($data['applicationGuardAllowPrintToPDF'])) {
            $this->applicationGuardAllowPrintToPDF = is_bool($data['applicationGuardAllowPrintToPDF']) ? $data['applicationGuardAllowPrintToPDF'] : (bool)$data['applicationGuardAllowPrintToPDF'];
        }
        if (isset($data['applicationGuardAllowPrintToXPS'])) {
            $this->applicationGuardAllowPrintToXPS = is_bool($data['applicationGuardAllowPrintToXPS']) ? $data['applicationGuardAllowPrintToXPS'] : (bool)$data['applicationGuardAllowPrintToXPS'];
        }
        if (isset($data['applicationGuardBlockClipboardSharing'])) {
            $this->applicationGuardBlockClipboardSharing = is_string($data['applicationGuardBlockClipboardSharing']) ? ApplicationGuardBlockClipboardSharingType::tryFrom($data['applicationGuardBlockClipboardSharing']) : $data['applicationGuardBlockClipboardSharing'];
        }
        if (isset($data['applicationGuardBlockFileTransfer'])) {
            $this->applicationGuardBlockFileTransfer = is_string($data['applicationGuardBlockFileTransfer']) ? ApplicationGuardBlockFileTransferType::tryFrom($data['applicationGuardBlockFileTransfer']) : $data['applicationGuardBlockFileTransfer'];
        }
        if (isset($data['applicationGuardBlockNonEnterpriseContent'])) {
            $this->applicationGuardBlockNonEnterpriseContent = is_bool($data['applicationGuardBlockNonEnterpriseContent']) ? $data['applicationGuardBlockNonEnterpriseContent'] : (bool)$data['applicationGuardBlockNonEnterpriseContent'];
        }
        if (isset($data['applicationGuardEnabled'])) {
            $this->applicationGuardEnabled = is_bool($data['applicationGuardEnabled']) ? $data['applicationGuardEnabled'] : (bool)$data['applicationGuardEnabled'];
        }
        if (isset($data['applicationGuardForceAuditing'])) {
            $this->applicationGuardForceAuditing = is_bool($data['applicationGuardForceAuditing']) ? $data['applicationGuardForceAuditing'] : (bool)$data['applicationGuardForceAuditing'];
        }
        if (isset($data['appLockerApplicationControl'])) {
            $this->appLockerApplicationControl = is_string($data['appLockerApplicationControl']) ? AppLockerApplicationControlType::tryFrom($data['appLockerApplicationControl']) : $data['appLockerApplicationControl'];
        }
        if (isset($data['bitLockerDisableWarningForOtherDiskEncryption'])) {
            $this->bitLockerDisableWarningForOtherDiskEncryption = is_bool($data['bitLockerDisableWarningForOtherDiskEncryption']) ? $data['bitLockerDisableWarningForOtherDiskEncryption'] : (bool)$data['bitLockerDisableWarningForOtherDiskEncryption'];
        }
        if (isset($data['bitLockerEnableStorageCardEncryptionOnMobile'])) {
            $this->bitLockerEnableStorageCardEncryptionOnMobile = is_bool($data['bitLockerEnableStorageCardEncryptionOnMobile']) ? $data['bitLockerEnableStorageCardEncryptionOnMobile'] : (bool)$data['bitLockerEnableStorageCardEncryptionOnMobile'];
        }
        if (isset($data['bitLockerEncryptDevice'])) {
            $this->bitLockerEncryptDevice = is_bool($data['bitLockerEncryptDevice']) ? $data['bitLockerEncryptDevice'] : (bool)$data['bitLockerEncryptDevice'];
        }
        if (isset($data['bitLockerRemovableDrivePolicy'])) {
            $this->bitLockerRemovableDrivePolicy = is_array($data['bitLockerRemovableDrivePolicy']) ? new BitLockerRemovableDrivePolicy($data['bitLockerRemovableDrivePolicy']) : $data['bitLockerRemovableDrivePolicy'];
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
            $this->defenderSecurityCenterBlockExploitProtectionOverride = is_bool($data['defenderSecurityCenterBlockExploitProtectionOverride']) ? $data['defenderSecurityCenterBlockExploitProtectionOverride'] : (bool)$data['defenderSecurityCenterBlockExploitProtectionOverride'];
        }
        if (isset($data['firewallBlockStatefulFTP'])) {
            $this->firewallBlockStatefulFTP = is_bool($data['firewallBlockStatefulFTP']) ? $data['firewallBlockStatefulFTP'] : (bool)$data['firewallBlockStatefulFTP'];
        }
        if (isset($data['firewallCertificateRevocationListCheckMethod'])) {
            $this->firewallCertificateRevocationListCheckMethod = is_string($data['firewallCertificateRevocationListCheckMethod']) ? FirewallCertificateRevocationListCheckMethodType::tryFrom($data['firewallCertificateRevocationListCheckMethod']) : $data['firewallCertificateRevocationListCheckMethod'];
        }
        if (isset($data['firewallIdleTimeoutForSecurityAssociationInSeconds'])) {
            $this->firewallIdleTimeoutForSecurityAssociationInSeconds = is_numeric($data['firewallIdleTimeoutForSecurityAssociationInSeconds']) ? (float)$data['firewallIdleTimeoutForSecurityAssociationInSeconds'] : $data['firewallIdleTimeoutForSecurityAssociationInSeconds'];
        }
        if (isset($data['firewallIPSecExemptionsAllowDHCP'])) {
            $this->firewallIPSecExemptionsAllowDHCP = is_bool($data['firewallIPSecExemptionsAllowDHCP']) ? $data['firewallIPSecExemptionsAllowDHCP'] : (bool)$data['firewallIPSecExemptionsAllowDHCP'];
        }
        if (isset($data['firewallIPSecExemptionsAllowICMP'])) {
            $this->firewallIPSecExemptionsAllowICMP = is_bool($data['firewallIPSecExemptionsAllowICMP']) ? $data['firewallIPSecExemptionsAllowICMP'] : (bool)$data['firewallIPSecExemptionsAllowICMP'];
        }
        if (isset($data['firewallIPSecExemptionsAllowNeighborDiscovery'])) {
            $this->firewallIPSecExemptionsAllowNeighborDiscovery = is_bool($data['firewallIPSecExemptionsAllowNeighborDiscovery']) ? $data['firewallIPSecExemptionsAllowNeighborDiscovery'] : (bool)$data['firewallIPSecExemptionsAllowNeighborDiscovery'];
        }
        if (isset($data['firewallIPSecExemptionsAllowRouterDiscovery'])) {
            $this->firewallIPSecExemptionsAllowRouterDiscovery = is_bool($data['firewallIPSecExemptionsAllowRouterDiscovery']) ? $data['firewallIPSecExemptionsAllowRouterDiscovery'] : (bool)$data['firewallIPSecExemptionsAllowRouterDiscovery'];
        }
        if (isset($data['firewallMergeKeyingModuleSettings'])) {
            $this->firewallMergeKeyingModuleSettings = is_bool($data['firewallMergeKeyingModuleSettings']) ? $data['firewallMergeKeyingModuleSettings'] : (bool)$data['firewallMergeKeyingModuleSettings'];
        }
        if (isset($data['firewallPacketQueueingMethod'])) {
            $this->firewallPacketQueueingMethod = is_string($data['firewallPacketQueueingMethod']) ? FirewallPacketQueueingMethodType::tryFrom($data['firewallPacketQueueingMethod']) : $data['firewallPacketQueueingMethod'];
        }
        if (isset($data['firewallPreSharedKeyEncodingMethod'])) {
            $this->firewallPreSharedKeyEncodingMethod = is_string($data['firewallPreSharedKeyEncodingMethod']) ? FirewallPreSharedKeyEncodingMethodType::tryFrom($data['firewallPreSharedKeyEncodingMethod']) : $data['firewallPreSharedKeyEncodingMethod'];
        }
        if (isset($data['firewallProfileDomain'])) {
            $this->firewallProfileDomain = is_array($data['firewallProfileDomain']) ? new WindowsFirewallNetworkProfile($data['firewallProfileDomain']) : $data['firewallProfileDomain'];
        }
        if (isset($data['firewallProfilePrivate'])) {
            $this->firewallProfilePrivate = is_array($data['firewallProfilePrivate']) ? new WindowsFirewallNetworkProfile($data['firewallProfilePrivate']) : $data['firewallProfilePrivate'];
        }
        if (isset($data['firewallProfilePublic'])) {
            $this->firewallProfilePublic = is_array($data['firewallProfilePublic']) ? new WindowsFirewallNetworkProfile($data['firewallProfilePublic']) : $data['firewallProfilePublic'];
        }
        if (isset($data['smartScreenBlockOverrideForFiles'])) {
            $this->smartScreenBlockOverrideForFiles = is_bool($data['smartScreenBlockOverrideForFiles']) ? $data['smartScreenBlockOverrideForFiles'] : (bool)$data['smartScreenBlockOverrideForFiles'];
        }
        if (isset($data['smartScreenEnableInShell'])) {
            $this->smartScreenEnableInShell = is_bool($data['smartScreenEnableInShell']) ? $data['smartScreenEnableInShell'] : (bool)$data['smartScreenEnableInShell'];
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
