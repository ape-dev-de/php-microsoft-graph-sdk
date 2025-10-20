<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceHealthAttestationState
 */
class DeviceHealthAttestationState
{
    /**
     * TWhen an Attestation Identity Key (AIK) is present on a device, it indicates that the device has an endorsement key (EK) certificate.
     */
    private ?string $attestationIdentityKey;

    /**
     * On or Off of BitLocker Drive Encryption
     */
    private ?string $bitLockerStatus;

    /**
     * The security version number of the Boot Application
     */
    private ?string $bootAppSecurityVersion;

    /**
     * When bootDebugging is enabled, the device is used in development and testing
     */
    private ?string $bootDebugging;

    /**
     * The security version number of the Boot Application
     */
    private ?string $bootManagerSecurityVersion;

    /**
     * The version of the Boot Manager
     */
    private ?string $bootManagerVersion;

    /**
     * The Boot Revision List that was loaded during initial boot on the attested device
     */
    private ?string $bootRevisionListInfo;

    /**
     * When code integrity is enabled, code execution is restricted to integrity verified code
     */
    private ?string $codeIntegrity;

    /**
     * The version of the Boot Manager
     */
    private ?string $codeIntegrityCheckVersion;

    /**
     * The Code Integrity policy that is controlling the security of the boot environment
     */
    private ?string $codeIntegrityPolicy;

    /**
     * The DHA report version. (Namespace version)
     */
    private ?string $contentNamespaceUrl;

    /**
     * The HealthAttestation state schema version
     */
    private ?string $contentVersion;

    /**
     * DEP Policy defines a set of hardware and software technologies that perform additional checks on memory
     */
    private ?string $dataExcutionPolicy;

    /**
     * The DHA report version. (Namespace version)
     */
    private ?string $deviceHealthAttestationStatus;

    /**
     * ELAM provides protection for the computers in your network when they start up
     */
    private ?string $earlyLaunchAntiMalwareDriverProtection;

    /**
     * This attribute indicates if DHA is supported for the device
     */
    private ?string $healthAttestationSupportedStatus;

    /**
     * This attribute appears if DHA-Service detects an integrity issue
     */
    private ?string $healthStatusMismatchInfo;

    /**
     * The DateTime when device was evaluated or issued to MDM
     */
    private ?\DateTimeInterface $issuedDateTime;

    /**
     * The Timestamp of the last update.
     */
    private ?string $lastUpdateDateTime;

    /**
     * When operatingSystemKernelDebugging is enabled, the device is used in development and testing
     */
    private ?string $operatingSystemKernelDebugging;

    /**
     * The Operating System Revision List that was loaded during initial boot on the attested device
     */
    private ?string $operatingSystemRevListInfo;

    /**
     * The measurement that is captured in PCR[0]
     */
    private ?string $pcr0;

    /**
     * Informational attribute that identifies the HASH algorithm that was used by TPM
     */
    private ?string $pcrHashAlgorithm;

    /**
     * The number of times a PC device has hibernated or resumed
     */
    private ?float $resetCount;

    /**
     * The number of times a PC device has rebooted
     */
    private ?float $restartCount;

    /**
     * Safe mode is a troubleshooting option for Windows that starts your computer in a limited state
     */
    private ?string $safeMode;

    /**
     * When Secure Boot is enabled, the core components must have the correct cryptographic signatures
     */
    private ?string $secureBoot;

    /**
     * Fingerprint of the Custom Secure Boot Configuration Policy
     */
    private ?string $secureBootConfigurationPolicyFingerPrint;

    /**
     * When test signing is allowed, the device does not enforce signature validation during boot
     */
    private ?string $testSigning;

    /**
     * The security version number of the Boot Application
     */
    private ?string $tpmVersion;

    /**
     * VSM is a container that protects high value assets from a compromised kernel
     */
    private ?string $virtualSecureMode;

    /**
     * Operating system running with limited services that is used to prepare a computer for Windows
     */
    private ?string $windowsPE;

    public function getAttestationIdentityKey(): ?string
    {
        return $this->attestationIdentityKey;
    }

    public function setAttestationIdentityKey(?string $attestationIdentityKey): self
    {
        $this->attestationIdentityKey = $attestationIdentityKey;
        return $this;
    }

    public function getBitLockerStatus(): ?string
    {
        return $this->bitLockerStatus;
    }

