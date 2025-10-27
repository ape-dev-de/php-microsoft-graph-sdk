<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AutomaticRepliesStatus - Enum
 */
enum AutomaticRepliesStatus: string
{
    case DISABLED = 'disabled';
    case ALWAYSENABLED = 'alwaysEnabled';
    case SCHEDULED = 'scheduled';
}
