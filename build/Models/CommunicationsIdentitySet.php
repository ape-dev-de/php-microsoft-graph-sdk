<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommunicationsIdentitySet
 */
class CommunicationsIdentitySet
{
    public function __construct(
        /** The application instance associated with this action. */
        public ?string $applicationInstance = null,
        /** An identity the participant would like to present itself as to the other participants in the call. */
        public ?string $assertedIdentity = null,
        /** The Azure Communication Services user associated with this action. */
        public ?string $azureCommunicationServicesUser = null,
        /** The encrypted user associated with this action. */
        public ?string $encrypted = null,
        /** Type of endpoint that the participant uses. Possible values are: default, voicemail, skypeForBusiness, skypeForBusinessVoipPhone, unknownFutureValue. */
        public ?string $endpointType = null,
        /** The guest user associated with this action. */
        public ?string $guest = null,
        /** The Skype for Business on-premises user associated with this action. */
        public ?string $onPremises = null,
        /** The phone user associated with this action. */
        public ?string $phone = null
    ) {}
}
