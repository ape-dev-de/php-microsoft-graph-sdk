<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamSpecialization - Enum
 */
enum TeamSpecialization: string
{
    case NONE = 'none';
    case EDUCATIONSTANDARD = 'educationStandard';
    case EDUCATIONCLASS = 'educationClass';
    case EDUCATIONPROFESSIONALLEARNINGCOMMUNITY = 'educationProfessionalLearningCommunity';
    case EDUCATIONSTAFF = 'educationStaff';
    case HEALTHCARESTANDARD = 'healthcareStandard';
    case HEALTHCARECARECOORDINATION = 'healthcareCareCoordination';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
