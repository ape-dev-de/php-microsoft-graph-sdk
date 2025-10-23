<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCategoryTemplate
 */
class SecurityCategoryTemplate
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents the user who created the filePlanDescriptorTemplate column.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** Represents the date and time in which the filePlanDescriptorTemplate is created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Unique string that defines a filePlanDescriptorTemplate name. */
    public ?string $displayName = null;

    /** 
     * Represents all subcategories under a particular category.
     * @var SecuritySubcategoryTemplate[]
     */
    public array $subcategories = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['subcategories'])) {
            $this->subcategories = $data['subcategories'];
        }
    }
}
