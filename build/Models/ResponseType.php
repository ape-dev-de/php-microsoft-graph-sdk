<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResponseType - Enum
 */
enum ResponseType: string
{
    case NONE = 'none';
    case ORGANIZER = 'organizer';
    case TENTATIVELYACCEPTED = 'tentativelyAccepted';
    case ACCEPTED = 'accepted';
    case DECLINED = 'declined';
    case NOTRESPONDED = 'notResponded';
}
