<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlteredQueryToken
 */
class AlteredQueryToken
{
    /** Defines the length of a changed segment. */
    public ?float $length = null;

    /** Defines the offset of a changed segment. */
    public ?float $offset = null;

    /** Represents the corrected segment string. */
    public ?string $suggestion = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['length'])) {
            $this->length = $data['length'];
        }
        if (isset($data['offset'])) {
            $this->offset = $data['offset'];
        }
        if (isset($data['suggestion'])) {
            $this->suggestion = $data['suggestion'];
        }
    }
}
