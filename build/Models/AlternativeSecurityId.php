<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlternativeSecurityId
 */
class AlternativeSecurityId
{
    /** For internal use only. */
    public ?string $identityProvider = null;

    /** For internal use only. */
    public ?string $key = null;

    /** For internal use only. */
    public ?float $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['identityProvider'])) {
            $this->identityProvider = $data['identityProvider'];
        }
        if (isset($data['key'])) {
            $this->key = $data['key'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
    }
}
