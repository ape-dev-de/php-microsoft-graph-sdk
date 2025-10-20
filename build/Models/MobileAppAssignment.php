<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppAssignment
 */
class MobileAppAssignment
{
    /**
     */
    private ?string $intent;

    /**
     * The settings for target assignment defined by the admin.
     */
    private ?string $settings;

    /**
     * A class containing the properties used for Group Assignment of a Mobile App.
     */
    private ?string $target;

    public function getIntent(): ?string
    {
        return $this->intent;
    }

    public function setIntent(?string $intent): self
    {
        $this->intent = $intent;
        return $this;
    }

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(?string $settings): self
    {
        $this->settings = $settings;
        return $this;
    }

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(?string $target): self
    {
        $this->target = $target;
        return $this;
    }

}
