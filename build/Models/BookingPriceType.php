<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingPriceType - Enum
 * Represents the type of pricing of a booking service.
 */
enum BookingPriceType: string
{
    case UNDEFINED = 'undefined';
    case FIXEDPRICE = 'fixedPrice';
    case STARTINGAT = 'startingAt';
    case HOURLY = 'hourly';
    case FREE = 'free';
    case PRICEVARIES = 'priceVaries';
    case CALLUS = 'callUs';
    case NOTSET = 'notSet';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
