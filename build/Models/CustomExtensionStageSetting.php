<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionStageSetting
 */
class CustomExtensionStageSetting
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?AccessPackageCustomExtensionStage $stage = null;

    /** 
     * Indicates the custom workflow extension that will be executed at this stage. Nullable. Supports $expand.
     * @var CustomCalloutExtension|\stdClass|null
     */
    public mixed $customExtension = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['stage'])) {
            $this->stage = $data['stage'];
        }
        if (isset($data['customExtension'])) {
            $this->customExtension = $data['customExtension'];
        }
    }
}
