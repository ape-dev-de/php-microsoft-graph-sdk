<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSiteTargetEnvironment - Enum
 */
enum BrowserSiteTargetEnvironment: string
{
    case INTERNETEXPLORERMODE = 'internetExplorerMode';
    case INTERNETEXPLORER11 = 'internetExplorer11';
    case MICROSOFTEDGE = 'microsoftEdge';
    case CONFIGURABLE = 'configurable';
    case NONE = 'none';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
