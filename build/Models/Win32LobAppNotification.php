<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppNotification - Enum
 * Contains value for notification status.
 */
enum Win32LobAppNotification: string
{
    case SHOWALL = 'showAll';
    case SHOWREBOOT = 'showReboot';
    case HIDEALL = 'hideAll';
}
