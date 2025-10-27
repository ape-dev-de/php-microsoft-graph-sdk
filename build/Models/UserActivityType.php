<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserActivityType - Enum
 */
enum UserActivityType: string
{
    case UPLOADTEXT = 'uploadText';
    case UPLOADFILE = 'uploadFile';
    case DOWNLOADTEXT = 'downloadText';
    case DOWNLOADFILE = 'downloadFile';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
