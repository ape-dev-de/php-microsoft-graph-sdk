<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceValueType - Enum
 */
enum IdentityGovernanceValueType: string
{
    case ENUM = 'enum';
    case STRING = 'string';
    case INT = 'int';
    case BOOL = 'bool';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
