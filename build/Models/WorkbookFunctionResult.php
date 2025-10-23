<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookFunctionResult
 */
class WorkbookFunctionResult
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?string $error = null;

    /**  */
    public ?string $value = null;


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
            $this->error = $data['error'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
