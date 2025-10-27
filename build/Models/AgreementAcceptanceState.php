<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AgreementAcceptanceState - Enum
 */
enum AgreementAcceptanceState: string
{
    case ACCEPTED = 'accepted';
    case DECLINED = 'declined';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
