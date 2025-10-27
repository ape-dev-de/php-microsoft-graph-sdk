<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AirPrintSettings
 */
class AirPrintSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?IncompatiblePrinterSettings $incompatiblePrinters = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['incompatiblePrinters'])) {
            $this->incompatiblePrinters = is_string($data['incompatiblePrinters']) ? IncompatiblePrinterSettings::tryFrom($data['incompatiblePrinters']) : $data['incompatiblePrinters'];
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
