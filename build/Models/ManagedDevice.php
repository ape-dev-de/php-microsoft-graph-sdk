<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDevice
 */
class ManagedDevice
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The code that allows the Activation Lock on managed device to be bypassed. Default, is Null (Non-Default property) for this property when returned as part of managedDevice entity in LIST call. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only. */
        public ?string $activationLockBypassCode = null,
        /** Android security patch level. This property is read-only. */
        public ?string $androidSecurityPatchLevel = null,
        /** The unique identifier for the Azure Active Directory device. Read only. This property is read-only. */
        public ?string $azureADDeviceId = null,
        /** Whether the device is Azure Active Directory registered. This property is read-only. */
        public ?bool $azureADRegistered = null,
        /** The DateTime when device compliance grace period expires. This property is read-only. */
        public ?\DateTimeInterface $complianceGracePeriodExpirationDateTime = null,
        /**  */
        public ?string $complianceState = null,
        /** ConfigrMgr client enabled features. This property is read-only. */
        public ?string $configurationManagerClientEnabledFeatures = null,
        /** List of ComplexType deviceActionResult objects. This property is read-only. */
        public array $deviceActionResults = [],
        /** Device category display name. Default is an empty string. Supports $filter operator 'eq' and 'or'. This property is read-only. */
        public ?string $deviceCategoryDisplayName = null,
        /**  */
        public ?string $deviceEnrollmentType = null,
        /** The device health attestation state. This property is read-only. */
        public ?string $deviceHealthAttestationState = null,
        /** Name of the device. This property is read-only. */
        public ?string $deviceName = null,
        /**  */
        public ?string $deviceRegistrationState = null,
        /** Whether the device is Exchange ActiveSync activated. This property is read-only. */
        public ?bool $easActivated = null,
        /** Exchange ActivationSync activation time of the device. This property is read-only. */
        public ?\DateTimeInterface $easActivationDateTime = null,
        /** Exchange ActiveSync Id of the device. This property is read-only. */
        public ?string $easDeviceId = null,
        /** Email(s) for the user associated with the device. This property is read-only. */
        public ?string $emailAddress = null,
        /** Enrollment time of the device. Supports $filter operator 'lt' and 'gt'. This property is read-only. */
        public ?\DateTimeInterface $enrolledDateTime = null,
        /** Name of the enrollment profile assigned to the device. Default value is empty string, indicating no enrollment profile was assgined. This property is read-only. */
        public ?string $enrollmentProfileName = null,
        /** Indicates Ethernet MAC Address of the device. Default, is Null (Non-Default property) for this property when returned as part of managedDevice entity. Individual get call with select query options is needed to retrieve actual values. Example: deviceManagement/managedDevices({managedDeviceId})?$select=ethernetMacAddress Supports: $select. $Search is not supported. Read-only. This property is read-only. */
        public ?string $ethernetMacAddress = null,
        /**  */
        public ?string $exchangeAccessState = null,
        /**  */
        public ?string $exchangeAccessStateReason = null,
        /** Last time the device contacted Exchange. This property is read-only. */
        public ?\DateTimeInterface $exchangeLastSuccessfulSyncDateTime = null,
        /** Free Storage in Bytes. Default value is 0. Read-only. This property is read-only. */
        public ?float $freeStorageSpaceInBytes = null,
        /** Integrated Circuit Card Identifier, it is A SIM card's unique identification number. Default is an empty string. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only. */
        public ?string $iccid = null,
        /** IMEI. This property is read-only. */
        public ?string $imei = null,
        /** Device encryption status. This property is read-only. */
        public ?bool $isEncrypted = null,
        /** Device supervised status. This property is read-only. */
        public ?bool $isSupervised = null,
        /** Whether the device is jail broken or rooted. Default is an empty string. Supports $filter operator 'eq' and 'or'. This property is read-only. */
        public ?string $jailBroken = null,
        /** The date and time that the device last completed a successful sync with Intune. Supports $filter operator 'lt' and 'gt'. This property is read-only. */
        public ?\DateTimeInterface $lastSyncDateTime = null,
        /** Automatically generated name to identify a device. Can be overwritten to a user friendly name. */
        public ?string $managedDeviceName = null,
        /**  */
        public ?string $managedDeviceOwnerType = null,
        /**  */
        public ?string $managementAgent = null,
        /** Reports device management certificate expiration date. This property is read-only. */
        public ?\DateTimeInterface $managementCertificateExpirationDate = null,
        /** Manufacturer of the device. This property is read-only. */
        public ?string $manufacturer = null,
        /** MEID. This property is read-only. */
        public ?string $meid = null,
        /** Model of the device. This property is read-only. */
        public ?string $model = null,
        /** Notes on the device created by IT Admin. Default is null. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. */
        public ?string $notes = null,
        /** Operating system of the device. Windows, iOS, etc. This property is read-only. */
        public ?string $operatingSystem = null,
        /** Operating system version of the device. This property is read-only. */
        public ?string $osVersion = null,
        /**  */
        public ?string $partnerReportedThreatState = null,
        /** Phone number of the device. This property is read-only. */
        public ?string $phoneNumber = null,
        /** Total Memory in Bytes. Default is 0. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. Read-only. This property is read-only. */
        public ?float $physicalMemoryInBytes = null,
        /** An error string that identifies issues when creating Remote Assistance session objects. This property is read-only. */
        public ?string $remoteAssistanceSessionErrorDetails = null,
        /** Url that allows a Remote Assistance session to be established with the device. Default is an empty string. To retrieve actual values GET call needs to be made, with device id and included in select parameter. This property is read-only. */
        public ?string $remoteAssistanceSessionUrl = null,
        /** Reports if the managed iOS device is user approval enrollment. This property is read-only. */
        public ?bool $requireUserEnrollmentApproval = null,
        /** SerialNumber. This property is read-only. */
        public ?string $serialNumber = null,
        /** Subscriber Carrier. This property is read-only. */
        public ?string $subscriberCarrier = null,
        /** Total Storage in Bytes. This property is read-only. */
        public ?float $totalStorageSpaceInBytes = null,
        /** Unique Device Identifier for iOS and macOS devices. Default is an empty string. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only. */
        public ?string $udid = null,
        /** User display name. This property is read-only. */
        public ?string $userDisplayName = null,
        /** Unique Identifier for the user associated with the device. This property is read-only. */
        public ?string $userId = null,
        /** Device user principal name. This property is read-only. */
        public ?string $userPrincipalName = null,
        /** Wi-Fi MAC. This property is read-only. */
        public ?string $wiFiMacAddress = null,
        /** Device category */
        public ?string $deviceCategory = null,
        /** Device compliance policy states for this device. */
        public array $deviceCompliancePolicyStates = [],
        /** Device configuration states for this device. */
        public array $deviceConfigurationStates = [],
        /** List of log collection requests */
        public array $logCollectionRequests = [],
        /** The primary users associated with the managed device. */
        public array $users = [],
        /** The device protection status. This property is read-only. */
        public ?string $windowsProtectionState = null
    ) {}
}
