<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttestationLevel - Enum
 */
enum AttestationLevel: string
{
    case ATTESTED = 'attested';
    case NOTATTESTED = 'notAttested';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
