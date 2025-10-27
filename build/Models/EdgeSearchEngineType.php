<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EdgeSearchEngineType - Enum
 * Allows IT admind to set a predefined default search engine for MDM-Controlled devices
 */
enum EdgeSearchEngineType: string
{
    case DEFAULT = 'default';
    case BING = 'bing';
}
