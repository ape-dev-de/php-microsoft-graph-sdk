<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsInsightSeverity - Enum
 * Indicates severity of insights. Possible values are: None, Informational, Warning, Error.
 */
enum UserExperienceAnalyticsInsightSeverity: string
{
    case NONE = 'none';
    case INFORMATIONAL = 'informational';
    case WARNING = 'warning';
    case ERROR = 'error';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
