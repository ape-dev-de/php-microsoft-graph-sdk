<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TextWebPart
 */
class TextWebPart
{
    /**
     * The HTML string in text web part.
     */
    private ?string $innerHtml;


    public function getInnerHtml(): ?string
    {
        return $this->innerHtml;
    }

    public function setInnerHtml(?string $innerHtml): self
    {
        $this->innerHtml = $innerHtml;
        return $this;
    }

}
