<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteEntityBaseModel
 */
class OnenoteEntityBaseModel
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The endpoint where you can get details about the page. Read-only. */
    public ?string $self = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['self'])) {
            $this->self = $data['self'];
        }
    }
}
