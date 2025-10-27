<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CurrencyColumn
 */
class CurrencyColumn
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Specifies the locale from which to infer the currency symbol. */
    public ?string $locale = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['locale'])) {
            $this->locale = $data['locale'];
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
