<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LogonType - Enum
 */
enum LogonType: string
{
    case UNKNOWN = 'unknown';
    case INTERACTIVE = 'interactive';
    case REMOTEINTERACTIVE = 'remoteInteractive';
    case NETWORK = 'network';
    case BATCH = 'batch';
    case SERVICE = 'service';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
