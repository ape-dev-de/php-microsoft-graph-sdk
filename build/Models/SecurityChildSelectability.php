<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityChildSelectability - Enum
 */
enum SecurityChildSelectability: string
{
    case ONE = 'One';
    case MANY = 'Many';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
