<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BackupServiceConsumer - Enum
 */
enum BackupServiceConsumer: string
{
    case UNKNOWN = 'unknown';
    case FIRSTPARTY = 'firstparty';
    case THIRDPARTY = 'thirdparty';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
