<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingCurrency
 */
class BookingCurrency
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The currency symbol. For example, the currency symbol for the US dollar and for the Australian dollar is $. */
    public ?string $symbol = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['symbol'])) {
            $this->symbol = $data['symbol'];
        }
    }
}
