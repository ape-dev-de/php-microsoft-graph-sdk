<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ParticipantInfo
 */
class ParticipantInfo
{
    /**
     * The ISO 3166-1 Alpha-2 country code of the participant's best estimated physical location at the start of the call. Read-only.
     */
    private ?string $countryCode;

    /**
     * The type of endpoint the participant is using. Possible values are: default, skypeForBusiness, or skypeForBusinessVoipPhone. Read-only.
     */
    private ?string $endpointType;

    /**
     */
    private ?string $identity;

    /**
     * The language culture string. Read-only.
     */
    private ?string $languageId;

    /**
     * The participant ID of the participant. Read-only.
     */
    private ?string $participantId;

    /**
     * The home region of the participant. This can be a country, a continent, or a larger geographic region. This doesn''t change based on the participant''s current physical location. Read-only.
     */
    private ?string $region;


    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getEndpointType(): ?string
    {
        return $this->endpointType;
    }

    public function setEndpointType(?string $endpointType): self
    {
        $this->endpointType = $endpointType;
        return $this;
    }

    public function getIdentity(): ?string
    {
        return $this->identity;
    }

    public function setIdentity(?string $identity): self
    {
        $this->identity = $identity;
        return $this;
    }

    public function getLanguageId(): ?string
    {
        return $this->languageId;
    }

    public function setLanguageId(?string $languageId): self
    {
        $this->languageId = $languageId;
        return $this;
    }

    public function getParticipantId(): ?string
    {
        return $this->participantId;
    }

    public function setParticipantId(?string $participantId): self
    {
        $this->participantId = $participantId;
        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;
        return $this;
    }

}
