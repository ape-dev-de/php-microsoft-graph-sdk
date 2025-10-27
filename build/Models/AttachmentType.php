<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttachmentType - Enum
 */
enum AttachmentType: string
{
    case FILE = 'file';
    case ITEM = 'item';
    case REFERENCE = 'reference';
}
