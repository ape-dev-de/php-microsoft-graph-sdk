<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocationUniqueIdType - Enum
 */
enum LocationUniqueIdType: string
{
    case UNKNOWN = 'unknown';
    case LOCATIONSTORE = 'locationStore';
    case DIRECTORY = 'directory';
    case PRIVATE = 'private';
    case BING = 'bing';
}
