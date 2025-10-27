<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreTermGroupScope - Enum
 */
enum TermStoreTermGroupScope: string
{
    case GLOBAL = 'global';
    case SYSTEM = 'system';
    case SITECOLLECTION = 'siteCollection';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
