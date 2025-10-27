<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NetworkConnection
 */
class NetworkConnection
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Name of the application managing the network connection (for example, Facebook or SMTP). */
    public ?string $applicationName = null;

    /** Destination IP address (of the network connection). */
    public ?string $destinationAddress = null;

    /** Destination domain portion of the destination URL. (for example 'www.contoso.com'). */
    public ?string $destinationDomain = null;

    /** Location (by IP address mapping) associated with the destination of a network connection. */
    public ?string $destinationLocation = null;

    /** Destination port (of the network connection). */
    public ?string $destinationPort = null;

    /** Network connection URL/URI string - excluding parameters. (for example 'www.contoso.com/products/default.html') */
    public ?string $destinationUrl = null;

    /** 
     * Network connection direction. Possible values are: unknown, inbound, outbound.
     * @var ConnectionDirection|\stdClass|null
     */
    public ConnectionDirection|\stdClass|null $direction = null;

    /** Date when the destination domain was registered. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $domainRegisteredDateTime = null;

    /** The local DNS name resolution as it appears in the host's local DNS cache (for example, in case the 'hosts' file was tampered with). */
    public ?string $localDnsName = null;

    /** Network Address Translation destination IP address. */
    public ?string $natDestinationAddress = null;

    /** Network Address Translation destination port. */
    public ?string $natDestinationPort = null;

    /** Network Address Translation source IP address. */
    public ?string $natSourceAddress = null;

    /** Network Address Translation source port. */
    public ?string $natSourcePort = null;

    /** 
     * Network protocol. Possible values are: unknown, ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII.
     * @var SecurityNetworkProtocol|\stdClass|null
     */
    public SecurityNetworkProtocol|\stdClass|null $protocol = null;

    /** Provider generated/calculated risk score of the network connection. Recommended value range of 0-1, which equates to a percentage. */
    public ?string $riskScore = null;

    /** Source (i.e. origin) IP address (of the network connection). */
    public ?string $sourceAddress = null;

    /** Location (by IP address mapping) associated with the source of a network connection. */
    public ?string $sourceLocation = null;

    /** Source (i.e. origin) IP port (of the network connection). */
    public ?string $sourcePort = null;

    /** 
     * Network connection status. Possible values are: unknown, attempted, succeeded, blocked, failed.
     * @var ConnectionStatus|\stdClass|null
     */
    public ConnectionStatus|\stdClass|null $status = null;

    /** Parameters (suffix) of the destination URL. */
    public ?string $urlParameters = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['applicationName'])) {
            $this->applicationName = $data['applicationName'];
        }
        if (isset($data['destinationAddress'])) {
            $this->destinationAddress = $data['destinationAddress'];
        }
        if (isset($data['destinationDomain'])) {
            $this->destinationDomain = $data['destinationDomain'];
        }
        if (isset($data['destinationLocation'])) {
            $this->destinationLocation = $data['destinationLocation'];
        }
        if (isset($data['destinationPort'])) {
            $this->destinationPort = $data['destinationPort'];
        }
        if (isset($data['destinationUrl'])) {
            $this->destinationUrl = $data['destinationUrl'];
        }
        if (isset($data['direction'])) {
            $this->direction = is_string($data['direction']) ? ConnectionDirection::tryFrom($data['direction']) : $data['direction'];
        }
        if (isset($data['domainRegisteredDateTime'])) {
            $this->domainRegisteredDateTime = is_string($data['domainRegisteredDateTime']) ? new \DateTimeImmutable($data['domainRegisteredDateTime']) : $data['domainRegisteredDateTime'];
        }
        if (isset($data['localDnsName'])) {
            $this->localDnsName = $data['localDnsName'];
        }
        if (isset($data['natDestinationAddress'])) {
            $this->natDestinationAddress = $data['natDestinationAddress'];
        }
        if (isset($data['natDestinationPort'])) {
            $this->natDestinationPort = $data['natDestinationPort'];
        }
        if (isset($data['natSourceAddress'])) {
            $this->natSourceAddress = $data['natSourceAddress'];
        }
        if (isset($data['natSourcePort'])) {
            $this->natSourcePort = $data['natSourcePort'];
        }
        if (isset($data['protocol'])) {
            $this->protocol = is_string($data['protocol']) ? SecurityNetworkProtocol::tryFrom($data['protocol']) : $data['protocol'];
        }
        if (isset($data['riskScore'])) {
            $this->riskScore = $data['riskScore'];
        }
        if (isset($data['sourceAddress'])) {
            $this->sourceAddress = $data['sourceAddress'];
        }
        if (isset($data['sourceLocation'])) {
            $this->sourceLocation = $data['sourceLocation'];
        }
        if (isset($data['sourcePort'])) {
            $this->sourcePort = $data['sourcePort'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? ConnectionStatus::tryFrom($data['status']) : $data['status'];
        }
        if (isset($data['urlParameters'])) {
            $this->urlParameters = $data['urlParameters'];
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
