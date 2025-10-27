<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityUserFlowAttributeDataType - Enum
 */
enum IdentityUserFlowAttributeDataType: string
{
    case STRING = 'string';
    case BOOLEAN = 'boolean';
    case INT64 = 'int64';
    case STRINGCOLLECTION = 'stringCollection';
    case DATETIME = 'dateTime';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
