<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReferenceNumeric - Enum
 */
enum ReferenceNumeric: string
{
    case _INF = '-INF';
    case INF = 'INF';
    case NAN = 'NaN';
}
