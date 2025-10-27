<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ThreatCategory - Enum
 */
enum ThreatCategory: string
{
    case UNDEFINED = 'undefined';
    case SPAM = 'spam';
    case PHISHING = 'phishing';
    case MALWARE = 'malware';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
