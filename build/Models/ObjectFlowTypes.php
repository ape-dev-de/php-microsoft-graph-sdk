<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectFlowTypes - Enum
 */
enum ObjectFlowTypes: string
{
    case NONE = 'None';
    case ADD = 'Add';
    case UPDATE = 'Update';
    case DELETE = 'Delete';
}
