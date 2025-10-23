<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutlookUser
 */
class OutlookUser
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A list of categories defined for the user.
     * @var OutlookCategory[]
     */
    public array $masterCategories = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['masterCategories'])) {
            $this->masterCategories = $data['masterCategories'];
        }
    }
}
