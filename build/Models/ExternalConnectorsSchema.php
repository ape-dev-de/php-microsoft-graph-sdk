<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsSchema
 */
class ExternalConnectorsSchema
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Must be set to microsoft.graph.externalConnector.externalItem. Required. */
    public ?string $baseType = null;

    /** 
     * The properties defined for the items in the connection. The minimum number of properties is one, the maximum is 128.
     * @var ExternalConnectorsProperty[]
     */
    public array $properties = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['baseType'])) {
            $this->baseType = $data['baseType'];
        }
        if (isset($data['properties'])) {
            $this->properties = $data['properties'];
        }
    }
}
