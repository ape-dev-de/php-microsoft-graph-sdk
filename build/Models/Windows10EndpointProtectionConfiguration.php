<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10EndpointProtectionConfiguration
 */
class Windows10EndpointProtectionConfiguration
{
    public function __construct(
        /** Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.) */
        public ?bool $applicationGuardAllowPersistence = null,
        /** Allow printing to Local Printers from Container */
        public ?bool $applicationGuardAllowPrintToLocalPrinters = null,
        /** Allow printing to Network Printers from Container */
        public ?bool $applicationGuardAllowPrintToNetworkPrinters = null,
        /** Allow printing to PDF from Container */
        public ?bool $applicationGuardAllowPrintToPDF = null,
        /** Allow printing to XPS from Container */
        public ?bool $applicationGuardAllowPrintToXPS = null,
        /**  */
        public ?string $applicationGuardBlockClipboardSharing = null,
        /**  */
        public ?string $applicationGuardBlockFileTransfer = null,
        /** Block enterprise sites to load non-enterprise content, such as third party plug-ins */
        public ?bool $applicationGuardBlockNonEnterpriseContent = null,
        /** Enable Windows Defender Application Guard */
        public ?bool $applicationGuardEnabled = null,
        /** Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.) */
        public ?bool $applicationGuardForceAuditing = null,
        /**  */
        public ?string $appLockerApplicationControl = null,
        /** Allows the Admin to disable the warning prompt for other disk encryption on the user machines. */
        public ?bool $bitLockerDisableWarningForOtherDiskEncryption = null,
        /** Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU. */
        public ?bool $bitLockerEnableStorageCardEncryptionOnMobile = null,
        /** Allows the admin to require encryption to be turned on using BitLocker. */
        public ?bool $bitLockerEncryptDevice = null,
        /** BitLocker Removable Drive Policy. */
        public ?string $bitLockerRemovableDrivePolicy = null,
        /** @var string[] List of folder paths to be added to the list of protected folders */
        public array $defenderAdditionalGuardedFolders = [],
        /** @var string[] List of exe files and folders to be excluded from attack surface reduction rules */
        public array $defenderAttackSurfaceReductionExcludedPaths = [],
        /** Xml content containing information regarding exploit protection details. */
        public ?string $defenderExploitProtectionXml = null,
        /** Name of the file from which DefenderExploitProtectionXml was obtained. */
        public ?string $defenderExploitProtectionXmlFileName = null,
        /** @var string[] List of paths to exe that are allowed to access protected folders */
        public array $defenderGuardedFoldersAllowedAppPaths = [],
        /** Indicates whether or not to block user from overriding Exploit Protection settings. */
        public ?bool $defenderSecurityCenterBlockExploitProtectionOverride = null,
        /** Blocks stateful FTP connections to the device */
        public ?bool $firewallBlockStatefulFTP = null,
        /**  */
        public ?string $firewallCertificateRevocationListCheckMethod = null,
        /** Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600 */
        public ?float $firewallIdleTimeoutForSecurityAssociationInSeconds = null,
        /** Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic */
        public ?bool $firewallIPSecExemptionsAllowDHCP = null,
        /** Configures IPSec exemptions to allow ICMP */
        public ?bool $firewallIPSecExemptionsAllowICMP = null,
        /** Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes */
        public ?bool $firewallIPSecExemptionsAllowNeighborDiscovery = null,
        /** Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes */
        public ?bool $firewallIPSecExemptionsAllowRouterDiscovery = null,
        /** If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set */
        public ?bool $firewallMergeKeyingModuleSettings = null,
        /**  */
        public ?string $firewallPacketQueueingMethod = null,
        /**  */
        public ?string $firewallPreSharedKeyEncodingMethod = null,
        /** Configures the firewall profile settings for domain networks */
        public ?string $firewallProfileDomain = null,
        /** Configures the firewall profile settings for private networks */
        public ?string $firewallProfilePrivate = null,
        /** Configures the firewall profile settings for public networks */
        public ?string $firewallProfilePublic = null,
        /** Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files. */
        public ?bool $smartScreenBlockOverrideForFiles = null,
        /** This topic provides descriptions of the declared methods, properties and relationships exposed by the Windows10EndpointProtectionConfiguration resource. */
        public ?string $smartScreenEnableInShell = null
    ) {}
}
