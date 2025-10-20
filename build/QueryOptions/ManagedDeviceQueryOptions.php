<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDevice resources
 *
 * Available select fields:
 * - activationLockBypassCode
 * - androidSecurityPatchLevel
 * - azureADDeviceId
 * - azureADRegistered
 * - complianceGracePeriodExpirationDateTime
 * - complianceState
 * - configurationManagerClientEnabledFeatures
 * - deviceActionResults
 * - deviceCategoryDisplayName
 * - deviceEnrollmentType
 * - deviceHealthAttestationState
 * - deviceName
 * - deviceRegistrationState
 * - easActivated
 * - easActivationDateTime
 * - easDeviceId
 * - emailAddress
 * - enrolledDateTime
 * - enrollmentProfileName
 * - ethernetMacAddress
 * - exchangeAccessState
 * - exchangeAccessStateReason
 * - exchangeLastSuccessfulSyncDateTime
 * - freeStorageSpaceInBytes
 * - iccid
 * - imei
 * - isEncrypted
 * - isSupervised
 * - jailBroken
 * - lastSyncDateTime
 * - managedDeviceName
 * - managedDeviceOwnerType
 * - managementAgent
 * - managementCertificateExpirationDate
 * - manufacturer
 * - meid
 * - model
 * - notes
 * - operatingSystem
 * - osVersion
 * - partnerReportedThreatState
 * - phoneNumber
 * - physicalMemoryInBytes
 * - remoteAssistanceSessionErrorDetails
 * - remoteAssistanceSessionUrl
 * - requireUserEnrollmentApproval
 * - serialNumber
 * - subscriberCarrier
 * - totalStorageSpaceInBytes
 * - udid
 * - userDisplayName
 * - userId
 * - userPrincipalName
 * - wiFiMacAddress
 * - deviceCategory
 * - deviceCompliancePolicyStates
 * - deviceConfigurationStates
 * - logCollectionRequests
 * - users
 * - windowsProtectionState
 */
class ManagedDeviceQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVATION_LOCK_BYPASS_CODE = 'activationLockBypassCode';
    public const FIELD_ANDROID_SECURITY_PATCH_LEVEL = 'androidSecurityPatchLevel';
    public const FIELD_AZURE_ADDEVICE_ID = 'azureADDeviceId';
    public const FIELD_AZURE_ADREGISTERED = 'azureADRegistered';
    public const FIELD_COMPLIANCE_GRACE_PERIOD_EXPIRATION_DATE_TIME = 'complianceGracePeriodExpirationDateTime';
    public const FIELD_COMPLIANCE_STATE = 'complianceState';
    public const FIELD_CONFIGURATION_MANAGER_CLIENT_ENABLED_FEATURES = 'configurationManagerClientEnabledFeatures';
    public const FIELD_DEVICE_ACTION_RESULTS = 'deviceActionResults';
    public const FIELD_DEVICE_CATEGORY_DISPLAY_NAME = 'deviceCategoryDisplayName';
    public const FIELD_DEVICE_ENROLLMENT_TYPE = 'deviceEnrollmentType';
    public const FIELD_DEVICE_HEALTH_ATTESTATION_STATE = 'deviceHealthAttestationState';
    public const FIELD_DEVICE_NAME = 'deviceName';
    public const FIELD_DEVICE_REGISTRATION_STATE = 'deviceRegistrationState';
    public const FIELD_EAS_ACTIVATED = 'easActivated';
    public const FIELD_EAS_ACTIVATION_DATE_TIME = 'easActivationDateTime';
    public const FIELD_EAS_DEVICE_ID = 'easDeviceId';
    public const FIELD_EMAIL_ADDRESS = 'emailAddress';
    public const FIELD_ENROLLED_DATE_TIME = 'enrolledDateTime';
    public const FIELD_ENROLLMENT_PROFILE_NAME = 'enrollmentProfileName';
    public const FIELD_ETHERNET_MAC_ADDRESS = 'ethernetMacAddress';
    public const FIELD_EXCHANGE_ACCESS_STATE = 'exchangeAccessState';
    public const FIELD_EXCHANGE_ACCESS_STATE_REASON = 'exchangeAccessStateReason';
    public const FIELD_EXCHANGE_LAST_SUCCESSFUL_SYNC_DATE_TIME = 'exchangeLastSuccessfulSyncDateTime';
    public const FIELD_FREE_STORAGE_SPACE_IN_BYTES = 'freeStorageSpaceInBytes';
    public const FIELD_ICCID = 'iccid';
    public const FIELD_IMEI = 'imei';
    public const FIELD_IS_ENCRYPTED = 'isEncrypted';
    public const FIELD_IS_SUPERVISED = 'isSupervised';
    public const FIELD_JAIL_BROKEN = 'jailBroken';
    public const FIELD_LAST_SYNC_DATE_TIME = 'lastSyncDateTime';
    public const FIELD_MANAGED_DEVICE_NAME = 'managedDeviceName';
    public const FIELD_MANAGED_DEVICE_OWNER_TYPE = 'managedDeviceOwnerType';
    public const FIELD_MANAGEMENT_AGENT = 'managementAgent';
    public const FIELD_MANAGEMENT_CERTIFICATE_EXPIRATION_DATE = 'managementCertificateExpirationDate';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_MEID = 'meid';
    public const FIELD_MODEL = 'model';
    public const FIELD_NOTES = 'notes';
    public const FIELD_OPERATING_SYSTEM = 'operatingSystem';
    public const FIELD_OS_VERSION = 'osVersion';
    public const FIELD_PARTNER_REPORTED_THREAT_STATE = 'partnerReportedThreatState';
    public const FIELD_PHONE_NUMBER = 'phoneNumber';
    public const FIELD_PHYSICAL_MEMORY_IN_BYTES = 'physicalMemoryInBytes';
    public const FIELD_REMOTE_ASSISTANCE_SESSION_ERROR_DETAILS = 'remoteAssistanceSessionErrorDetails';
    public const FIELD_REMOTE_ASSISTANCE_SESSION_URL = 'remoteAssistanceSessionUrl';
    public const FIELD_REQUIRE_USER_ENROLLMENT_APPROVAL = 'requireUserEnrollmentApproval';
    public const FIELD_SERIAL_NUMBER = 'serialNumber';
    public const FIELD_SUBSCRIBER_CARRIER = 'subscriberCarrier';
    public const FIELD_TOTAL_STORAGE_SPACE_IN_BYTES = 'totalStorageSpaceInBytes';
    public const FIELD_UDID = 'udid';
    public const FIELD_USER_DISPLAY_NAME = 'userDisplayName';
    public const FIELD_USER_ID = 'userId';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';
    public const FIELD_WI_FI_MAC_ADDRESS = 'wiFiMacAddress';
    public const FIELD_DEVICE_CATEGORY = 'deviceCategory';
    public const FIELD_DEVICE_COMPLIANCE_POLICY_STATES = 'deviceCompliancePolicyStates';
    public const FIELD_DEVICE_CONFIGURATION_STATES = 'deviceConfigurationStates';
    public const FIELD_LOG_COLLECTION_REQUESTS = 'logCollectionRequests';
    public const FIELD_USERS = 'users';
    public const FIELD_WINDOWS_PROTECTION_STATE = 'windowsProtectionState';

    /**
     * Select specific ManagedDevice properties
     * 
     * @param array<string> $select Use ManagedDeviceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
