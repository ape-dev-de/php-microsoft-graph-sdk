<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsSpotlightEnablementSettings - Enum
 * Allows IT admind to set a predefined default search engine for MDM-Controlled devices
 */
enum WindowsSpotlightEnablementSettings: string
{
    case NOTCONFIGURED = 'notConfigured';
    case DISABLED = 'disabled';
    case ENABLED = 'enabled';
}
