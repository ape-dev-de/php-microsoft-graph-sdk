<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureCommunicationServicesUserConversationMember
 */
class AzureCommunicationServicesUserConversationMember
{
    public function __construct(
        /** Azure Communication Services ID of the user. */
        public ?string $azureCommunicationServicesId = null
    ) {}
}
