<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PageLayoutType - Enum
 */
enum PageLayoutType: string
{
    case MICROSOFTRESERVED = 'microsoftReserved';
    case ARTICLE = 'article';
    case HOME = 'home';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
