<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAutonomousSystem
 */
class SecurityAutonomousSystem
{
    /**
     * The name of the autonomous system.
     */
    private ?string $name;

    /**
     * The autonomous system number, assigned by IANA.
     */
    private ?float $number;

    /**
     * The name of the autonomous system organization.
     */
    private ?string $organization;

    /**
     * A displayable value for these autonomous system details.
     */
    private ?string $value;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getNumber(): ?float
    {
        return $this->number;
    }

    public function setNumber(?float $number): self
    {
        $this->number = $number;
        return $this;
    }

    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    public function setOrganization(?string $organization): self
    {
        $this->organization = $organization;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

}
