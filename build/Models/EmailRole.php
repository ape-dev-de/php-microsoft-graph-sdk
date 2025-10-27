<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailRole - Enum
 */
enum EmailRole: string
{
    case UNKNOWN = 'unknown';
    case SENDER = 'sender';
    case RECIPIENT = 'recipient';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
