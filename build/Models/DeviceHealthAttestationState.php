<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceHealthAttestationState
 */
class DeviceHealthAttestationState
{
    /** TWhen an Attestation Identity Key (AIK) is present on a device, it indicates that the device has an endorsement key (EK) certificate. */
    public ?string $attestationIdentityKey = null;

    /** On or Off of BitLocker Drive Encryption */
    public ?string $bitLockerStatus = null;

    /** The security version number of the Boot Application */
    public ?string $bootAppSecurityVersion = null;

    /** When bootDebugging is enabled, the device is used in development and testing */
    public ?string $bootDebugging = null;

    /** The security version number of the Boot Application */
    public ?string $bootManagerSecurityVersion = null;

    /** The version of the Boot Manager */
    public ?string $bootManagerVersion = null;

    /** The Boot Revision List that was loaded during initial boot on the attested device */
    public ?string $bootRevisionListInfo = null;

    /** When code integrity is enabled, code execution is restricted to integrity verified code */
    public ?string $codeIntegrity = null;

    /** The version of the Boot Manager */
    public ?string $codeIntegrityCheckVersion = null;

    /** The Code Integrity policy that is controlling the security of the boot environment */
    public ?string $codeIntegrityPolicy = null;

    /** The DHA report version. (Namespace version) */
    public ?string $contentNamespaceUrl = null;

    /** The HealthAttestation state schema version */
    public ?string $contentVersion = null;

    /** DEP Policy defines a set of hardware and software technologies that perform additional checks on memory */
    public ?string $dataExcutionPolicy = null;

    /** The DHA report version. (Namespace version) */
    public ?string $deviceHealthAttestationStatus = null;

    /** ELAM provides protection for the computers in your network when they start up */
    public ?string $earlyLaunchAntiMalwareDriverProtection = null;

    /** This attribute indicates if DHA is supported for the device */
    public ?string $healthAttestationSupportedStatus = null;

    /** This attribute appears if DHA-Service detects an integrity issue */
    public ?string $healthStatusMismatchInfo = null;

    /** The DateTime when device was evaluated or issued to MDM */
    public ?\DateTimeInterface $issuedDateTime = null;

    /** The Timestamp of the last update. */
    public ?string $lastUpdateDateTime = null;

    /** When operatingSystemKernelDebugging is enabled, the device is used in development and testing */
    public ?string $operatingSystemKernelDebugging = null;

    /** The Operating System Revision List that was loaded during initial boot on the attested device */
    public ?string $operatingSystemRevListInfo = null;

    /** The measurement that is captured in PCR[0] */
    public ?string $pcr0 = null;

    /** Informational attribute that identifies the HASH algorithm that was used by TPM */
    public ?string $pcrHashAlgorithm = null;

    /** The number of times a PC device has hibernated or resumed */
    public ?float $resetCount = null;

    /** The number of times a PC device has rebooted */
    public ?float $restartCount = null;

    /** Safe mode is a troubleshooting option for Windows that starts your computer in a limited state */
    public ?string $safeMode = null;

    /** When Secure Boot is enabled, the core components must have the correct cryptographic signatures */
    public ?string $secureBoot = null;

    /** Fingerprint of the Custom Secure Boot Configuration Policy */
    public ?string $secureBootConfigurationPolicyFingerPrint = null;

    /** When test signing is allowed, the device does not enforce signature validation during boot */
    public ?string $testSigning = null;

    /** The security version number of the Boot Application */
    public ?string $tpmVersion = null;

    /** VSM is a container that protects high value assets from a compromised kernel */
    public ?string $virtualSecureMode = null;

