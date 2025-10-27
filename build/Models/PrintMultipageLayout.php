<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintMultipageLayout - Enum
 */
enum PrintMultipageLayout: string
{
    case CLOCKWISEFROMTOPLEFT = 'clockwiseFromTopLeft';
    case COUNTERCLOCKWISEFROMTOPLEFT = 'counterclockwiseFromTopLeft';
    case COUNTERCLOCKWISEFROMTOPRIGHT = 'counterclockwiseFromTopRight';
    case CLOCKWISEFROMTOPRIGHT = 'clockwiseFromTopRight';
    case COUNTERCLOCKWISEFROMBOTTOMLEFT = 'counterclockwiseFromBottomLeft';
    case CLOCKWISEFROMBOTTOMLEFT = 'clockwiseFromBottomLeft';
    case COUNTERCLOCKWISEFROMBOTTOMRIGHT = 'counterclockwiseFromBottomRight';
    case CLOCKWISEFROMBOTTOMRIGHT = 'clockwiseFromBottomRight';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
