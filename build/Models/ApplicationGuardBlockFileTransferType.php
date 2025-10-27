<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplicationGuardBlockFileTransferType - Enum
 * Possible values for applicationGuardBlockFileTransfer
 */
enum ApplicationGuardBlockFileTransferType: string
{
    case NOTCONFIGURED = 'notConfigured';
    case BLOCKIMAGEANDTEXTFILE = 'blockImageAndTextFile';
    case BLOCKIMAGEFILE = 'blockImageFile';
    case BLOCKNONE = 'blockNone';
    case BLOCKTEXTFILE = 'blockTextFile';
}
