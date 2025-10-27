<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAlterationType - Enum
 */
enum SearchAlterationType: string
{
    case SUGGESTION = 'suggestion';
    case MODIFICATION = 'modification';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
