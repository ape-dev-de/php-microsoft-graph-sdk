<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFileHashAlgorithm - Enum
 */
enum SecurityFileHashAlgorithm: string
{
    case UNKNOWN = 'unknown';
    case MD5 = 'md5';
    case SHA1 = 'sha1';
    case SHA256 = 'sha256';
    case SHA256AC = 'sha256ac';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
