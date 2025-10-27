<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessInsiderRiskLevels - Enum
 */
enum ConditionalAccessInsiderRiskLevels: string
{
    case MINOR = 'minor';
    case MODERATE = 'moderate';
    case ELEVATED = 'elevated';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
