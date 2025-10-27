<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ThreatAssessmentRequestSource - Enum
 */
enum ThreatAssessmentRequestSource: string
{
    case UNDEFINED = 'undefined';
    case USER = 'user';
    case ADMINISTRATOR = 'administrator';
}
