<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplicationType - Enum
 * Possible types of Application
 */
enum ApplicationType: string
{
    case UNIVERSAL = 'universal';
    case DESKTOP = 'desktop';
}
