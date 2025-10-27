<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkUserIdentityType - Enum
 */
enum TeamworkUserIdentityType: string
{
    case AADUSER = 'aadUser';
    case ONPREMISEAADUSER = 'onPremiseAadUser';
    case ANONYMOUSGUEST = 'anonymousGuest';
    case FEDERATEDUSER = 'federatedUser';
    case PERSONALMICROSOFTACCOUNTUSER = 'personalMicrosoftAccountUser';
    case SKYPEUSER = 'skypeUser';
    case PHONEUSER = 'phoneUser';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case EMAILUSER = 'emailUser';
}
