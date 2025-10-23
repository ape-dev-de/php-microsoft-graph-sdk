<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssociatedTeamInfo
 */
class AssociatedTeamInfo
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The name of the team. */
    public ?string $displayName = null;

    /** The ID of the Microsoft Entra tenant. */
    public ?string $tenantId = null;

    /** 
     * 
     * @var Team|\stdClass|null
     */
    public mixed $team = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
        if (isset($data['team'])) {
            $this->team = $data['team'];
        }
    }
}