    /** Operating system running with limited services that is used to prepare a computer for Windows */
    public ?string $windowsPE = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['attestationIdentityKey'])) {
            $this->attestationIdentityKey = $data['attestationIdentityKey'];
        }
        if (isset($data['bitLockerStatus'])) {
            $this->bitLockerStatus = $data['bitLockerStatus'];
        }
        if (isset($data['bootAppSecurityVersion'])) {
            $this->bootAppSecurityVersion = $data['bootAppSecurityVersion'];
        }
        if (isset($data['bootDebugging'])) {
            $this->bootDebugging = $data['bootDebugging'];
        }
        if (isset($data['bootManagerSecurityVersion'])) {
            $this->bootManagerSecurityVersion = $data['bootManagerSecurityVersion'];
        }
        if (isset($data['bootManagerVersion'])) {
            $this->bootManagerVersion = $data['bootManagerVersion'];
        }
        if (isset($data['bootRevisionListInfo'])) {
            $this->bootRevisionListInfo = $data['bootRevisionListInfo'];
        }
        if (isset($data['codeIntegrity'])) {
            $this->codeIntegrity = $data['codeIntegrity'];
        }
        if (isset($data['codeIntegrityCheckVersion'])) {
            $this->codeIntegrityCheckVersion = $data['codeIntegrityCheckVersion'];
        }
        if (isset($data['codeIntegrityPolicy'])) {
            $this->codeIntegrityPolicy = $data['codeIntegrityPolicy'];
        }
        if (isset($data['contentNamespaceUrl'])) {
            $this->contentNamespaceUrl = $data['contentNamespaceUrl'];
        }
        if (isset($data['contentVersion'])) {
            $this->contentVersion = $data['contentVersion'];
        }
        if (isset($data['dataExcutionPolicy'])) {
            $this->dataExcutionPolicy = $data['dataExcutionPolicy'];
        }
        if (isset($data['deviceHealthAttestationStatus'])) {
            $this->deviceHealthAttestationStatus = $data['deviceHealthAttestationStatus'];
        }
        if (isset($data['earlyLaunchAntiMalwareDriverProtection'])) {
            $this->earlyLaunchAntiMalwareDriverProtection = $data['earlyLaunchAntiMalwareDriverProtection'];
        }
        if (isset($data['healthAttestationSupportedStatus'])) {
            $this->healthAttestationSupportedStatus = $data['healthAttestationSupportedStatus'];
        }
        if (isset($data['healthStatusMismatchInfo'])) {
            $this->healthStatusMismatchInfo = $data['healthStatusMismatchInfo'];
        }
        if (isset($data['issuedDateTime'])) {
            $this->issuedDateTime = $data['issuedDateTime'];
        }
        if (isset($data['lastUpdateDateTime'])) {
            $this->lastUpdateDateTime = $data['lastUpdateDateTime'];
        }
        if (isset($data['operatingSystemKernelDebugging'])) {
            $this->operatingSystemKernelDebugging = $data['operatingSystemKernelDebugging'];
        }
        if (isset($data['operatingSystemRevListInfo'])) {
            $this->operatingSystemRevListInfo = $data['operatingSystemRevListInfo'];
        }
        if (isset($data['pcr0'])) {
            $this->pcr0 = $data['pcr0'];
        }
        if (isset($data['pcrHashAlgorithm'])) {
            $this->pcrHashAlgorithm = $data['pcrHashAlgorithm'];
        }
        if (isset($data['resetCount'])) {
            $this->resetCount = $data['resetCount'];
        }
        if (isset($data['restartCount'])) {
            $this->restartCount = $data['restartCount'];
        }
        if (isset($data['safeMode'])) {
            $this->safeMode = $data['safeMode'];
        }
        if (isset($data['secureBoot'])) {
            $this->secureBoot = $data['secureBoot'];
        }
        if (isset($data['secureBootConfigurationPolicyFingerPrint'])) {
            $this->secureBootConfigurationPolicyFingerPrint = $data['secureBootConfigurationPolicyFingerPrint'];
        }
        if (isset($data['testSigning'])) {
            $this->testSigning = $data['testSigning'];
        }
        if (isset($data['tpmVersion'])) {
            $this->tpmVersion = $data['tpmVersion'];
        }
        if (isset($data['virtualSecureMode'])) {
            $this->virtualSecureMode = $data['virtualSecureMode'];
        }
        if (isset($data['windowsPE'])) {
            $this->windowsPE = $data['windowsPE'];
        }
    }
}
