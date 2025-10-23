<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityLabelsRoot
 */
class SecurityLabelsRoot
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Specifies the underlying authority that describes the type of content to be retained and its retention schedule.
     * @var SecurityAuthorityTemplate[]
     */
    public array $authorities = [];

    /** 
     * Specifies a group of similar types of content in a particular department.
     * @var SecurityCategoryTemplate[]
     */
    public array $categories = [];

    /** 
     * The specific rule or regulation created by a jurisdiction used to determine whether certain labels and content should be retained or deleted.
     * @var SecurityCitationTemplate[]
     */
    public array $citations = [];

    /** 
     * Specifies the department or business unit of an organization to which a label belongs.
     * @var SecurityDepartmentTemplate[]
     */
    public array $departments = [];

    /** 
     * Specifies a unique alpha-numeric identifier for an organization’s retention schedule.
     * @var SecurityFilePlanReferenceTemplate[]
     */
    public array $filePlanReferences = [];

    /** 
     * Represents how customers can manage their data, whether and for how long to retain or delete it.
     * @var SecurityRetentionLabel[]
     */
    public array $retentionLabels = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['authorities'])) {
            $this->authorities = $data['authorities'];
        }
        if (isset($data['categories'])) {
            $this->categories = $data['categories'];
        }
        if (isset($data['citations'])) {
            $this->citations = $data['citations'];
        }
        if (isset($data['departments'])) {
            $this->departments = $data['departments'];
        }
        if (isset($data['filePlanReferences'])) {
            $this->filePlanReferences = $data['filePlanReferences'];
        }
        if (isset($data['retentionLabels'])) {
            $this->retentionLabels = $data['retentionLabels'];
        }
    }
}
