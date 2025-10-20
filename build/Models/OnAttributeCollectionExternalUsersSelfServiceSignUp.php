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
     */
    private ?string $attributes;

    public function getAttributeCollectionPage(): ?string
    {
        return $this->attributeCollectionPage;
    }

    public function setAttributeCollectionPage(?string $attributeCollectionPage): self
    {
        $this->attributeCollectionPage = $attributeCollectionPage;
        return $this;
    }

    public function getAttributes(): ?string
    {
        return $this->attributes;
    }

    public function setAttributes(?string $attributes): self
    {
        $this->attributes = $attributes;
        return $this;
    }

}
