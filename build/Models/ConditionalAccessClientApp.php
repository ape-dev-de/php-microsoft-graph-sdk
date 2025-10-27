<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessClientApp - Enum
 */
enum ConditionalAccessClientApp: string
{
    case ALL = 'all';
    case BROWSER = 'browser';
    case MOBILEAPPSANDDESKTOPCLIENTS = 'mobileAppsAndDesktopClients';
    case EXCHANGEACTIVESYNC = 'exchangeActiveSync';
    case EASSUPPORTED = 'easSupported';
    case OTHER = 'other';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
