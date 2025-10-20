<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserFlowApiConnectorConfiguration
 */
class UserFlowApiConnectorConfiguration
{
    /**
     */
    private ?string $postAttributeCollection;

    /**
     */
    private ?string $postFederationSignup;

    public function getPostAttributeCollection(): ?string
    {
        return $this->postAttributeCollection;
    }

    public function setPostAttributeCollection(?string $postAttributeCollection): self
    {
        $this->postAttributeCollection = $postAttributeCollection;
        return $this;
    }

    public function getPostFederationSignup(): ?string
    {
        return $this->postFederationSignup;
    }

    public function setPostFederationSignup(?string $postFederationSignup): self
    {
        $this->postFederationSignup = $postFederationSignup;
        return $this;
    }

}
