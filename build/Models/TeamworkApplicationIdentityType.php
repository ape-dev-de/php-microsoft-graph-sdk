<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkApplicationIdentityType - Enum
 */
enum TeamworkApplicationIdentityType: string
{
    case AADAPPLICATION = 'aadApplication';
    case BOT = 'bot';
    case TENANTBOT = 'tenantBot';
    case OFFICE365CONNECTOR = 'office365Connector';
    case OUTGOINGWEBHOOK = 'outgoingWebhook';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
