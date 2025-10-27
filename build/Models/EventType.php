<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EventType - Enum
 */
enum EventType: string
{
    case SINGLEINSTANCE = 'singleInstance';
    case OCCURRENCE = 'occurrence';
    case EXCEPTION = 'exception';
    case SERIESMASTER = 'seriesMaster';
}
