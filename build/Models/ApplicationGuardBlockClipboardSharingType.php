<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplicationGuardBlockClipboardSharingType - Enum
 * Possible values for applicationGuardBlockClipboardSharingType
 */
enum ApplicationGuardBlockClipboardSharingType: string
{
    case NOTCONFIGURED = 'notConfigured';
    case BLOCKBOTH = 'blockBoth';
    case BLOCKHOSTTOCONTAINER = 'blockHostToContainer';
    case BLOCKCONTAINERTOHOST = 'blockContainerToHost';
    case BLOCKNONE = 'blockNone';
}
