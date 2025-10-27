<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ThreatAssessmentResultType - Enum
 */
enum ThreatAssessmentResultType: string
{
    case CHECKPOLICY = 'checkPolicy';
    case RESCAN = 'rescan';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
