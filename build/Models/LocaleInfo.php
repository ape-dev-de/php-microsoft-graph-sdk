<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocaleInfo
 */
class LocaleInfo
{
    /** A name representing the user's locale in natural language, for example, 'English (United States)'. */
    public ?string $displayName = null;

    /** A locale representation for the user, which includes the user's preferred language and country/region. For example, 'en-us'. The language component follows 2-letter codes as defined in ISO 639-1, and the country component follows 2-letter codes as defined in ISO 3166-1 alpha-2. */
    public ?string $locale = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['locale'])) {
            $this->locale = $data['locale'];
        }
    }
}
