<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventWebinar
 */
class VirtualEventWebinar
{
    /**
     * To whom the webinar is visible. Possible values are: everyone, organization, and unknownFutureValue.
     */
    private ?string $audience;

    /**
     * Identity information of coorganizers of the webinar.
     */
    private array $coOrganizers = [];

    /**
     * Registration configuration of the webinar.
     */
    private ?string $registrationConfiguration;

    /**
     * Registration records of the webinar.
     * @var string[]
     */
    private array $registrations = [];


    public function getAudience(): ?string
    {
        return $this->audience;
    }

    public function setAudience(?string $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    public function getCoOrganizers(): array
    {
        return $this->coOrganizers;
    }

    public function setCoOrganizers(array $coOrganizers): self
    {
        $this->coOrganizers = $coOrganizers;
        return $this;
    }

    public function getRegistrationConfiguration(): ?string
    {
        return $this->registrationConfiguration;
    }

    public function setRegistrationConfiguration(?string $registrationConfiguration): self
    {
        $this->registrationConfiguration = $registrationConfiguration;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRegistrations(): array
    {
        return $this->registrations;
    }

    /**
     * @param string[] $registrations
     */
    public function setRegistrations(array $registrations): self
    {
        $this->registrations = $registrations;
        return $this;
    }

}
