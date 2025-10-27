<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEvidenceVerdict - Enum
 */
enum SecurityEvidenceVerdict: string
{
    case UNKNOWN = 'unknown';
    case SUSPICIOUS = 'suspicious';
    case MALICIOUS = 'malicious';
    case NOTHREATSFOUND = 'noThreatsFound';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
