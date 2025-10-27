<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationPredefinedQuestionLabel - Enum
 */
enum VirtualEventRegistrationPredefinedQuestionLabel: string
{
    case STREET = 'street';
    case CITY = 'city';
    case STATE = 'state';
    case POSTALCODE = 'postalCode';
    case COUNTRYORREGION = 'countryOrRegion';
    case INDUSTRY = 'industry';
    case JOBTITLE = 'jobTitle';
    case ORGANIZATION = 'organization';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
