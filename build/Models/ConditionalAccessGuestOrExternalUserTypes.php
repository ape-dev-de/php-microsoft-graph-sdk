<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessGuestOrExternalUserTypes - Enum
 */
enum ConditionalAccessGuestOrExternalUserTypes: string
{
    case NONE = 'none';
    case INTERNALGUEST = 'internalGuest';
    case B2BCOLLABORATIONGUEST = 'b2bCollaborationGuest';
    case B2BCOLLABORATIONMEMBER = 'b2bCollaborationMember';
    case B2BDIRECTCONNECTUSER = 'b2bDirectConnectUser';
    case OTHEREXTERNALUSER = 'otherExternalUser';
    case SERVICEPROVIDER = 'serviceProvider';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
