<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnAttributeCollectionExternalUsersSelfServiceSignUp
 */
class OnAttributeCollectionExternalUsersSelfServiceSignUp
{
    /**
     * Required. The configuration for how attributes are displayed in the sign-up experience defined by a user flow, like the externalUsersSelfServiceSignupEventsFlow, specifically on the attribute collection page.
     */
    private ?string $attributeCollectionPage;

    /**
     * @var string[]
     */
    private array $attributes = [];


    public function getAttributeCollectionPage(): ?string
    {
        return $this->attributeCollectionPage;
    }

    public function setAttributeCollectionPage(?string $attributeCollectionPage): self
    {
        $this->attributeCollectionPage = $attributeCollectionPage;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param string[] $attributes
     */
    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;
        return $this;
    }

}
