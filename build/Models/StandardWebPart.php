<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StandardWebPart
 */
class StandardWebPart
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The instance identifier of the container text webPart. It only works for inline standard webPart in rich text webParts. */
    public ?string $containerTextWebPartId = null;

    /** 
     * Data of the webPart.
     * @var WebPartData|\stdClass|null
     */
    public mixed $data = null;

    /** A Guid that indicates the webPart type. */
    public ?string $webPartType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['containerTextWebPartId'])) {
            $this->containerTextWebPartId = $data['containerTextWebPartId'];
        }
        if (isset($data['data'])) {
            $this->data = is_array($data['data']) ? new WebPartData($data['data']) : $data['data'];
        }
        if (isset($data['webPartType'])) {
            $this->webPartType = $data['webPartType'];
        }
    }
}
