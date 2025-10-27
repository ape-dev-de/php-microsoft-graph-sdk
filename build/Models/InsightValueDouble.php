<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InsightValueDouble
 */
class InsightValueDouble
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The double value of the user experience analytics insight.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['value'])) {
            $this->value = $data['value'];
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
