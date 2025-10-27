<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeMappingSourceType - Enum
 */
enum AttributeMappingSourceType: string
{
    case ATTRIBUTE = 'Attribute';
    case CONSTANT = 'Constant';
    case FUNCTION = 'Function';
}
