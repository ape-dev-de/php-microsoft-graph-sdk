<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudAppSecuritySessionControlType - Enum
 */
enum CloudAppSecuritySessionControlType: string
{
    case MCASCONFIGURED = 'mcasConfigured';
    case MONITORONLY = 'monitorOnly';
    case BLOCKDOWNLOADS = 'blockDownloads';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
