<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemRetentionLabel
 */
class ItemRetentionLabel
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Specifies whether the label is applied explicitly on the item. True indicates that the label is applied explicitly; otherwise, the label is inherited from its parent. Read-only. */
    public ?bool $isLabelAppliedExplicitly = null;

    /** 
     * Identity of the user who applied the label. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $labelAppliedBy = null;

    /** The date and time when the label was applied on the item. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $labelAppliedDateTime = null;

    /** The retention label on the document. Read-write. */
    public ?string $name = null;

    /** 
     * The retention settings enforced on the item. Read-write.
     * @var RetentionLabelSettings|\stdClass|null
     */
    public mixed $retentionSettings = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['isLabelAppliedExplicitly'])) {
            $this->isLabelAppliedExplicitly = $data['isLabelAppliedExplicitly'];
        }
        if (isset($data['labelAppliedBy'])) {
            $this->labelAppliedBy = $data['labelAppliedBy'];
        }
        if (isset($data['labelAppliedDateTime'])) {
            $this->labelAppliedDateTime = $data['labelAppliedDateTime'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['retentionSettings'])) {
            $this->retentionSettings = $data['retentionSettings'];
        }
    }
}
