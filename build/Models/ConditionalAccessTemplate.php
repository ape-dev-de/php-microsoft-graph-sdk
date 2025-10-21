<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessTemplate
 */
class ConditionalAccessTemplate
{
    /**
     * The user-friendly name of the template.
     */
    private ?string $description;

    /**
     */
    private ?string $details;

    /**
     * The user-friendly name of the template.
     */
    private ?string $name;

    /**
     */
    private ?string $scenarios;


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(?string $details): self
    {
        $this->details = $details;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getScenarios(): ?string
    {
        return $this->scenarios;
    }

    public function setScenarios(?string $scenarios): self
    {
        $this->scenarios = $scenarios;
        return $this;
    }

}
