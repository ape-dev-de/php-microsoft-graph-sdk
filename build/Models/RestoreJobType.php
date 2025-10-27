<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestoreJobType - Enum
 */
enum RestoreJobType: string
{
    case STANDARD = 'standard';
    case BULK = 'bulk';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
