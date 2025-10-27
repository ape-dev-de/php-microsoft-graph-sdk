<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityExportFormat - Enum
 */
enum SecurityExportFormat: string
{
    case PST = 'pst';
    case MSG = 'msg';
    case EML = 'eml';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
