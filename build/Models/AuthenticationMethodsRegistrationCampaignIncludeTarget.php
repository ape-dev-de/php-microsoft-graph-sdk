<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodsRegistrationCampaignIncludeTarget
 */
class AuthenticationMethodsRegistrationCampaignIncludeTarget
{
    /**
     * The object identifier of a Microsoft Entra user or group.
     */
    private ?string $id;

    /**
     * The authentication method that the user is prompted to register. The value must be microsoftAuthenticator.
     */
    private ?string $targetedAuthenticationMethod;

    /**
     */
    private ?string $targetType;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getTargetedAuthenticationMethod(): ?string
    {
        return $this->targetedAuthenticationMethod;
    }

    public function setTargetedAuthenticationMethod(?string $targetedAuthenticationMethod): self
    {
        $this->targetedAuthenticationMethod = $targetedAuthenticationMethod;
        return $this;
    }

    public function getTargetType(): ?string
    {
        return $this->targetType;
    }

    public function setTargetType(?string $targetType): self
    {
        $this->targetType = $targetType;
        return $this;
    }

}
