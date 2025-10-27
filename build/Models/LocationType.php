<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocationType - Enum
 */
enum LocationType: string
{
    case DEFAULT = 'default';
    case CONFERENCEROOM = 'conferenceRoom';
    case HOMEADDRESS = 'homeAddress';
    case BUSINESSADDRESS = 'businessAddress';
    case GEOCOORDINATES = 'geoCoordinates';
    case STREETADDRESS = 'streetAddress';
    case HOTEL = 'hotel';
    case RESTAURANT = 'restaurant';
    case LOCALBUSINESS = 'localBusiness';
    case POSTALADDRESS = 'postalAddress';
}
