<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommunicationsIdentitySet
 */
class CommunicationsIdentitySet
{
    public function __construct(
        /** Optional. The application associated with this action. */
        public ?Identity $application = null,
        /** Optional. The device associated with this action. */
        public ?Identity $device = null,
        /** Optional. The user associated with this action. */
        public ?Identity $user = null,
        /** The application instance associated with this action. */
        public ?Identity $applicationInstance = null,
        /** An identity the participant would like to present itself as to the other participants in the call. */
        public ?Identity $assertedIdentity = null,
        /** The Azure Communication Services user associated with this action. */
        public ?Identity $azureCommunicationServicesUser = null,
        /** The encrypted user associated with this action. */
        public ?Identity $encrypted = null,
        /** Type of endpoint that the participant uses. Possible values are: default, voicemail, skypeForBusiness, skypeForBusinessVoipPhone, unknownFutureValue. */
        public ?EndpointType $endpointType = null,
        /** The guest user associated with this action. */
        public ?Identity $guest = null,
        /** The Skype for Business on-premises user associated with this action. */
        public ?Identity $onPremises = null,
        /** The phone user associated with this action. */
        public ?Identity $phone = null
    ) {}
}
