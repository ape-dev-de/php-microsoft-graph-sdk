<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ColumnTypes - Enum
 */
enum ColumnTypes: string
{
    case NOTE = 'note';
    case TEXT = 'text';
    case CHOICE = 'choice';
    case MULTICHOICE = 'multichoice';
    case NUMBER = 'number';
    case CURRENCY = 'currency';
    case DATETIME = 'dateTime';
    case LOOKUP = 'lookup';
    case BOOLEAN = 'boolean';
    case USER = 'user';
    case URL = 'url';
    case CALCULATED = 'calculated';
    case LOCATION = 'location';
    case GEOLOCATION = 'geolocation';
    case TERM = 'term';
    case MULTITERM = 'multiterm';
    case THUMBNAIL = 'thumbnail';
    case APPROVALSTATUS = 'approvalStatus';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
