<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookOperation
 */
class WorkbookOperation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The error returned by the operation.
     * @var WorkbookOperationError|\stdClass|null
     */
    public WorkbookOperationError|\stdClass|null $error = null;

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
        $this->rawData = $data;
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

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
