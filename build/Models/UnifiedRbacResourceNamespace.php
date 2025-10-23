<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRbacResourceNamespace
 */
class UnifiedRbacResourceNamespace
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?string $name = null;

    /** 
     * 
     * @var UnifiedRbacResourceAction[]
     */
    public array $resourceActions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['resourceActions'])) {
            $this->resourceActions = $data['resourceActions'];
        }
    }
}
