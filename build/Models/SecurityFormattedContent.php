<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFormattedContent
 */
class SecurityFormattedContent
{
    /**
     * The content of this formattedContent.
     */
    private ?string $content;

    /**
     * The format of the content. The possible values are: text, html, markdown, unknownFutureValue.
     */
    private ?string $format;


    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->format = $format;
        return $this;
    }

}
