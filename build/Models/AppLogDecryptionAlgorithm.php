<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppLogDecryptionAlgorithm - Enum
 */
enum AppLogDecryptionAlgorithm: string
{
    case AES256 = 'aes256';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
