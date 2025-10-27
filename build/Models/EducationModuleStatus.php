<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationModuleStatus - Enum
 */
enum EducationModuleStatus: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
