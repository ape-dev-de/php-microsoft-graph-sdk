<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedEBookAssignment
 */
class ManagedEBookAssignment
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?InstallIntent $installIntent = null;

    /** 
     * The assignment target for eBook.
     * @var DeviceAndAppManagementAssignmentTarget|\stdClass|null
     */
    public mixed $target = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['installIntent'])) {
            $this->installIntent = $data['installIntent'];
        }
        if (isset($data['target'])) {
            $this->target = $data['target'];
        }
    }
}
