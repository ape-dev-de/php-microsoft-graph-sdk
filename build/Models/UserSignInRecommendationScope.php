<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSignInRecommendationScope - Enum
 */
enum UserSignInRecommendationScope: string
{
    case TENANT = 'tenant';
    case APPLICATION = 'application';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
