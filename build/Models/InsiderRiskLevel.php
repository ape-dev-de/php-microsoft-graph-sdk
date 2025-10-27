<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InsiderRiskLevel - Enum
 */
enum InsiderRiskLevel: string
{
    case NONE = 'none';
    case MINOR = 'minor';
    case MODERATE = 'moderate';
    case ELEVATED = 'elevated';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
