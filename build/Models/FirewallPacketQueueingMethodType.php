<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FirewallPacketQueueingMethodType - Enum
 * Possible values for firewallPacketQueueingMethod
 */
enum FirewallPacketQueueingMethodType: string
{
    case DEVICEDEFAULT = 'deviceDefault';
    case DISABLED = 'disabled';
    case QUEUEINBOUND = 'queueInbound';
    case QUEUEOUTBOUND = 'queueOutbound';
    case QUEUEBOTH = 'queueBoth';
}
