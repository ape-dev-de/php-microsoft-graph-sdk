<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageLocalizedText
 */
class AccessPackageLocalizedText
{
    /** The language code that text is in. For example, 'en-us'. The language component follows 2-letter codes as defined in ISO 639-1, and the country component follows 2-letter codes as defined in ISO 3166-1 alpha-2. Required. */
    public ?string $languageCode = null;

    /** The question in the specific language. Required. */
    public ?string $text = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['languageCode'])) {
            $this->languageCode = $data['languageCode'];
        }
        if (isset($data['text'])) {
            $this->text = $data['text'];
        }
    }
}
