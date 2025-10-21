<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NetworkConnection
 */
class NetworkConnection
{
    public function __construct(
        /** Name of the application managing the network connection (for example, Facebook or SMTP). */
        public ?string $applicationName = null,
        /** Destination IP address (of the network connection). */
        public ?string $destinationAddress = null,
        /** Destination domain portion of the destination URL. (for example 'www.contoso.com'). */
        public ?string $destinationDomain = null,
        /** Location (by IP address mapping) associated with the destination of a network connection. */
        public ?string $destinationLocation = null,
        /** Destination port (of the network connection). */
        public ?string $destinationPort = null,
        /** Network connection URL/URI string - excluding parameters. (for example 'www.contoso.com/products/default.html') */
        public ?string $destinationUrl = null,
        /** Network connection direction. Possible values are: unknown, inbound, outbound. */
        public ?string $direction = null,
        /** Date when the destination domain was registered. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $domainRegisteredDateTime = null,
        /** The local DNS name resolution as it appears in the host's local DNS cache (for example, in case the 'hosts' file was tampered with). */
        public ?string $localDnsName = null,
        /** Network Address Translation destination IP address. */
        public ?string $natDestinationAddress = null,
        /** Network Address Translation destination port. */
        public ?string $natDestinationPort = null,
        /** Network Address Translation source IP address. */
        public ?string $natSourceAddress = null,
        /** Network Address Translation source port. */
        public ?string $natSourcePort = null,
        /** Network protocol. Possible values are: unknown, ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII. */
        public ?string $protocol = null,
        /** Provider generated/calculated risk score of the network connection. Recommended value range of 0-1, which equates to a percentage. */
        public ?string $riskScore = null,
        /** Source (i.e. origin) IP address (of the network connection). */
        public ?string $sourceAddress = null,
        /** Location (by IP address mapping) associated with the source of a network connection. */
        public ?string $sourceLocation = null,
        /** Source (i.e. origin) IP port (of the network connection). */
        public ?string $sourcePort = null,
        /** Network connection status. Possible values are: unknown, attempted, succeeded, blocked, failed. */
        public ?string $status = null,
        /** Parameters (suffix) of the destination URL. */
        public ?string $urlParameters = null
    ) {}
}
