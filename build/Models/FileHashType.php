<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileHashType - Enum
 */
enum FileHashType: string
{
    case UNKNOWN = 'unknown';
    case SHA1 = 'sha1';
    case SHA256 = 'sha256';
    case MD5 = 'md5';
    case AUTHENTICODEHASH256 = 'authenticodeHash256';
    case LSHASH = 'lsHash';
    case CTPH = 'ctph';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
