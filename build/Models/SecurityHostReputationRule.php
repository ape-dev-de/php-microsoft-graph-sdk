<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostReputationRule
 */
class SecurityHostReputationRule
{
    /**
     * The description of the rule that gives more context.
     */
    private ?string $description;

    /**
     * The name of the rule.
     */
    private ?string $name;

    /**
     * Link to a web page with details related to this rule.
     */
    private ?string $relatedDetailsUrl;

    /**
     */
    private ?string $severity;


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getRelatedDetailsUrl(): ?string
    {
        return $this->relatedDetailsUrl;
    }

    public function setRelatedDetailsUrl(?string $relatedDetailsUrl): self
    {
        $this->relatedDetailsUrl = $relatedDetailsUrl;
        return $this;
    }

    public function getSeverity(): ?string
    {
        return $this->severity;
    }

    public function setSeverity(?string $severity): self
    {
        $this->severity = $severity;
        return $this;
    }

}
