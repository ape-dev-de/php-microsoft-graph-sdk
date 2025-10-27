<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsPropertyType - Enum
 */
enum ExternalConnectorsPropertyType: string
{
    case STRING = 'string';
    case INT64 = 'int64';
    case DOUBLE = 'double';
    case DATETIME = 'dateTime';
    case BOOLEAN = 'boolean';
    case STRINGCOLLECTION = 'stringCollection';
    case INT64COLLECTION = 'int64Collection';
    case DOUBLECOLLECTION = 'doubleCollection';
    case DATETIMECOLLECTION = 'dateTimeCollection';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
