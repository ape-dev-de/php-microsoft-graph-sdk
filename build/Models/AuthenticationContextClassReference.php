<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationContextClassReference
 */
class AuthenticationContextClassReference
{
    /**
     * A short explanation of the policies that are enforced by authenticationContextClassReference. This value should be used to provide secondary text to describe the authentication context class reference when building user-facing admin experiences. For example, a selection UX.
     */
    private ?string $description;

    /**
     * The display name is the friendly name of the authenticationContextClassReference object. This value should be used to identify the authentication context class reference when building user-facing admin experiences. For example, a selection UX.
     */
    private ?string $displayName;

    /**
     * Indicates whether the authenticationContextClassReference has been published by the security admin and is ready for use by apps. When it''s set to false, it shouldn''t be shown in authentication context selection UX, or used to protect app resources. It''s shown and available for Conditional Access policy authoring. The default value is false.  Supports $filter (eq).
     */
    private ?string $isAvailable;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getIsAvailable(): ?string
    {
        return $this->isAvailable;
    }

    public function setIsAvailable(?string $isAvailable): self
    {
        $this->isAvailable = $isAvailable;
        return $this;
    }

}
