<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintOrientation - Enum
 */
enum PrintOrientation: string
{
    case PORTRAIT = 'portrait';
    case LANDSCAPE = 'landscape';
    case REVERSELANDSCAPE = 'reverseLandscape';
    case REVERSEPORTRAIT = 'reversePortrait';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
