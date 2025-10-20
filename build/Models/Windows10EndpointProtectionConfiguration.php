<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10EndpointProtectionConfiguration
 */
class Windows10EndpointProtectionConfiguration
{
    /**
     * Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.)
     */
    private ?bool $applicationGuardAllowPersistence;

    /**
     * Allow printing to Local Printers from Container
     */
    private ?bool $applicationGuardAllowPrintToLocalPrinters;

    /**
     * Allow printing to Network Printers from Container
     */
    private ?bool $applicationGuardAllowPrintToNetworkPrinters;

    /**
     * Allow printing to PDF from Container
     */
    private ?bool $applicationGuardAllowPrintToPDF;

    /**
     * Allow printing to XPS from Container
     */
    private ?bool $applicationGuardAllowPrintToXPS;

    /**
     */
    private ?string $applicationGuardBlockClipboardSharing;

    /**
     */
    private ?string $applicationGuardBlockFileTransfer;

    /**
     * Block enterprise sites to load non-enterprise content, such as third party plug-ins
     */
    private ?bool $applicationGuardBlockNonEnterpriseContent;

    /**
     * Enable Windows Defender Application Guard
     */
    private ?bool $applicationGuardEnabled;

    /**
     * Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.)
     */
    private ?bool $applicationGuardForceAuditing;

    /**
     */
    private ?string $appLockerApplicationControl;

    /**
     * Allows the Admin to disable the warning prompt for other disk encryption on the user machines.
     */
    private ?bool $bitLockerDisableWarningForOtherDiskEncryption;

    /**
     * Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU.
     */
    private ?bool $bitLockerEnableStorageCardEncryptionOnMobile;

    /**
     * Allows the admin to require encryption to be turned on using BitLocker.
     */
    private ?bool $bitLockerEncryptDevice;

    /**
     * BitLocker Removable Drive Policy.
     */
    private ?string $bitLockerRemovableDrivePolicy;

    /**
     * List of folder paths to be added to the list of protected folders
     */
    private ?string $defenderAdditionalGuardedFolders;

    /**
     * List of exe files and folders to be excluded from attack surface reduction rules
     */
    private ?string $defenderAttackSurfaceReductionExcludedPaths;

    /**
     * Xml content containing information regarding exploit protection details.
     */
    private ?string $defenderExploitProtectionXml;

    /**
     * Name of the file from which DefenderExploitProtectionXml was obtained.
     */
    private ?string $defenderExploitProtectionXmlFileName;

    /**
     * List of paths to exe that are allowed to access protected folders
     */
    private ?string $defenderGuardedFoldersAllowedAppPaths;

    /**
     * Indicates whether or not to block user from overriding Exploit Protection settings.
     */
    private ?bool $defenderSecurityCenterBlockExploitProtectionOverride;

    /**
     * Blocks stateful FTP connections to the device
     */
    private ?bool $firewallBlockStatefulFTP;

    /**
     */
    private ?string $firewallCertificateRevocationListCheckMethod;

    /**
     * Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600
     */
    private ?float $firewallIdleTimeoutForSecurityAssociationInSeconds;

    /**
     * Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic
     */
    private ?bool $firewallIPSecExemptionsAllowDHCP;

    /**
     * Configures IPSec exemptions to allow ICMP
     */
    private ?bool $firewallIPSecExemptionsAllowICMP;

    /**
     * Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes
     */
    private ?bool $firewallIPSecExemptionsAllowNeighborDiscovery;

    /**
     * Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes
     */
    private ?bool $firewallIPSecExemptionsAllowRouterDiscovery;

    /**
     * If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set
     */
    private ?bool $firewallMergeKeyingModuleSettings;

    /**
     */
    private ?string $firewallPacketQueueingMethod;

    /**
     */
    private ?string $firewallPreSharedKeyEncodingMethod;

    /**
     * Configures the firewall profile settings for domain networks
     */
    private ?string $firewallProfileDomain;

    /**
     * Configures the firewall profile settings for private networks
     */
    private ?string $firewallProfilePrivate;

    /**
     * Configures the firewall profile settings for public networks
     */
    private ?string $firewallProfilePublic;

    /**
     * Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files.
     */
    private ?bool $smartScreenBlockOverrideForFiles;

    /**
     * This topic provides descriptions of the declared methods, properties and relationships exposed by the Windows10EndpointProtectionConfiguration resource.
     */
    private ?string $smartScreenEnableInShell;

    public function getApplicationGuardAllowPersistence(): ?bool
    {
        return $this->applicationGuardAllowPersistence;
    }

