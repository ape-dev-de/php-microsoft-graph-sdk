<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BitLockerEncryptionMethod - Enum
 * BitLockerEncryptionMethod types
 */
enum BitLockerEncryptionMethod: string
{
    case AESCBC128 = 'aesCbc128';
    case AESCBC256 = 'aesCbc256';
    case XTSAES128 = 'xtsAes128';
    case XTSAES256 = 'xtsAes256';
}
