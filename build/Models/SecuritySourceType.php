<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySourceType - Enum
 */
enum SecuritySourceType: string
{
    case MAILBOX = 'mailbox';
    case SITE = 'site';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
