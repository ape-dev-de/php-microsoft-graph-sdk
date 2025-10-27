<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityNetworkProtocol - Enum
 */
enum SecurityNetworkProtocol: string
{
    case UNKNOWN = 'unknown';
    case IP = 'ip';
    case ICMP = 'icmp';
    case IGMP = 'igmp';
    case GGP = 'ggp';
    case IPV4 = 'ipv4';
    case TCP = 'tcp';
    case PUP = 'pup';
    case UDP = 'udp';
    case IDP = 'idp';
    case IPV6 = 'ipv6';
    case IPV6ROUTINGHEADER = 'ipv6RoutingHeader';
    case IPV6FRAGMENTHEADER = 'ipv6FragmentHeader';
    case IPSECENCAPSULATINGSECURITYPAYLOAD = 'ipSecEncapsulatingSecurityPayload';
    case IPSECAUTHENTICATIONHEADER = 'ipSecAuthenticationHeader';
    case ICMPV6 = 'icmpV6';
    case IPV6NONEXTHEADER = 'ipv6NoNextHeader';
    case IPV6DESTINATIONOPTIONS = 'ipv6DestinationOptions';
    case ND = 'nd';
    case RAW = 'raw';
    case IPX = 'ipx';
    case SPX = 'spx';
    case SPXII = 'spxII';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
