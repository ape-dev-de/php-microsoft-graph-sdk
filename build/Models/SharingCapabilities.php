<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharingCapabilities - Enum
 */
enum SharingCapabilities: string
{
    case DISABLED = 'disabled';
    case EXTERNALUSERSHARINGONLY = 'externalUserSharingOnly';
    case EXTERNALUSERANDGUESTSHARING = 'externalUserAndGuestSharing';
    case EXISTINGEXTERNALUSERSHARINGONLY = 'existingExternalUserSharingOnly';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
