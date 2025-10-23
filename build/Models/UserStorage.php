<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserStorage
 */
class UserStorage
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var UnifiedStorageQuota|\stdClass|null
     */
    public mixed $quota = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['quota'])) {
            $this->quota = is_array($data['quota']) ? new UnifiedStorageQuota($data['quota']) : $data['quota'];
        }
    }
}
