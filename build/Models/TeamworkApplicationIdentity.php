<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkApplicationIdentity
 */
class TeamworkApplicationIdentity
{
    public function __construct(
        /** Type of application that is referenced. Possible values are: aadApplication, bot, tenantBot, office365Connector, outgoingWebhook, and unknownFutureValue. */
        public ?string $applicationIdentityType = null
    ) {}
}
