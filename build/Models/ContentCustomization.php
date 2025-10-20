<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContentCustomization
 */
class ContentCustomization
{
    /**
     * Represents the content options of External Identities to be customized throughout the authentication flow for a tenant.
     */
    private array $attributeCollection = [];

    /**
     * A relative URL for the content options of External Identities to be customized throughout the authentication flow for a tenant.
     */
    private ?string $attributeCollectionRelativeUrl;

    /**
     * Represents content options to customize during MFA proofup interruptions.
     */
    private array $registrationCampaign = [];

    /**
     * The relative URL of the content options to customize during MFA proofup interruptions.
     */
    private ?string $registrationCampaignRelativeUrl;

    public function getAttributeCollection(): array
    {
        return $this->attributeCollection;
    }

    public function setAttributeCollection(array $attributeCollection): self
    {
        $this->attributeCollection = $attributeCollection;
        return $this;
    }

    public function getAttributeCollectionRelativeUrl(): ?string
    {
        return $this->attributeCollectionRelativeUrl;
    }

    public function setAttributeCollectionRelativeUrl(?string $attributeCollectionRelativeUrl): self
    {
        $this->attributeCollectionRelativeUrl = $attributeCollectionRelativeUrl;
        return $this;
    }

    public function getRegistrationCampaign(): array
    {
        return $this->registrationCampaign;
    }

    public function setRegistrationCampaign(array $registrationCampaign): self
    {
        $this->registrationCampaign = $registrationCampaign;
        return $this;
    }

    public function getRegistrationCampaignRelativeUrl(): ?string
    {
        return $this->registrationCampaignRelativeUrl;
    }

    public function setRegistrationCampaignRelativeUrl(?string $registrationCampaignRelativeUrl): self
    {
        $this->registrationCampaignRelativeUrl = $registrationCampaignRelativeUrl;
        return $this;
    }

}
