<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDevice
 */
class ManagedDevice
{
    /**
     * The code that allows the Activation Lock on managed device to be bypassed. Default, is Null (Non-Default property) for this property when returned as part of managedDevice entity in LIST call. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only.
     */
    private ?string $activationLockBypassCode;

    /**
     * Android security patch level. This property is read-only.
     */
    private ?string $androidSecurityPatchLevel;

    /**
     * The unique identifier for the Azure Active Directory device. Read only. This property is read-only.
     */
    private ?string $azureADDeviceId;

    /**
     * Whether the device is Azure Active Directory registered. This property is read-only.
     */
    private ?bool $azureADRegistered;

    /**
     * The DateTime when device compliance grace period expires. This property is read-only.
     */
    private ?\DateTimeInterface $complianceGracePeriodExpirationDateTime;

    /**
     */
    private ?string $complianceState;

    /**
     * ConfigrMgr client enabled features. This property is read-only.
     */
    private ?string $configurationManagerClientEnabledFeatures;

    /**
     * List of ComplexType deviceActionResult objects. This property is read-only.
     */
    private array $deviceActionResults = [];

    /**
     * Device category display name. Default is an empty string. Supports $filter operator 'eq' and 'or'. This property is read-only.
     */
    private ?string $deviceCategoryDisplayName;

    /**
     */
    private ?string $deviceEnrollmentType;

    /**
     * The device health attestation state. This property is read-only.
     */
    private ?string $deviceHealthAttestationState;

    /**
     * Name of the device. This property is read-only.
     */
    private ?string $deviceName;

    /**
     */
    private ?string $deviceRegistrationState;

    /**
     * Whether the device is Exchange ActiveSync activated. This property is read-only.
     */
    private ?bool $easActivated;

    /**
     * Exchange ActivationSync activation time of the device. This property is read-only.
     */
    private ?\DateTimeInterface $easActivationDateTime;

    /**
     * Exchange ActiveSync Id of the device. This property is read-only.
     */
    private ?string $easDeviceId;

    /**
     * Email(s) for the user associated with the device. This property is read-only.
     */
    private ?string $emailAddress;

    /**
     * Enrollment time of the device. Supports $filter operator 'lt' and 'gt'. This property is read-only.
     */
    private ?\DateTimeInterface $enrolledDateTime;

    /**
     * Name of the enrollment profile assigned to the device. Default value is empty string, indicating no enrollment profile was assgined. This property is read-only.
     */
    private ?string $enrollmentProfileName;

    /**
     * Indicates Ethernet MAC Address of the device. Default, is Null (Non-Default property) for this property when returned as part of managedDevice entity. Individual get call with select query options is needed to retrieve actual values. Example: deviceManagement/managedDevices({managedDeviceId})?$select=ethernetMacAddress Supports: $select. $Search is not supported. Read-only. This property is read-only.
     */
    private ?string $ethernetMacAddress;

    /**
     */
    private ?string $exchangeAccessState;

    /**
     */
    private ?string $exchangeAccessStateReason;

    /**
     * Last time the device contacted Exchange. This property is read-only.
     */
    private ?\DateTimeInterface $exchangeLastSuccessfulSyncDateTime;

    /**
     * Free Storage in Bytes. Default value is 0. Read-only. This property is read-only.
     */
    private ?float $freeStorageSpaceInBytes;

    /**
     * Integrated Circuit Card Identifier, it is A SIM card''s unique identification number. Default is an empty string. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only.
     */
    private ?string $iccid;

    /**
     * IMEI. This property is read-only.
     */
    private ?string $imei;

    /**
     * Device encryption status. This property is read-only.
     */
    private ?bool $isEncrypted;

    /**
     * Device supervised status. This property is read-only.
     */
    private ?bool $isSupervised;

    /**
     * Whether the device is jail broken or rooted. Default is an empty string. Supports $filter operator 'eq' and 'or'. This property is read-only.
     */
    private ?string $jailBroken;

    /**
     * The date and time that the device last completed a successful sync with Intune. Supports $filter operator 'lt' and 'gt'. This property is read-only.
     */
    private ?\DateTimeInterface $lastSyncDateTime;

    /**
     * Automatically generated name to identify a device. Can be overwritten to a user friendly name.
     */
    private ?string $managedDeviceName;

    /**
     */
    private ?string $managedDeviceOwnerType;

    /**
     */
    private ?string $managementAgent;

