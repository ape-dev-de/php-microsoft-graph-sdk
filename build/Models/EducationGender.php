<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationGender - Enum
 */
enum EducationGender: string
{
    case FEMALE = 'female';
    case MALE = 'male';
    case OTHER = 'other';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
