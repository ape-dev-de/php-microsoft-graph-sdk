<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentStatus - Enum
 */
enum EducationAssignmentStatus: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case ASSIGNED = 'assigned';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case INACTIVE = 'inactive';
}
