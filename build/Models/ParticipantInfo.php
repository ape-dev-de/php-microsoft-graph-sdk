<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ParticipantInfo
 */
class ParticipantInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The ISO 3166-1 Alpha-2 country code of the participant's best estimated physical location at the start of the call. Read-only. */
    public ?string $countryCode = null;

    /** 
     * The type of endpoint the participant is using. Possible values are: default, skypeForBusiness, or skypeForBusinessVoipPhone. Read-only.
     * @var EndpointType|\stdClass|null
     */
    public EndpointType|\stdClass|null $endpointType = null;

    /**  */
    public ?IdentitySet $identity = null;

    /** The language culture string. Read-only. */
    public ?string $languageId = null;

    /** The participant ID of the participant. Read-only. */
    public ?string $participantId = null;

    /** The home region of the participant. This can be a country, a continent, or a larger geographic region. This doesn't change based on the participant's current physical location. Read-only. */
    public ?string $region = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['countryCode'])) {
            $this->countryCode = $data['countryCode'];
        }
        if (isset($data['endpointType'])) {
            $this->endpointType = is_array($data['endpointType']) ? new EndpointType($data['endpointType']) : $data['endpointType'];
        }
        if (isset($data['identity'])) {
            $this->identity = is_array($data['identity']) ? new IdentitySet($data['identity']) : $data['identity'];
        }
        if (isset($data['languageId'])) {
            $this->languageId = $data['languageId'];
        }
        if (isset($data['participantId'])) {
            $this->participantId = $data['participantId'];
        }
        if (isset($data['region'])) {
            $this->region = $data['region'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
