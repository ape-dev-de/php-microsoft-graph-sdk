<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EntrySyncOperation - Enum
 */
enum EntrySyncOperation: string
{
    case NONE = 'None';
    case ADD = 'Add';
    case DELETE = 'Delete';
    case UPDATE = 'Update';
}
