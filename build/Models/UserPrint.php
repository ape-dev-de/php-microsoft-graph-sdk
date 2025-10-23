<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserPrint
 */
class UserPrint
{
    /** 
     * 
     * @var PrinterShare[]
     */
    public array $recentPrinterShares = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['recentPrinterShares'])) {
            $this->recentPrinterShares = $data['recentPrinterShares'];
        }
    }
}
