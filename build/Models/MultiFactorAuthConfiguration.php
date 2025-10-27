<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiFactorAuthConfiguration - Enum
 */
enum MultiFactorAuthConfiguration: string
{
    case NOTREQUIRED = 'notRequired';
    case REQUIRED = 'required';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