    /**
     * Reports device management certificate expiration date. This property is read-only.
     */
    private ?\DateTimeInterface $managementCertificateExpirationDate;

    /**
     * Manufacturer of the device. This property is read-only.
     */
    private ?string $manufacturer;

    /**
     * MEID. This property is read-only.
     */
    private ?string $meid;

    /**
     * Model of the device. This property is read-only.
     */
    private ?string $model;

    /**
     * Notes on the device created by IT Admin. Default is null. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported.
     */
    private ?string $notes;

    /**
     * Operating system of the device. Windows, iOS, etc. This property is read-only.
     */
    private ?string $operatingSystem;

    /**
     * Operating system version of the device. This property is read-only.
     */
    private ?string $osVersion;

    /**
     */
    private ?string $partnerReportedThreatState;

    /**
     * Phone number of the device. This property is read-only.
     */
    private ?string $phoneNumber;

    /**
     * Total Memory in Bytes. Default is 0. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. Read-only. This property is read-only.
     */
    private ?float $physicalMemoryInBytes;

    /**
     * An error string that identifies issues when creating Remote Assistance session objects. This property is read-only.
     */
    private ?string $remoteAssistanceSessionErrorDetails;

    /**
     * Url that allows a Remote Assistance session to be established with the device. Default is an empty string. To retrieve actual values GET call needs to be made, with device id and included in select parameter. This property is read-only.
     */
    private ?string $remoteAssistanceSessionUrl;

    /**
     * Reports if the managed iOS device is user approval enrollment. This property is read-only.
     */
    private ?bool $requireUserEnrollmentApproval;

    /**
     * SerialNumber. This property is read-only.
     */
    private ?string $serialNumber;

    /**
     * Subscriber Carrier. This property is read-only.
     */
    private ?string $subscriberCarrier;

    /**
     * Total Storage in Bytes. This property is read-only.
     */
    private ?float $totalStorageSpaceInBytes;

    /**
     * Unique Device Identifier for iOS and macOS devices. Default is an empty string. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only.
     */
    private ?string $udid;

    /**
     * User display name. This property is read-only.
     */
    private ?string $userDisplayName;

    /**
     * Unique Identifier for the user associated with the device. This property is read-only.
     */
    private ?string $userId;

    /**
     * Device user principal name. This property is read-only.
     */
    private ?string $userPrincipalName;

    /**
     * Wi-Fi MAC. This property is read-only.
     */
    private ?string $wiFiMacAddress;

    /**
     * Device category
     */
    private ?string $deviceCategory;

    /**
     * Device compliance policy states for this device.
     */
    private array $deviceCompliancePolicyStates = [];

    /**
     * Device configuration states for this device.
     */
    private array $deviceConfigurationStates = [];

    /**
     * List of log collection requests
     */
    private array $logCollectionRequests = [];

    /**
     * The primary users associated with the managed device.
     */
    private array $users = [];

    /**
     * Devices that are managed or pre-enrolled through Intune. Limited support for $filter: Only properties whose descriptions mention support for $filter may be used, and combinations of those filtered properties must use ''and'', not ''or''.
     */
    private ?string $windowsProtectionState;


    public function getActivationLockBypassCode(): ?string
    {
        return $this->activationLockBypassCode;
    }

    public function setActivationLockBypassCode(?string $activationLockBypassCode): self
    {
        $this->activationLockBypassCode = $activationLockBypassCode;
        return $this;
    }

    public function getAndroidSecurityPatchLevel(): ?string
    {
        return $this->androidSecurityPatchLevel;
    }

    public function setAndroidSecurityPatchLevel(?string $androidSecurityPatchLevel): self
    {
        $this->androidSecurityPatchLevel = $androidSecurityPatchLevel;
        return $this;
    }

    public function getAzureADDeviceId(): ?string
    {
        return $this->azureADDeviceId;
    }

    public function setAzureADDeviceId(?string $azureADDeviceId): self
    {
        $this->azureADDeviceId = $azureADDeviceId;
        return $this;
    }

    public function getAzureADRegistered(): ?bool
    {
        return $this->azureADRegistered;
    }

    public function setAzureADRegistered(?bool $azureADRegistered): self
    {
        $this->azureADRegistered = $azureADRegistered;
        return $this;
    }

