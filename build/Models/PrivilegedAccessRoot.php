<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessRoot
 */
class PrivilegedAccessRoot
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A group that's governed through Privileged Identity Management (PIM).
     * @var PrivilegedAccessGroup|\stdClass|null
     */
    public PrivilegedAccessGroup|\stdClass|null $group = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['group'])) {
            $this->group = is_array($data['group']) ? new PrivilegedAccessGroup($data['group']) : $data['group'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
