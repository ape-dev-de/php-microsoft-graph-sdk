<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AirPrintSettings
 */
class AirPrintSettings
{
    /**  */
    public ?IncompatiblePrinterSettings $incompatiblePrinters = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['incompatiblePrinters'])) {
            $this->incompatiblePrinters = is_array($data['incompatiblePrinters']) ? new IncompatiblePrinterSettings($data['incompatiblePrinters']) : $data['incompatiblePrinters'];
        }
    }
}
