<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ParticipantInfo
 */
class ParticipantInfo
{
    public function __construct(
        /** The ISO 3166-1 Alpha-2 country code of the participant's best estimated physical location at the start of the call. Read-only. */
        public ?string $countryCode = null,
        /** The type of endpoint the participant is using. Possible values are: default, skypeForBusiness, or skypeForBusinessVoipPhone. Read-only. */
        public ?string $endpointType = null,
        /**  */
        public ?string $identity = null,
        /** The language culture string. Read-only. */
        public ?string $languageId = null,
        /** The participant ID of the participant. Read-only. */
        public ?string $participantId = null,
        /** The home region of the participant. This can be a country, a continent, or a larger geographic region. This doesn't change based on the participant's current physical location. Read-only. */
        public ?string $region = null
    ) {}
}
