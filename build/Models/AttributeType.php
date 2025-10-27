<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeType - Enum
 */
enum AttributeType: string
{
    case STRING = 'String';
    case INTEGER = 'Integer';
    case REFERENCE = 'Reference';
    case BINARY = 'Binary';
    case BOOLEAN = 'Boolean';
    case DATETIME = 'DateTime';
}
