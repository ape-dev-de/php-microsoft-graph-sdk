<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppManagementPolicy
 */
class AppManagementPolicy
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** Description for this policy. Required. */
    public ?string $description = null;

    /** Display name for this policy. Required. */
    public ?string $displayName = null;

    /** Denotes whether the policy is enabled. */
    public ?bool $isEnabled = null;

    /** 
     * Restrictions that apply to an application or service principal object.
     * @var CustomAppManagementConfiguration|\stdClass|null
     */
    public mixed $restrictions = null;

    /** 
     * Collection of applications and service principals to which the policy is applied.
     * @var DirectoryObject[]
     */
    public array $appliesTo = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = $data['deletedDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['restrictions'])) {
            $this->restrictions = $data['restrictions'];
        }
        if (isset($data['appliesTo'])) {
            $this->appliesTo = $data['appliesTo'];
        }
    }
}
