<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Enablement - Enum
 * Possible values of a property
 */
enum Enablement: string
{
    case NOTCONFIGURED = 'notConfigured';
    case ENABLED = 'enabled';
    case DISABLED = 'disabled';
}
