<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ThreatAssessmentStatus - Enum
 */
enum ThreatAssessmentStatus: string
{
    case PENDING = 'pending';
    case COMPLETED = 'completed';
}
