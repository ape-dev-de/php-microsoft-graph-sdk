<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIoTDeviceEvidence
 */
class SecurityIoTDeviceEvidence
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The date and time when the evidence was created and added to the alert. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Detailed description of the entity role/s in an alert. Values are free-form.
     * @var string[]
     */
    public array $detailedRoles = [];

    /**  */
    public ?SecurityEvidenceRemediationStatus $remediationStatus = null;

    /** Details about the remediation status. */
    public ?string $remediationStatusDetails = null;

    /** 
     * The role/s that an evidence entity represents in an alert, for example, an IP address that is associated with an attacker has the evidence role Attacker.
     * @var SecurityEvidenceRole[]
     */
    public array $roles = [];

    /** 
     * Array of custom tags associated with an evidence instance, for example, to denote a group of devices, high-value assets, etc.
     * @var string[]
     */
    public array $tags = [];

    /**  */
    public ?SecurityEvidenceVerdict $verdict = null;

    /** The device ID. */
    public ?string $deviceId = null;

    /** The friendly name of the device. */
    public ?string $deviceName = null;

    /** The URL to the device page in the IoT Defender portal. */
    public ?string $devicePageLink = null;

    /** The device subtype. */
    public ?string $deviceSubType = null;

    /** The type of the device. For example, 'temperature sensor,' 'freezer,' 'wind turbine,' and so on. */
    public ?string $deviceType = null;

    /** 
     * The importance level for the IoT device. Possible values are low, normal, high, and unknownFutureValue.
     * @var SecurityIoTDeviceImportanceType|\stdClass|null
     */
    public SecurityIoTDeviceImportanceType|\stdClass|null $importance = null;

    /** 
     * The azureResourceEvidence entity that represents the IoT Hub that the device belongs to.
     * @var SecurityAzureResourceEvidence|\stdClass|null
     */
    public SecurityAzureResourceEvidence|\stdClass|null $ioTHub = null;

    /** The ID of the Azure Security Center for the IoT agent that is running on the device. */
    public ?string $ioTSecurityAgentId = null;

    /** 
     * The current IP address of the device.
     * @var SecurityIpEvidence|\stdClass|null
     */
    public SecurityIpEvidence|\stdClass|null $ipAddress = null;

    /** Indicates whether the device classified as an authorized device. */
    public ?bool $isAuthorized = null;

    /** Indicates whether the device classified as a programming device. */
    public ?bool $isProgramming = null;

    /** Indicates whether the device classified as a scanner. */
    public ?bool $isScanner = null;

    /** The MAC address of the device. */
    public ?string $macAddress = null;

    /** The manufacturer of the device. */
    public ?string $manufacturer = null;

    /** The model of the device. */
    public ?string $model = null;

    /** 
     * The current network interface controllers on the device.
     * @var SecurityNicEvidence[]
     */
    public array $nics = [];

    /** The operating system the device is running. */
    public ?string $operatingSystem = null;

    /** 
     * The owners for the device.
     * @var string[]
     */
    public array $owners = [];

    /** 
     * The list of protocols that the device supports.
     * @var string[]
     */
    public array $protocols = [];

    /** The Purdue Layer of the device. */
    public ?string $purdueLayer = null;

    /** The sensor that monitors the device. */
    public ?string $sensor = null;

    /** The serial number of the device. */
    public ?string $serialNumber = null;

    /** The site location of the device. */
    public ?string $site = null;

    /** The source (microsoft/vendor) of the device entity. */
    public ?string $source = null;

    /** 
     * A URL reference to the source item where the device is managed.
     * @var SecurityUrlEvidence|\stdClass|null
     */
    public SecurityUrlEvidence|\stdClass|null $sourceRef = null;

    /** The zone location of the device within a site. */
    public ?string $zone = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['detailedRoles'])) {
            $this->detailedRoles = $data['detailedRoles'];
        }
        if (isset($data['remediationStatus'])) {
            $this->remediationStatus = is_array($data['remediationStatus']) ? new SecurityEvidenceRemediationStatus($data['remediationStatus']) : $data['remediationStatus'];
        }
        if (isset($data['remediationStatusDetails'])) {
            $this->remediationStatusDetails = $data['remediationStatusDetails'];
        }
        if (isset($data['roles'])) {
            $this->roles = $data['roles'];
        }
        if (isset($data['tags'])) {
            $this->tags = $data['tags'];
        }
        if (isset($data['verdict'])) {
            $this->verdict = is_array($data['verdict']) ? new SecurityEvidenceVerdict($data['verdict']) : $data['verdict'];
        }
        if (isset($data['deviceId'])) {
            $this->deviceId = $data['deviceId'];
        }
        if (isset($data['deviceName'])) {
            $this->deviceName = $data['deviceName'];
        }
        if (isset($data['devicePageLink'])) {
            $this->devicePageLink = $data['devicePageLink'];
        }
        if (isset($data['deviceSubType'])) {
            $this->deviceSubType = $data['deviceSubType'];
        }
        if (isset($data['deviceType'])) {
            $this->deviceType = $data['deviceType'];
        }
        if (isset($data['importance'])) {
            $this->importance = is_array($data['importance']) ? new SecurityIoTDeviceImportanceType($data['importance']) : $data['importance'];
        }
        if (isset($data['ioTHub'])) {
            $this->ioTHub = is_array($data['ioTHub']) ? new SecurityAzureResourceEvidence($data['ioTHub']) : $data['ioTHub'];
        }
        if (isset($data['ioTSecurityAgentId'])) {
            $this->ioTSecurityAgentId = $data['ioTSecurityAgentId'];
        }
        if (isset($data['ipAddress'])) {
            $this->ipAddress = is_array($data['ipAddress']) ? new SecurityIpEvidence($data['ipAddress']) : $data['ipAddress'];
        }
        if (isset($data['isAuthorized'])) {
            $this->isAuthorized = $data['isAuthorized'];
        }
        if (isset($data['isProgramming'])) {
            $this->isProgramming = $data['isProgramming'];
        }
        if (isset($data['isScanner'])) {
            $this->isScanner = $data['isScanner'];
        }
        if (isset($data['macAddress'])) {
            $this->macAddress = $data['macAddress'];
        }
        if (isset($data['manufacturer'])) {
            $this->manufacturer = $data['manufacturer'];
        }
        if (isset($data['model'])) {
            $this->model = $data['model'];
        }
        if (isset($data['nics'])) {
            $this->nics = $data['nics'];
        }
        if (isset($data['operatingSystem'])) {
            $this->operatingSystem = $data['operatingSystem'];
        }
        if (isset($data['owners'])) {
            $this->owners = $data['owners'];
        }
        if (isset($data['protocols'])) {
            $this->protocols = $data['protocols'];
        }
        if (isset($data['purdueLayer'])) {
            $this->purdueLayer = $data['purdueLayer'];
        }
        if (isset($data['sensor'])) {
            $this->sensor = $data['sensor'];
        }
        if (isset($data['serialNumber'])) {
            $this->serialNumber = $data['serialNumber'];
        }
        if (isset($data['site'])) {
            $this->site = $data['site'];
        }
        if (isset($data['source'])) {
            $this->source = $data['source'];
        }
        if (isset($data['sourceRef'])) {
            $this->sourceRef = is_array($data['sourceRef']) ? new SecurityUrlEvidence($data['sourceRef']) : $data['sourceRef'];
        }
        if (isset($data['zone'])) {
            $this->zone = $data['zone'];
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
