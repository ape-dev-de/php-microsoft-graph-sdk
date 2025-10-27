<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceAppStatus - Enum
 */
enum ServiceAppStatus: string
{
    case INACTIVE = 'inactive';
    case ACTIVE = 'active';
    case PENDINGACTIVE = 'pendingActive';
    case PENDINGINACTIVE = 'pendingInactive';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
