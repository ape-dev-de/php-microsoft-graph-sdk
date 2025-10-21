<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkActivityTopic
 */
class TeamworkActivityTopic
{
    /**
     * Type of source. Possible values are: entityUrl, text. For supported Microsoft Graph URLs, use entityUrl. For custom text, use text.
     */
    private ?string $source;

    /**
     * The topic value. If the value of the source property is entityUrl, this must be a Microsoft Graph URL. If the value is text, this must be a plain text value.
     */
    private ?string $value;

    /**
     * The link the user clicks when they select the notification. Optional when source is entityUrl; required when source is text.
     */
    private ?string $webUrl;


    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

}
