<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintTaskDefinition
 */
class PrintTaskDefinition
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?AppIdentity $createdBy = null;

    /** The name of the printTaskDefinition. */
    public ?string $displayName = null;

    /** 
     * A list of tasks that have been created based on this definition. The list includes currently running tasks and recently completed tasks. Read-only.
     * @var PrintTask[]
     */
    public array $tasks = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['tasks'])) {
            $this->tasks = $data['tasks'];
        }
    }
}
