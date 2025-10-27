<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSiteMergeType - Enum
 */
enum BrowserSiteMergeType: string
{
    case NOMERGE = 'noMerge';
    case DEFAULT = 'default';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
