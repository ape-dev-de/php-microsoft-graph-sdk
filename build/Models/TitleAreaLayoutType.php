<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TitleAreaLayoutType - Enum
 */
enum TitleAreaLayoutType: string
{
    case IMAGEANDTITLE = 'imageAndTitle';
    case PLAIN = 'plain';
    case COLORBLOCK = 'colorBlock';
    case OVERLAP = 'overlap';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
