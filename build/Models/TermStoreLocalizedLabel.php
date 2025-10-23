<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreLocalizedLabel
 */
class TermStoreLocalizedLabel
{
    /** Indicates whether the label is the default label. */
    public ?bool $isDefault = null;

    /** The language tag for the label. */
    public ?string $languageTag = null;

    /** The name of the label. */
    public ?string $name = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isDefault'])) {
            $this->isDefault = $data['isDefault'];
        }
        if (isset($data['languageTag'])) {
            $this->languageTag = $data['languageTag'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
    }
}