    public function setApplicationGuardAllowPersistence(?bool $applicationGuardAllowPersistence): self
    {
        $this->applicationGuardAllowPersistence = $applicationGuardAllowPersistence;
        return $this;
    }

    public function getApplicationGuardAllowPrintToLocalPrinters(): ?bool
    {
        return $this->applicationGuardAllowPrintToLocalPrinters;
    }

    public function setApplicationGuardAllowPrintToLocalPrinters(?bool $applicationGuardAllowPrintToLocalPrinters): self
    {
        $this->applicationGuardAllowPrintToLocalPrinters = $applicationGuardAllowPrintToLocalPrinters;
        return $this;
    }

    public function getApplicationGuardAllowPrintToNetworkPrinters(): ?bool
    {
        return $this->applicationGuardAllowPrintToNetworkPrinters;
    }

    public function setApplicationGuardAllowPrintToNetworkPrinters(?bool $applicationGuardAllowPrintToNetworkPrinters): self
    {
        $this->applicationGuardAllowPrintToNetworkPrinters = $applicationGuardAllowPrintToNetworkPrinters;
        return $this;
    }

    public function getApplicationGuardAllowPrintToPDF(): ?bool
    {
        return $this->applicationGuardAllowPrintToPDF;
    }

    public function setApplicationGuardAllowPrintToPDF(?bool $applicationGuardAllowPrintToPDF): self
    {
        $this->applicationGuardAllowPrintToPDF = $applicationGuardAllowPrintToPDF;
        return $this;
    }

    public function getApplicationGuardAllowPrintToXPS(): ?bool
    {
        return $this->applicationGuardAllowPrintToXPS;
    }

    public function setApplicationGuardAllowPrintToXPS(?bool $applicationGuardAllowPrintToXPS): self
    {
        $this->applicationGuardAllowPrintToXPS = $applicationGuardAllowPrintToXPS;
        return $this;
    }

    public function getApplicationGuardBlockClipboardSharing(): ?string
    {
        return $this->applicationGuardBlockClipboardSharing;
    }

    public function setApplicationGuardBlockClipboardSharing(?string $applicationGuardBlockClipboardSharing): self
    {
        $this->applicationGuardBlockClipboardSharing = $applicationGuardBlockClipboardSharing;
        return $this;
    }

    public function getApplicationGuardBlockFileTransfer(): ?string
    {
        return $this->applicationGuardBlockFileTransfer;
    }

    public function setApplicationGuardBlockFileTransfer(?string $applicationGuardBlockFileTransfer): self
    {
        $this->applicationGuardBlockFileTransfer = $applicationGuardBlockFileTransfer;
        return $this;
    }

    public function getApplicationGuardBlockNonEnterpriseContent(): ?bool
    {
        return $this->applicationGuardBlockNonEnterpriseContent;
    }

    public function setApplicationGuardBlockNonEnterpriseContent(?bool $applicationGuardBlockNonEnterpriseContent): self
    {
        $this->applicationGuardBlockNonEnterpriseContent = $applicationGuardBlockNonEnterpriseContent;
        return $this;
    }

    public function getApplicationGuardEnabled(): ?bool
    {
        return $this->applicationGuardEnabled;
    }

    public function setApplicationGuardEnabled(?bool $applicationGuardEnabled): self
    {
        $this->applicationGuardEnabled = $applicationGuardEnabled;
        return $this;
    }

    public function getApplicationGuardForceAuditing(): ?bool
    {
        return $this->applicationGuardForceAuditing;
    }

    public function setApplicationGuardForceAuditing(?bool $applicationGuardForceAuditing): self
    {
        $this->applicationGuardForceAuditing = $applicationGuardForceAuditing;
        return $this;
    }

    public function getAppLockerApplicationControl(): ?string
    {
        return $this->appLockerApplicationControl;
    }

    public function setAppLockerApplicationControl(?string $appLockerApplicationControl): self
    {
        $this->appLockerApplicationControl = $appLockerApplicationControl;
        return $this;
    }

    public function getBitLockerDisableWarningForOtherDiskEncryption(): ?bool
    {
        return $this->bitLockerDisableWarningForOtherDiskEncryption;
    }

    public function setBitLockerDisableWarningForOtherDiskEncryption(?bool $bitLockerDisableWarningForOtherDiskEncryption): self
    {
        $this->bitLockerDisableWarningForOtherDiskEncryption = $bitLockerDisableWarningForOtherDiskEncryption;
        return $this;
    }

    public function getBitLockerEnableStorageCardEncryptionOnMobile(): ?bool
    {
        return $this->bitLockerEnableStorageCardEncryptionOnMobile;
    }

