<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegateMeetingMessageDeliveryOptions - Enum
 */
enum DelegateMeetingMessageDeliveryOptions: string
{
    case SENDTODELEGATEANDINFORMATIONTOPRINCIPAL = 'sendToDelegateAndInformationToPrincipal';
    case SENDTODELEGATEANDPRINCIPAL = 'sendToDelegateAndPrincipal';
    case SENDTODELEGATEONLY = 'sendToDelegateOnly';
}
