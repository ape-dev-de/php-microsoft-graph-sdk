<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LabelContentRight
 */
class LabelContentRight
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The content identifier. */
    public ?string $cid = null;

    /** The content format. */
    public ?string $format = null;

    /**  */
    public ?UsageRights $rights = null;

    /**  */
    public ?SensitivityLabel $label = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['cid'])) {
            $this->cid = $data['cid'];
        }
        if (isset($data['format'])) {
            $this->format = $data['format'];
        }
        if (isset($data['rights'])) {
            $this->rights = $data['rights'];
        }
        if (isset($data['label'])) {
            $this->label = $data['label'];
        }
    }
}
