<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NativeAuthenticationApisEnabled - Enum
 */
enum NativeAuthenticationApisEnabled: string
{
    case NONE = 'none';
    case ALL = 'all';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
