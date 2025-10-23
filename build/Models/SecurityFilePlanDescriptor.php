<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFilePlanDescriptor
 */
class SecurityFilePlanDescriptor
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents the file plan descriptor of type authority applied to a particular retention label.
     * @var SecurityFilePlanAuthority|\stdClass|null
     */
    public mixed $authority = null;

    /** 
     * 
     * @var SecurityFilePlanAppliedCategory|\stdClass|null
     */
    public mixed $category = null;

    /** 
     * Represents the file plan descriptor of type citation applied to a particular retention label.
     * @var SecurityFilePlanCitation|\stdClass|null
     */
    public mixed $citation = null;

    /** 
     * Represents the file plan descriptor of type department applied to a particular retention label.
     * @var SecurityFilePlanDepartment|\stdClass|null
     */
    public mixed $department = null;

    /** 
     * Represents the file plan descriptor of type filePlanReference applied to a particular retention label.
     * @var SecurityFilePlanReference|\stdClass|null
     */
    public mixed $filePlanReference = null;

    /** 
     * Specifies the underlying authority that describes the type of content to be retained and its retention schedule.
     * @var SecurityAuthorityTemplate|\stdClass|null
     */
    public mixed $authorityTemplate = null;

    /** 
     * Specifies a group of similar types of content in a particular department.
     * @var SecurityCategoryTemplate|\stdClass|null
     */
    public mixed $categoryTemplate = null;

    /** 
     * The specific rule or regulation created by a jurisdiction used to determine whether certain labels and content should be retained or deleted.
     * @var SecurityCitationTemplate|\stdClass|null
     */
    public mixed $citationTemplate = null;

    /** 
     * Specifies the  department or business unit of an organization to which a label belongs.
     * @var SecurityDepartmentTemplate|\stdClass|null
     */
    public mixed $departmentTemplate = null;

    /** 
     * Specifies a unique alpha-numeric identifier for an organization’s retention schedule.
     * @var SecurityFilePlanReferenceTemplate|\stdClass|null
     */
    public mixed $filePlanReferenceTemplate = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['authority'])) {
            $this->authority = $data['authority'];
        }
        if (isset($data['category'])) {
            $this->category = $data['category'];
        }
        if (isset($data['citation'])) {
            $this->citation = $data['citation'];
        }
        if (isset($data['department'])) {
            $this->department = $data['department'];
        }
        if (isset($data['filePlanReference'])) {
            $this->filePlanReference = $data['filePlanReference'];
        }
        if (isset($data['authorityTemplate'])) {
            $this->authorityTemplate = $data['authorityTemplate'];
        }
        if (isset($data['categoryTemplate'])) {
            $this->categoryTemplate = $data['categoryTemplate'];
        }
        if (isset($data['citationTemplate'])) {
            $this->citationTemplate = $data['citationTemplate'];
        }
        if (isset($data['departmentTemplate'])) {
            $this->departmentTemplate = $data['departmentTemplate'];
        }
        if (isset($data['filePlanReferenceTemplate'])) {
            $this->filePlanReferenceTemplate = $data['filePlanReferenceTemplate'];
        }
    }
}
