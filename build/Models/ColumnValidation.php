<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ColumnValidation
 */
class ColumnValidation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Default BCP 47 language tag for the description. */
    public ?string $defaultLanguage = null;

    /** 
     * Localized messages that explain what is needed for this column's value to be considered valid. User will be prompted with this message if validation fails.
     * @var DisplayNameLocalization[]
     */
    public array $descriptions = [];

    /** The formula to validate column value. For examples, see Examples of common formulas in lists. */
    public ?string $formula = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['defaultLanguage'])) {
            $this->defaultLanguage = $data['defaultLanguage'];
        }
        if (isset($data['descriptions'])) {
            $this->descriptions = $data['descriptions'];
        }
        if (isset($data['formula'])) {
            $this->formula = $data['formula'];
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
