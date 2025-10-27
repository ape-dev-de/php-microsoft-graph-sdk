<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityExportFileStructure - Enum
 */
enum SecurityExportFileStructure: string
{
    case NONE = 'none';
    case DIRECTORY = 'directory';
    case PST = 'pst';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case MSG = 'msg';
}
