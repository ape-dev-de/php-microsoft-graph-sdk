<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationJobRestartScope - Enum
 */
enum SynchronizationJobRestartScope: string
{
    case NONE = 'None';
    case CONNECTORDATASTORE = 'ConnectorDataStore';
    case ESCROWS = 'Escrows';
    case WATERMARK = 'Watermark';
    case QUARANTINESTATE = 'QuarantineState';
    case FULL = 'Full';
    case FORCEDELETES = 'ForceDeletes';
}