    public function getComplianceGracePeriodExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->complianceGracePeriodExpirationDateTime;
    }

    public function setComplianceGracePeriodExpirationDateTime(?\DateTimeInterface $complianceGracePeriodExpirationDateTime): self
    {
        $this->complianceGracePeriodExpirationDateTime = $complianceGracePeriodExpirationDateTime;
        return $this;
    }

    public function getComplianceState(): ?string
    {
        return $this->complianceState;
    }

    public function setComplianceState(?string $complianceState): self
    {
        $this->complianceState = $complianceState;
        return $this;
    }

    public function getConfigurationManagerClientEnabledFeatures(): ?string
    {
        return $this->configurationManagerClientEnabledFeatures;
    }

    public function setConfigurationManagerClientEnabledFeatures(?string $configurationManagerClientEnabledFeatures): self
    {
        $this->configurationManagerClientEnabledFeatures = $configurationManagerClientEnabledFeatures;
        return $this;
    }

    public function getDeviceActionResults(): array
    {
        return $this->deviceActionResults;
    }

    public function setDeviceActionResults(array $deviceActionResults): self
    {
        $this->deviceActionResults = $deviceActionResults;
        return $this;
    }

    public function getDeviceCategoryDisplayName(): ?string
    {
        return $this->deviceCategoryDisplayName;
    }

    public function setDeviceCategoryDisplayName(?string $deviceCategoryDisplayName): self
    {
        $this->deviceCategoryDisplayName = $deviceCategoryDisplayName;
        return $this;
    }

    public function getDeviceEnrollmentType(): ?string
    {
        return $this->deviceEnrollmentType;
    }

    public function setDeviceEnrollmentType(?string $deviceEnrollmentType): self
    {
        $this->deviceEnrollmentType = $deviceEnrollmentType;
        return $this;
    }

    public function getDeviceHealthAttestationState(): ?string
    {
        return $this->deviceHealthAttestationState;
    }

    public function setDeviceHealthAttestationState(?string $deviceHealthAttestationState): self
    {
        $this->deviceHealthAttestationState = $deviceHealthAttestationState;
        return $this;
    }

    public function getDeviceName(): ?string
    {
        return $this->deviceName;
    }

    public function setDeviceName(?string $deviceName): self
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    public function getDeviceRegistrationState(): ?string
    {
        return $this->deviceRegistrationState;
    }

    public function setDeviceRegistrationState(?string $deviceRegistrationState): self
    {
        $this->deviceRegistrationState = $deviceRegistrationState;
        return $this;
    }

    public function getEasActivated(): ?bool
    {
        return $this->easActivated;
    }

    public function setEasActivated(?bool $easActivated): self
    {
        $this->easActivated = $easActivated;
        return $this;
    }

    public function getEasActivationDateTime(): ?\DateTimeInterface
    {
        return $this->easActivationDateTime;
    }

    public function setEasActivationDateTime(?\DateTimeInterface $easActivationDateTime): self
    {
        $this->easActivationDateTime = $easActivationDateTime;
        return $this;
    }

    public function getEasDeviceId(): ?string
    {
        return $this->easDeviceId;
    }

    public function setEasDeviceId(?string $easDeviceId): self
    {
        $this->easDeviceId = $easDeviceId;
        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(?string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    public function getEnrolledDateTime(): ?\DateTimeInterface
    {
        return $this->enrolledDateTime;
    }

    public function setEnrolledDateTime(?\DateTimeInterface $enrolledDateTime): self
    {
        $this->enrolledDateTime = $enrolledDateTime;
        return $this;
    }

    public function getEnrollmentProfileName(): ?string
    {
        return $this->enrollmentProfileName;
    }

    public function setEnrollmentProfileName(?string $enrollmentProfileName): self
    {
        $this->enrollmentProfileName = $enrollmentProfileName;
        return $this;
    }

    public function getEthernetMacAddress(): ?string
    {
        return $this->ethernetMacAddress;
    }

    public function setEthernetMacAddress(?string $ethernetMacAddress): self
    {
        $this->ethernetMacAddress = $ethernetMacAddress;
        return $this;
    }

    public function getExchangeAccessState(): ?string
    {
        return $this->exchangeAccessState;
    }

    public function setExchangeAccessState(?string $exchangeAccessState): self
    {
        $this->exchangeAccessState = $exchangeAccessState;
        return $this;
    }

    public function getExchangeAccessStateReason(): ?string
    {
        return $this->exchangeAccessStateReason;
    }

    public function setExchangeAccessStateReason(?string $exchangeAccessStateReason): self
    {
        $this->exchangeAccessStateReason = $exchangeAccessStateReason;
        return $this;
    }

    public function getExchangeLastSuccessfulSyncDateTime(): ?\DateTimeInterface
    {
        return $this->exchangeLastSuccessfulSyncDateTime;
    }

    public function setExchangeLastSuccessfulSyncDateTime(?\DateTimeInterface $exchangeLastSuccessfulSyncDateTime): self
    {
        $this->exchangeLastSuccessfulSyncDateTime = $exchangeLastSuccessfulSyncDateTime;
        return $this;
    }

    public function getFreeStorageSpaceInBytes(): ?float
    {
        return $this->freeStorageSpaceInBytes;
    }

    public function setFreeStorageSpaceInBytes(?float $freeStorageSpaceInBytes): self
    {
        $this->freeStorageSpaceInBytes = $freeStorageSpaceInBytes;
        return $this;
    }

    public function getIccid(): ?string
    {
        return $this->iccid;
    }

    public function setIccid(?string $iccid): self
    {
        $this->iccid = $iccid;
        return $this;
    }

    public function getImei(): ?string
    {
        return $this->imei;
    }

    public function setImei(?string $imei): self
    {
        $this->imei = $imei;
        return $this;
    }

    public function getIsEncrypted(): ?bool
    {
        return $this->isEncrypted;
    }

    public function setIsEncrypted(?bool $isEncrypted): self
    {
        $this->isEncrypted = $isEncrypted;
        return $this;
    }

    public function getIsSupervised(): ?bool
    {
        return $this->isSupervised;
    }

    public function setIsSupervised(?bool $isSupervised): self
    {
        $this->isSupervised = $isSupervised;
        return $this;
    }

    public function getJailBroken(): ?string
    {
        return $this->jailBroken;
    }

    public function setJailBroken(?string $jailBroken): self
    {
        $this->jailBroken = $jailBroken;
        return $this;
    }

    public function getLastSyncDateTime(): ?\DateTimeInterface
    {
        return $this->lastSyncDateTime;
    }

    public function setLastSyncDateTime(?\DateTimeInterface $lastSyncDateTime): self
    {
        $this->lastSyncDateTime = $lastSyncDateTime;
        return $this;
    }

    public function getManagedDeviceName(): ?string
    {
        return $this->managedDeviceName;
    }

    public function setManagedDeviceName(?string $managedDeviceName): self
    {
        $this->managedDeviceName = $managedDeviceName;
        return $this;
    }

    public function getManagedDeviceOwnerType(): ?string
    {
        return $this->managedDeviceOwnerType;
    }

    public function setManagedDeviceOwnerType(?string $managedDeviceOwnerType): self
    {
        $this->managedDeviceOwnerType = $managedDeviceOwnerType;
        return $this;
    }

    public function getManagementAgent(): ?string
    {
        return $this->managementAgent;
    }

    public function setManagementAgent(?string $managementAgent): self
    {
        $this->managementAgent = $managementAgent;
        return $this;
    }

    public function getManagementCertificateExpirationDate(): ?\DateTimeInterface
    {
        return $this->managementCertificateExpirationDate;
    }

    public function setManagementCertificateExpirationDate(?\DateTimeInterface $managementCertificateExpirationDate): self
    {
        $this->managementCertificateExpirationDate = $managementCertificateExpirationDate;
        return $this;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getMeid(): ?string
    {
        return $this->meid;
    }

    public function setMeid(?string $meid): self
    {
        $this->meid = $meid;
        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;
        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;
        return $this;
    }

    public function getOperatingSystem(): ?string
    {
        return $this->operatingSystem;
    }

    public function setOperatingSystem(?string $operatingSystem): self
    {
        $this->operatingSystem = $operatingSystem;
        return $this;
    }

    public function getOsVersion(): ?string
    {
        return $this->osVersion;
    }

    public function setOsVersion(?string $osVersion): self
    {
        $this->osVersion = $osVersion;
        return $this;
    }

    public function getPartnerReportedThreatState(): ?string
    {
        return $this->partnerReportedThreatState;
    }

    public function setPartnerReportedThreatState(?string $partnerReportedThreatState): self
    {
        $this->partnerReportedThreatState = $partnerReportedThreatState;
        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getPhysicalMemoryInBytes(): ?float
    {
        return $this->physicalMemoryInBytes;
    }

    public function setPhysicalMemoryInBytes(?float $physicalMemoryInBytes): self
    {
        $this->physicalMemoryInBytes = $physicalMemoryInBytes;
        return $this;
    }

    public function getRemoteAssistanceSessionErrorDetails(): ?string
    {
        return $this->remoteAssistanceSessionErrorDetails;
    }

    public function setRemoteAssistanceSessionErrorDetails(?string $remoteAssistanceSessionErrorDetails): self
    {
        $this->remoteAssistanceSessionErrorDetails = $remoteAssistanceSessionErrorDetails;
        return $this;
    }

    public function getRemoteAssistanceSessionUrl(): ?string
    {
        return $this->remoteAssistanceSessionUrl;
    }

    public function setRemoteAssistanceSessionUrl(?string $remoteAssistanceSessionUrl): self
    {
        $this->remoteAssistanceSessionUrl = $remoteAssistanceSessionUrl;
        return $this;
    }

    public function getRequireUserEnrollmentApproval(): ?bool
    {
        return $this->requireUserEnrollmentApproval;
    }

    public function setRequireUserEnrollmentApproval(?bool $requireUserEnrollmentApproval): self
    {
        $this->requireUserEnrollmentApproval = $requireUserEnrollmentApproval;
        return $this;
    }

    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }

    public function setSerialNumber(?string $serialNumber): self
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    public function getSubscriberCarrier(): ?string
    {
        return $this->subscriberCarrier;
    }

    public function setSubscriberCarrier(?string $subscriberCarrier): self
    {
        $this->subscriberCarrier = $subscriberCarrier;
        return $this;
    }

    public function getTotalStorageSpaceInBytes(): ?float
    {
        return $this->totalStorageSpaceInBytes;
    }

    public function setTotalStorageSpaceInBytes(?float $totalStorageSpaceInBytes): self
    {
        $this->totalStorageSpaceInBytes = $totalStorageSpaceInBytes;
        return $this;
    }

    public function getUdid(): ?string
    {
        return $this->udid;
    }

    public function setUdid(?string $udid): self
    {
        $this->udid = $udid;
        return $this;
    }

    public function getUserDisplayName(): ?string
    {
        return $this->userDisplayName;
    }

    public function setUserDisplayName(?string $userDisplayName): self
    {
        $this->userDisplayName = $userDisplayName;
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function getUserPrincipalName(): ?string
    {
        return $this->userPrincipalName;
    }

    public function setUserPrincipalName(?string $userPrincipalName): self
    {
        $this->userPrincipalName = $userPrincipalName;
        return $this;
    }

    public function getWiFiMacAddress(): ?string
    {
        return $this->wiFiMacAddress;
    }

    public function setWiFiMacAddress(?string $wiFiMacAddress): self
    {
        $this->wiFiMacAddress = $wiFiMacAddress;
        return $this;
    }

    public function getDeviceCategory(): ?string
    {
        return $this->deviceCategory;
    }

    public function setDeviceCategory(?string $deviceCategory): self
    {
        $this->deviceCategory = $deviceCategory;
        return $this;
    }

    public function getDeviceCompliancePolicyStates(): array
    {
        return $this->deviceCompliancePolicyStates;
    }

    public function setDeviceCompliancePolicyStates(array $deviceCompliancePolicyStates): self
    {
        $this->deviceCompliancePolicyStates = $deviceCompliancePolicyStates;
        return $this;
    }

    public function getDeviceConfigurationStates(): array
    {
        return $this->deviceConfigurationStates;
    }

    public function setDeviceConfigurationStates(array $deviceConfigurationStates): self
    {
        $this->deviceConfigurationStates = $deviceConfigurationStates;
        return $this;
    }

    public function getLogCollectionRequests(): array
    {
        return $this->logCollectionRequests;
    }

    public function setLogCollectionRequests(array $logCollectionRequests): self
    {
        $this->logCollectionRequests = $logCollectionRequests;
        return $this;
    }

    public function getUsers(): array
    {
        return $this->users;
    }

    public function setUsers(array $users): self
    {
        $this->users = $users;
        return $this;
    }

    public function getWindowsProtectionState(): ?string
    {
        return $this->windowsProtectionState;
    }

    public function setWindowsProtectionState(?string $windowsProtectionState): self
    {
        $this->windowsProtectionState = $windowsProtectionState;
        return $this;
    }

}
