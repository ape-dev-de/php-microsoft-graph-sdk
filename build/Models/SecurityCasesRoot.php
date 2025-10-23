<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCasesRoot
 */
class SecurityCasesRoot
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var SecurityEdiscoveryCase[]
     */
    public array $ediscoveryCases = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['ediscoveryCases'])) {
            $this->ediscoveryCases = $data['ediscoveryCases'];
        }
    }
}
