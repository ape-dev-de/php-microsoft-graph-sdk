<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceHealthAttestationState
 */
class DeviceHealthAttestationState
{
    public function __construct(
        /** TWhen an Attestation Identity Key (AIK) is present on a device, it indicates that the device has an endorsement key (EK) certificate. */
        public ?string $attestationIdentityKey = null,
        /** On or Off of BitLocker Drive Encryption */
        public ?string $bitLockerStatus = null,
        /** The security version number of the Boot Application */
        public ?string $bootAppSecurityVersion = null,
        /** When bootDebugging is enabled, the device is used in development and testing */
        public ?string $bootDebugging = null,
        /** The security version number of the Boot Application */
        public ?string $bootManagerSecurityVersion = null,
        /** The version of the Boot Manager */
        public ?string $bootManagerVersion = null,
        /** The Boot Revision List that was loaded during initial boot on the attested device */
        public ?string $bootRevisionListInfo = null,
        /** When code integrity is enabled, code execution is restricted to integrity verified code */
        public ?string $codeIntegrity = null,
        /** The version of the Boot Manager */
        public ?string $codeIntegrityCheckVersion = null,
        /** The Code Integrity policy that is controlling the security of the boot environment */
        public ?string $codeIntegrityPolicy = null,
        /** The DHA report version. (Namespace version) */
        public ?string $contentNamespaceUrl = null,
        /** The HealthAttestation state schema version */
        public ?string $contentVersion = null,
        /** DEP Policy defines a set of hardware and software technologies that perform additional checks on memory */
        public ?string $dataExcutionPolicy = null,
        /** The DHA report version. (Namespace version) */
        public ?string $deviceHealthAttestationStatus = null,
        /** ELAM provides protection for the computers in your network when they start up */
        public ?string $earlyLaunchAntiMalwareDriverProtection = null,
        /** This attribute indicates if DHA is supported for the device */
        public ?string $healthAttestationSupportedStatus = null,
        /** This attribute appears if DHA-Service detects an integrity issue */
        public ?string $healthStatusMismatchInfo = null,
        /** The DateTime when device was evaluated or issued to MDM */
        public ?\DateTimeInterface $issuedDateTime = null,
        /** The Timestamp of the last update. */
        public ?string $lastUpdateDateTime = null,
        /** When operatingSystemKernelDebugging is enabled, the device is used in development and testing */
        public ?string $operatingSystemKernelDebugging = null,
        /** The Operating System Revision List that was loaded during initial boot on the attested device */
        public ?string $operatingSystemRevListInfo = null,
        /** The measurement that is captured in PCR[0] */
        public ?string $pcr0 = null,
        /** Informational attribute that identifies the HASH algorithm that was used by TPM */
        public ?string $pcrHashAlgorithm = null,
        /** The number of times a PC device has hibernated or resumed */
        public ?float $resetCount = null,
        /** The number of times a PC device has rebooted */
        public ?float $restartCount = null,
        /** Safe mode is a troubleshooting option for Windows that starts your computer in a limited state */
        public ?string $safeMode = null,
        /** When Secure Boot is enabled, the core components must have the correct cryptographic signatures */
        public ?string $secureBoot = null,
        /** Fingerprint of the Custom Secure Boot Configuration Policy */
        public ?string $secureBootConfigurationPolicyFingerPrint = null,
        /** When test signing is allowed, the device does not enforce signature validation during boot */
        public ?string $testSigning = null,
        /** The security version number of the Boot Application */
        public ?string $tpmVersion = null,
        /** VSM is a container that protects high value assets from a compromised kernel */
        public ?string $virtualSecureMode = null,
        /** Operating system running with limited services that is used to prepare a computer for Windows */
        public ?string $windowsPE = null
    ) {}
}
