<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeFlowBehavior - Enum
 */
enum AttributeFlowBehavior: string
{
    case FLOWWHENCHANGED = 'FlowWhenChanged';
    case FLOWALWAYS = 'FlowAlways';
}
