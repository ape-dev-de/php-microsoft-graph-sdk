<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityContentFormat - Enum
 */
enum SecurityContentFormat: string
{
    case TEXT = 'text';
    case HTML = 'html';
    case MARKDOWN = 'markdown';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
