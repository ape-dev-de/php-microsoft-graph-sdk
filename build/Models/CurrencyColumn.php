<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CurrencyColumn
 */
class CurrencyColumn
{
    /** Specifies the locale from which to infer the currency symbol. */
    public ?string $locale = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['locale'])) {
            $this->locale = $data['locale'];
        }
    }
}
