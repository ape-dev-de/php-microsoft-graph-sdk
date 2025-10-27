<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewExpirationBehavior - Enum
 */
enum AccessReviewExpirationBehavior: string
{
    case KEEPACCESS = 'keepAccess';
    case REMOVEACCESS = 'removeAccess';
    case ACCEPTACCESSRECOMMENDATION = 'acceptAccessRecommendation';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
