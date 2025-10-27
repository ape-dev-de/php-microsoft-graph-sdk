<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * HostSecurityState
 */
class HostSecurityState
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Host FQDN (Fully Qualified Domain Name) (for example, machine.company.com). */
    public ?string $fqdn = null;

    /**  */
    public ?bool $isAzureAdJoined = null;

    /**  */
    public ?bool $isAzureAdRegistered = null;

    /** True if the host is domain joined to an on-premises Active Directory domain. */
    public ?bool $isHybridAzureDomainJoined = null;

    /** The local host name, without the DNS domain name. */
    public ?string $netBiosName = null;

    /** Host Operating System. (For example, Windows 10, macOS, RHEL, etc.). */
    public ?string $os = null;

    /** Private (not routable) IPv4 or IPv6 address (see RFC 1918) at the time of the alert. */
    public ?string $privateIpAddress = null;

    /** Publicly routable IPv4 or IPv6 address (see RFC 1918) at time of the alert. */
    public ?string $publicIpAddress = null;

    /** Provider-generated/calculated risk score of the host.  Recommended value range of 0-1, which equates to a percentage. */
    public ?string $riskScore = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['fqdn'])) {
            $this->fqdn = $data['fqdn'];
        }
        if (isset($data['isAzureAdJoined'])) {
            $this->isAzureAdJoined = $data['isAzureAdJoined'];
        }
        if (isset($data['isAzureAdRegistered'])) {
            $this->isAzureAdRegistered = $data['isAzureAdRegistered'];
        }
        if (isset($data['isHybridAzureDomainJoined'])) {
            $this->isHybridAzureDomainJoined = $data['isHybridAzureDomainJoined'];
        }
        if (isset($data['netBiosName'])) {
            $this->netBiosName = $data['netBiosName'];
        }
        if (isset($data['os'])) {
            $this->os = $data['os'];
        }
        if (isset($data['privateIpAddress'])) {
            $this->privateIpAddress = $data['privateIpAddress'];
        }
        if (isset($data['publicIpAddress'])) {
            $this->publicIpAddress = $data['publicIpAddress'];
        }
        if (isset($data['riskScore'])) {
            $this->riskScore = $data['riskScore'];
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
