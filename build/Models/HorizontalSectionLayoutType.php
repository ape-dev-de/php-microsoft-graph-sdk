<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * HorizontalSectionLayoutType - Enum
 */
enum HorizontalSectionLayoutType: string
{
    case NONE = 'none';
    case ONECOLUMN = 'oneColumn';
    case TWOCOLUMNS = 'twoColumns';
    case THREECOLUMNS = 'threeColumns';
    case ONETHIRDLEFTCOLUMN = 'oneThirdLeftColumn';
    case ONETHIRDRIGHTCOLUMN = 'oneThirdRightColumn';
    case FULLWIDTH = 'fullWidth';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
