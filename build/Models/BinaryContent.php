<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BinaryContent
 */
class BinaryContent
{
    /**
     * The binary content, encoded as a Base64 string. Inherited from contentBase.
     */
    private ?string $data;

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): self
    {
        $this->data = $data;
        return $this;
    }

}
