<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsRuleOperation - Enum
 */
enum ExternalConnectorsRuleOperation: string
{
    case NULL = 'null';
    case EQUALS = 'equals';
    case NOTEQUALS = 'notEquals';
    case CONTAINS = 'contains';
    case NOTCONTAINS = 'notContains';
    case LESSTHAN = 'lessThan';
    case GREATERTHAN = 'greaterThan';
    case STARTSWITH = 'startsWith';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
