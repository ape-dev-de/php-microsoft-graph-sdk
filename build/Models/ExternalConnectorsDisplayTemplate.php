<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsDisplayTemplate
 */
class ExternalConnectorsDisplayTemplate
{
    /**
     * The text identifier for the display template; for example, contosoTickets. Maximum 16 characters. Only alphanumeric characters allowed.
     */
    private ?string $id;

    /**
     * The definition of the content''s appearance, represented by an Adaptive Card, which is a JSON-serialized card object model.
     */
    private ?string $layout;

    /**
     * Defines the priority of a display template. A display template with priority 1 is evaluated before a template with priority 4. Gaps in priority values are supported. Must be positive value.
     */
    private ?float $priority;

    /**
     * Specifies additional rules for selecting this display template based on the item schema. Optional.
     */
    private ?string $rules;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getLayout(): ?string
    {
        return $this->layout;
    }

    public function setLayout(?string $layout): self
    {
        $this->layout = $layout;
        return $this;
    }

    public function getPriority(): ?float
    {
        return $this->priority;
    }

    public function setPriority(?float $priority): self
    {
        $this->priority = $priority;
        return $this;
    }

    public function getRules(): ?string
    {
        return $this->rules;
    }

    public function setRules(?string $rules): self
    {
        $this->rules = $rules;
        return $this;
    }

}