    public function setBitLockerEnableStorageCardEncryptionOnMobile(?bool $bitLockerEnableStorageCardEncryptionOnMobile): self
    {
        $this->bitLockerEnableStorageCardEncryptionOnMobile = $bitLockerEnableStorageCardEncryptionOnMobile;
        return $this;
    }

    public function getBitLockerEncryptDevice(): ?bool
    {
        return $this->bitLockerEncryptDevice;
    }

    public function setBitLockerEncryptDevice(?bool $bitLockerEncryptDevice): self
    {
        $this->bitLockerEncryptDevice = $bitLockerEncryptDevice;
        return $this;
    }

    public function getBitLockerRemovableDrivePolicy(): ?string
    {
        return $this->bitLockerRemovableDrivePolicy;
    }

    public function setBitLockerRemovableDrivePolicy(?string $bitLockerRemovableDrivePolicy): self
    {
        $this->bitLockerRemovableDrivePolicy = $bitLockerRemovableDrivePolicy;
        return $this;
    }

    public function getDefenderAdditionalGuardedFolders(): ?string
    {
        return $this->defenderAdditionalGuardedFolders;
    }

    public function setDefenderAdditionalGuardedFolders(?string $defenderAdditionalGuardedFolders): self
    {
        $this->defenderAdditionalGuardedFolders = $defenderAdditionalGuardedFolders;
        return $this;
    }

    public function getDefenderAttackSurfaceReductionExcludedPaths(): ?string
    {
        return $this->defenderAttackSurfaceReductionExcludedPaths;
    }

    public function setDefenderAttackSurfaceReductionExcludedPaths(?string $defenderAttackSurfaceReductionExcludedPaths): self
    {
        $this->defenderAttackSurfaceReductionExcludedPaths = $defenderAttackSurfaceReductionExcludedPaths;
        return $this;
    }

    public function getDefenderExploitProtectionXml(): ?string
    {
        return $this->defenderExploitProtectionXml;
    }

    public function setDefenderExploitProtectionXml(?string $defenderExploitProtectionXml): self
    {
        $this->defenderExploitProtectionXml = $defenderExploitProtectionXml;
        return $this;
    }

    public function getDefenderExploitProtectionXmlFileName(): ?string
    {
        return $this->defenderExploitProtectionXmlFileName;
    }

    public function setDefenderExploitProtectionXmlFileName(?string $defenderExploitProtectionXmlFileName): self
    {
        $this->defenderExploitProtectionXmlFileName = $defenderExploitProtectionXmlFileName;
        return $this;
    }

    public function getDefenderGuardedFoldersAllowedAppPaths(): ?string
    {
        return $this->defenderGuardedFoldersAllowedAppPaths;
    }

    public function setDefenderGuardedFoldersAllowedAppPaths(?string $defenderGuardedFoldersAllowedAppPaths): self
    {
        $this->defenderGuardedFoldersAllowedAppPaths = $defenderGuardedFoldersAllowedAppPaths;
        return $this;
    }

    public function getDefenderSecurityCenterBlockExploitProtectionOverride(): ?bool
    {
        return $this->defenderSecurityCenterBlockExploitProtectionOverride;
    }

    public function setDefenderSecurityCenterBlockExploitProtectionOverride(?bool $defenderSecurityCenterBlockExploitProtectionOverride): self
    {
        $this->defenderSecurityCenterBlockExploitProtectionOverride = $defenderSecurityCenterBlockExploitProtectionOverride;
        return $this;
    }

    public function getFirewallBlockStatefulFTP(): ?bool
    {
        return $this->firewallBlockStatefulFTP;
    }

    public function setFirewallBlockStatefulFTP(?bool $firewallBlockStatefulFTP): self
    {
        $this->firewallBlockStatefulFTP = $firewallBlockStatefulFTP;
        return $this;
    }

    public function getFirewallCertificateRevocationListCheckMethod(): ?string
    {
        return $this->firewallCertificateRevocationListCheckMethod;
    }

    public function setFirewallCertificateRevocationListCheckMethod(?string $firewallCertificateRevocationListCheckMethod): self
    {
        $this->firewallCertificateRevocationListCheckMethod = $firewallCertificateRevocationListCheckMethod;
        return $this;
    }

    public function getFirewallIdleTimeoutForSecurityAssociationInSeconds(): ?float
    {
        return $this->firewallIdleTimeoutForSecurityAssociationInSeconds;
    }

    public function setFirewallIdleTimeoutForSecurityAssociationInSeconds(?float $firewallIdleTimeoutForSecurityAssociationInSeconds): self
    {
        $this->firewallIdleTimeoutForSecurityAssociationInSeconds = $firewallIdleTimeoutForSecurityAssociationInSeconds;
        return $this;
    }

