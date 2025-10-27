<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenotePatchActionType - Enum
 */
enum OnenotePatchActionType: string
{
    case REPLACE = 'Replace';
    case APPEND = 'Append';
    case DELETE = 'Delete';
    case INSERT = 'Insert';
    case PREPEND = 'Prepend';
}
