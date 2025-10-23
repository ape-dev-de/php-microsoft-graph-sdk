<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDeviceEvidence
 */
class SecurityDeviceEvidence
{
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

    /** A unique identifier assigned to a device by Microsoft Entra ID when device is Microsoft Entra joined. */
    public ?string $azureAdDeviceId = null;

    /** 
     * State of the Defender AntiMalware engine. The possible values are: notReporting, disabled, notUpdated, updated, unknown, notSupported, unknownFutureValue.
     * @var SecurityDefenderAvStatus|\stdClass|null
     */
    public mixed $defenderAvStatus = null;

    /** The fully qualified domain name (FQDN) for the device. */
    public ?string $deviceDnsName = null;

    /** The DNS domain that this computer belongs to. A sequence of labels separated by dots. */
    public ?string $dnsDomain = null;

    /** The date and time when the device was first seen. */
    public ?\DateTimeInterface $firstSeenDateTime = null;

    /** 
     * The health state of the device. The possible values are: active, inactive, impairedCommunication, noSensorData, noSensorDataImpairedCommunication, unknown, unknownFutureValue.
     * @var SecurityDeviceHealthStatus|\stdClass|null
     */
    public mixed $healthStatus = null;

    /** The hostname without the domain suffix. */
    public ?string $hostName = null;

    /** 
     * Ip interfaces of the device during the time of the alert.
     * @var string[]
     */
    public array $ipInterfaces = [];

    /**  */
    public ?string $lastExternalIpAddress = null;

    /**  */
    public ?string $lastIpAddress = null;

    /** 
     * Users that were logged on the machine during the time of the alert.
     * @var SecurityLoggedOnUser[]
     */
    public array $loggedOnUsers = [];

    /** A unique identifier assigned to a device by Microsoft Defender for Endpoint. */
    public ?string $mdeDeviceId = null;

    /** A logical grouping of computers within a Microsoft Windows network. */
    public ?string $ntDomain = null;

    /** 
     * The status of the machine onboarding to Microsoft Defender for Endpoint. The possible values are: insufficientInfo, onboarded, canBeOnboarded, unsupported, unknownFutureValue.
     * @var SecurityOnboardingStatus|\stdClass|null
     */
    public mixed $onboardingStatus = null;

    /** The build version for the operating system the device is running. */
    public ?float $osBuild = null;

    /** The operating system platform the device is running. */
    public ?string $osPlatform = null;

    /** The ID of the role-based access control (RBAC) device group. */
    public ?float $rbacGroupId = null;

    /** The name of the RBAC device group. */
    public ?string $rbacGroupName = null;

    /** 
     * Risk score as evaluated by Microsoft Defender for Endpoint. The possible values are: none, informational, low, medium, high, unknownFutureValue.
     * @var SecurityDeviceRiskScore|\stdClass|null
     */
    public mixed $riskScore = null;

    /** The version of the operating system platform. */
    public ?string $version = null;

    /** 
     * Metadata of the virtual machine (VM) on which Microsoft Defender for Endpoint is running.
     * @var SecurityVmMetadata|\stdClass|null
     */
    public mixed $vmMetadata = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['detailedRoles'])) {
            $this->detailedRoles = $data['detailedRoles'];
        }
        if (isset($data['remediationStatus'])) {
            $this->remediationStatus = $data['remediationStatus'];
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
            $this->verdict = $data['verdict'];
        }
        if (isset($data['azureAdDeviceId'])) {
            $this->azureAdDeviceId = $data['azureAdDeviceId'];
        }
        if (isset($data['defenderAvStatus'])) {
            $this->defenderAvStatus = $data['defenderAvStatus'];
        }
        if (isset($data['deviceDnsName'])) {
            $this->deviceDnsName = $data['deviceDnsName'];
        }
        if (isset($data['dnsDomain'])) {
            $this->dnsDomain = $data['dnsDomain'];
        }
        if (isset($data['firstSeenDateTime'])) {
            $this->firstSeenDateTime = $data['firstSeenDateTime'];
        }
        if (isset($data['healthStatus'])) {
            $this->healthStatus = $data['healthStatus'];
        }
        if (isset($data['hostName'])) {
            $this->hostName = $data['hostName'];
        }
        if (isset($data['ipInterfaces'])) {
            $this->ipInterfaces = $data['ipInterfaces'];
        }
        if (isset($data['lastExternalIpAddress'])) {
            $this->lastExternalIpAddress = $data['lastExternalIpAddress'];
        }
        if (isset($data['lastIpAddress'])) {
            $this->lastIpAddress = $data['lastIpAddress'];
        }
        if (isset($data['loggedOnUsers'])) {
            $this->loggedOnUsers = $data['loggedOnUsers'];
        }
        if (isset($data['mdeDeviceId'])) {
            $this->mdeDeviceId = $data['mdeDeviceId'];
        }
        if (isset($data['ntDomain'])) {
            $this->ntDomain = $data['ntDomain'];
        }
        if (isset($data['onboardingStatus'])) {
            $this->onboardingStatus = $data['onboardingStatus'];
        }
        if (isset($data['osBuild'])) {
            $this->osBuild = $data['osBuild'];
        }
        if (isset($data['osPlatform'])) {
            $this->osPlatform = $data['osPlatform'];
        }
        if (isset($data['rbacGroupId'])) {
            $this->rbacGroupId = $data['rbacGroupId'];
        }
        if (isset($data['rbacGroupName'])) {
            $this->rbacGroupName = $data['rbacGroupName'];
        }
        if (isset($data['riskScore'])) {
            $this->riskScore = $data['riskScore'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['vmMetadata'])) {
            $this->vmMetadata = $data['vmMetadata'];
        }
    }
}
