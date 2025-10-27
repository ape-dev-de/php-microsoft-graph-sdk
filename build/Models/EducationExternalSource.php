<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationExternalSource - Enum
 */
enum EducationExternalSource: string
{
    case SIS = 'sis';
    case MANUAL = 'manual';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
