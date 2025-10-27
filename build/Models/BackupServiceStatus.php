<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BackupServiceStatus - Enum
 */
enum BackupServiceStatus: string
{
    case DISABLED = 'disabled';
    case ENABLED = 'enabled';
    case PROTECTIONCHANGELOCKED = 'protectionChangeLocked';
    case RESTORELOCKED = 'restoreLocked';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
