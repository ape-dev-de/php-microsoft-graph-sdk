<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageLocalizedText
 */
class AccessPackageLocalizedText
{
    /**
     * The language code that text is in. For example, ''en-us''. The language component follows 2-letter codes as defined in ISO 639-1, and the country component follows 2-letter codes as defined in ISO 3166-1 alpha-2. Required.
     */
    private ?string $languageCode;

    /**
     * The question in the specific language. Required.
     */
    private ?string $text;


    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    public function setLanguageCode(?string $languageCode): self
    {
        $this->languageCode = $languageCode;
        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }

}
