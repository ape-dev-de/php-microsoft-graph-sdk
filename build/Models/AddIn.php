<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AddIn
 */
class AddIn
{
    /** The unique identifier for the addIn object. */
    public ?string $id = null;

    /** 
     * The collection of key-value pairs that define parameters that the consuming service can use or call. You must specify this property when performing a POST or a PATCH operation on the addIns collection. Required.
     * @var KeyValue[]
     */
    public array $properties = [];

    /** The unique name for the functionality exposed by the app. */
    public ?string $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['properties'])) {
            $this->properties = $data['properties'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
    }
}
