<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceHealthAttestationState resources
 *
 * Available select fields:
 * - attestationIdentityKey
 * - bitLockerStatus
 * - bootAppSecurityVersion
 * - bootDebugging
 * - bootManagerSecurityVersion
 * - bootManagerVersion
 * - bootRevisionListInfo
 * - codeIntegrity
 * - codeIntegrityCheckVersion
 * - codeIntegrityPolicy
 * - contentNamespaceUrl
 * - contentVersion
 * - dataExcutionPolicy
 * - deviceHealthAttestationStatus
 * - earlyLaunchAntiMalwareDriverProtection
 * - healthAttestationSupportedStatus
 * - healthStatusMismatchInfo
 * - issuedDateTime
 * - lastUpdateDateTime
 * - operatingSystemKernelDebugging
 * - operatingSystemRevListInfo
 * - pcr0
 * - pcrHashAlgorithm
 * - resetCount
 * - restartCount
 * - safeMode
 * - secureBoot
 * - secureBootConfigurationPolicyFingerPrint
 * - testSigning
 * - tpmVersion
 * - virtualSecureMode
 * - windowsPE
 */
class DeviceHealthAttestationStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceHealthAttestationState
     */
    public const FIELD_ATTESTATION_IDENTITY_KEY = 'attestationIdentityKey';
    public const FIELD_BIT_LOCKER_STATUS = 'bitLockerStatus';
    public const FIELD_BOOT_APP_SECURITY_VERSION = 'bootAppSecurityVersion';
    public const FIELD_BOOT_DEBUGGING = 'bootDebugging';
    public const FIELD_BOOT_MANAGER_SECURITY_VERSION = 'bootManagerSecurityVersion';
    public const FIELD_BOOT_MANAGER_VERSION = 'bootManagerVersion';
    public const FIELD_BOOT_REVISION_LIST_INFO = 'bootRevisionListInfo';
    public const FIELD_CODE_INTEGRITY = 'codeIntegrity';
    public const FIELD_CODE_INTEGRITY_CHECK_VERSION = 'codeIntegrityCheckVersion';
    public const FIELD_CODE_INTEGRITY_POLICY = 'codeIntegrityPolicy';
    public const FIELD_CONTENT_NAMESPACE_URL = 'contentNamespaceUrl';
    public const FIELD_CONTENT_VERSION = 'contentVersion';
    public const FIELD_DATA_EXCUTION_POLICY = 'dataExcutionPolicy';
    public const FIELD_DEVICE_HEALTH_ATTESTATION_STATUS = 'deviceHealthAttestationStatus';
    public const FIELD_EARLY_LAUNCH_ANTI_MALWARE_DRIVER_PROTECTION = 'earlyLaunchAntiMalwareDriverProtection';
    public const FIELD_HEALTH_ATTESTATION_SUPPORTED_STATUS = 'healthAttestationSupportedStatus';
    public const FIELD_HEALTH_STATUS_MISMATCH_INFO = 'healthStatusMismatchInfo';
    public const FIELD_ISSUED_DATE_TIME = 'issuedDateTime';
    public const FIELD_LAST_UPDATE_DATE_TIME = 'lastUpdateDateTime';
    public const FIELD_OPERATING_SYSTEM_KERNEL_DEBUGGING = 'operatingSystemKernelDebugging';
    public const FIELD_OPERATING_SYSTEM_REV_LIST_INFO = 'operatingSystemRevListInfo';
    public const FIELD_PCR0 = 'pcr0';
    public const FIELD_PCR_HASH_ALGORITHM = 'pcrHashAlgorithm';
    public const FIELD_RESET_COUNT = 'resetCount';
    public const FIELD_RESTART_COUNT = 'restartCount';
    public const FIELD_SAFE_MODE = 'safeMode';
    public const FIELD_SECURE_BOOT = 'secureBoot';
    public const FIELD_SECURE_BOOT_CONFIGURATION_POLICY_FINGER_PRINT = 'secureBootConfigurationPolicyFingerPrint';
    public const FIELD_TEST_SIGNING = 'testSigning';
    public const FIELD_TPM_VERSION = 'tpmVersion';
    public const FIELD_VIRTUAL_SECURE_MODE = 'virtualSecureMode';
    public const FIELD_WINDOWS_PE = 'windowsPE';

    /**
     * Select specific DeviceHealthAttestationState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
