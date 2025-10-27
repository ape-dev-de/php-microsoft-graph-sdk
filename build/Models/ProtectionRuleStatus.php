<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProtectionRuleStatus - Enum
 */
enum ProtectionRuleStatus: string
{
    case DRAFT = 'draft';
    case ACTIVE = 'active';
    case COMPLETED = 'completed';
    case COMPLETEDWITHERRORS = 'completedWithErrors';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
