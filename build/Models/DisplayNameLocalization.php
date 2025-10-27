<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DisplayNameLocalization
 */
class DisplayNameLocalization
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** If present, the value of this field contains the displayName string that has been set for the language present in the languageTag field. */
    public ?string $displayName = null;

    /** Provides the language culture-code and friendly name of the language that the displayName field has been provided in. */
    public ?string $languageTag = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['languageTag'])) {
            $this->languageTag = $data['languageTag'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
