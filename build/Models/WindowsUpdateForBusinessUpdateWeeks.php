<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUpdateForBusinessUpdateWeeks - Enum
 * Scheduled the update installation on the weeks of the month
 */
enum WindowsUpdateForBusinessUpdateWeeks: string
{
    case USERDEFINED = 'userDefined';
    case FIRSTWEEK = 'firstWeek';
    case SECONDWEEK = 'secondWeek';
    case THIRDWEEK = 'thirdWeek';
    case FOURTHWEEK = 'fourthWeek';
    case EVERYWEEK = 'everyWeek';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
