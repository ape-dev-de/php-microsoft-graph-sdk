<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestType - Enum
 */
enum SubjectRightsRequestType: string
{
    case EXPORT = 'export';
    case DELETE = 'delete';
    case ACCESS = 'access';
    case TAGFORACTION = 'tagForAction';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
