<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocaleInfo
 */
class LocaleInfo
{
    /**
     * A name representing the user''s locale in natural language, for example, ''English (United States)''.
     */
    private ?string $displayName;

    /**
     * A locale representation for the user, which includes the user''s preferred language and country/region. For example, ''en-us''. The language component follows 2-letter codes as defined in ISO 639-1, and the country component follows 2-letter codes as defined in ISO 3166-1 alpha-2.
     */
    private ?string $locale;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }

}
