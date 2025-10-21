<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NetworkConnection
 */
class NetworkConnection
{
    /**
     * Name of the application managing the network connection (for example, Facebook or SMTP).
     */
    private ?string $applicationName;

    /**
     * Destination IP address (of the network connection).
     */
    private ?string $destinationAddress;

    /**
     * Destination domain portion of the destination URL. (for example 'www.contoso.com').
     */
    private ?string $destinationDomain;

    /**
     * Location (by IP address mapping) associated with the destination of a network connection.
     */
    private ?string $destinationLocation;

    /**
     * Destination port (of the network connection).
     */
    private ?string $destinationPort;

    /**
     * Network connection URL/URI string - excluding parameters. (for example 'www.contoso.com/products/default.html')
     */
    private ?string $destinationUrl;

    /**
     * Network connection direction. Possible values are: unknown, inbound, outbound.
     */
    private ?string $direction;

    /**
     * Date when the destination domain was registered. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $domainRegisteredDateTime;

    /**
     * The local DNS name resolution as it appears in the host''s local DNS cache (for example, in case the ''hosts'' file was tampered with).
     */
    private ?string $localDnsName;

    /**
     * Network Address Translation destination IP address.
     */
    private ?string $natDestinationAddress;

    /**
     * Network Address Translation destination port.
     */
    private ?string $natDestinationPort;

    /**
     * Network Address Translation source IP address.
     */
    private ?string $natSourceAddress;

    /**
     * Network Address Translation source port.
     */
    private ?string $natSourcePort;

    /**
     * Network protocol. Possible values are: unknown, ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII.
     */
    private ?string $protocol;

    /**
     * Provider generated/calculated risk score of the network connection. Recommended value range of 0-1, which equates to a percentage.
     */
    private ?string $riskScore;

    /**
     * Source (i.e. origin) IP address (of the network connection).
     */
    private ?string $sourceAddress;

    /**
     * Location (by IP address mapping) associated with the source of a network connection.
     */
    private ?string $sourceLocation;

    /**
     * Source (i.e. origin) IP port (of the network connection).
     */
    private ?string $sourcePort;

    /**
     * Network connection status. Possible values are: unknown, attempted, succeeded, blocked, failed.
     */
    private ?string $status;

    /**
     * Parameters (suffix) of the destination URL.
     */
    private ?string $urlParameters;


    public function getApplicationName(): ?string
    {
        return $this->applicationName;
    }

    public function setApplicationName(?string $applicationName): self
    {
        $this->applicationName = $applicationName;
        return $this;
    }

    public function getDestinationAddress(): ?string
    {
        return $this->destinationAddress;
    }

    public function setDestinationAddress(?string $destinationAddress): self
    {
        $this->destinationAddress = $destinationAddress;
        return $this;
    }

    public function getDestinationDomain(): ?string
    {
        return $this->destinationDomain;
    }

    public function setDestinationDomain(?string $destinationDomain): self
    {
        $this->destinationDomain = $destinationDomain;
        return $this;
    }

    public function getDestinationLocation(): ?string
    {
        return $this->destinationLocation;
    }

    public function setDestinationLocation(?string $destinationLocation): self
    {
        $this->destinationLocation = $destinationLocation;
        return $this;
    }

    public function getDestinationPort(): ?string
    {
        return $this->destinationPort;
    }

    public function setDestinationPort(?string $destinationPort): self
    {
        $this->destinationPort = $destinationPort;
        return $this;
    }

    public function getDestinationUrl(): ?string
    {
        return $this->destinationUrl;
    }

    public function setDestinationUrl(?string $destinationUrl): self
    {
        $this->destinationUrl = $destinationUrl;
        return $this;
    }

    public function getDirection(): ?string
    {
        return $this->direction;
    }

    public function setDirection(?string $direction): self
    {
        $this->direction = $direction;
        return $this;
    }

    public function getDomainRegisteredDateTime(): ?\DateTimeInterface
    {
        return $this->domainRegisteredDateTime;
    }

    public function setDomainRegisteredDateTime(?\DateTimeInterface $domainRegisteredDateTime): self
    {
        $this->domainRegisteredDateTime = $domainRegisteredDateTime;
        return $this;
    }

    public function getLocalDnsName(): ?string
    {
        return $this->localDnsName;
    }

    public function setLocalDnsName(?string $localDnsName): self
    {
        $this->localDnsName = $localDnsName;
        return $this;
    }

    public function getNatDestinationAddress(): ?string
    {
        return $this->natDestinationAddress;
    }

    public function setNatDestinationAddress(?string $natDestinationAddress): self
    {
        $this->natDestinationAddress = $natDestinationAddress;
        return $this;
    }

    public function getNatDestinationPort(): ?string
    {
        return $this->natDestinationPort;
    }

    public function setNatDestinationPort(?string $natDestinationPort): self
    {
        $this->natDestinationPort = $natDestinationPort;
        return $this;
    }

    public function getNatSourceAddress(): ?string
    {
        return $this->natSourceAddress;
    }

    public function setNatSourceAddress(?string $natSourceAddress): self
    {
        $this->natSourceAddress = $natSourceAddress;
        return $this;
    }

    public function getNatSourcePort(): ?string
    {
        return $this->natSourcePort;
    }

    public function setNatSourcePort(?string $natSourcePort): self
    {
        $this->natSourcePort = $natSourcePort;
        return $this;
    }

    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    public function setProtocol(?string $protocol): self
    {
        $this->protocol = $protocol;
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

    public function getSourceAddress(): ?string
    {
        return $this->sourceAddress;
    }

    public function setSourceAddress(?string $sourceAddress): self
    {
        $this->sourceAddress = $sourceAddress;
        return $this;
    }

    public function getSourceLocation(): ?string
    {
        return $this->sourceLocation;
    }

    public function setSourceLocation(?string $sourceLocation): self
    {
        $this->sourceLocation = $sourceLocation;
        return $this;
    }

    public function getSourcePort(): ?string
    {
        return $this->sourcePort;
    }

    public function setSourcePort(?string $sourcePort): self
    {
        $this->sourcePort = $sourcePort;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getUrlParameters(): ?string
    {
        return $this->urlParameters;
    }

    public function setUrlParameters(?string $urlParameters): self
    {
        $this->urlParameters = $urlParameters;
        return $this;
    }

}
