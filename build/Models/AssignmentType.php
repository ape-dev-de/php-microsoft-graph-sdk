<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssignmentType - Enum
 */
enum AssignmentType: string
{
    case REQUIRED = 'required';
    case RECOMMENDED = 'recommended';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case PEERRECOMMENDED = 'peerRecommended';
}
