<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreRelationType - Enum
 */
enum TermStoreRelationType: string
{
    case PIN = 'pin';
    case REUSE = 'reuse';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
