<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookOperation
 */
class WorkbookOperation
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The error returned by the operation.
     * @var WorkbookOperationError|\stdClass|null
     */
    public mixed $error = null;

    /** The resource URI for the result. */
    public ?string $resourceLocation = null;

    /**  */
    public ?WorkbookOperationStatus $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new WorkbookOperationError($data['error']) : $data['error'];
        }
        if (isset($data['resourceLocation'])) {
            $this->resourceLocation = $data['resourceLocation'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new WorkbookOperationStatus($data['status']) : $data['status'];
        }
    }
}
