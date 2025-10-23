<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreLocalizedDescription
 */
class TermStoreLocalizedDescription
{
    /** The description in the localized language. */
    public ?string $description = null;

    /** The language tag for the label. */
    public ?string $languageTag = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['languageTag'])) {
            $this->languageTag = $data['languageTag'];
        }
    }
}
