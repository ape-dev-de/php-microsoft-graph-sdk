<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationModuleResource
 */
class EducationModuleResource
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Resource object that is with this module.
     * @var EducationResource|\stdClass|null
     */
    public mixed $resource = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['resource'])) {
            $this->resource = $data['resource'];
        }
    }
}
