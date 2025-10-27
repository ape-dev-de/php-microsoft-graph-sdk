<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SensitivityLabelAssignmentMethod - Enum
 */
enum SensitivityLabelAssignmentMethod: string
{
    case STANDARD = 'standard';
    case PRIVILEGED = 'privileged';
    case AUTO = 'auto';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
