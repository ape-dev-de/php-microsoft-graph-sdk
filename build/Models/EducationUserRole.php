<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationUserRole - Enum
 */
enum EducationUserRole: string
{
    case STUDENT = 'student';
    case TEACHER = 'teacher';
    case NONE = 'none';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
