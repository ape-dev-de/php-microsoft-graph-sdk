<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHealthIssueType - Enum
 */
enum SecurityHealthIssueType: string
{
    case SENSOR = 'sensor';
    case GLOBAL = 'global';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
