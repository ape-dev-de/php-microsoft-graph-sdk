<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlertTrigger
 */
class AlertTrigger
{
    /**
     * Name of the property serving as a detection trigger.
     */
    private ?string $name;

    /**
     * Type of the property in the key:value pair for interpretation. For example, String, Boolean etc.
     */
    private ?string $type;

    /**
     * Value of the property serving as a detection trigger.
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
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