    public function getFirewallIPSecExemptionsAllowDHCP(): ?bool
    {
        return $this->firewallIPSecExemptionsAllowDHCP;
    }

    public function setFirewallIPSecExemptionsAllowDHCP(?bool $firewallIPSecExemptionsAllowDHCP): self
    {
        $this->firewallIPSecExemptionsAllowDHCP = $firewallIPSecExemptionsAllowDHCP;
        return $this;
    }

    public function getFirewallIPSecExemptionsAllowICMP(): ?bool
    {
        return $this->firewallIPSecExemptionsAllowICMP;
    }

    public function setFirewallIPSecExemptionsAllowICMP(?bool $firewallIPSecExemptionsAllowICMP): self
    {
        $this->firewallIPSecExemptionsAllowICMP = $firewallIPSecExemptionsAllowICMP;
        return $this;
    }

    public function getFirewallIPSecExemptionsAllowNeighborDiscovery(): ?bool
    {
        return $this->firewallIPSecExemptionsAllowNeighborDiscovery;
    }

    public function setFirewallIPSecExemptionsAllowNeighborDiscovery(?bool $firewallIPSecExemptionsAllowNeighborDiscovery): self
    {
        $this->firewallIPSecExemptionsAllowNeighborDiscovery = $firewallIPSecExemptionsAllowNeighborDiscovery;
        return $this;
    }

    public function getFirewallIPSecExemptionsAllowRouterDiscovery(): ?bool
    {
        return $this->firewallIPSecExemptionsAllowRouterDiscovery;
    }

    public function setFirewallIPSecExemptionsAllowRouterDiscovery(?bool $firewallIPSecExemptionsAllowRouterDiscovery): self
    {
        $this->firewallIPSecExemptionsAllowRouterDiscovery = $firewallIPSecExemptionsAllowRouterDiscovery;
        return $this;
    }

    public function getFirewallMergeKeyingModuleSettings(): ?bool
    {
        return $this->firewallMergeKeyingModuleSettings;
    }

    public function setFirewallMergeKeyingModuleSettings(?bool $firewallMergeKeyingModuleSettings): self
    {
        $this->firewallMergeKeyingModuleSettings = $firewallMergeKeyingModuleSettings;
        return $this;
    }

    public function getFirewallPacketQueueingMethod(): ?string
    {
        return $this->firewallPacketQueueingMethod;
    }

    public function setFirewallPacketQueueingMethod(?string $firewallPacketQueueingMethod): self
    {
        $this->firewallPacketQueueingMethod = $firewallPacketQueueingMethod;
        return $this;
    }

    public function getFirewallPreSharedKeyEncodingMethod(): ?string
    {
        return $this->firewallPreSharedKeyEncodingMethod;
    }

    public function setFirewallPreSharedKeyEncodingMethod(?string $firewallPreSharedKeyEncodingMethod): self
    {
        $this->firewallPreSharedKeyEncodingMethod = $firewallPreSharedKeyEncodingMethod;
        return $this;
    }

    public function getFirewallProfileDomain(): ?string
    {
        return $this->firewallProfileDomain;
    }

    public function setFirewallProfileDomain(?string $firewallProfileDomain): self
    {
        $this->firewallProfileDomain = $firewallProfileDomain;
        return $this;
    }

    public function getFirewallProfilePrivate(): ?string
    {
        return $this->firewallProfilePrivate;
    }

    public function setFirewallProfilePrivate(?string $firewallProfilePrivate): self
    {
        $this->firewallProfilePrivate = $firewallProfilePrivate;
        return $this;
    }

    public function getFirewallProfilePublic(): ?string
    {
        return $this->firewallProfilePublic;
    }

    public function setFirewallProfilePublic(?string $firewallProfilePublic): self
    {
        $this->firewallProfilePublic = $firewallProfilePublic;
        return $this;
    }

    public function getSmartScreenBlockOverrideForFiles(): ?bool
    {
        return $this->smartScreenBlockOverrideForFiles;
    }

    public function setSmartScreenBlockOverrideForFiles(?bool $smartScreenBlockOverrideForFiles): self
    {
        $this->smartScreenBlockOverrideForFiles = $smartScreenBlockOverrideForFiles;
        return $this;
    }

    public function getSmartScreenEnableInShell(): ?string
    {
        return $this->smartScreenEnableInShell;
    }

    public function setSmartScreenEnableInShell(?string $smartScreenEnableInShell): self
    {
        $this->smartScreenEnableInShell = $smartScreenEnableInShell;
        return $this;
    }

}
