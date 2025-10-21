<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIoTDeviceEvidence
 */
class SecurityIoTDeviceEvidence
{
    public function __construct(
        /** The date and time when the evidence was created and added to the alert. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** @var string[] Detailed description of the entity role/s in an alert. Values are free-form. */
        public array $detailedRoles = [],
        /**  */
        public ?string $remediationStatus = null,
        /** Details about the remediation status. */
        public ?string $remediationStatusDetails = null,
        /** The role/s that an evidence entity represents in an alert, for example, an IP address that is associated with an attacker has the evidence role Attacker. */
        public array $roles = [],
        /** @var string[] Array of custom tags associated with an evidence instance, for example, to denote a group of devices, high-value assets, etc. */
        public array $tags = [],
        /**  */
        public ?string $verdict = null,
        /** The device ID. */
        public ?string $deviceId = null,
        /** The friendly name of the device. */
        public ?string $deviceName = null,
        /** The URL to the device page in the IoT Defender portal. */
        public ?string $devicePageLink = null,
        /** The device subtype. */
        public ?string $deviceSubType = null,
        /** The type of the device. For example, ''temperature sensor,'' ''freezer,'' ''wind turbine,'' and so on. */
        public ?string $deviceType = null,
        /** The importance level for the IoT device. Possible values are low, normal, high, and unknownFutureValue. */
        public ?string $importance = null,
        /** The azureResourceEvidence entity that represents the IoT Hub that the device belongs to. */
        public ?string $ioTHub = null,
        /** The ID of the Azure Security Center for the IoT agent that is running on the device. */
        public ?string $ioTSecurityAgentId = null,
        /** The current IP address of the device. */
        public ?string $ipAddress = null,
        /** Indicates whether the device classified as an authorized device. */
        public ?bool $isAuthorized = null,
        /** Indicates whether the device classified as a programming device. */
        public ?bool $isProgramming = null,
        /** Indicates whether the device classified as a scanner. */
        public ?bool $isScanner = null,
        /** The MAC address of the device. */
        public ?string $macAddress = null,
        /** The manufacturer of the device. */
        public ?string $manufacturer = null,
        /** The model of the device. */
        public ?string $model = null,
        /** The current network interface controllers on the device. */
        public array $nics = [],
        /** The operating system the device is running. */
        public ?string $operatingSystem = null,
        /** @var string[] The owners for the device. */
        public array $owners = [],
        /** @var string[] The list of protocols that the device supports. */
        public array $protocols = [],
        /** The Purdue Layer of the device. */
        public ?string $purdueLayer = null,
        /** The sensor that monitors the device. */
        public ?string $sensor = null,
        /** The serial number of the device. */
        public ?string $serialNumber = null,
        /** The site location of the device. */
        public ?string $site = null,
        /** The source (microsoft/vendor) of the device entity. */
        public ?string $source = null,
        /** A URL reference to the source item where the device is managed. */
        public ?string $sourceRef = null,
        /** The zone location of the device within a site. */
        public ?string $zone = null
    ) {}
}
