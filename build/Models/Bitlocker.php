<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Bitlocker
 */
class Bitlocker
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The recovery keys associated with the bitlocker entity.
     * @var BitlockerRecoveryKey[]
     */
    public array $recoveryKeys = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['recoveryKeys'])) {
            $this->recoveryKeys = $data['recoveryKeys'];
        }
    }
}
