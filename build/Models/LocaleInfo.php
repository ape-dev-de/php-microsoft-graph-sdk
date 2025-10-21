<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocaleInfo
 */
class LocaleInfo
{
    public function __construct(
        /** A name representing the user's locale in natural language, for example, 'English (United States)'. */
        public ?string $displayName = null,
        /** A locale representation for the user, which includes the user's preferred language and country/region. For example, 'en-us'. The language component follows 2-letter codes as defined in ISO 639-1, and the country component follows 2-letter codes as defined in ISO 3166-1 alpha-2. */
        public ?string $locale = null
    ) {}
}
