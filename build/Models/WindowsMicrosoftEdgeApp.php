<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsMicrosoftEdgeApp
 */
class WindowsMicrosoftEdgeApp
{
    /**
     */
    private ?string $channel;

    /**
     * Contains properties and inherited properties for the Microsoft Edge app on Windows.
     */
    private ?string $displayLanguageLocale;


    public function getChannel(): ?string
    {
        return $this->channel;
    }

    public function setChannel(?string $channel): self
    {
        $this->channel = $channel;
        return $this;
    }

    public function getDisplayLanguageLocale(): ?string
    {
        return $this->displayLanguageLocale;
    }

    public function setDisplayLanguageLocale(?string $displayLanguageLocale): self
    {
        $this->displayLanguageLocale = $displayLanguageLocale;
        return $this;
    }

}
