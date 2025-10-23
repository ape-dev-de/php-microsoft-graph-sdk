<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterDiscoverySettings
 */
class PrinterDiscoverySettings
{
    /**  */
    public ?AirPrintSettings $airPrint = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['airPrint'])) {
            $this->airPrint = $data['airPrint'];
        }
    }
}
