<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAddedStudentAction - Enum
 */
enum EducationAddedStudentAction: string
{
    case NONE = 'none';
    case ASSIGNIFOPEN = 'assignIfOpen';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
