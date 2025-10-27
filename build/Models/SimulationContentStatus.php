<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationContentStatus - Enum
 */
enum SimulationContentStatus: string
{
    case UNKNOWN = 'unknown';
    case DRAFT = 'draft';
    case READY = 'ready';
    case ARCHIVE = 'archive';
    case DELETE = 'delete';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
