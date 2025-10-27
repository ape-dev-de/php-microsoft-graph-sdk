<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppReturnCodeType - Enum
 * Indicates the type of return code.
 */
enum Win32LobAppReturnCodeType: string
{
    case FAILED = 'failed';
    case SUCCESS = 'success';
    case SOFTREBOOT = 'softReboot';
    case HARDREBOOT = 'hardReboot';
    case RETRY = 'retry';
}
