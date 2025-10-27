<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskState - Enum
 */
enum RiskState: string
{
    case NONE = 'none';
    case CONFIRMEDSAFE = 'confirmedSafe';
    case REMEDIATED = 'remediated';
    case DISMISSED = 'dismissed';
    case ATRISK = 'atRisk';
    case CONFIRMEDCOMPROMISED = 'confirmedCompromised';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
