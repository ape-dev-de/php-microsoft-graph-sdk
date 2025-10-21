<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TextContent
 */
class TextContent
{
    /**
     * The text content data. Inherits properties from contentBase.
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
