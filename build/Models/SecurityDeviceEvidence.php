<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDeviceEvidence
 */
class SecurityDeviceEvidence
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
        /** A unique identifier assigned to a device by Microsoft Entra ID when device is Microsoft Entra joined. */
        public ?string $azureAdDeviceId = null,
        /** State of the Defender AntiMalware engine. The possible values are: notReporting, disabled, notUpdated, updated, unknown, notSupported, unknownFutureValue. */
        public ?string $defenderAvStatus = null,
        /** The fully qualified domain name (FQDN) for the device. */
        public ?string $deviceDnsName = null,
        /** The DNS domain that this computer belongs to. A sequence of labels separated by dots. */
        public ?string $dnsDomain = null,
        /** The date and time when the device was first seen. */
        public ?\DateTimeInterface $firstSeenDateTime = null,
        /** The health state of the device. The possible values are: active, inactive, impairedCommunication, noSensorData, noSensorDataImpairedCommunication, unknown, unknownFutureValue. */
        public ?string $healthStatus = null,
        /** The hostname without the domain suffix. */
        public ?string $hostName = null,
        /** @var string[] Ip interfaces of the device during the time of the alert. */
        public array $ipInterfaces = [],
        /**  */
        public ?string $lastExternalIpAddress = null,
        /**  */
        public ?string $lastIpAddress = null,
        /** Users that were logged on the machine during the time of the alert. */
        public array $loggedOnUsers = [],
        /** A unique identifier assigned to a device by Microsoft Defender for Endpoint. */
        public ?string $mdeDeviceId = null,
        /** A logical grouping of computers within a Microsoft Windows network. */
        public ?string $ntDomain = null,
        /** The status of the machine onboarding to Microsoft Defender for Endpoint. The possible values are: insufficientInfo, onboarded, canBeOnboarded, unsupported, unknownFutureValue. */
        public ?string $onboardingStatus = null,
        /** The build version for the operating system the device is running. */
        public ?float $osBuild = null,
        /** The operating system platform the device is running. */
        public ?string $osPlatform = null,
        /** The ID of the role-based access control (RBAC) device group. */
        public ?float $rbacGroupId = null,
        /** The name of the RBAC device group. */
        public ?string $rbacGroupName = null,
        /** Risk score as evaluated by Microsoft Defender for Endpoint. The possible values are: none, informational, low, medium, high, unknownFutureValue. */
        public ?string $riskScore = null,
        /** The version of the operating system platform. */
        public ?string $version = null,
        /** Metadata of the virtual machine (VM) on which Microsoft Defender for Endpoint is running. */
        public ?string $vmMetadata = null
    ) {}
}
