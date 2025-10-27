<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserActivityTypes - Enum
 */
enum UserActivityTypes: string
{
    case NONE = 'none';
    case UPLOADTEXT = 'uploadText';
    case UPLOADFILE = 'uploadFile';
    case DOWNLOADTEXT = 'downloadText';
    case DOWNLOADFILE = 'downloadFile';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