    public function setBitLockerStatus(?string $bitLockerStatus): self
    {
        $this->bitLockerStatus = $bitLockerStatus;
        return $this;
    }

    public function getBootAppSecurityVersion(): ?string
    {
        return $this->bootAppSecurityVersion;
    }

    public function setBootAppSecurityVersion(?string $bootAppSecurityVersion): self
    {
        $this->bootAppSecurityVersion = $bootAppSecurityVersion;
        return $this;
    }

    public function getBootDebugging(): ?string
    {
        return $this->bootDebugging;
    }

    public function setBootDebugging(?string $bootDebugging): self
    {
        $this->bootDebugging = $bootDebugging;
        return $this;
    }

    public function getBootManagerSecurityVersion(): ?string
    {
        return $this->bootManagerSecurityVersion;
    }

    public function setBootManagerSecurityVersion(?string $bootManagerSecurityVersion): self
    {
        $this->bootManagerSecurityVersion = $bootManagerSecurityVersion;
        return $this;
    }

    public function getBootManagerVersion(): ?string
    {
        return $this->bootManagerVersion;
    }

    public function setBootManagerVersion(?string $bootManagerVersion): self
    {
        $this->bootManagerVersion = $bootManagerVersion;
        return $this;
    }

    public function getBootRevisionListInfo(): ?string
    {
        return $this->bootRevisionListInfo;
    }

    public function setBootRevisionListInfo(?string $bootRevisionListInfo): self
    {
        $this->bootRevisionListInfo = $bootRevisionListInfo;
        return $this;
    }

    public function getCodeIntegrity(): ?string
    {
        return $this->codeIntegrity;
    }

    public function setCodeIntegrity(?string $codeIntegrity): self
    {
        $this->codeIntegrity = $codeIntegrity;
        return $this;
    }

    public function getCodeIntegrityCheckVersion(): ?string
    {
        return $this->codeIntegrityCheckVersion;
    }

    public function setCodeIntegrityCheckVersion(?string $codeIntegrityCheckVersion): self
    {
        $this->codeIntegrityCheckVersion = $codeIntegrityCheckVersion;
        return $this;
    }

    public function getCodeIntegrityPolicy(): ?string
    {
        return $this->codeIntegrityPolicy;
    }

    public function setCodeIntegrityPolicy(?string $codeIntegrityPolicy): self
    {
        $this->codeIntegrityPolicy = $codeIntegrityPolicy;
        return $this;
    }

    public function getContentNamespaceUrl(): ?string
    {
        return $this->contentNamespaceUrl;
    }

    public function setContentNamespaceUrl(?string $contentNamespaceUrl): self
    {
        $this->contentNamespaceUrl = $contentNamespaceUrl;
        return $this;
    }

    public function getContentVersion(): ?string
    {
        return $this->contentVersion;
    }

    public function setContentVersion(?string $contentVersion): self
    {
        $this->contentVersion = $contentVersion;
        return $this;
    }

    public function getDataExcutionPolicy(): ?string
    {
        return $this->dataExcutionPolicy;
    }

    public function setDataExcutionPolicy(?string $dataExcutionPolicy): self
    {
        $this->dataExcutionPolicy = $dataExcutionPolicy;
        return $this;
    }

    public function getDeviceHealthAttestationStatus(): ?string
    {
        return $this->deviceHealthAttestationStatus;
    }

    public function setDeviceHealthAttestationStatus(?string $deviceHealthAttestationStatus): self
    {
        $this->deviceHealthAttestationStatus = $deviceHealthAttestationStatus;
        return $this;
    }

    public function getEarlyLaunchAntiMalwareDriverProtection(): ?string
    {
        return $this->earlyLaunchAntiMalwareDriverProtection;
    }

    public function setEarlyLaunchAntiMalwareDriverProtection(?string $earlyLaunchAntiMalwareDriverProtection): self
    {
        $this->earlyLaunchAntiMalwareDriverProtection = $earlyLaunchAntiMalwareDriverProtection;
        return $this;
    }

    public function getHealthAttestationSupportedStatus(): ?string
    {
        return $this->healthAttestationSupportedStatus;
    }

    public function setHealthAttestationSupportedStatus(?string $healthAttestationSupportedStatus): self
    {
        $this->healthAttestationSupportedStatus = $healthAttestationSupportedStatus;
        return $this;
    }

