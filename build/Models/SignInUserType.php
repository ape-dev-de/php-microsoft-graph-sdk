<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInUserType - Enum
 */
enum SignInUserType: string
{
    case MEMBER = 'member';
    case GUEST = 'guest';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
