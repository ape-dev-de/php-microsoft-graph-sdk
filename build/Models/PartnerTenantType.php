<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnerTenantType - Enum
 */
enum PartnerTenantType: string
{
    case MICROSOFTSUPPORT = 'microsoftSupport';
    case SYNDICATEPARTNER = 'syndicatePartner';
    case BREADTHPARTNER = 'breadthPartner';
    case BREADTHPARTNERDELEGATEDADMIN = 'breadthPartnerDelegatedAdmin';
    case RESELLERPARTNERDELEGATEDADMIN = 'resellerPartnerDelegatedAdmin';
    case VALUEADDEDRESELLERPARTNERDELEGATEDADMIN = 'valueAddedResellerPartnerDelegatedAdmin';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