    public function getHealthStatusMismatchInfo(): ?string
    {
        return $this->healthStatusMismatchInfo;
    }

    public function setHealthStatusMismatchInfo(?string $healthStatusMismatchInfo): self
    {
        $this->healthStatusMismatchInfo = $healthStatusMismatchInfo;
        return $this;
    }

    public function getIssuedDateTime(): ?\DateTimeInterface
    {
        return $this->issuedDateTime;
    }

    public function setIssuedDateTime(?\DateTimeInterface $issuedDateTime): self
    {
        $this->issuedDateTime = $issuedDateTime;
        return $this;
    }

    public function getLastUpdateDateTime(): ?string
    {
        return $this->lastUpdateDateTime;
    }

    public function setLastUpdateDateTime(?string $lastUpdateDateTime): self
    {
        $this->lastUpdateDateTime = $lastUpdateDateTime;
        return $this;
    }

    public function getOperatingSystemKernelDebugging(): ?string
    {
        return $this->operatingSystemKernelDebugging;
    }

    public function setOperatingSystemKernelDebugging(?string $operatingSystemKernelDebugging): self
    {
        $this->operatingSystemKernelDebugging = $operatingSystemKernelDebugging;
        return $this;
    }

    public function getOperatingSystemRevListInfo(): ?string
    {
        return $this->operatingSystemRevListInfo;
    }

    public function setOperatingSystemRevListInfo(?string $operatingSystemRevListInfo): self
    {
        $this->operatingSystemRevListInfo = $operatingSystemRevListInfo;
        return $this;
    }

    public function getPcr0(): ?string
    {
        return $this->pcr0;
    }

    public function setPcr0(?string $pcr0): self
    {
        $this->pcr0 = $pcr0;
        return $this;
    }

    public function getPcrHashAlgorithm(): ?string
    {
        return $this->pcrHashAlgorithm;
    }

    public function setPcrHashAlgorithm(?string $pcrHashAlgorithm): self
    {
        $this->pcrHashAlgorithm = $pcrHashAlgorithm;
        return $this;
    }

    public function getResetCount(): ?float
    {
        return $this->resetCount;
    }

    public function setResetCount(?float $resetCount): self
    {
        $this->resetCount = $resetCount;
        return $this;
    }

    public function getRestartCount(): ?float
    {
        return $this->restartCount;
    }

    public function setRestartCount(?float $restartCount): self
    {
        $this->restartCount = $restartCount;
        return $this;
    }

    public function getSafeMode(): ?string
    {
        return $this->safeMode;
    }

    public function setSafeMode(?string $safeMode): self
    {
        $this->safeMode = $safeMode;
        return $this;
    }

    public function getSecureBoot(): ?string
    {
        return $this->secureBoot;
    }

    public function setSecureBoot(?string $secureBoot): self
    {
        $this->secureBoot = $secureBoot;
        return $this;
    }

    public function getSecureBootConfigurationPolicyFingerPrint(): ?string
    {
        return $this->secureBootConfigurationPolicyFingerPrint;
    }

    public function setSecureBootConfigurationPolicyFingerPrint(?string $secureBootConfigurationPolicyFingerPrint): self
    {
        $this->secureBootConfigurationPolicyFingerPrint = $secureBootConfigurationPolicyFingerPrint;
        return $this;
    }

    public function getTestSigning(): ?string
    {
        return $this->testSigning;
    }

    public function setTestSigning(?string $testSigning): self
    {
        $this->testSigning = $testSigning;
        return $this;
    }

    public function getTpmVersion(): ?string
    {
        return $this->tpmVersion;
    }

    public function setTpmVersion(?string $tpmVersion): self
    {
        $this->tpmVersion = $tpmVersion;
        return $this;
    }

    public function getVirtualSecureMode(): ?string
    {
        return $this->virtualSecureMode;
    }

    public function setVirtualSecureMode(?string $virtualSecureMode): self
    {
        $this->virtualSecureMode = $virtualSecureMode;
        return $this;
    }

    public function getWindowsPE(): ?string
    {
        return $this->windowsPE;
    }

    public function setWindowsPE(?string $windowsPE): self
    {
        $this->windowsPE = $windowsPE;
        return $this;
    }

}
