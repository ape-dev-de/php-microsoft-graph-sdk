<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DataSubjectType - Enum
 */
enum DataSubjectType: string
{
    case CUSTOMER = 'customer';
    case CURRENTEMPLOYEE = 'currentEmployee';
    case FORMEREMPLOYEE = 'formerEmployee';
    case PROSPECTIVEEMPLOYEE = 'prospectiveEmployee';
    case STUDENT = 'student';
    case TEACHER = 'teacher';
    case FACULTY = 'faculty';
    case OTHER = 'other';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
