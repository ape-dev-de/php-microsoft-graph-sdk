<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDeviceEvidence
 */
class SecurityDeviceEvidence
{
    /**
     * A unique identifier assigned to a device by Microsoft Entra ID when device is Microsoft Entra joined.
     */
    private ?string $azureAdDeviceId;

    /**
     * State of the Defender AntiMalware engine. The possible values are: notReporting, disabled, notUpdated, updated, unknown, notSupported, unknownFutureValue.
     */
    private ?string $defenderAvStatus;

    /**
     * The fully qualified domain name (FQDN) for the device.
     */
    private ?string $deviceDnsName;

    /**
     * The DNS domain that this computer belongs to. A sequence of labels separated by dots.
     */
    private ?string $dnsDomain;

    /**
     * The date and time when the device was first seen.
     */
    private ?\DateTimeInterface $firstSeenDateTime;

    /**
     * The health state of the device. The possible values are: active, inactive, impairedCommunication, noSensorData, noSensorDataImpairedCommunication, unknown, unknownFutureValue.
     */
    private ?string $healthStatus;

    /**
     * The hostname without the domain suffix.
     */
    private ?string $hostName;

    /**
     * Ip interfaces of the device during the time of the alert.
     */
    private ?string $ipInterfaces;

    /**
     */
    private ?string $lastExternalIpAddress;

    /**
     */
    private ?string $lastIpAddress;

    /**
     * Users that were logged on the machine during the time of the alert.
     */
    private array $loggedOnUsers = [];

    /**
     * A unique identifier assigned to a device by Microsoft Defender for Endpoint.
     */
    private ?string $mdeDeviceId;

    /**
     * A logical grouping of computers within a Microsoft Windows network.
     */
    private ?string $ntDomain;

    /**
     * The status of the machine onboarding to Microsoft Defender for Endpoint. The possible values are: insufficientInfo, onboarded, canBeOnboarded, unsupported, unknownFutureValue.
     */
    private ?string $onboardingStatus;

    /**
     * The build version for the operating system the device is running.
     */
    private ?float $osBuild;

    /**
     * The operating system platform the device is running.
     */
    private ?string $osPlatform;

    /**
     * The ID of the role-based access control (RBAC) device group.
     */
    private ?float $rbacGroupId;

    /**
     * The name of the RBAC device group.
     */
    private ?string $rbacGroupName;

    /**
     * Risk score as evaluated by Microsoft Defender for Endpoint. The possible values are: none, informational, low, medium, high, unknownFutureValue.
     */
    private ?string $riskScore;

    /**
     * The version of the operating system platform.
     */
    private ?string $version;

    /**
     * Metadata of the virtual machine (VM) on which Microsoft Defender for Endpoint is running.
     */
    private ?string $vmMetadata;

    public function getAzureAdDeviceId(): ?string
    {
        return $this->azureAdDeviceId;
    }

    public function setAzureAdDeviceId(?string $azureAdDeviceId): self
    {
        $this->azureAdDeviceId = $azureAdDeviceId;
        return $this;
    }

    public function getDefenderAvStatus(): ?string
    {
        return $this->defenderAvStatus;
    }

    public function setDefenderAvStatus(?string $defenderAvStatus): self
    {
        $this->defenderAvStatus = $defenderAvStatus;
        return $this;
    }

    public function getDeviceDnsName(): ?string
    {
        return $this->deviceDnsName;
    }

    public function setDeviceDnsName(?string $deviceDnsName): self
    {
        $this->deviceDnsName = $deviceDnsName;
        return $this;
    }

    public function getDnsDomain(): ?string
    {
        return $this->dnsDomain;
    }

    public function setDnsDomain(?string $dnsDomain): self
    {
        $this->dnsDomain = $dnsDomain;
        return $this;
    }

    public function getFirstSeenDateTime(): ?\DateTimeInterface
    {
        return $this->firstSeenDateTime;
    }

    public function setFirstSeenDateTime(?\DateTimeInterface $firstSeenDateTime): self
    {
        $this->firstSeenDateTime = $firstSeenDateTime;
        return $this;
    }

    public function getHealthStatus(): ?string
    {
        return $this->healthStatus;
    }

    public function setHealthStatus(?string $healthStatus): self
    {
        $this->healthStatus = $healthStatus;
        return $this;
    }

    public function getHostName(): ?string
    {
        return $this->hostName;
    }

    public function setHostName(?string $hostName): self
    {
        $this->hostName = $hostName;
        return $this;
    }

    public function getIpInterfaces(): ?string
    {
        return $this->ipInterfaces;
    }

    public function setIpInterfaces(?string $ipInterfaces): self
    {
        $this->ipInterfaces = $ipInterfaces;
        return $this;
    }

    public function getLastExternalIpAddress(): ?string
    {
        return $this->lastExternalIpAddress;
    }

    public function setLastExternalIpAddress(?string $lastExternalIpAddress): self
    {
        $this->lastExternalIpAddress = $lastExternalIpAddress;
        return $this;
    }

    public function getLastIpAddress(): ?string
    {
        return $this->lastIpAddress;
    }

    public function setLastIpAddress(?string $lastIpAddress): self
    {
        $this->lastIpAddress = $lastIpAddress;
        return $this;
    }

    public function getLoggedOnUsers(): array
    {
        return $this->loggedOnUsers;
    }

    public function setLoggedOnUsers(array $loggedOnUsers): self
    {
        $this->loggedOnUsers = $loggedOnUsers;
        return $this;
    }

    public function getMdeDeviceId(): ?string
    {
        return $this->mdeDeviceId;
    }

    public function setMdeDeviceId(?string $mdeDeviceId): self
    {
        $this->mdeDeviceId = $mdeDeviceId;
        return $this;
    }

    public function getNtDomain(): ?string
    {
        return $this->ntDomain;
    }

    public function setNtDomain(?string $ntDomain): self
    {
        $this->ntDomain = $ntDomain;
        return $this;
    }

    public function getOnboardingStatus(): ?string
    {
        return $this->onboardingStatus;
    }

    public function setOnboardingStatus(?string $onboardingStatus): self
    {
        $this->onboardingStatus = $onboardingStatus;
        return $this;
    }

    public function getOsBuild(): ?float
    {
        return $this->osBuild;
    }

    public function setOsBuild(?float $osBuild): self
    {
        $this->osBuild = $osBuild;
        return $this;
    }

    public function getOsPlatform(): ?string
    {
        return $this->osPlatform;
    }

    public function setOsPlatform(?string $osPlatform): self
    {
        $this->osPlatform = $osPlatform;
        return $this;
    }

    public function getRbacGroupId(): ?float
    {
        return $this->rbacGroupId;
    }

    public function setRbacGroupId(?float $rbacGroupId): self
    {
        $this->rbacGroupId = $rbacGroupId;
        return $this;
    }

    public function getRbacGroupName(): ?string
    {
        return $this->rbacGroupName;
    }

    public function setRbacGroupName(?string $rbacGroupName): self
    {
        $this->rbacGroupName = $rbacGroupName;
        return $this;
    }

    public function getRiskScore(): ?string
    {
        return $this->riskScore;
    }

    public function setRiskScore(?string $riskScore): self
    {
        $this->riskScore = $riskScore;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

    public function getVmMetadata(): ?string
    {
        return $this->vmMetadata;
    }

    public function setVmMetadata(?string $vmMetadata): self
    {
        $this->vmMetadata = $vmMetadata;
        return $this;
    }

}
