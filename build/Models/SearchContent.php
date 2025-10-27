<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchContent - Enum
 */
enum SearchContent: string
{
    case SHAREDCONTENT = 'sharedContent';
    case PRIVATECONTENT = 'privateContent';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
