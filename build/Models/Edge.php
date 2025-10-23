<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Edge
 */
class Edge
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A container for Internet Explorer mode resources.
     * @var InternetExplorerMode|\stdClass|null
     */
    public mixed $internetExplorerMode = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['internetExplorerMode'])) {
            $this->internetExplorerMode = is_array($data['internetExplorerMode']) ? new InternetExplorerMode($data['internetExplorerMode']) : $data['internetExplorerMode'];
        }
    }
}
