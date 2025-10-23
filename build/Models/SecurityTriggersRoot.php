<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityTriggersRoot
 */
class SecurityTriggersRoot
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var SecurityRetentionEvent[]
     */
    public array $retentionEvents = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['retentionEvents'])) {
            $this->retentionEvents = $data['retentionEvents'];
        }
    }
}
