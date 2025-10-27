<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintColorMode - Enum
 */
enum PrintColorMode: string
{
    case BLACKANDWHITE = 'blackAndWhite';
    case GRAYSCALE = 'grayscale';
    case COLOR = 'color';
    case AUTO = 'auto';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
