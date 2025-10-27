<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PagePromotionType - Enum
 */
enum PagePromotionType: string
{
    case MICROSOFTRESERVED = 'microsoftReserved';
    case PAGE = 'page';
    case NEWSPOST = 'newsPost';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
