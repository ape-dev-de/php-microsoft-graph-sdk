<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFileHash
 */
class SecurityFileHash
{
    /**  */
    public ?SecurityFileHashAlgorithm $algorithm = null;

    /** The hash value. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['algorithm'])) {
            $this->algorithm = is_array($data['algorithm']) ? new SecurityFileHashAlgorithm($data['algorithm']) : $data['algorithm'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
