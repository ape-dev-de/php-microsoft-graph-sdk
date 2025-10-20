<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BaseEndUserNotification
 */
class BaseEndUserNotification
{
    /**
     * The default language for the end user notification.
     */
    private ?string $defaultLanguage;

    /**
     */
    private ?string $endUserNotification;

    public function getDefaultLanguage(): ?string
    {
        return $this->defaultLanguage;
    }

    public function setDefaultLanguage(?string $defaultLanguage): self
    {
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }

    public function getEndUserNotification(): ?string
    {
        return $this->endUserNotification;
    }

    public function setEndUserNotification(?string $endUserNotification): self
    {
        $this->endUserNotification = $endUserNotification;
        return $this;
    }

}
