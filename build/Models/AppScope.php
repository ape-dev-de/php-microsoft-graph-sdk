<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppScope
 */
class AppScope
{
    /**
     * Provides the display name of the app-specific resource represented by the app scope. Read-only.
     */
    private ?string $displayName;

    /**
     * Describes the type of app-specific resource represented by the app scope. Read-only.
     */
    private ?string $type;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
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

}
