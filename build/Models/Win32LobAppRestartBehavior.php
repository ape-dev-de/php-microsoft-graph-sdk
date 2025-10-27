<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppRestartBehavior - Enum
 * Indicates the type of restart action.
 */
enum Win32LobAppRestartBehavior: string
{
    case BASEDONRETURNCODE = 'basedOnReturnCode';
    case ALLOW = 'allow';
    case SUPPRESS = 'suppress';
    case FORCE = 'force';
}
