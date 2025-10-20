<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OptionalClaim
 */
class OptionalClaim
{
    /**
     * Additional properties of the claim. If a property exists in this collection, it modifies the behavior of the optional claim specified in the name property.
     */
    private ?string $additionalProperties;

    /**
     * If the value is true, the claim specified by the client is necessary to ensure a smooth authorization experience for the specific task requested by the end user. The default value is false.
     */
    private ?bool $essential;

    /**
     * The name of the optional claim.
     */
    private ?string $name;

    /**
     * The source (directory object) of the claim. There are predefined claims and user-defined claims from extension properties. If the source value is null, the claim is a predefined optional claim. If the source value is user, the value in the name property is the extension property from the user object.
     */
    private ?string $source;

    public function getAdditionalProperties(): ?string
    {
        return $this->additionalProperties;
    }

    public function setAdditionalProperties(?string $additionalProperties): self
    {
        $this->additionalProperties = $additionalProperties;
        return $this;
    }

    public function getEssential(): ?bool
    {
        return $this->essential;
    }

    public function setEssential(?bool $essential): self
    {
        $this->essential = $essential;
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

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

}
