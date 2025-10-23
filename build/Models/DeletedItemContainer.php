<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeletedItemContainer
 */
class DeletedItemContainer
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Deleted workflows that end up in the deletedItemsContainer.
     * @var IdentityGovernanceWorkflow[]
     */
    public array $workflows = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['workflows'])) {
            $this->workflows = $data['workflows'];
        }
    }
}
