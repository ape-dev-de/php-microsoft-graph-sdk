<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaDirection - Enum
 */
enum MediaDirection: string
{
    case INACTIVE = 'inactive';
    case SENDONLY = 'sendOnly';
    case RECEIVEONLY = 'receiveOnly';
    case SENDRECEIVE = 'sendReceive';
}
