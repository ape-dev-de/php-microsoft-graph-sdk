<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceUpdateCategory - Enum
 */
enum ServiceUpdateCategory: string
{
    case PREVENTORFIXISSUE = 'preventOrFixIssue';
    case PLANFORCHANGE = 'planForChange';
    case STAYINFORMED = 'stayInformed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
