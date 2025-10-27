<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDevice
 */
class ManagedDevice
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The code that allows the Activation Lock on managed device to be bypassed. Default, is Null (Non-Default property) for this property when returned as part of managedDevice entity in LIST call. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only. */
    public ?string $activationLockBypassCode = null;

    /** Android security patch level. This property is read-only. */
    public ?string $androidSecurityPatchLevel = null;

    /** The unique identifier for the Azure Active Directory device. Read only. This property is read-only. */
    public ?string $azureADDeviceId = null;

    /** Whether the device is Azure Active Directory registered. This property is read-only. */
    public ?bool $azureADRegistered = null;

    /** The DateTime when device compliance grace period expires. This property is read-only. */
    public ?\DateTimeInterface $complianceGracePeriodExpirationDateTime = null;

    /**  */
    public ?ComplianceState $complianceState = null;

    /** 
     * ConfigrMgr client enabled features. This property is read-only.
     * @var ConfigurationManagerClientEnabledFeatures|\stdClass|null
     */
    public ConfigurationManagerClientEnabledFeatures|\stdClass|null $configurationManagerClientEnabledFeatures = null;

    /** 
     * List of ComplexType deviceActionResult objects. This property is read-only.
     * @var DeviceActionResult[]
     */
    public array $deviceActionResults = [];

    /** Device category display name. Default is an empty string. Supports $filter operator 'eq' and 'or'. This property is read-only. */
    public ?string $deviceCategoryDisplayName = null;

    /**  */
    public ?DeviceEnrollmentType $deviceEnrollmentType = null;

    /** 
     * The device health attestation state. This property is read-only.
     * @var DeviceHealthAttestationState|\stdClass|null
     */
    public DeviceHealthAttestationState|\stdClass|null $deviceHealthAttestationState = null;

    /** Name of the device. This property is read-only. */
    public ?string $deviceName = null;

    /**  */
    public ?DeviceRegistrationState $deviceRegistrationState = null;

    /** Whether the device is Exchange ActiveSync activated. This property is read-only. */
    public ?bool $easActivated = null;

    /** Exchange ActivationSync activation time of the device. This property is read-only. */
    public ?\DateTimeInterface $easActivationDateTime = null;

    /** Exchange ActiveSync Id of the device. This property is read-only. */
    public ?string $easDeviceId = null;

    /** Email(s) for the user associated with the device. This property is read-only. */
    public ?string $emailAddress = null;

    /** Enrollment time of the device. Supports $filter operator 'lt' and 'gt'. This property is read-only. */
    public ?\DateTimeInterface $enrolledDateTime = null;

    /** Name of the enrollment profile assigned to the device. Default value is empty string, indicating no enrollment profile was assgined. This property is read-only. */
    public ?string $enrollmentProfileName = null;

    /** Indicates Ethernet MAC Address of the device. Default, is Null (Non-Default property) for this property when returned as part of managedDevice entity. Individual get call with select query options is needed to retrieve actual values. Example: deviceManagement/managedDevices({managedDeviceId})?$select=ethernetMacAddress Supports: $select. $Search is not supported. Read-only. This property is read-only. */
    public ?string $ethernetMacAddress = null;

    /**  */
    public ?DeviceManagementExchangeAccessState $exchangeAccessState = null;

    /**  */
    public ?DeviceManagementExchangeAccessStateReason $exchangeAccessStateReason = null;

    /** Last time the device contacted Exchange. This property is read-only. */
    public ?\DateTimeInterface $exchangeLastSuccessfulSyncDateTime = null;

    /** Free Storage in Bytes. Default value is 0. Read-only. This property is read-only. */
    public ?float $freeStorageSpaceInBytes = null;

    /** Integrated Circuit Card Identifier, it is A SIM card's unique identification number. Default is an empty string. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only. */
    public ?string $iccid = null;

    /** IMEI. This property is read-only. */
    public ?string $imei = null;

    /** Device encryption status. This property is read-only. */
    public ?bool $isEncrypted = null;

    /** Device supervised status. This property is read-only. */
    public ?bool $isSupervised = null;

    /** Whether the device is jail broken or rooted. Default is an empty string. Supports $filter operator 'eq' and 'or'. This property is read-only. */
    public ?string $jailBroken = null;

    /** The date and time that the device last completed a successful sync with Intune. Supports $filter operator 'lt' and 'gt'. This property is read-only. */
    public ?\DateTimeInterface $lastSyncDateTime = null;

    /** Automatically generated name to identify a device. Can be overwritten to a user friendly name. */
    public ?string $managedDeviceName = null;

    /**  */
    public ?ManagedDeviceOwnerType $managedDeviceOwnerType = null;

    /**  */
    public ?ManagementAgentType $managementAgent = null;

    /** Reports device management certificate expiration date. This property is read-only. */
    public ?\DateTimeInterface $managementCertificateExpirationDate = null;

    /** Manufacturer of the device. This property is read-only. */
    public ?string $manufacturer = null;

    /** MEID. This property is read-only. */
    public ?string $meid = null;

    /** Model of the device. This property is read-only. */
    public ?string $model = null;

    /** Notes on the device created by IT Admin. Default is null. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. */
    public ?string $notes = null;

    /** Operating system of the device. Windows, iOS, etc. This property is read-only. */
    public ?string $operatingSystem = null;

    /** Operating system version of the device. This property is read-only. */
    public ?string $osVersion = null;

    /**  */
    public ?ManagedDevicePartnerReportedHealthState $partnerReportedThreatState = null;

    /** Phone number of the device. This property is read-only. */
    public ?string $phoneNumber = null;

    /** Total Memory in Bytes. Default is 0. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. Read-only. This property is read-only. */
    public ?float $physicalMemoryInBytes = null;

    /** An error string that identifies issues when creating Remote Assistance session objects. This property is read-only. */
    public ?string $remoteAssistanceSessionErrorDetails = null;

    /** Url that allows a Remote Assistance session to be established with the device. Default is an empty string. To retrieve actual values GET call needs to be made, with device id and included in select parameter. This property is read-only. */
    public ?string $remoteAssistanceSessionUrl = null;

    /** Reports if the managed iOS device is user approval enrollment. This property is read-only. */
    public ?bool $requireUserEnrollmentApproval = null;

    /** SerialNumber. This property is read-only. */
    public ?string $serialNumber = null;

    /** Subscriber Carrier. This property is read-only. */
    public ?string $subscriberCarrier = null;

    /** Total Storage in Bytes. This property is read-only. */
    public ?float $totalStorageSpaceInBytes = null;

    /** Unique Device Identifier for iOS and macOS devices. Default is an empty string. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only. */
    public ?string $udid = null;

    /** User display name. This property is read-only. */
    public ?string $userDisplayName = null;

    /** Unique Identifier for the user associated with the device. This property is read-only. */
    public ?string $userId = null;

    /** Device user principal name. This property is read-only. */
    public ?string $userPrincipalName = null;

    /** Wi-Fi MAC. This property is read-only. */
    public ?string $wiFiMacAddress = null;

    /** 
     * Device category
     * @var DeviceCategory|\stdClass|null
     */
    public DeviceCategory|\stdClass|null $deviceCategory = null;

    /** 
     * Device compliance policy states for this device.
     * @var DeviceCompliancePolicyState[]
     */
    public array $deviceCompliancePolicyStates = [];

    /** 
     * Device configuration states for this device.
     * @var DeviceConfigurationState[]
     */
    public array $deviceConfigurationStates = [];

    /** 
     * List of log collection requests
     * @var DeviceLogCollectionResponse[]
     */
    public array $logCollectionRequests = [];

    /** 
     * The primary users associated with the managed device.
     * @var User[]
     */
    public array $users = [];

    /** 
     * The device protection status. This property is read-only.
     * @var WindowsProtectionState|\stdClass|null
     */
    public WindowsProtectionState|\stdClass|null $windowsProtectionState = null;


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
        if (isset($data['activationLockBypassCode'])) {
            $this->activationLockBypassCode = $data['activationLockBypassCode'];
        }
        if (isset($data['androidSecurityPatchLevel'])) {
            $this->androidSecurityPatchLevel = $data['androidSecurityPatchLevel'];
        }
        if (isset($data['azureADDeviceId'])) {
            $this->azureADDeviceId = $data['azureADDeviceId'];
        }
        if (isset($data['azureADRegistered'])) {
            $this->azureADRegistered = is_bool($data['azureADRegistered']) ? $data['azureADRegistered'] : (bool)$data['azureADRegistered'];
        }
        if (isset($data['complianceGracePeriodExpirationDateTime'])) {
            $this->complianceGracePeriodExpirationDateTime = is_string($data['complianceGracePeriodExpirationDateTime']) ? new \DateTimeImmutable($data['complianceGracePeriodExpirationDateTime']) : $data['complianceGracePeriodExpirationDateTime'];
        }
        if (isset($data['complianceState'])) {
            $this->complianceState = is_array($data['complianceState']) ? new ComplianceState($data['complianceState']) : $data['complianceState'];
        }
        if (isset($data['configurationManagerClientEnabledFeatures'])) {
            $this->configurationManagerClientEnabledFeatures = is_array($data['configurationManagerClientEnabledFeatures']) ? new ConfigurationManagerClientEnabledFeatures($data['configurationManagerClientEnabledFeatures']) : $data['configurationManagerClientEnabledFeatures'];
        }
        if (isset($data['deviceActionResults'])) {
            $this->deviceActionResults = $data['deviceActionResults'];
        }
        if (isset($data['deviceCategoryDisplayName'])) {
            $this->deviceCategoryDisplayName = $data['deviceCategoryDisplayName'];
        }
        if (isset($data['deviceEnrollmentType'])) {
            $this->deviceEnrollmentType = is_array($data['deviceEnrollmentType']) ? new DeviceEnrollmentType($data['deviceEnrollmentType']) : $data['deviceEnrollmentType'];
        }
        if (isset($data['deviceHealthAttestationState'])) {
            $this->deviceHealthAttestationState = is_array($data['deviceHealthAttestationState']) ? new DeviceHealthAttestationState($data['deviceHealthAttestationState']) : $data['deviceHealthAttestationState'];
        }
        if (isset($data['deviceName'])) {
            $this->deviceName = $data['deviceName'];
        }
        if (isset($data['deviceRegistrationState'])) {
            $this->deviceRegistrationState = is_array($data['deviceRegistrationState']) ? new DeviceRegistrationState($data['deviceRegistrationState']) : $data['deviceRegistrationState'];
        }
        if (isset($data['easActivated'])) {
            $this->easActivated = is_bool($data['easActivated']) ? $data['easActivated'] : (bool)$data['easActivated'];
        }
        if (isset($data['easActivationDateTime'])) {
            $this->easActivationDateTime = is_string($data['easActivationDateTime']) ? new \DateTimeImmutable($data['easActivationDateTime']) : $data['easActivationDateTime'];
        }
        if (isset($data['easDeviceId'])) {
            $this->easDeviceId = $data['easDeviceId'];
        }
        if (isset($data['emailAddress'])) {
            $this->emailAddress = $data['emailAddress'];
        }
        if (isset($data['enrolledDateTime'])) {
            $this->enrolledDateTime = is_string($data['enrolledDateTime']) ? new \DateTimeImmutable($data['enrolledDateTime']) : $data['enrolledDateTime'];
        }
        if (isset($data['enrollmentProfileName'])) {
            $this->enrollmentProfileName = $data['enrollmentProfileName'];
        }
        if (isset($data['ethernetMacAddress'])) {
            $this->ethernetMacAddress = $data['ethernetMacAddress'];
        }
        if (isset($data['exchangeAccessState'])) {
            $this->exchangeAccessState = is_array($data['exchangeAccessState']) ? new DeviceManagementExchangeAccessState($data['exchangeAccessState']) : $data['exchangeAccessState'];
        }
        if (isset($data['exchangeAccessStateReason'])) {
            $this->exchangeAccessStateReason = is_array($data['exchangeAccessStateReason']) ? new DeviceManagementExchangeAccessStateReason($data['exchangeAccessStateReason']) : $data['exchangeAccessStateReason'];
        }
        if (isset($data['exchangeLastSuccessfulSyncDateTime'])) {
            $this->exchangeLastSuccessfulSyncDateTime = is_string($data['exchangeLastSuccessfulSyncDateTime']) ? new \DateTimeImmutable($data['exchangeLastSuccessfulSyncDateTime']) : $data['exchangeLastSuccessfulSyncDateTime'];
        }
        if (isset($data['freeStorageSpaceInBytes'])) {
            $this->freeStorageSpaceInBytes = is_numeric($data['freeStorageSpaceInBytes']) ? (float)$data['freeStorageSpaceInBytes'] : $data['freeStorageSpaceInBytes'];
        }
        if (isset($data['iccid'])) {
            $this->iccid = $data['iccid'];
        }
        if (isset($data['imei'])) {
            $this->imei = $data['imei'];
        }
        if (isset($data['isEncrypted'])) {
            $this->isEncrypted = is_bool($data['isEncrypted']) ? $data['isEncrypted'] : (bool)$data['isEncrypted'];
        }
        if (isset($data['isSupervised'])) {
            $this->isSupervised = is_bool($data['isSupervised']) ? $data['isSupervised'] : (bool)$data['isSupervised'];
        }
        if (isset($data['jailBroken'])) {
            $this->jailBroken = $data['jailBroken'];
        }
        if (isset($data['lastSyncDateTime'])) {
            $this->lastSyncDateTime = is_string($data['lastSyncDateTime']) ? new \DateTimeImmutable($data['lastSyncDateTime']) : $data['lastSyncDateTime'];
        }
        if (isset($data['managedDeviceName'])) {
            $this->managedDeviceName = $data['managedDeviceName'];
        }
        if (isset($data['managedDeviceOwnerType'])) {
            $this->managedDeviceOwnerType = is_array($data['managedDeviceOwnerType']) ? new ManagedDeviceOwnerType($data['managedDeviceOwnerType']) : $data['managedDeviceOwnerType'];
        }
        if (isset($data['managementAgent'])) {
            $this->managementAgent = is_array($data['managementAgent']) ? new ManagementAgentType($data['managementAgent']) : $data['managementAgent'];
        }
        if (isset($data['managementCertificateExpirationDate'])) {
            $this->managementCertificateExpirationDate = is_string($data['managementCertificateExpirationDate']) ? new \DateTimeImmutable($data['managementCertificateExpirationDate']) : $data['managementCertificateExpirationDate'];
        }
        if (isset($data['manufacturer'])) {
            $this->manufacturer = $data['manufacturer'];
        }
        if (isset($data['meid'])) {
            $this->meid = $data['meid'];
        }
        if (isset($data['model'])) {
            $this->model = $data['model'];
        }
        if (isset($data['notes'])) {
            $this->notes = $data['notes'];
        }
        if (isset($data['operatingSystem'])) {
            $this->operatingSystem = $data['operatingSystem'];
        }
        if (isset($data['osVersion'])) {
            $this->osVersion = $data['osVersion'];
        }
        if (isset($data['partnerReportedThreatState'])) {
            $this->partnerReportedThreatState = is_array($data['partnerReportedThreatState']) ? new ManagedDevicePartnerReportedHealthState($data['partnerReportedThreatState']) : $data['partnerReportedThreatState'];
        }
        if (isset($data['phoneNumber'])) {
            $this->phoneNumber = $data['phoneNumber'];
        }
        if (isset($data['physicalMemoryInBytes'])) {
            $this->physicalMemoryInBytes = is_numeric($data['physicalMemoryInBytes']) ? (float)$data['physicalMemoryInBytes'] : $data['physicalMemoryInBytes'];
        }
        if (isset($data['remoteAssistanceSessionErrorDetails'])) {
            $this->remoteAssistanceSessionErrorDetails = $data['remoteAssistanceSessionErrorDetails'];
        }
        if (isset($data['remoteAssistanceSessionUrl'])) {
            $this->remoteAssistanceSessionUrl = $data['remoteAssistanceSessionUrl'];
        }
        if (isset($data['requireUserEnrollmentApproval'])) {
            $this->requireUserEnrollmentApproval = is_bool($data['requireUserEnrollmentApproval']) ? $data['requireUserEnrollmentApproval'] : (bool)$data['requireUserEnrollmentApproval'];
        }
        if (isset($data['serialNumber'])) {
            $this->serialNumber = $data['serialNumber'];
        }
        if (isset($data['subscriberCarrier'])) {
            $this->subscriberCarrier = $data['subscriberCarrier'];
        }
        if (isset($data['totalStorageSpaceInBytes'])) {
            $this->totalStorageSpaceInBytes = is_numeric($data['totalStorageSpaceInBytes']) ? (float)$data['totalStorageSpaceInBytes'] : $data['totalStorageSpaceInBytes'];
        }
        if (isset($data['udid'])) {
            $this->udid = $data['udid'];
        }
        if (isset($data['userDisplayName'])) {
            $this->userDisplayName = $data['userDisplayName'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
        if (isset($data['wiFiMacAddress'])) {
            $this->wiFiMacAddress = $data['wiFiMacAddress'];
        }
        if (isset($data['deviceCategory'])) {
            $this->deviceCategory = is_array($data['deviceCategory']) ? new DeviceCategory($data['deviceCategory']) : $data['deviceCategory'];
        }
        if (isset($data['deviceCompliancePolicyStates'])) {
            $this->deviceCompliancePolicyStates = $data['deviceCompliancePolicyStates'];
        }
        if (isset($data['deviceConfigurationStates'])) {
            $this->deviceConfigurationStates = $data['deviceConfigurationStates'];
        }
        if (isset($data['logCollectionRequests'])) {
            $this->logCollectionRequests = $data['logCollectionRequests'];
        }
        if (isset($data['users'])) {
            $this->users = $data['users'];
        }
        if (isset($data['windowsProtectionState'])) {
            $this->windowsProtectionState = is_array($data['windowsProtectionState']) ? new WindowsProtectionState($data['windowsProtectionState']) : $data['windowsProtectionState'];
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
