<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIntelligenceProfileCountryOrRegionOfOrigin
 */
class SecurityIntelligenceProfileCountryOrRegionOfOrigin
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** A codified representation for this country/region of origin. */
    public ?string $code = null;

    /** A display label for this ountry/region of origin. */
    public ?string $label = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['code'])) {
            $this->code = $data['code'];
        }
        if (isset($data['label'])) {
            $this->label = $data['label'];
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
