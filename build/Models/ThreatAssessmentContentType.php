<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ThreatAssessmentContentType - Enum
 */
enum ThreatAssessmentContentType: string
{
    case MAIL = 'mail';
    case URL = 'url';
    case FILE = 'file';
}
