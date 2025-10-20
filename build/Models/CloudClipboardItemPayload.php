<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudClipboardItemPayload
 */
class CloudClipboardItemPayload
{
    /**
     * The formatName version of the value of a cloud clipboard encoded in base64.
     */
    private ?string $content;

    /**
     * For a list of possible values see formatName values.
     */
    private ?string $formatName;

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getFormatName(): ?string
    {
        return $this->formatName;
    }

    public function setFormatName(?string $formatName): self
    {
        $this->formatName = $formatName;
        return $this;
    }

}
